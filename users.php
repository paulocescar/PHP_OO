<?php
    include('modules/app.php');

    if(isset($_POST) && $_POST["id"] == ""){
        $userInsert = new UsersController();
        $userInsert->create($_POST);
    }

    if(isset($_POST) && $_POST['id'] != ""){
        $userUpdate = new UsersController();
        $userUpdate->update($_POST, $_POST['id']);
    }
?>