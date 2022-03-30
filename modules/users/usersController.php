<?php 
    include('usersServices.php');
    
    $usersServices = new UsersServices();

    class UsersController{
        function create(){
            $data = $_POST; 
            $usersServices->create($data);
        }   

        function update(){
            $id = $_POST["id"];
            $data = $_POST; 
            $usersServices->update($data, $id);
        }   
    }

?>