<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./assets/style.css">
    
</head>

<body class="contenedor-panel">

    <?php
    session_start();

    if (isset($_SESSION['email'])) {
        echo "<h2>Welcome, " . $_SESSION['email'] . "!</h2>";
        echo "<form action='close_session.php' method='POST'>";
        echo "<button type='submit'>Logout</button>";
        echo "</form>";
    } else {
        echo "<form action='close_session.php' method='POST'>";
        echo "<button type='submit'>Return</button>";
        echo "</form>";
        echo "</div>";
    }
    ?>

</body>

</html>