<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/consultarTodosRespuesta.php';
require_once '../../modelo/equipos.php';
require_once '../../modelo/jugador.php';

$resp= new ConsultarTodosRespuesta();

$lj1= new Jugador();
$lj1->Nombre = 'Pedro Gonzalez';
$lj1->Posicion = 'Delantero';
$lj1->Debut='17 de agosto de 2005';
$lj1->Goles=10;

$lj2= new Jugador();
$lj2->Nombre = 'Daniel Sanchez';
$lj2->Posicion = 'Delantero';
$lj2->Debut='16 de diciembre de 2010';
$lj2->Goles=0;

$lj3= new Jugador();
$lj3->Nombre = 'Juan Perez';
$lj3->Posicion = 'Defensor';
$lj3->Debut='1 de diciembre de 2019';
$lj3->Goles=10;

$e1= new Equipo();
$e1->Id= 1;
$e1->Nombre='Equipo 1';
$e1->Fundacion='3 de noviembre de 1903 (118 años)';
$e1->Presidentes= 'Javier Perez';
$e1->ListJugadores[]=$lj1;
$e1->ListJugadores[]=$lj2;
$e1->ListJugadores[]=$lj3;




$lj4= new Jugador();
$lj4->Nombre = 'Ignacio Gonzalez';
$lj4->Posicion = 'Arquero';
$lj4->Debut='17 de enero de 2020';
$lj4->Goles=1;

$lj5= new Jugador();
$lj5->Nombre = 'Ariel Cosentino';
$lj5->Posicion = 'Mediocampista';
$lj5->Debut='16 de diciembre de 2001';
$lj5->Goles=2;

$lj6= new Jugador();
$lj6->Nombre = 'Diego Dominguez';
$lj6->Posicion = 'Defensor';
$lj6->Debut='15 de febrero de 2018';
$lj6->Goles=5;

$lj7= new Jugador();
$lj7->Nombre = 'Gustavo Santos';
$lj7->Posicion = 'Delantero';
$lj7->Debut='16 de diciembre de 2009';
$lj7->Goles=3;


$e2= new Equipo();
$e2->Id= 2;
$e2->Nombre='Equipo 2';
$e2->Fundacion='5 de abril de 1923';
$e2->Presidentes= 'Ignacio Quinteros';
$e2->ListJugadores[]=$lj4;
$e2->ListJugadores[]=$lj5;
$e2->ListJugadores[]=$lj6;
$e2->ListJugadores[]=$lj7;

$resp->ListEquipos[]=$e1;
$resp->ListEquipos[]=$e2;


echo json_encode ($resp);