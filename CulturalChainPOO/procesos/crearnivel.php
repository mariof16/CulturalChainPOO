<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nivel</title>
</head>
<body>
    <?php
        require "niveles.php";
        $niveles= new Niveles;
        if(isset($_GET["error"]))
            echo "<h1>Error: ".$_GET["error"]."</h1>"
    ?>
    <form action="../procesos/gestionniveles.php" method="post" enctype="multipart/form-data">
        <p>Nombre País</p>
        <input type="text" name="nombre">
        <p>Imagen</p>
        <input type="file" name="imagen">
        <br>
        <input type="submit" name="crear">
    </form>
</body>
</html>