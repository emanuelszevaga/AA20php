<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 2 PHP</title>
    </head>
    <body>
        <?php

        echo "<h1>Ejercicio 2: Variables de tipo string</h1>";
        echo "<p>Consigna: Definir una variable de cada tipo: integer, double, string y boolean. Luego imprimirlas en la página, una por línea.</p>";
        
        echo "<div class='resultado'>";
        
        $int = 35;
        
        $double = 19.99;
        
        $string = "Ejercicios de PHP";
        
        $boolean = true; 
        
        echo "<p><strong>Int (Ej. edad):</strong> " . $int . "</p>";
        echo "<p><strong>Double (Ej. precio):</strong> $" . $double . "</p>";
        echo "<p><strong>String (Ej. producto):</strong> " . $string . "</p>";
        echo "<p>Boolean (true se imprime 1 y false no imprime nada): $boolean</p>";

        echo "</div>";

        ?>
    </body>
</html>