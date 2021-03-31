<?php
require_once "RandomValueGenerator.php";

$numberOfLines = 3;
$numberOfColumns = 3;
$valueError = "";

if (array_key_exists("send", $_GET))
{
    $numberOfLines = $_GET['lines'];
    $numberOfColumns = $_GET['columns'];
    //chyby
    if ($numberOfLines == "" || $numberOfColumns == "") 
    {
        $valueError = "Nebyly zadány žádné hodnoty";
    }
    elseif (!is_numeric($numberOfColumns) || !is_numeric($numberOfLines))
    {
        $valueError = "Nebyly zadány numerické znaky";
    }
    elseif ($numberOfLines <= 0 || $numberOfColumns <=0) {
        $valueError = "Byly zadány záporné hodnoty";
    }
    elseif (round($numberOfLines) != $numberOfLines || round($numberOfColumns) != $numberOfColumns)
    {
        $valueError = "Zadejte celá čísla";
    }   
}

    $arrayOne = [];
    $arrayTwo = [];
    $max = 0;
    $min = 100;

    for ($a = 0; $a < $numberOfLines;$a++){
        
    
    for ($i = 0; $i < $numberOfColumns;$i++){
        array_push($arrayOne, generujCislo());
    }
        $set = $arrayOne;
        array_push($arrayTwo, $set);
        $arrayOne = [];
    }
    
    foreach ($arrayTwo as $key => $array) {
        foreach ($array as $number){
            if ($max < $number){
                $max = $number;
            }
            if ($min > $number){
                $min = $number;
            }
        }
    }
    


    
    
