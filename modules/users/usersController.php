<?php 
    include('usersServices.php');
    class UsersController{
        function create(){
            $data = $_POST; 
            $usersServices = new UsersServices();
            $usersServices->create($data);
        }   

        function update(){
            $id = $_POST["id"];
            $data = $_POST; 
            $usersServices = new UsersServices();
            $usersServices->update($data, $id);
        }   
    }

?>