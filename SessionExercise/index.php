
<body>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Php environment</title>
  <link rel="stylesheet" href="./assets/style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
</head>

    
        <div id="contenedor">
            
            <div id="contenedorcentrado">
            <?php
    session_start();

    if (count($_SESSION)) {
        header("Location: panel.php");
    } else if (isset($_GET["error"])) {
        echo "<div class='error-invalid-user'><h3>You are not registered, please register!</h3></div>";
    }

    ?>
                <div id="login">
                    <form method="post" action="./validate.php">
                        <label for="email">Email</label>
                        <input id="email" type="text" name="email" placeholder="email" required>
                        
                        <label for="password">Contraseña</label>
                        <input id="password" type="password" placeholder="Contraseña" name="password" required>
                        
                        <button type="submit" title="Ingresar" name="Ingresar">Login</button>
                    </form>
                    
                </div>
                <div id="derecho">
                    <div class="titulo">
                        Bienvenido
                    </div>
                    <hr>
                   
                </div>
            </div>
        </div>
        
    </body>
   

</html>