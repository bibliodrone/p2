<?php
namespace GW;
class Convert {
    public function convert($system, $unitType, $valueToConvert) {
        $returnValue = "None";
        $returnMessage = "None";
        $mi = " Miles ";
        $km = " Kilometers ";
        $fh = " Fahrenheit ";
        $cs = " Celsius ";
        $lb = " Pounds ";
        $kg = " Kilograms ";
        $absoluteZeroF = -459.67;
        $absoluteZeroC = -273.15;
        $infoNote = false;
        
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
        return ($returnMessage);
    }
}
    /**
     * Properties
     */
    //private $request;
    //public $hasErrors = false;
    /**
     * Form constructor
     */
    //public function __construct(array $request)
    //{
        # Store form data (POST or GET) in a class property called $request
        //$this->request = $request;
    //}
    /**
     * Returns true if *either* GET or POST have been submitted.
     */
    //public function isSubmitted()
    //{
        //return $_SERVER['REQUEST_METHOD'] == 'POST' || !empty($_GET);
    //}
