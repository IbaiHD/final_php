<html>
<head>
<link rel="stylesheet" href="css.css">
</head>
<body>

<h2> Puedes ver las películas en los siguientes cines:</h2>

<table>
<tr>
    <th>Nombre del Cine</th>
    <th>Dirección</th>
</tr>

<?php foreach($arrayCines as $fila):?>
<tr>
    <td><?php echo $fila["nombre"]; ?></td>
    <td><?php echo $fila["ubicacion"]; ?></td>
</tr>
<?php endforeach;?>

</table>

</body>
</html>