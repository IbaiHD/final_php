<html>
<head>
</head>
<body>

<form id="añadir_horarios" action="" method="post">
    <fieldset>
        <legend>Rellena los siguientes campos</legend>
        <?php foreach($arrayHorarios as $fila): ?>
            <label>Estás modificando <?php echo $fila["nombrepeli"] ?> en el cine <?php echo $fila["nombrecine"] ?></label>
            <br><br>
            <label for=dato1>Hora de inicio:</label>
            <input type="time" name=dato1 value="<?php echo $fila["hora_inicio"]?>" required>
            <br><br>
            <label for=dato2>Hora de fin:</label>
            <input type="time" name=dato2 value="<?php echo $fila["hora_fin"]?>" required>
            <br><br>
            <input type="submit" value="Añadir">
        <?php endforeach; ?>
    </fieldset>
</form>


</body>
</html>