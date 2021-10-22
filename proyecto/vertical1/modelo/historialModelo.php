<?php
include_once "conexion.php";
class historialModelo{
    public static function mdlIngresar($nombre,$apellido,$tipoDocumento,$numeroDocumento,$fechaCita,$horaCita,$pdf){
        
        $mensaje = "";
        $nombreArchivo = $pdf['name'];
        $extension = substr($nombreArchivo, -4);
        $rutaArchivo = "../vista/pdf/" . $fechaCita. $nombre . $apellido .$extension;
        $url =  "vista/pdf/" . $fechaCita. $nombre . $apellido . $extension;


        if (($extension == ".pdf")) {

            if (move_uploaded_file($pdf["tmp_name"], $rutaArchivo)) {
        try {
           $objRespuesta = conexion::conectar()->prepare("INSERT INTO paciente(nombre,apellido,tipoDocumento,numeroDocumento,fechaCita,horaCita,pdf)VALUES(:nombre,:apellido,:tipoDocumento,:numeroDocumento,:fechaCita,:horaCita,:pdf)");
           $objRespuesta->bindParam(":nombre",$nombre,PDO::PARAM_STR);
           $objRespuesta->bindParam(":apellido",$apellido,PDO::PARAM_STR);
           $objRespuesta->bindParam(":tipoDocumento",$tipoDocumento,PDO::PARAM_STR);
           $objRespuesta->bindParam(":numeroDocumento",$numeroDocumento,PDO::PARAM_STR);
           $objRespuesta->bindParam(":fechaCita",$fechaCita);
           $objRespuesta->bindParam(":horaCita",$horaCita);
           $objRespuesta->bindParam(":pdf",$url,PDO::PARAM_STR);
           if ($objRespuesta->execute()) {
            $mensaje = "ok";
        } else {
            $mensaje = "error";
        }
    } catch (Exception $e) {

        $mensaje = $e;
    }
} else {
    $mensaje = "no fue posible subir el archivo";
}
} else {

$mensaje = "El tipo del archivo no es compatible solo se resive archivos pdf";
}

return $mensaje;
}

public static function mdlListardatos(){
    $objListadatos = Conexion::conectar()->prepare("SELECT * FROM paciente");
    $objListadatos->execute();
    $listadatos = $objListadatos->fetchAll();
    $objListadatos = null;
    return $listadatos;
}
}