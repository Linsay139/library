<?php 

    function connect(){
        try{
            $dbh = oci_connect("SYS","qwerty@123@123","Lynsay_Benoit_GB");
            if($dbh)
                return $dbh;
        }
        catch (PDOException $e){
            exit("Error: " . $e->getMessage());
        }
    }
