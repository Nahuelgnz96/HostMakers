<?php

    $conexion=new mysqli("localhost","root","","hosting");
    $conexion->set_charset("utf8");
// Consulta SQL para seleccionar los últimos 3 registros de la tabla "noticias"
$sql = "SELECT * FROM planes_hosting";

$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
       
        // Acceder a los datos de cada registro
        $id = $fila["id_plan"];
        $nombre = $fila["nombre"];
        $descripcion = $fila["descripcion"];
        $precio_mes = $fila["precio_mes"];
        $recursos_asignados = $fila["recursos_asignados"];

        // Reemplazar los puntos con puntos más un <br>
        $recursos_asignados = str_replace('. ', '. <br>', $recursos_asignados);
        // Convertir las oraciones en elementos de una lista
        $oraciones = explode('.<br>', $recursos_asignados);

        // Convertir el nombre a mayúsculas
        $nombre = strtoupper($nombre);

        echo "<div class='planes-card bg-light'>";
        echo "<div class='texto-plan text-dark '>";
        echo "<h3 class='text-center titulo2'>" . $nombre . "</h3>";
        echo "<p class='text-center descripcion mt-4'>" . $descripcion . "</p>";
        echo "<p class='text-center h1 mb-5'>$". $precio_mes ."</p>";
        echo '<div class="d-flex align-items-center mb-4">';
        echo '<button type="button" class="btn btn-warning mx-auto">COMPRAR</button>';
        echo '</div>';
        
        echo "<h5 class='text-center'>Funciones Principales</h5>";
        echo '<ul class="list-group bg-transparent lista mt-3">';
        // Iterar a través de las oraciones y mostrarlas como elementos de la lista
        foreach ($oraciones as $oracion) {
            echo '<li class="list-group-item d-flex  align-items-center bg-transparent">';
            echo "<i class='fa-solid fa-check me-3' style='color: #05ff37;'></i>".$oracion;
            echo '</li>';
        }
        echo '</ul>';
        echo "</div>";
        
        echo "</div>";

        

    }
} else {
    echo "No se encontraron registros";
}

$conexion->close();
?>

