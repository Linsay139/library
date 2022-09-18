<?php 

    require "oracleDB.php";

    function insertReader(){
        $sql = "INSERT INTO reader () VALUES ()";
        $stmt = connect()->prepare($sql);
        $stmt->execute([]);

        if($stmt) return true;
    }
    