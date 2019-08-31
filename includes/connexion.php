    <?php
    
    $server = 'localhost';
    $login = 'root';
    $pass = '';
    $db='blog';

    try
    {
            $bdd = mysql_connect('localhost', 'root', '');
            $bdd = new PDO("mysql:host=$server;dbname=$dnb", $login, $pass);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "<br><br><br><center><i class='fa fa-wrench' style='font-size:70px;'></i>  " .$e->getMessage(); 
        echo "</center>"; 
    }
    ?>



   