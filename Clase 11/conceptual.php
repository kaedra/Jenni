<?php

    // localhost/clase3php/conceptual.php?nombre=dileo&apellido=franco

        if (isset($_GET['nombre']) && !empty($_GET['nombre']) && isset($GET['apellido']) && !empty ($_GET['apellido'])) {
            $nombre = $_GET['nombre'];
            $apellido = $_GET ['apellido'];
        } else {
            $nombre = "";
            $apellido = "";
        }
        echo $nombre;
        echo "<br>";
        echo $apellido;

        $variable = "LALALA";
        echo "Bienvenido: " .$variable;
        echo "<br>";

        echo "<br>";
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        echo $nombre;
        echo "<br>";
        echo $apellido;
        
        for($i = 0; $i<=10;$i=$i+2) {
            echo $i."<br>";
        }
        // este bucle se ejecute mientras se cumpla la condicion del ()
        
        $f =1;
        while($f <= 10) {
            echo $f;
        }