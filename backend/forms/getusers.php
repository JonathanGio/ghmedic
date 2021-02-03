
<?php
$mysqli = new mysqli("localhost", "root", "", "ghmedic");

/* verificar la conexión */
if ($mysqli->connect_errno) {
    printf("Conexión fallida: %s\n", $mysqli->connect_error);
    exit();
}

$consulta = "SELECT * FROM empleado";

if ($resultado = $mysqli->query($consulta)) {

    /* obtener un array asociativo */
    while ($fila = $resultado->fetch_assoc()) {
        
        echo '
        <tr>          
            <td>'.$fila['id'].'</td>            
            <td>'.$fila['nombre'].'</td>
            <td>'.$fila['edad'].'</td>
            <td>';
            if($fila['departamento'] == '1'){
                echo '<span class="label label-success">Recursos humanos</span>';
            }
            else if ($fila['departamento'] == '2' ){
                echo '<span class="label label-info">Sistemas</span>';
            }
            else if ($fila['departamento'] == '3' ){
                echo '<span class="label label-warning">Mercadotecnia</span>';
            }else{
                echo '<span class="label label-warning">Taller</span>';                
            }
        echo '
            </td>
            <td>
                <a href="#!" class="table-action"  data-toggle="modal" data-target="#update'.$fila['id'].'" data-original-title="Edit empleado"><span class="material-icons">create</span></a>                
                <a href="index.php?aksi=delete&nik='.$fila['id'].'" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete empleado"><span class="material-icons">delete</span></a>
            </td>';

            require_once('backend/forms/update.php');
            
            echo'
        </tr>';
    }

    /* liberar el conjunto de resultados */
    $resultado->free();
}

/* cerrar la conexión */
$mysqli->close();
?>
