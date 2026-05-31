<html>
    <head>
        <title>¡Resultados de datos!</title>
            
      <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Resultados</h1>
        <h2>¡Gracias por compartir tus datos!, bien hecho!</h2>

            <div id="popUpOverlay"></div>
            <div id="box">
                <i class="fas fa-question-circle fa-5x"></i>
                <h1>volver a ingresar datos?</h1>
                    <div class="buttons">
                    <button id="yes">Sí</button>
                    <button id="no">No</button>
                <div id="closeModal"></div>
                 </div>
                 </div>
            <center>
        <button type="button" onclick="window.location.href='index.php'" class="btn">Volver a ingresar datos</button>
        <script src="app.js"></script>    
        </center>
            </div>

            <?php
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $ciudad = $_POST['ciudad'];
            $pv = $_POST['pv'];  
            
            echo "<p><b>Nombre:</b> $nombre</p>";
            echo "<p><b>Edad:</b> $edad</p>";
            echo "<p><b>Ciudad:</b> $ciudad</p>";
            echo "<p><b>Pasatiempo favorito:</b> $pv</p>";
            ?>

        <img src="https://media.giphy.com/media/3o7aD2saalBwwftBIY/giphy.gif" alt="Gif de celebración">
    </body>
</html>