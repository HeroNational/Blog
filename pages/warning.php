<!DOCTYPE html>
    <?php
        require_once('../includes/connexion.php');
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
    <form method="post" action="accueil.php">
        
        <center><fieldset>
        <legend>
                <center class="animated rotateIn rot">
                        <img src="../images/registration_transparent.png" alt="" class="regist">
                </center>
        </legend>
        <center><div class="cont">
        <br><br>        
        <center>
                
                <div class="ui warning message or sub"><br><br>
                        <div class="header"><i class="fa fa-warning"></i>&nbsp;&nbsp;Warning Message</div><br>
                        By sign in there you agree.
                        <ul class="list">
                                <p>
                                        <li>Or policy</li>
                                        <li>Our management</li>
                                </p>
                        </ul>
                </div>
        </center>
        <div class="pass_cont">
        <span class="icon"> <i class="fa fa-thumbs-up"></i></span><input  type="text" requiert value="I agree" readonly name="agreement" class="zone" id="pass">
        </div><div class="button">
                                <a href="accueil.php" class="btn btn-three"><i class="fa fa-smilej-o"></i></a>
                </div><br><br>
        <center><br>
                <input type="submit" value="Sign In" class="sub">
        </center>
        </div></center>
        <fieldset class="or">
        <legend> &nbsp;&nbsp;Or&nbsp;&nbsp;</legend>    
        <center><br>
        <a href="connect.php"> <li><i class="fa fa-user-plus"></i>&nbsp;&nbsp;&nbsp; Connect</li></a>
        <a href="accueil.php"><li> <i class="fa fa-smile-o"></i>&nbsp;&nbsp;&nbsp; Visit</li></a>
        </center>
        </fieldset>
        </fieldset></center> <br>  
        </div>    
    </form>
</body>
</html>



  
<?php 
        require('../includes/connexion.php');
        require('../includes/footer.php');
?>

