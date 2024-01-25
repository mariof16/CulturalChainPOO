<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Niveles</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body id="listado">
    <h1>Listado de niveles</h1>
    <a href="../html/niveles.html" class="atras">Atras</a><br>
    <div id="contenidolistado"><?php
        require "niveles.php";
        $niveles= new Niveles;
        
        $resultado=$niveles->listar();
        foreach($resultado as $fila){
            echo "<div class='contenedor'>";
            echo "<h1>".$fila["nombrepais"]."</h1>";
            echo "<br><img src='data:image/png;base64,".base64_encode($fila['imagen'])."'>";
            echo "<br>";
            echo "<div class='botones'>";
            echo "<a href='modificarnivel.php?id=".$fila["id"]."&nombrepais=".$fila["nombrepais"]."'>Modificar</a><br>";
            echo "<a href='borrarnivel.php?id=".$fila["id"]."&nombrepais=".$fila["nombrepais"]."&borrar=0'>Borrar</a><br>";
            echo "</div>";
            echo "</div>";
            echo "<br>";
        }
    ?>
    </div>
</body>
</html>