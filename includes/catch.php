 
    }
    catch(PDOException $e){
        echo "<br><br><br><center><i class='fa fa-wrench' style='font-size:70px;'></i>  " .$e->getMessage(); 
        echo "</center>";
    }
    