<!DOCTYPE html>
<html lang= »fr »>
<head>
    <meta charset= »UTF-8 »>
    <meta name= »viewport » content= »width=device-width, initial-scale=1.0 »>
    <title>Formulaire</title>
    <style>
        Table {
            Border-collapse : collapse ;
            Width : 100% ;
        }
        Th, td {
            Border : 1px solid black ;
            Padding : 8px ;
            Text-align : left ;
        }
        Th {
            Background-color : #f2f2f2 ;
        }
        Tr :nth-child(even) {
            Background-color : #f2f2f2 ;
        }
    </style>
</head>
<body>
   
 
    <?php
    Session_start() ;
    $name=$_POST['name'] ;
    $immatriculation=$_POST['immatriculation'] ;
   
    $type =$_POST['type'] ;
    $couleur =$_POST['couleur'] ;
    $domaine=$_POST['domaine'] ;
    $Origine=$_POST['Origine'] ;
    $new_entry = array($name, $immatriculation,  $type, $couleur, $domaine, $Origine) ;
    If(isset($_form['entries'])){
        Array_push($_form['entries'], $new_entry) ;
    }else{
        $_form['entries'] = array($new_entry) ;
    }
    ?>
 
    <h2>fiche d'enregistrement :</h2>
    <table>
        <tr>
            <th>Nom</th>
            <th>immatriculation</th>
            <th>Type</th>
           
            <th>couleur</th>
            <th>domaine</th>
            <th>Origine</th>
        </tr>
        <?php foreach($_form['entries'] as $entry) : ?>
        <tr>
            
            <td><?php echo $entry[0] ; ?></td>
        
        
            
            <td><?php echo $entry[1] ; ?></td>
        
        
            
            <td><?php echo $entry[2] ; ?></td>
        
        
            
            <td><?php echo $entry[3] ; ?></td>
        
        
            
            <td><?php echo $entry[4] ; ?></td>
        
        
            
            <td><?php echo $entry[5] ; ?></td>
        
        
            
    
        </tr>
        <?php endforeach ; ?>
    </table>
    <form action= "form.php" method= "post">

    <br><br>
        <button type= »submit »> Plus de voiture</button>
        <button  type=»button» name="suppression" > suppression voiture </button>
        <button type= »submit »> modification</button>
    </form>
 
</body>
</html>
