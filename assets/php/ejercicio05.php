<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 5 PHP</title>
    </head>
    <body>
        <?php
        echo "<h1>Ejercicio 5: Estructuras repetitivas (for - while - do/while)</h1>";
        echo "<p>Consigna: Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while. La estructura for permite incrementar una variable de 2 en 2 </p>";
        
        echo "<h2>Loop:</h2>";
        for ($i = 2; $i <= 100; $i += 2) {
            echo "<p>$i</p>";
        }

        echo "<h2>While loop:</h2>";
        $i = 2;
        while ($i <= 100) {
            echo "<p>$i</p>";
            $i += 2;
        }

        echo "<h2>Do-While loop:</h2>";
        $i = 2;
        do {
            echo "<p>$i</p>";
            $i += 2;
        } while ($i <= 100);

        ?>
    </body>
</html>