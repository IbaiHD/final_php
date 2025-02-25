<html>
<head>
</head>
<body>

<form id="añadir_cines" action="" method="post">
    <fieldset>
        <legend>Rellena los siguientes campos</legend>
        <label for=nombre>Nombre del Cine:</label>
        <input type="text" name=nombre value="" placeholder="Escribe aquí el nombre del cine..." required>
        <span><?php echo $error_nombre ?></span>
        <br><br>
        <label for=ubicacion>Dirección del Cine:</label>
        <input type="text" name=ubicacion value="" placeholder="Escribe aquí la dirección del cine..." required>
        <span><?php echo $error_ubicacion ?></span>
        <br><br>
        <input type="submit" value="Añadir">
    </fielset>
</form>

<h4><?php echo $aviso_añadido ?></h4>

</body>
</html>
