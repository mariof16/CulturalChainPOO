<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Nivel</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
        require "niveles.php";
        $niveles= new Niveles;
        echo "<h1>".$_GET["nombrepais"]."</h1>"
    ?>
    <form action="../procesos/gestionniveles.php" method="post" enctype="multipart/form-data">
        <p>Nombre</p>
        <input type="text" name="nombre" value="<?php echo $_GET["nombrepais"]?>">
        <p>Imagen</p>
        <input type="file" name="imagen">
        <br>
        <input type="submit" name="modificar">
        <input type="hidden" name="id" value="<?php echo $_GET["id"]?>">
    </form>
    <a href="../procesos/listarniveles.php">Atras</a><br>
</body>
</html>