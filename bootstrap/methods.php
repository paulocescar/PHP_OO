<?php
include('bootstrap/app.php');  

class Routes{
    public static function index() {
        echo "INDEX";
    }

    public static function get($url, $function) {
        return uri($url);
    }

    public static function post($url, $function) {
        return uri($url);
    }
}
?>