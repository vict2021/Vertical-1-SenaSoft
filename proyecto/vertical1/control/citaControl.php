<?php

include_once "../modelo/secretariaModelo.php";

class secretariaControl{
    public $nombre;
    public $apellido;
    public $fechaNacimiento;
    public $tipoDocumento;
    public $numeroDocumento;
    public $direccion;
    public $celular;
    public $eps;
    public $estado;
    public $genero;


    public function ctrRegistrarCitas(){
        $objRespuesta = secretariaModelo::mdlIngresar($this->nombre,$this->apellido,$this->genero,$this->fechaNacimiento,$this->tipoDocumento,$this->numeroDocumento,$this->direccion,$this->celular,$this->eps,$this->estado);
        echo json_encode($objRespuesta);
    }

  
}

if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["genero"]) && isset($_POST["fechaNacimiento"]) && isset($_POST["tipoDocumento"]) && isset($_POST["documento"]) && isset($_POST["direccion"]) && isset($_POST["celular"]) && isset($_POST["eps"]) && isset($_POST["estado"])){
    $objSecretaria = new secretariaControl();
    $objSecretaria ->nombre = $_POST["nombre"];
    $objSecretaria ->apellido = $_POST["apellido"];
    $objSecretaria ->genero= $_POST["genero"];
    $objSecretaria ->fechaNacimiento = $_POST["fechaNacimiento"];
    $objSecretaria ->tipoDocumento = $_POST["tipoDocumento"];
    $objSecretaria ->numeroDocumento = $_POST["documento"];
    $objSecretaria ->direccion = $_POST["direccion"];
    $objSecretaria ->celular = $_POST["celular"];
    $objSecretaria ->eps = $_POST["eps"];
    $objSecretaria ->estado = $_POST["estado"];
    $objSecretaria->ctrRegistrarCitas();
}


