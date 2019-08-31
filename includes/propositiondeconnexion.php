<?php
$php= "<a href='new.php' class='connect'><div class='ui error message'>
        <center><div class='header'>Vous n'êtes pas enrégistré ou bien vous avez peut-être mal entré vos identifiants. </div>
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
    ?>