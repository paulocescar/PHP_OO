<?php

$GLOBALS['request'] = new Request();
$GLOBALS['params_arr']= [];

class Request{
    public function get($param){
        $params = '&'.$param[1];
        $paramComplete = explode('&', $params);
        foreach($paramComplete as $pc){
            $paramKeyValue = explode('=', $pc);
            if($paramKeyValue[0]){
                $GLOBALS['params_arr'][$paramKeyValue[0]] = $paramKeyValue[1];
            }

        }
    }

    public function param($param){
        echo $GLOBALS['params_arr'][$param];
    }
}
?>