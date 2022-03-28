<?php 
    include('usersServices.php');
    class UsersController{
        function create(){
            $data = $_POST; 
            $usersServices = new UsersServices();
            $usersServices->create($data);
        }   
    }

?>