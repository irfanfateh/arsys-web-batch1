<?php
    // $a=5;
    // if(false){
    //     $b=9;
    // }
    // echo $b;
    // $_POST
    // $_GET

    // if($_GET['username']=='muhammadirfan' && $_GET['password']=='12345'){
    //     echo 'welcome to the site';
    // }else{
    //     echo 'access denied invalid username and password';
    // }
    
    if ($_SERVER["REQUEST_METHOD"]=='POST') {

        if($_POST['username']=='muhammadirfan' && $_POST['password']=='12345'){
            echo 'welcome to the site';
        }else{
            echo 'access denied invalid username and password';
        }

    }else{
        echo '<h1>First submit the login form visit <a href="form.php">Login</a></h1>';
    }
?>