<?php
    include('modules/app.php');

    $userController = new UsersController();
    
    if(isset($_POST) && $_POST["id"] == ""){
        $userController->create();
    }

    if(isset($_POST) && $_POST['id'] != ""){
        $userController->update();
    }
?>