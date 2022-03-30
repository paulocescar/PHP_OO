<?php
    include("database.php");

    function exec_sql($sql){
        global $conn;
        if($conn->query($sql) === TRUE){
            echo "success";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }

    function arr_columns($data){
        $columns = implode("`, `",array_keys($data));
        return $columns;
    }
    
    function arr_values($data){
        $escaped_values = implode("', '", $data);
        return $escaped_values;
    }

    
    function arr_update($data){
        $update = "";
        foreach($data as $k => $v){
            $update .= "`$k`='$v',";
        }
        return substr($update, 0, -1);
    }
?>