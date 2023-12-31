<?php
include "User.class.php";

session_start();

if(isset($_POST['btn'])){
    $email = $_POST['email'];
    $senha = $_POST['password'];

    $user = new User($email, $senha, 'projeto_top');

    $user->connectDb('projeto_top');
    
    $adminM = $user->adminMaster('usuario');
    $admin = $user->getLoginAutentication('usuario');

    if($adminM){
        $_SESSION['adminMaster'] = "Admin";
        $_SESSION['email'] = $email;
        header("location:../index.php");
    } else if($admin){
        $_SESSION['admin'] = "Gerente";
        $_SESSION['email'] = $email;
        header("location:../index.php");
    }
    else{
        $_SESSION['loginError'] = true;
        header("location:../tops/login.php");
    }
}
?>
