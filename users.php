<?php
    include('modules/app.php');

    if(isset($_POST)){
        $userInsert = new UsersController();
        $userInsert->create($_POST);
    }
?>