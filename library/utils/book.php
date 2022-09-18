<?php 

    require "oracleDB.php";

    function insertBookks(){
        $sql = "INSERT INTO book () VALUES ()";
        $stmt = connect()->prepare($sql);
        $stmt->execute([]);

        if($stmt) return true;
    }