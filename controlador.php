<?php
session_start();

$action = $_POST['action'];

switch ($action){

        case '1':
                $_SESSION['tareas'][]=$_POST['tarea'];
        break;

        case '2':
                $pos = $_POST['id'];
                unset($_SESSION['tareas'][$pos]);
                $_SESSION['tareas']=array_values($_SESSION['tareas']);
        break;
        }
        
header('Location:index.php');
exit;
?>
