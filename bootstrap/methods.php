<?php
include('bootstrap/app.php');  

class Routes{
    public static function index() {
        
    }

    public static function get($url, $function) {
        if (empty($_POST)) {
            uri($url);
            returnFunction($function());
        }
    }

    public static function post($url, $function) {
        if(isset($_POST)){
            uri($url);
            returnFunction($function());
        }
    }
}
?>