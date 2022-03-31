<?php

    Routes::get('/', function(){
        return "testando";
    });

    Routes::get('/users', function(){
        return "teste";
    });
    
    Routes::post('/userss', function(){
        return "post";
    });
?>