<?php

    Routes::get('/', function(){
        param('id');
        return param('post');
    });

    Routes::get('/users', function(){
        return "teste";
    });
    
    Routes::post('/userss', function(){
        return "post";
    });
?>