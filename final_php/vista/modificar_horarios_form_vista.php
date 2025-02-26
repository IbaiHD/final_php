<html>
<head>
<link rel="stylesheet" href="css.css">
</head>
<body>

<h2> Estas son las sesiones actualmente disponibles:</h2>
<form id="form_busqueda" action="" method="post">
    <h4>
        <label for=busqueda>Buscar por película...</label>
        <input type="text" name="buscar" value="" placeholder="Pon aquí tu película...">
        <input type="submit" value="Buscar">
    </h4>
</form>
<h4><?php echo $aviso_modificado ?></h4>
<table>
<tr>
    <th>Cine</th>
    <th>Pelicula</th>
    <th>Hora de inicio</th>
    <th>Hora de Finalización</th>
</tr>

<?php foreach($arrayHorarios as $fila):?>
<tr>
    <td><?php echo $fila["nombrecine"]; ?></td>
    <td><?php echo $fila["nombrepeli"]; ?></td>
    <td><?php echo $fila["hora_inicio"]; ?></td>
    <td><?php echo $fila["hora_fin"]; ?></td>
    <td><form action="" method="post"><input type="submit" value="Modificar"><input type="hidden" name="modificar" value="<?php echo $fila['id'];?>"></form></td>
</tr>
<?php endforeach;?>

</table>

</body>
</html>