<?php
require_once("classCliente.php");
require_once("classvehiculo.php");
require_once("classIngreso.php");


$cliente = new Cliente("kevin","101010");

$arrCliente = $cliente->getIngresoCliente();

echo "<h2> DATOS DES DEL CLIENTE </h2>";
echo "<pre>";
print_r($arrCliente);
echo "</pre>";

$vehiculo = new Vehiculo("123ASD","DAS","negro","kevin","101010");
$arrCliente = $vehiculo->getIngresoCliente();

echo "<h2> DATOS DEL VEHICULO </h2>";
echo "<pre>";
print_r($arrCliente);
echo "</pre>";

$ingreso = new parking("8AM","12PM","5","2","123ASD","DAS","negro","kevin","101010");
$arrCliente = $ingreso->getIngresoCliente();
$total = $ingreso ->calcular("12","8");

echo "<h2> TIEMPO EN EL PARKING </h2>";
echo "<pre>";
print_r($arrCliente);
echo "</pre>";
echo "<h2> TOTAL A PAGAR </h2>";
echo "</pre>";
print_r($total);
echo "</pre>";




