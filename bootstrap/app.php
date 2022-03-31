<?php
    function uri($url){
        $Surl = explode('?',$_SERVER['REQUEST_URI']);
        $GLOBALS['url'] = $url;
        if($url == $Surl[0]){

            /*
             /Params in routes
            */
            $prepare_url = str_replace('/','',$_SERVER['REQUEST_URI']);
            if(!empty($prepare_url)){
                $params = explode('?',$prepare_url);
                if(!empty($params) && isset($params[1])){
                    $GLOBALS['request']->get($params);
                }
            }
            
            /*
             /Posts in routes
            */
            $GLOBALS['request']->posts($_POST);

            $files = explode('/',$url);
            
            if(COUNT($files) == 2 && $files[COUNT($files) - 1] == ""){
                return Routes::index();
            }

            // $file = str_replace('/','',$url).".php";

            // if(is_file($file)){
            //     return include($file);
            // }else if($files[COUNT($files) - 1] != ""){
            //     echo '<h1 style="display:flex; justify-content: center;">404 Not Found</h1>';
            //     return;
            // }
        }
    }

    function param($param){
        
        $Surl = explode('?',$_SERVER['REQUEST_URI']);

        if($GLOBALS['url'] == $Surl[0]){
            return $GLOBALS['request']->param($param);
        }
    }

    function input($input){
        $Surl = explode('?',$_SERVER['REQUEST_URI']);

        if($GLOBALS['url'] == $Surl[0]){
            return $GLOBALS['request']->input($input);
        }
    }
    
    function returnFunction($function){
        $Surl = explode('?',$_SERVER['REQUEST_URI']);

        if($GLOBALS['url'] == $Surl[0] && isset($function)){
            if(is_string($function)){
                echo $function;
            }else{
                return $function();
            }
        }
    }
?>
