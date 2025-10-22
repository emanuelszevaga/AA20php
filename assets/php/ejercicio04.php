<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4 PHP</title>
    </head>
    <body>
        <?php
        echo "<h1>Ejercicio 4: Estructura Condicional (if)</h1>";
        echo "<p>Consigna: Generar un valor aleatorio entre 1 y 3. Luego imprimir en castellano el número (Ej. si se genera el 3 luego mostrar en la página el string tres).</p>";
        
        $valor = rand(1, 3);
        
        $palabra = "";
        
        if ($valor == 1) {
            $palabra = "uno";
        } elseif ($valor == 2) {
            $palabra = "dos";
        } else { 
            $palabra = "tres";
        }
        
        echo "<div class='resultado'>";
        echo "<p>El número generado es: <strong>" . $valor . "</strong></p>";
        echo "<p>La palabra generada es: <strong>" . $palabra . "</strong></p>";
        echo "</div>";
        
        ?>
    </body>
</html>