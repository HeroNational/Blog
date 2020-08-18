<?php
    session_start();
    include("../includes/connexion.php");
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['passw'];
    $sql="INSERT INTO inscrits (id,identifiant,email,passw) VALUES (null,'$name','$email','$password')";
    $bdd->query($sql);
    require('../includes/connexion.php');
    header('Location: accueil.php');
?>