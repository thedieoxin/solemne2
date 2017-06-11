<?php
session_start();
class Tarea {
	public function setArray($lista){
		$_SESSION['tareas'][]=$lista;
		}
	public function delPosArray($id){
		unset($_SESSION['tareas'][$id]);
		$_SESSION['tareas']=array_values($_SESSION['tareas']);
		}
	}
