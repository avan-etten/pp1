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