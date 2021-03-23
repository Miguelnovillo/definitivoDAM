<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <form action="" method="post">
    <?php 
        if(isset($errorLogin)){
            echo $errorLogin;
        }
    ?>
        <h2>Iniciar Sesión</h2>
        <p>Nombre de usuario <br>
        <input type="text" name="user">
        </p>
        <p>Password:<br>
        <input type="text" name="pass">
        </p>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>