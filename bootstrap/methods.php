<?php
include('bootstrap/app.php');  

class Routes{
    public static function index() {
        
    }

    public static function get($url, $function) {
        uri($url);
        return $function();
    }

    public static function post($url, $function) {
        if(isset($_POST)){
            uri($url);
            return $function();
        }else{
            return null;
        }
    }
}
?>