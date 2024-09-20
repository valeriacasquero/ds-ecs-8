<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/agregarRespuesta.php';
 

$resp= new AgregarRespuesta();




echo json_encode ($resp);