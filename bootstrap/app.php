<?php
    function uri($url){
        $GLOBALS['url'] = $url;
        $Surl = explode('?',$_SERVER['REQUEST_URI']);
        
        if($url == $Surl[0]){
            $prepare_url = str_replace('/','',$_SERVER['REQUEST_URI']);
            if(!empty($prepare_url)){
                $params = explode('?',$prepare_url);
                if(!empty($params) && isset($params[1])){
                    $GLOBALS['request']->get($params);
                }
            }
            
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
?>
