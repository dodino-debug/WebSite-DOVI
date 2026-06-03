<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

try {

    $conexion = new PDO(
        "mysql:host=localhost;dbname=drappsco_dovi_sas;charset=utf8",
        "dodino",
        "Dodino1606"
    );

    echo "Conexión exitosa";

} catch (PDOException $e) {

    echo "Error: " . $e->getMessage();

}