<?php
include_once "conexion.php";


 
class secretariaModelo{
    
    public static function mdlIngresar($nombre,$apellido,$genero,$fechaNacimiento,$tipoDocumento,$numeroDocumento,$direccion,$celular,$eps,$estado){
        $mensaje="";
        try {
           $objRespuesta = conexion::conectar()->prepare("INSERT INTO paciente(nombre,apellido,genero,fechaNacimiento,tipoDocumento,numeroDocumento,direccion,celular,eps,estado)VALUES(:nombre,:apellido,:genero,:fechaNacimiento,:tipoDocumento,:numeroDocumento,:direccion,:celular,:eps,:estado)");
           $objRespuesta->bindParam(":nombre",$nombre,PDO::PARAM_STR);
           $objRespuesta->bindParam(":apellido",$apellido,PDO::PARAM_STR);
           $objRespuesta->bindParam(":genero",$genero,PDO::PARAM_STR);
           $objRespuesta->bindParam(":fechaNacimiento",$fechaNacimiento,PDO::PARAM_STR);
           $objRespuesta->bindParam(":tipoDocumento",$tipoDocumento,PDO::PARAM_STR);
           $objRespuesta->bindParam(":numeroDocumento",$numeroDocumento,PDO::PARAM_STR);
           $objRespuesta->bindParam(":direccion",$direccion,PDO::PARAM_STR);
           $objRespuesta->bindParam(":celular",$celular,PDO::PARAM_STR);
           $objRespuesta->bindParam(":eps",$eps,PDO::PARAM_STR);
           $objRespuesta->bindParam(":estado",$estado,PDO::PARAM_STR);
           if ($objRespuesta->execute()) {
             $mensaje="ok";
           }
           else {
               $mensaje="Error";
           }
           $objRespuesta=null;
        } catch (Exception $e) {
            $mensaje=$e;
        }
        return $mensaje;
    }
    



}
