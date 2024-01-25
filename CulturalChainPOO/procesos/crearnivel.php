<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nivel</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <a href="../html/niveles.html" class="atras">Atras</a><br>
    <h1 class="error"><?php
        if(isset($_GET["error"])){
            echo "Error: ".$_GET["error"];
        }
    ?></h1>
    <form action="gestionniveles.php" method="post" enctype="multipart/form-data">
        <p>Nombre País</p>
        <input type="text" name="nombre">
        <p>Imagen</p>
        <input type="file" name="imagen">
        <br>
        <input type="submit" name="crear">
    </form>
</body>
</html>