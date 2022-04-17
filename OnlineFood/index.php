<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Commandes Sandwichs</title>
</head>

<body>
    
    <h2>WELCOME TO OUR VR</h2>
    <h5>(Virtual Restaurant)</h5>
    <h3>☟ Passer votre commande ☟</h3>
    <p>---------------------------</p>
    <form action="commande.php" method="post" enctype="multipart/form-data">
        <label for="nom">Nom</label><br>
        <input name="nom" type="text">
            <br>
            <br>
        <label for="prenom">Prenom</label><br>
        <input name="prenom" type="text">
            <br>
            <br>
        <label for="nombre">Nombre de Sandwichs</label><br>
        <input name="nombre" type="number">
            <br>
            <br>
        <label for="adresse">Adresse</label><br>
        <textarea name="adresse" rows="1" style="resize:none;"></textarea>
            <br>
            <br>
        <label>CIN</label><br>
        <input type="file" name="CIN">
            <br>
            <br>
        <select name="types" id="types">
            <option value="poulet">poulet</option>
            <option value="viande">viande</option>
            <option value="escalope">escalope</option>
        </select>
            <br>
            <br>
        <input type="checkbox" name="harissa" id="harissa" value="harissa"> Harissa 
        <input type="checkbox" name="mayo" id="mayo" value="mayo"> Mayo
        <input type="checkbox" name="salade" id="salade" value="salade"> Salade
            <br>
            <p>---------------------------</p>
            <br>
        <button type="submit">Valider</button>
    </form>

</body>

</html>