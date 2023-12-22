
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="kl.css">  
    <title>Taxis</title>
</head>
<body>
    <form method="POST" action="index.php" enctype="multipart/form-data">
    <container>
            <h3>Gestion des Taxis </h3>
            <div>
                <label for="nom">Nom</label>
                <input type="text" id="name" name="name" >
            </div>
            <div>
                <label for="immatriculation" >immatriculation</label>
                <input type="number" id="immatriculation" name="immatriculation">
            </div>
            
            <div>
                <label for="type">type</label>
                <input id="type" type="text" name="type">
            </div>
            <div>
                <label for="couleur" > couleur: </label>
                <label for="couleur" >rouge</label>
                <input type="checkbox" id="couleur" name="couleur" value="rouge">
                <label for="couleur" >noire</label>
                <input type="checkbox" id="couleur" name="couleur" value="noire"><br/>
            </div>
            <div>
                <label for="Origine" >Origine</label>
                <select id="Origine" name="Origine">
                    <option value="classic">classic</option>
                    <option value="vip">vip</option>
                </select><br/>
            </div>
            <div>
                <label for="domaine">domaine:</label>
                <label for="domaine" >rapidite</label>
                <input type="checkbox" id="domaine" name="domaine" value="informatique">
                <label for="domaine" >capacite</label>
                <input type="checkbox" id="domaine" name="domaine" value="gestion">
                <label for="domaine" >parametres</label>
                <input type="checkbox" id="domaine" name="domaine" value="pédagogie"><br/>
            </div>
            <div>
                <input type="file" name="picture"><br/>
            </div>
            <div class="boutons">
                <input type="submit" value="Envoyer">
                <input type="button" name="annuler" value="Annuler">
            </div>
    </container>
 </form>
</body>
</html>