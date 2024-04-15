<?php
include('../controladores/global/conexion.php');
include('../controladores/global/sesiones.php');
$sentencia=$pdo->prepare("SELECT * FROM `bitacora` WHERE estatus='A' ");
$sentencia->execute();
$listabitacora=$sentencia->fetchAll(PDO::FETCH_ASSOC);
// print_r($listausuarios);

?>