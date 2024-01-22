<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Nivel</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<a href="../procesos/listarniveles.php">Atras</a><br>
    <?php
        require "niveles.php";
        $niveles= new Niveles;
        echo "<h1>Borrar: ".$_GET["nombrepais"]."</h1>"
    ?>
    <form action="../procesos/gestionniveles.php" method="post" enctype="multipart/form-data">   
        <input type="submit" name="si" value="Si">
        <input type="submit" name="no" value="No">
        <input type="hidden" name="id" value="<?php echo $_GET["id"]?>">
    </form>
</body>
</html>