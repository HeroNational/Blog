<!DOCTYPE html>

<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <link rel='stylesheet' href='../css/connect.css'>
    <link rel='stylesheet' href='../animate.css'>
    <link rel='stylesheet' href='../css/font-awesome-4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='../css/uniformize.css'>
    <link rel='icon' href='../images/registration_transparent.png'>
    <title>connection</title>
</head>
<?php
    function dataphp(){
    echo "<div class='ui active dimmer'>
    <div class='ui indeterminate active loader'></div>
  </div>";
  return dataphp();
    }
    echo "<body Onload='dataphp();'>";
?>

<center><fieldset>
    <legend>
        <center class='animated rotateIn rot'>
                <img src='../images/registration_transparent.png' alt='' class='regist'>
        </center>
    </legend>
    <form method='post' action='redirectionconnxion.php'>
            <center><div class='cont'>
            <div class='pass_cont'>
                <span class='icon'><i class='fa fa-user' style="margin-left:-5px;"></i></span><input placeholder='Identifiant' type='text' required name='identifiant' class='zone' id='email'>
            </div><br><br>
            <div class='pass_cont'>
                <span class='icon'><i class='fa fa-at' style="margin-left:-5px;"></i></span><input placeholder='Email' type='email' required name='mail' class='zone' id='email'>
            </div><br><br>
            <div class='pass_cont'>
            <span class='icon'> <i class='fa fa-lock' style="margin-left:-5px;"></i></span><input placeholder='Password' type='password' required name='pass' class='zone' id='pass'>
            </div><br><br>
            <center>
                <input type='submit' value='Sign In' class='sub'>
            </center>
        </div></center>
        <center>
            <li><a href='f.php'>Password forgotten?</a></li>
        </center>
        <fieldset class='or'>
            <legend> &nbsp;&nbsp;Or&nbsp;&nbsp;</legend>    
            <center><br>
                <li><a href='new.php'> <i class='fa fa-user-plus'></i>&nbsp;&nbsp;&nbsp; New account</a></li>
            </center>
        </fieldset>
        </fieldset></center> <br>  
        <?php include('../includes/bouton-home.php');
         ?>
        </div>  
    </form>
</body>
</html>