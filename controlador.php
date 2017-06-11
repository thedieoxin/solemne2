<?php
/* Requerimos el archivo de la clase */
require_once ('Tarea.php');
/* desde index.php rescatamos la variable $action, la cual definimos que vamos a hacer, */
/* es decir si agregamos una tarea al array o si eliminanos una tarea del array         */
$action = $_POST['action'];
/* Si viene desde el index la variable tarea  */
if (isset($_POST['tarea'])){
	$ntr = $_POST['tarea']; /* cargo a $ntr el valor de la tarea o el contenido de tarea */
	$id  = 0;               /* y dejo en cero el valor de id, puesto que no lo necesito */
	}
else {
	$ntr = "";              /* en cambio si desde el index viene la tarea vacia, quiere decir que estoy eliminando un valor y dejo vacia la variable $ntr */
	$id  = $_POST['id'];
	}
$tarea = new Tarea(); /* Llamo a la clase y creo su objeto */
switch ($action){
	case '1':
		$tarea->setArray($ntr);
	break;
	case '2':
		$tarea->delPosArray($id);
	break;
	}
header('Location:index.php');
exit;
/*
Autor: Renato Soto
*/
