<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 3 PHP</title>
    </head>
    <body>
        <?php
        echo "<h1>Ejercicio 3: Variables de tipo string</h1>";
        echo "<p>Consigna: Definir tres variables enteras. Luego definir un string que incorpore dichas variables y las sustituya en tiempo de ejecución.</p>";
        
        $cantidad_confirmados = 15;
        $cantidad_cancelados = 2;
        $cantidad_pendientes = 10;
        
        $mensaje_final = "Hoy es mi cumple ya me confirmaron $cantidad_confirmados personas, $cantidad_cancelados personas no pueden venir, y $cantidad_pendientes todavía no confirmaron ni cancelaron.";  

        echo "<div class='resultado'>";
        echo "<h2>Cumpleaños 22:</h2>";
        echo "<p>" . $mensaje_final . "</p>";
        echo "</div>";
        
        ?>
    </body>
</html>