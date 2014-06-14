<?php

/**
 * Description of Elegant
 *
 * @author DOWN
 */
class Elegant extends Eloquent {
    
    public $blacklist = [];
    public $errors = [];
    protected $rules = [];
    protected $v = null;
 
    public function validate($data = null,$save = false,$safety = true) {
        $data = is_null($data) ? Input::all() : $data;
        $this->v = Validator::make($data, $this->rules);
        
        $return = 1;
       
        if ($this->v->fails()) {
          $this->errors = $this->v->errors();
          $return = 0;
        }
        
        if (!$this->v->fails() && $save) {
            $this->saveWithInput($data,$safety);
        }
        
        return $return;
    }
 
    public function saveWithInput($data = null,$safety = true) {
        $data = is_null($data) ? Input::except('_token') : $data;
        $fields = $safety ? $this->getDbColumns() : $this->rules;
        //$data = array_only(array_keys($fields),$data);
        $data = is_array($data) ? $data : [$data];
        foreach($data as $key => $value){
            $this->$key = $value;
        }
        return $this->save();
    }
 
    private function getDbColumns() {
        $fields = DB::select("SHOW COLUMNS FROM ".$this->table);
        $returns = [];
        foreach ($fields as $field) {
            if(!in_array($field->Field,$this->blacklist)){
                $returns[] = $field->Field;
            }
        }
        return $returns;
    }
 
    public function reset() {
        $this->blacklist = ['id','created_at','updated_at'];
        $this->errors = [];
    }
    
    public function lazy(){
        return $this->validate(Input::all(),true);
    }
}
