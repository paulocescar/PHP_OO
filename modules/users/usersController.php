<?php 
    include('usersServices.php');
    
    class UsersController{
        function create(){
            $usersServices = new UsersServices();
            $data = $_POST; 
            return $usersServices->create($data);
        }   

        function update(){
            $usersServices = new UsersServices();
            $id = $_POST["id"];
            $data = $_POST; 
            return $usersServices->update($data, $id);

        }   
    }

?>