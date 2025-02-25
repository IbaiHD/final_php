<html>
<head>
</head>
<body>

<form id="añadir_peliculas" action="" method="post">
    <fieldset>
        <legend>Rellena los siguientes campos</legend>
        <label for=nombre>Nombre de la Película:</label>
        <input type="text" name=nombre value="" placeholder="Escribe aquí el nombre de la película..." required>
        <span><?php echo $error_nombre ?></span>
        <br><br>
        <label for=genero>Género:</label>
        <input type="text" name=genero value="" placeholder="Escribe aquí el género de la película..." required>
        <span><?php echo $error_genero ?></span>
        <br><br>
        <input type="submit" value="Añadir">
    </fielset>
</form>

<h4><?php echo $aviso_añadido ?></h4>

</body>
</html>