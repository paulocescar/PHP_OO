<?php

    Routes::get('/', function(){
        return "teste";
    });

    Routes::get('/test', function(){
        return "teste";
    });
    
    Routes::post('/users', function(){
        return "post";
    });
?>