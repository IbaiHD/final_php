<html>
<head>
    <title>Cartelera</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body>

<header>
    <h1>Cartelera</h1>
    <form id="form_index" action="" method="post">
       <fieldset>
            <legend>Selecciona la tarea a realizar:</legend>
            <input type="radio" name="tarea" value="añadir" required>Añadir</input>
            <br>
            <input type="radio" name="tarea" value="eliminar" required>Eliminar</input>
            <br>
            <input type="radio" name="tarea" value="modificar" required>Modificar</input>
            <br>
            <input type="radio" name="tarea" value="consultar" required>Consultar</input>
		</fieldset>
        <br><br>
        
            <legend class="sin_estilos">Selecciona la tabla:</legend>	
            <br><br>	 
            <select name="tabla" required>
                <option selected> -------- </option>
                <option value="cines">Cines</option>
                <option value="peliculas">Peliculas</option>
                <option value="horarios">Horarios</option>
            </select>
        
        <input type="submit" value="Enviar">
    </form>
</header>

<section id="contenido">
    <?php require('controlador/Controlador.php'); ?>
</section>
</body>
</html>