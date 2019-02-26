<?php
require "Convert.php";
$convert = new GW\Convert;

$unitType = $_GET["unitType"] ?? null;
$valueToConvert = $_GET["valueToConvert"] ?? null;
$system = $_GET["system"] ?? null;

if(isset($unitType)and isset($valueToConvert) and isset($system) and !($errors)) {
    $returnMessage = $convert->convert($system, $unitType, $valueToConvert);
}