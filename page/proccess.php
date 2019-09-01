<?php
    if(isset($_POST['login'])){
        $name = $_POST['Username'];
        $password = $_POST['password'];

        // get login

        if(empty($name) || empty($password)){
            header('location:../message/faillogin.php');
        }else if($name =="admin" && $password =="password"){
            header('location:../message/successlogin.php');
        }else if($name !="admin" && $password !="password"){
            header('location:../message/pleaseregister.php');
        }
    }
    // get login form to register form

    if(isset($_POST['register'])){
        header('Location:../message/register.php');
    }
    if(isset($_POST['back'])){
        header('Location:../index.php');
    }

   // register form

    if(isset($_POST['submit'])){
        $username = $_POST['Username'];
        $pwd = $_POST['password'];
        $email = $_POST['email'];
        $message = $_POST['sms'];
        
        // get value from input

        session_start();
        $_SESSION['name'] = $username;
        $_SESSION['pass'] = $pwd;
        $_SESSION['email'] = $email;
        $_SESSION['message'] = $message;

        if(empty($username) || empty($pwd) || empty($email)){
            header('Location:../message/failregister.php');
        }else{
            header('Location:../message/successregister.php');
        }
    }
    
?>