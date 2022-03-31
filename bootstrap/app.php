<?php
    include('bootstrap/request.php');
    $GLOBALS['request'] = new Request();
    function uri($url){
        
        $Surl = explode('?',$_SERVER['REQUEST_URI']);
        
        if($url == $Surl[0]){
            $params = explode('?',$_SERVER['REQUEST_URI']);
            if(!empty($params)){
                $GLOBALS['request']->get($params);
            }
            
            $files = explode('/',$url);
        
            if(COUNT($files) == 2 && $files[COUNT($files) - 1] == ""){
                return Routes::index();
            }

            $file = str_replace('/','',$url).".php";

            if(is_file($file)){
                return include($file);
            }else if($files[COUNT($files) - 1] != ""){
                echo '<h1 style="display:flex; justify-content: center;">404 Not Found</h1>';
                return;
            }
        }
    }

    function param($param){
        return $GLOBALS['request']->param($param);
    }
?>
