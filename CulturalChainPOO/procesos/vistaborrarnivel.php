<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Nivel</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <a href="../procesos/index.php?accion=listar&controlador=controladorniveles">Listar</a><br>
    <?php
        echo "<h1>Borrar: ".$_GET["nombrepais"]."</h1>"
    ?>
    <form action="../procesos/index.php?accion=borrar&controlador=controladorniveles&nombrepais="<?php echo $_GET["nombrepais"] ?> method="post" enctype="multipart/form-data" class="borrado">   
        <div>
            <input type="submit" name="si" value="Si">
            <input type="submit" name="no" value="No">
        </div>
        <input type="hidden" name="id" value="<?php echo $_GET["id"]?>">
    </form>
</body>
</html>