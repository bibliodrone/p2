<?php
require "Convert.php";
$convert = new GW\Convert;

$unitType = $_GET["unitType"] ?? null;
$valueToConvert = $_GET["valueToConvert"] ?? null;
$system = $_GET["system"] ?? null;

if(isset($unitType)and isset($valueToConvert) and isset($system)) {
    $returnMessage = $convert->convert($system, $unitType, $valueToConvert);
}

/*$returnValue = "None";
$returnMessage = "None";
$mi = " Miles ";
$km = " Kilometers ";
$fh = " Fahrenheit ";
$cs = " Celsius ";
$lb = " Pounds ";
$kg = " Kilograms ";
$absoluteZeroF = -459.67;
$absoluteZeroC = -273.15;
$infoNote = false;*/

/*if(isset($unitType)and isset($valueToConvert) and isset($system)) {
    $returnMessage = convert($system, $unitType, $valueToConvert);
}*/
/*if(isset($unitType)and isset($valueToConvert) and isset($system)) {
    if($system == "tometric") {
        if($unitType == "distance") {
            $unitA = $mi;
            $unitB = $km;
            $returnValue = $valueToConvert * 0.6;
        }
        elseif($unitType == "temperature") {
            $unitA = $fh;
            if($valueToConvert < $absoluteZeroF) {
                $valueToConvert = $absoluteZeroF;
                $infoNote = true;
            }
            $unitB = $cs;
            $returnValue = ($valueToConvert -32) * 0.556;    
        }
        elseif($unitType == "mass") {
            $unitA = $lb;
            $unitB = $kg;
            $returnValue = $valueToConvert * 0.4536;
        }
    }
    elseif($system == "toimperial") {
        if($unitType == "distance") {
            $unitA = $km;
            $unitB = $mi;
            $returnValue = $valueToConvert * 1.6;
        }
        elseif ($unitType == "temperature") {
            $unitA = $cs;
            if($valueToConvert < $absoluteZeroC) {
                $valueToConvert = $absoluteZeroC;
                $infoNote = true;
            }
            $unitB = $fh;
            $returnValue = ($valueToConvert * 1.8) + 32;
            
        }
        elseif ($unitType == "mass") {
            $unitA = $kg;
            $unitB = $lb;
            $returnValue = $valueToConvert * 2.205;
        }
    }
    $returnMessage = $valueToConvert.$unitA." = ".$returnValue.$unitB;
}*/
