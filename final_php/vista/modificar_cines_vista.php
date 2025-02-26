<html>
<head>
</head>
<body>

<form action="" method="post">
    <fieldset>
        <legend>Rellena los siguientes campos</legend>
        <label for=nombre>Nombre del Cine:</label>
        <?php foreach($arrayCines as $fila): ?>
            <input type="text" name=dato1 value="<?php echo $fila["nombre"]?>" required>
            <br><br>
            <label for=ubicacion>Dirección del Cine:</label>
            <input type="text" name=dato2 value="<?php echo $fila["ubicacion"]?>" required>
            <br><br>
            <input type="submit" value="Modificar">
        <?php endforeach ?>
    </fielset>
</form>

</body>
</html>
