<?php
    if(array_key_exists("RATE",$_COOKIE)){
        echo "You already voted!<br>";
        echo "Your answer was : <b>".$_COOKIE['RATE']."</b>";
    }   
    else{
        $val = $_POST['RATING'];
        setcookie('RATE',$val,time()+120);
        echo "Your answer is submitted successfully. <br>";
        echo "Your Rating : <b>".$val."</b>";
    }
?>
