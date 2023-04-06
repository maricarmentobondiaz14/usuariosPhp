<?php
include("../Controlador/usuariosControlador.php");
if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["nombre"])){
        $errores[] = "El nombre es requerido";
    }
    if(empty($_POST["password"]) || strlen($_POST["password"]) < 5){
        $errores[] = "La contraseña es requerida y ha de ser mayor a 5 caracteres";
    }
    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || empty($_POST["email"])){
        $errores[] = "No se ha indicado email o el formato no es correcto";
    }
    if(empty($errores)) {

        $id_usuario=$_POST['id_usuario'];
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $nombre =$_POST['nombre'];
        $direccion=$_POST['direccion'];
        $rfc=$_POST['rfc'];
        $telefono=$_POST['telefono'];
        $correo=$_POST['Correo'];
        $status=$_POST['cboStatus'];
        $bandera=false;
        $bandera=editarUsuarios($usuario, $password, $nombre,$direccion, $rfc, $telefono, $correo, $status,$id_usuario);
        if($bandera==false){
            echo "<script>alert('Error no se pudo editar el usuario');</script>";
        }else{
            echo "<script>alert('El usuario se edito correctamente');</script>";
        }
    }
}


?>