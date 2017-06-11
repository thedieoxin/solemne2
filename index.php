<?php
/** Lista de Tareas : Solemne 2 **/
session_start(); // Cuando se trabaja con variables de session siempre debe llevar esta linea
?>
<!DOCTYPE html>
<html>
<head>
    <title>Solemne 2</title>
</head>
<body>
    <h1>Mis Tareas</h1>
    <form action="controlador.php" method="post">
        <label>Tarea: </label>
        <input type="text" name="tarea" required="required" placeholder="Ingrese la tarea" />
        <button type="submit"> + </button>
        <input type="hidden" name="action" value="1" />
    </form>
    <?php
        /* Comprueba que exista la variable $_SESSION y que contenga valores */
        if (isset($_SESSION['tareas'])){ 
            /* Recorre el Array de la variable de seccion y ademas asigna un contador $i */
            foreach (array_keys($_SESSION['tareas']) as $i){
                /* creo un formulario para enviar el valor que deseo eliminar dentro del arreglo */
                ?>
                <form action="controlador.php" method="post">
                    <button type="submit"> x </button>
                    <?php echo $_SESSION['tareas'][$i]; ?>
                    <input type="hidden" name="id" value="<?php echo $i; ?>" />
                    <input type="hidden" name="action" value="2" />
                </form>
                <?php
                }
            }
        else{
            ?>
            <label>Sin tareas que mostrar</label>
            <?php
			}
        ?>
</body>
</html>
<?php
/* Autor: Renato Soto */
?>
