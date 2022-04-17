<?php 
    session_start();
    if (!isset($_SESSION['notes'])){
        $_SESSION['notes'] = [];
    }
    if (isset($_POST['titre']) && isset($_POST['note'])){
        $_SESSION['notes'][] = ['titre' => $_POST['titre'], 'note' => $_POST['note']]; 
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Google Keep</title>
    </head>

    <body>

        <h2>GOOGLE KEEP</h2>
        <h4>-----ADD A NOTE-----</h4>
        <form action="" method="POST">
            <input type="text" class="input-field" name="titre" placeholder="Titre" required>
            <br>
            <br>
            <textarea name="note" class="input-field" rows="2" placeholder="Description" required></textarea>
            <br>
            <button type="submit" class="btn">Submit</button>
        </form>

        <h4>-----MY NOTES-----</h4>
        <?php
            foreach ($_SESSION['notes'] as $note):
        ?>
        <div class="notes-card-item">
            <b>Titre:</b> 
            <?= 
                $note['titre'] 
            ?>
            <div>
                <b>Description: </b>
                <?= 
                    $note['note'] 
                ?>
            </div>
            <br>
        </div>
        <?php
            endforeach
        ?>

    </body>

</html>