<?php
    $nom = strip_tags($_POST["nom"]);
    $prenom = strip_tags($_POST["prenom"]);
    $number = strip_tags($_POST["nombre"]);
    $adresse = strip_tags($_POST["adresse"]);
    
    $PU = 4;
    $PT = $number * $PU;
    if ($number > 10){
        $PT = $PT * 0.9;
    }
    
    $type = $_POST["types"];
    $harissa = "";
    if (array_key_exists("harissa",$_POST)){
        $harissa = "Harissa";
    }
    $salade = "";
    if (array_key_exists("salade",$_POST)){
        $salade = "Salade";
    }
    $mayo = "";
    if (array_key_exists("mayo",$_POST)){
        $mayo = "Mayonnaise";
    }
    $Suppl = $harissa." ".$mayo." ".$salade;
    
    echo "<h2>VOTRE TICKET</h1>----------------------<br>";
    echo "<b>Client : </b><br>".$nom." ".$prenom."<br>".$adresse."<br><b>Commande :</b><br>".$number." Sandwichs ".$type."<br>+ Supplement : ".$Suppl."<br><b>Montant a payer:</b> ".$PT." DT <br>    ";
    echo "----------------------<br>";
    echo "<sub>MERCI A BIENTÔT</sub>";

    $file = $_FILES['CIN'];
    $fileName = $file['name'];
    $fileTmpLocation = $file['tmp_name'];
    $fileError = $file['error'];
    $fileType = $file['type'];
    $exploded = explode('.',$fileName);
    $fileExtension = strtolower(end($exploded));
    $fileNewName = uniqid('',true).'.'.$fileExtension;
    $fileDestination = 'uploads/'.$fileNewName;
    move_uploaded_file($fileTmpLocation,$fileDestination);
    
?>
