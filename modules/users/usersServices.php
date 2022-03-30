<?php
    include($_SERVER["DOCUMENT_ROOT"].'/php_oo/config/usageDB.php');
    include('User_model.php');

    class UsersServices {
        public function create($user){
            $usuario = new User($user);
            $sql = "INSERT INTO `users` (`".arr_columns($user)."`) VALUES ('".arr_values($user)."')";

            return exec_sql($sql);
        }

        public function update($user, $id){
            $usuario = new User($user);
            $sql = "UPDATE `users` SET ".arr_update($user)." WHERE `id` = ".$id;

            return exec_sql($sql);

        }

    }
?>