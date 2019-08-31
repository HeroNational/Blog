<!DOCTYPE html>

<?php
        require_once('includes/connexion.php');
    ?>
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
<center><fieldset>
    <legend>
        <center class="animated rotateIn rot">
                <img src="../images/registration_transparent.png" alt="" class="regist">
        </center>
    </legend>
    <center><div class="cont">
    <div class="pass_cont">
        <span class="icon"><i class="fa fa-user"></i></span><input placeholder="Your email" type="email" requiert name="mail" class="zone" id="email">
    </div><br><br>
    <div class="pass_cont">
       <span class="icon"> <i class="fa fa-lock"></i></span><input placeholder="Your password" type="password" requiert name="pass" class="zone" id="pass">
    </div><br><br>
    <center>
        <input type="submit" value="Login" class="sub">
    </center>
</div></center>
<center>
    <li><a href="f.php">Password forgotten?</a></li>
</center>
<fieldset class="or">
    <legend> &nbsp;&nbsp;Or&nbsp;&nbsp;</legend>    
    <center><br>
        <li><a href="pages/new.html"> <i class="fa fa-user-plus"></i>&nbsp;&nbsp;&nbsp; New account</a></li>
    </center>
</fieldset>
</fieldset></center> <br>   
</center>
</div>    
</body>
</html>