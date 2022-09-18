<?php

    require "oracleDB.php";


    function accountValid($name){
        $sql = "SELECT count(*) as account FROM bibliothecaire where biblio_name = ?";
        $stmt = connect()->prepare($sql);
        $stmt->execute([$name]);

        if($stmt) return $stmt;
    }

    function authValid($auth){
        $sql = "SELECT librarian_pass FROM bibliothecaire where biblio_name = ?";
        $stmt = connect()->prepare($sql);
        $stmt->execute([$auth]);
        $pass = $stmt->fetch();

        return $pass['librarian_pass'];
    } 

    function librarian(){
        $link = connect();
        $sql = "INSERT INTO bibliothecaire (nom_bibliothecaire, prenom_bibliothecaire, telephone_bibliothecaire, lib_pass) VALUES (?,?,?,?)";
        $stmt = $link->prepare($sql);
        $stmt->execute(['linsay','benoît','34741022', password_hash("qwerty@123",PASSWORD_BCRYPT)]);
    }

    librarian();
?>
