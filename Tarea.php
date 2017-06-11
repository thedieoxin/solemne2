<?php
session_start();
class Tarea {
	/* este es el metodo para agregar una tarea al array */
	public function setArray($lista){
		$_SESSION['tareas'][]=$lista;
		}
	/* metodo para eliminar una posicion del array */
	public function delPosArray($id){
		unset($_SESSION['tareas'][$id]); /* con este comando eliminamos una posicion del array */
		$_SESSION['tareas']=array_values($_SESSION['tareas']); /* con este comando reordenamos las posiciones */
		}
	}
