<?php

Response::macro('success', function($response = array() , $request = array())
{
    $return_array = array("status" => "200" , "success" => true ,  "error_message" => "Success" , "response" => $response);
    
    $return_array["request"] = Input::except("_token");
    if(!is_null($request)){
        $return_array["request"] = array_merge($request , $return_array["request"]);
    }
    
    return Response::json($return_array);
});

Response::macro('failed', function($status , $message)
{
    return Response::json(array("status" => $status , "success" => false , "error_message" => $message));
});

Response::macro('not_found', function()
{
    return Response::json(array("status" => 404 , "success" => false , "error_message" => "ID Not Found" , "request" => Input::all()));
});

Form::macro('formField',  function($name, $value='', $label, $class='', $required = false) {

    $output = '<div class="form-group">'
            . Form::label($name, $label,array('class'=>'col-md-3 control-label'))
            . '<div class="col-md-9">'
            . Form::text($name, $value, array('class'=>'form-control ' . $class, 'placeholder'=>$label))
            . '</div>'
          . '</div>';
    
    return $output;
});

Form::macro('emailField', function($name, $value='', $label, $class='', $required = false) {

    $output = '<div class="form-group">'
            . Form::label($name, $label,array('class'=>'col-md-3 control-label'))
            . '<div class="col-md-9">'
            . Form::email($name, $value, array('class'=>'form-control ' . $class, 'placeholder'=>$label))
            . '</div>'
          . '</div>';
    
    return $output;
});

Form::macro('radioField', function($name, $label, $value, $class='', $required = false) {
    $output = '<div class="form-group">'
            . Form::label('married', $label['field'],array('class'=>'col-md-3 control-label'))
            . ' <div class="col-md-9">'
                . ' <div class="radio-inline " . $class>'
                  . ' <label>'
                    . ' <input type="radio" name="' . $name . '" id="' . $name . '1" value="'. $value['one'] .'" checked>'
                    . $label['one']
                  . ' </label>'
                . ' </div>'
                . ' <div class="radio-inline">'
                  . ' <label>'
                    . ' <input type="radio" name="' . $name . '" id="' . $name . '0" value="'. $value['zero'] .'">'
                    . $label['zero']
                  . ' </label>'
                . ' </div>'
            . ' </div>'
          . ' </div>';
    
    return $output;
});


HTML::macro('clever_link', function($route, $text) {	
	if( Request::path() == $route ) {
		$active = "class = 'active'";
	}
	else {
		$active = '';
	}
 
  return '<li ' . $active . '>' . link_to($route, $text) . '</li>';
});

?>