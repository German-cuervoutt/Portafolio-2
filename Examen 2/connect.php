<?php
    function connectdb() : mysqli{
        $db = mysqli_connect("localhost",  "gerwer", "300105", "bienesraices");

        if ($db) {
            echo "conectado";
        } else {
            echo "no conectado";
            }
        return $db;
    }
?>