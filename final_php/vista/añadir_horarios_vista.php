<html>
<head>
</head>
<body>

<form id="añadir_horarios" action="" method="post">
    <fieldset>
        <legend>Rellena los siguientes campos</legend>
        <label for=nombre_pelicula>Selecciona la película:</label>
        <select name=nombre_pelicula required>
            <option> --------- </option>
            <?php foreach($arrayPeliculas as $pelicula):?>
                <option value="<?php echo $pelicula['id']; ?>"><?php echo $pelicula["nombre"] ?></option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <label for=nombre_cine>Selecciona el cine:</label>
        <select name=nombre_cine required>
            <option> --------- </option>
            <?php foreach($arrayCines as $cine):?>
                <option value="<?php echo $cine['id']; ?>"><?php echo $cine["nombre"] ?></option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <label for=hora_inicio>Hora de inicio:</label>
        <input type="time" name="hora_inicio" required>
        <br><br>
        <label for=hora_fin>Hora de fin:</label>
        <input type="time" name="hora_fin" required>
        <br><br>
        <input type="submit" value="Añadir">
    </fieldset>
</form>

<h4><?php echo $aviso_añadido ?></h4>

</body>
</html>