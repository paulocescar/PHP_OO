<?php

$GLOBALS['request'] = new Request();
$GLOBALS['url'] = "";
$GLOBALS['params_arr']= [];
$GLOBALS['inputs_arr']= [];

class Request{
    public function get($param){
        $params = '&'.$param[1];
        $paramComplete = explode('&', $params);
        foreach($paramComplete as $pc){
            $paramKeyValue = explode('=', $pc);
            if($paramKeyValue[0] && isset($paramKeyValue[1])){
                $GLOBALS['params_arr'][$paramKeyValue[0]] = $paramKeyValue[1];
            }

        }
    }

    public function param($param){
        if(isset($GLOBALS['params_arr'][$param])){
            echo $GLOBALS['params_arr'][$param];
        }
    }

    
    public function posts($inputs){
        foreach($inputs as $key=>$value) {
            $GLOBALS['inputs_arr'][$key] = $value;
        }
    }

    public function input($input){
        if(isset($GLOBALS['inputs_arr'][$input])){
            echo $GLOBALS['inputs_arr'][$input];
        }
    }
}
?>