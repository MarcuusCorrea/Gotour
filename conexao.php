<?php

$host = 'localhost:3306'; 
$dbname = 'marcos';
$user = 'root';
$password = '';

try {
    $PDO = new PDO( 'mysql:host=' . $host . ';dbname=' . $dbname, $user, $password );
    $PDO->exec("set names utf8");
}
catch ( PDOException $cu ) {
    echo 'Rilmar vai tomar no: ' . $cu->getMessage();
}

?>