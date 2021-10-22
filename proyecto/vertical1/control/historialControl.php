<?php

include_once "../modelo/historialModelo.php";

class historialControl{
    public $nombre;
    public $apellido;
    public $tipoDocumento;
    public $numeroDocumento;
    public $fechaCita;
    public $horaCita;
    public $pdf;
 


    public function ctrRegistrarCitas(){
        $objRespuesta = historialModelo::mdlIngresar($this->nombre,$this->apellido,$this->tipoDocumento,$this->numeroDocumento,$this->fechaCita,$this->horaCita,$this->pdf);
        echo json_encode($objRespuesta);
    }
    public function ctrListardatos(){
        $objRespuesta = historialModelo::mdlListardatos();
        echo json_encode($objRespuesta);
    }

  
}

if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["tipoDocumento"]) && isset($_POST["documento"]) && isset($_POST["horaCita"]) && isset($_POST["fechaCita"])){
    $objhistorial = new historialControl();
    $objhistorial ->nombre = $_POST["nombre"];
    $objhistorial ->apellido = $_POST["apellido"];
    $objhistorial ->tipoDocumento = $_POST["tipoDocumento"];
    $objhistorial ->numeroDocumento = $_POST["documento"];
    $objhistorial ->fechaCita = $_POST["fechaCita"];
    $objhistorial ->horaCita = $_POST["horaCita"];
    $objhistorial ->pdf = $_FILES["pdf"];
    $objhistorial->ctrRegistrarCitas();
}

if (isset($_POST["listadatos"]) == "ok"){
    $objdatos = new historialControl();
    $objdatos->ctrListardatos();
}

