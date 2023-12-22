<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <tbody id ="tbody">
        <?php foreach (get("form")as $form):?>
        <tr>
        <td><?=$form=>name?></td>
        <td><?=$form=>immatriculation?></td>
        <td><?=$form=>type?></td>
        <td><?=$form=>couleur?></td>
        <td><?=$form=>Origine?></td>
        <td><?=$form=>domaine?></td>
        <td><?=$form=>picture?></td>
        <td> <a href="modif.php? name <?=$form=>name?>"></td>
        <td> <a href="form.php? name <?=$form=>name?>"></td>
        $files 
        </tr>
        <?php endforeach?>
        <tbody>
</body>
</html>