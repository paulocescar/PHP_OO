<?php

    Routes::get('/', function(){
        return param('post');
    });

    Routes::get('/test', function(){
        return "teste";
    });
    
    Routes::post('/users', function(){
        return "post";
    });
?>