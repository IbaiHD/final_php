<html>
<head>
<link rel="stylesheet" href="css.css">
</head>
<body>

<h2> Películas actualmente disponibles en la cartelera:</h2>

<table>
<tr>
    <th>Título</th>
    <th>Género</th>
</tr>

<?php foreach($arrayPeliculas as $fila):?>
<tr>
    <td><?php echo $fila["nombre"]; ?></td>
    <td><?php echo $fila["genero"]; ?></td>
    <td><form action="" method="post"><input type="submit" value="Eliminar"><input type="hidden" name="eliminar" value="<?php echo $fila['id'];?>"></form></td>
</tr>
<?php endforeach;?>

</table>

<h4><?php echo $aviso_eliminado ?></h4>

</body>
</html>