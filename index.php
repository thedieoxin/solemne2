<?php 
session_start();
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
  <input type="text" name="tarea" placeholder="Ingrese la tarea" />
  <input type="hidden" name="action" value="1" />
  <button type="submit" class="btn btn-sm btn-primary"> + </button>
</form>
<?php
if (isset($_SESSION['tareas'])){
    foreach (array_keys($_SESSION['tareas']) as $i){
        ?>
        <form action="controlador.php" method="post">
            <input type="hidden" name="action" value="2" />&nbsp;</div>
            <button type="submit" class="btn"> x </button></div>
            <?php echo $_SESSION['tareas'][$i]; ?></div>
            <input type="hidden" name="id" value="<?php echo $i; ?>" />&nbsp;</div>
        </form>
        <?php
        }
    }
else{
    <label> VACIO </label>
    <?php
    }
    ?>
</body>
</html>
