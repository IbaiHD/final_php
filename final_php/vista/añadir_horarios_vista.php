<html>
<head>
</head>
<body>

<form id="añadir_horarios" action="" method="post">
    <fieldset>
        <legend>Rellena los siguientes campos</legend>
        <label for=nombre_cine>Nombre del Cine:</label>
        <input type="text" name=nombre_cine value="" placeholder="Nombre del cine..." required>
        <br><br>
        <label for=nombre_pelicula>Dirección del Cine:</label>
        <input type="text" name=nombre_pelicula value="" placeholder="Nombre de la pelicula..." required>
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