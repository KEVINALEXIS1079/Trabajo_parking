<?php
require_once("classCliente.php");

class Vehiculo extends Cliente{
    public $srtPlaca;
    public $srtMarca;
    public $strColor;

    public function __construct(string$placa,string$marca,string$color,string$nombreCliente,string$dniCliente){
        parent::__construct($nombreCliente,$dniCliente);
        $this->srtPlaca = $placa;
        $this->srtMarca = $marca;
        $this->strColor = $color;
    }
    public function getIngresoCliente(){
        $arrCliente =[
            'placa' => $this->srtPlaca,
            'marca' => $this->srtMarca,
            'color'=>$this->strColor,
            'dniCliente' => $this->srtDniCliente,
            'nombreCliente' => $this->srtNomCliente
        ];
        return $arrCliente;
    }
}