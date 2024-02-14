<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nivel</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <a href="index.php?accion=menu&controlador=controladorniveles" class="atras">Atras</a><br>
    <h1 class="error"><?php
        if(isset($controlador->error)){
            echo "Error: ".$controlador->error;
        }
    ?></h1>
    <form action="index.php?accion=crearnivel&controlador=controladorniveles" method="post" enctype="multipart/form-data">
        <p>Nombre País</p>
        <input type="text" name="nombre">
        <p>Imagen</p>
        <input type="file" name="imagen">
        <br>
        <input type="submit" name="crear">
    </form>
</body>
</html>