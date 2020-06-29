<?php

try {
    $conexion = new PDO("mysql:host=localhost;dbname=bd_inventario", "root", "");
    $query1 = $conexion->query("select * from tb_usuario");
    $query2=$query1->fetchAll();
    for($i = 0; $i < (count($query2[0]) / 2); $i++) {
        echo "<p>".$query2[0][$i]."</p>";
    }

} catch (PDOEcexption $e) {
    echo $e->getMessage();
}
?>
