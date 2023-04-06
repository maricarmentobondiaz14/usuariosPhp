<?php
include("../Modelos/ConexionBaseDatos.php");
$con= conectar();

function listaUsuarios(){
    $consulta = "SELECT id_usuario,usuario, nombre, direccion, rfc, telefono, correo, status  FROM usuarios";
    $result = mysqli_query($con,$consulta);
    if (!$result){
        $result=0;
    }
    return $result;

}
function altaUsuarios($usuario, $password, $nombre,$direccion, $rfc, $telefono, $correo, $status){
    $bandera=false;
    $insertar = "INSERT INTO usuarios VALUES ('$usuario','$password','$nombre','$direccion','$rfc','$telefono','$correo',$status);";
    echo "$insertar";
    $result = mysqli_query($con,$insertar);

    if (!$result){
        $bandera=false;
    }else{
        $bandera=true;
    }
    return $result;

}
function editarUsuarios($usuario, $password, $nombre,$direccion, $rfc, $telefono, $correo, $status,$id_usuario){
    $bandera=false;
    $actualizar="UPDATE usuarios SET usuario='$usuario', password='$password', nombre='$nombre', direccion ='$direccion', rfc='$rfc', telefono='$telefono', correo='$correo', status=$status WHERE id_usuario=$id_usuario; ";
    $actualizar = mysqli_query($con,$actualizar);

    if (!$actualizar){
        $bandera=false;
    }else{
        $bandera=true;
    }
    return $bandera;
}
function eliminarUsuarios($id_usuario){
    $bandera=false;
    $eliminar="DELETE FROM usuarios where id_usuario=$id_usuario";
    $eliminar = mysqli_query($con,$eliminar);
    if (!$eliminar){
        $bandera=false;
    }else{
        $bandera=true;
    }
    return $bandera;
}
?>