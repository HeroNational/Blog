<?php
    include('../includes/meta.php');
    
    $identifiant=$_POST['identifiant'];
    $password=$_POST['pass'];
    $email=$_POST['mail'];
    /*
    $email="f";
    $password="h";
   /* 
    htmlspecialchars($email);
    htmlspecialchars($password);
    //À vérifier
    session_register("email","password");   
    //À vérifier
    */
    require('../includes/connexion.php');
    $bdd = mysql_connect('localhost', 'root', '');
    if(!$bdd){
        die ('Problême de connexion suivant: '.mysql_error().'');
    }
    $selecteddb=mysql_select_db('blog',$bdd);
    if(!$selecteddb){
        die ('Impossible d\'utiliser la base de données suivante à cause de cette erreur:<h1> '.mysql_error().'</h1>');
    }
    $sql1 = "SELECT identifiant FROM inscrits WHERE passw='$password' LIMIT 0, 1 ";
    $sql2 = "SELECT identifiant FROM inscrits WHERE identifiant='$identifiant' LIMIT 0, 1 ";
    $sql3 = "SELECT identifiant FROM inscrits WHERE email='$email' LIMIT 0, 1 ";
    $sql1= mysql_query($sql1) or die ('Erreur de requête: '.mysql_error().'');
    $sql1= mysql_query($sql2) or die ('Erreur de requête: '.mysql_error().'');
    $sql1= mysql_query($sql3) or die ('Erreur de requête: '.mysql_error().'');
    if($sql1==$sql2 && $sql1==$sql3){
        header('Location:welcome.php?name=$identifiant');
    }
    $php= "<a href='new.php' class='connect'><div class='ui error message'>
        <center><div class='header'>Vous n'êtes pas enrégistré ou bien vous avez mal entré vos identifiants. </div>
        <p>Merci de tenter une nouvelle connexion ou de vous enrégistrez-vous &nbsp;&nbsp;<span class='ui  small orange  icon button shaker'>
            &nbsp;&nbsp;ici&nbsp;&nbsp;
      </span></p></center>
    </div></a>
    <style>
        a.connect:hover{
                text-decoration:none;
        }
        span.shaker{
                animation: shake 6s linear infinite;
        }
    </style>";

    echo $php;

    /*
    $bddpre = mysql_query($bddpre) or die ($php);
    echo $email;
    echo $password;
    if($bddpre>=0){
        session_start();
    }else{
        $form="<form method='post' action='connect.php'>
                    <input type='hidden' value='ok' name='popup'>
                </form>";
        echo $form;
        header("connect.php");
    
    }
*/
?>