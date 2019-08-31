<?php
    session_start();
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    session_register("name","email","password");
    require('../includes/connexion.php');
    header('Location: accueil.php');
?>