<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>connection</title>
    <link rel="stylesheet" href="../css/connect.css">
    <link rel="stylesheet" href="../animate.css">
    <link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/uniformize.css">
    <link rel="icon" href="../images/registration_transparent.png">
</head>
<body>
    <form method="post" action="warning.php">
        <?php 
                require('../includes/connexion.php');
                $name=$_POST['name'];
                $prenom= $_POST['surname'];
                echo "<h1> $name</h1>";
                echo "<h1> $prenom</h1>";
                $nompr= $bdd->query("INSERT INTO `blog`.`inscrits` (`id`, `nom`, `prenom`) VALUES (NULL, $name, $prenom,'rtt','tf'");
        ?>
        <center><fieldset>
        <legend>
                <center class="animated rotateIn rot">
                        <img src="../images/registration_transparent.png" alt="" class="regist">
                </center>
        </legend>
        <center><div class="cont">
        <div class="pass_cont">
                <span class="icon"><i class="fa fa-at"></i></span><input placeholder="Email" type="email" required name="mail" class="zone" id="email">
        </div><br><br>
        <div class="pass_cont">
        <span class="icon"> <i class="fa fa-lock"></i></span><input placeholder="Password" type="password" required name="password" class="zone" id="pass">
        </div><br><br>
        <center>
                <input type="submit" value="Next" class="sub">
        </center>
        </div></center>
        <fieldset class="or">
        <legend> &nbsp;&nbsp;Or&nbsp;&nbsp;</legend>    
        <center><br>
                <li><a href="connect.php"> <i class="fa fa-user-plus"></i>&nbsp;&nbsp;&nbsp; Connect</a></li>
        </center>
        </fieldset>
        </fieldset></center> <br>  
        <?php include('../includes/bouton-home.php'); ?>
        </div>    
    </form>
</body>
</html>