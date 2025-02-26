<html>
<head>
<link rel="stylesheet" href="css.css">
</head>
<body>
    
    <h2> Películas actualmente disponibles en la cartelera:</h2>

<form id="form_busqueda" action="" method="post">
    <h4>
        <label for=busqueda>Buscar por género...</label>
        <input type="text" name="buscar" value="" placeholder="Pon aquí el género...">
        <input type="submit" value="Buscar">
    </h4>
</form>

<table>
<tr>
    <th>Título</th>
    <th>Género</th>
</tr>

<?php foreach($arrayPeliculas as $fila):?>
<tr>
    <td><?php echo $fila["nombre"]; ?></td>
    <td><?php echo $fila["genero"]; ?></td>
</tr>
<?php endforeach;?>

</table>

</body>
</html>