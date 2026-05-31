<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura de datos</title>
    <script src="https://kit.fontawesome.com/REPLACE_WITH_YOUR_ACTUAL_KIT_CODE.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Captura de datos personales</h1>
    <br>
     <h2>Ingresa los datos que se te solicitan:</h2>
    <br>
    <p>Mi primera encuesta</p>
    <HR>

   <form action="resultados.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="" placeholder="Ingresa tu nombre" required><br><br>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" placeholder="Ingresa tu edad" required><br><br>

        <label for="ciudad">Ciudad donde vives:</label>
        <input type="text" id="ciudad" name="ciudad" value="" placeholder="Ciudad donde vives:" required><br><br>

        <label for="pv">Pasatiempo favorito:</label>
        <input type="text" id="pv" name="pv" placeholder="Pasatiempo favorito" required><br><br>
        <input type="submit" value="Ingresamos datos!">
</form>
    </div>
</body>
</html>