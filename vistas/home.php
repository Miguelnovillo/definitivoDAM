<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
    <ul>
        <li>Home</li>
        <li><a href="includes/logout.php">Cerrar Sesión</a></li>
    </ul>
    <h1>Bienvenido</h1> <?php echo "Mr./Mrs." . $userSession->getCurrentUser();?>
</body>
</html>