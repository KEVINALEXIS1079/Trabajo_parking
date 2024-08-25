<?php
require_once("classvehiculo.php");
require_once("classCliente.php");

class parking extends Vehiculo{
    public $srtIngreso;
    public $srtsalida;
    public $srthora;
    public $srtTarifa;

    public function __construct(string$ingreso,string$salida,string$hora,string$tarifa,
        string$placa,string$marca,string$color,string$nombreCliente,string$dniCliente){
        parent::__construct($placa,$marca,$color,$nombreCliente,$dniCliente);
        
        $this->srtIngreso = $ingreso;
        $this->srtsalida = $salida;
        $this->srthora = $hora;
        $this->srtTarifa = $tarifa;
    }

    public function getIngresoCliente(){
        $arrCliente =[
            'placa' => $this->srtPlaca,
            'marca' => $this->srtMarca,
            'color'=>$this->strColor,
            'dniCliente' => $this->srtDniCliente,
            'nombreCliente' => $this->srtNomCliente,
            'ingreso'=>$this->srtIngreso,
            'salida'=>$this->srtsalida,
            'hora'=>$this->srthora,
            'tarifa'=>$this->srtTarifa
        ];
        return $arrCliente;
    }

    public function calcular($ingreso,$salida){

        $tiempo = $ingreso - $salida;
        $tarf = $tiempo * 2;
        return $tarf;

    }

    

}