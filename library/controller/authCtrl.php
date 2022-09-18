<?php

    require_once './utils/authentification.php';


    if(isset($_POST['alogin'])){

        $usr = htmlspecialchars($_POST['username']);
        $auth = htmlspecialchars($_POST['password']);

        $userCount = accountValid($usr);

        while($user = $userCount->fetch()){
            if($user['count'] == 1){
                $userAuth = authValid($auth);
            }else{
                
            }
        }
    }