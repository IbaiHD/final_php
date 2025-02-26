<html>
<html>
<head>
<link rel="stylesheet" href="css.css">
</head>
<body>

<h2> Puedes ver las películas en los siguientes cines:</h2>

<table>
<tr>
    <th>Título</th>
    <th>Género</th>
</tr>

<?php foreach($arrayCines as $fila):?>
<tr>
    <td><?php echo $fila["nombre"]; ?></td>
    <td><?php echo $fila["ubicacion"]; ?></td>
    <td><form action="" method="post"><input type="submit" value="Modificar"><input type="hidden" name="modificar" value="<?php echo $fila['id'];?>"></form></td>
</tr>
<?php endforeach;?>

</table>

<h4><?php echo $aviso_modificado ?></h4>

</body>
</html>