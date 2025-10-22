<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1 PHP</title>
    </head>
    <body>
        <?php
        $num = rand(1, 100);

        echo "<h1>Ejercicio 1: Tipos de variables</h1>";
        

        echo "<p>El valor generado aleatoriamente es: <strong>$num</strong></p>";

        if ($num <= 50) {
            echo "<p>El número $num es menor o igual a 50.</p>";
        } else {
            echo "<p>El número $num es mayor que 50.</p>";
        }

        ?>
    </body>
</html>