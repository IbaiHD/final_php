<html>
<head>
    <title>Cartelera</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>

<header>
    <h1>Cartelera</h1>
    <form action="" method="post">
        <br>
       <fieldset>
            <legend>Selecciona la tarea a realizar:</legend>
            <input type="radio" name="tarea" value="añadir">Añadir</input>
            <br>
            <input type="radio" name="tarea" value="eliminar">Eliminar</input>
            <br>
            <input type="radio" name="tarea" value="modificar">Modificar</input>
            <br>
            <input type="radio" name="tarea" value="consultar">Consultar</input>
		</fieldset>
        <br><br>
        
        <label for=tabla>Selecciona la tabla donde realizar la tarea:</label>	
        <br><br>	 
		<select name="tabla" required>
            <option selected> -------- </option>
			<option value="cines">Cines</option>
			<option value="peliculas">Peliculas</option>
			<option value="horarios">Horarios</option>
		</select>
       
        <br><br>
        
        <input type="submit" value="Enviar">
    </form>
</header>

<section id="contenido">
    <?php require('controlador/Controlador.php'); ?>
</section>
</body>
</html>