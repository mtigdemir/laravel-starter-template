<?php

class TestController extends BaseController {
    
    protected $layout = 'site.default';
     
    public function getIndex()
    {
                    
            $user = new User; 
            
            $input = array 
                    (
                        'email' => 'asd@gmail.com',
                        'username' => 'mtigdemir',
                        'password' => '12345678',
                        'password_confirmation' => '12345678',
                    );
            
            if($user->validate($input))
            {
                echo 'burda2';
                echo $user;
            }else {
                echo 'burda';
                echo $user->errors;
            }
    }
    
    public function getSerciko($param) {
        //$job = Job::find($param)->get();
        
        $job =   Job::where('user_id' , '=' , 25)->first();
        
        echo '<pre>';
        //var_dump($job->offers);
        
        foreach ($job->offers as $node) {
            $user  = $node->user()->get();
            
            var_dump($user);
        }
    }
    
    public function getTable() {
        return View::make('ajax.datatable');
    }
    
    
    public function getA(){
        $this->layout->content = View::make('pages.about');
    }
}