<?php
include("sesion_06.php");
$args=$_REQUEST;
$user= new Usuario();

$respuesta= array();
$respuesta['num_cliente']=$user->no_cliente;
$respuesta['nombre_completo']=$user->nombre." ".$user->ap_paterno." ".$user->ap_materno;
$respuesta['num_cuenta']=$user->cuenta->n_cuenta;

echo json_encode($respuesta,0);
?>