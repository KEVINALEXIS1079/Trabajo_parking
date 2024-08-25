<?php
class Cliente{

   public $srtNomCliente;
   public $srtDniCliente;

    public function __construct(string$nombreCliente,string$dniCliente)
    {
        $this->srtDniCliente = $dniCliente;
        $this->srtNomCliente = $nombreCliente;
    }

    public function getIngresoCliente(){
        $arrCliente = [
           'dniCliente' => $this->srtDniCliente,
           'nombreCliente' => $this->srtNomCliente
        ];
    
        return $arrCliente;
    }
   
}