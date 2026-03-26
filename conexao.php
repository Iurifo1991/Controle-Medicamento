<?php

$pdo= new PDO('mysql:host=localhost;dbname=hospital','root','');
$sql="select* from  paciente";
$resultado=$pdo->query($sql);
$paciente= $resultado->fetchAll();

var_dump($paciente);
?>