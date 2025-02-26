<html>
<head>
</head>
<body>

<form id="añadir_peliculas" action="" method="post">
    <fieldset>
        <legend>Rellena los siguientes campos</legend>
        <?php foreach($arrayPeliculas as $fila):?>
            <label for=dato1>Nombre de la Película:</label>
            <input type="text" name=dato1 value="<?php echo $fila["nombre"]?>" required>
            <br><br>
            <label for=dato2>Género:</label>
            <input type="text" name=dato2 value="<?php echo $fila["genero"]?>" required>
            <br><br>
            <input type="submit" value="Modificar">
        <?php endforeach; ?>
    </fielset>
</form>

</body>
</html>