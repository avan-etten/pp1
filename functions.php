<?php
/**
 * Created by PhpStorm.
 * User: A-VE
 * Date: 1/4/2019
 * Time: 10:27 AM
 */

function printArray($numbersArray){
    echo "<p>";
    foreach ($numbersArray as $number){
        echo "$number ";
    }
    echo "</p>";
}

function largest($numbersArray){
    $largest = 0;
    foreach($numbersArray as $number){
        if ($number > $largest){
            $largest = $number;
        }
    }
    return $largest;
}

function average($numbersArray){
    $average = 0;
    $total = 0;
    foreach ($numbersArray as $number){
        $average += $number;
        $total++;
    }

    return ($average/$total);
}

function removeDups($numbersArray){
    $noDups = array();

    foreach($numbersArray as $number){
        if (!in_array($number, $noDups)) {
            $noDups[] = $number;
        }
    }
    return $noDups;
}

function distribution($numbersArray){
    $distributedArray = array();
   $i = min($numbersArray);
   for ($i; $i<=max($numbersArray); $i++){
       $j = 0;
       foreach($numbersArray as $number){
           if ($number == $i){
               $j++;
           }
       }
    $distributedArray[$i] = $j;
   }
    echo "<p>";
   foreach($distributedArray as $number => $amount){
       echo "$number => $amount, ";
   }
   echo "</p>";
}