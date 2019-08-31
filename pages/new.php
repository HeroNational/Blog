<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
    <link rel="stylesheet" href="../css/connect.css">
    <link rel="stylesheet" href="../animate.css">
    <link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/uniformize.css">
    <link rel="icon" href="../images/registration_transparent.png">
</head>
<body>
    
    <form method="post" action="redirectioninscription.php">
        
        <center><fieldset>
        <legend>
                <center class="animated rotateIn rot">
                        <img src="../images/registration_transparent.png" alt="" class="regist">
                </center>
        </legend>
        <center><div class="cont">
        <div class="pass_cont">
                <span class="icon"><i class="fa fa-at" style="margin-left:-3px;"></i></span><input placeholder="Username" type="text" required name="name" class="zone" id="email">
        </div><br><br>
        <div class="pass_cont">
        <span class="icon"> <i class="fa fa-at" style="margin-left:-5px;"></i></span><input placeholder="email" type="email" required name="email" class="zone" id="pass">
        </div><br><br>
        <div class="pass_cont">
        <span class="icon"> <i class="fa fa-lock" style="margin-left:-3px;"></i></span><input placeholder="Password" type="password" required name="passw" class="zone" id="pass">
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