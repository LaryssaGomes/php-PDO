<?php
require_once "IConn.php";
require_once "Conn.php";
require_once "IPaciente.php";
require_once "Paciente.php";
require_once "ServicePaciente.php";
$db = new Conn('localhost','dados','root', ''); 
$paciente = new Paciente;
/*
$paciente->setId(2)
         ->setNome("Junior")
         ->setCpf(23)
         ->setEndereco("Cana brava")
         ->setDoenca_id(2);
*/

$service = new ServicePaciente($db, $paciente);
print_r($service->find(3));
?>