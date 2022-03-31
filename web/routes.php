<?php

    Routes::get('/', function(){
        return "testando";
    });

    Routes::get('/users', function(){
        return "teste";
    });
    
    Routes::post('/users', function(){
        $uC = new UsersController();
        if(input("id") == ""){
            return $uC->create();
        }else{
            return $uC->update();
        }
    });
?>