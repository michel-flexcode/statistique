<?php
namespace Michelcode\Statistique\Functions;

class Median
{
    public static function calculate(array $numbers): float
    {
        sort($numbers);
        if (count($numbers) >= 1){

        $ourMedian = count($numbers);
        if ($ourMedian % 2 !== 0) {
            $rangMoyen = ceil($ourMedian / 2);
            $machin = $numbers[$rangMoyen - 1]; // Subtract 1 to get the correct index
            return $machin; // Return the value of the median element
        }
        else {
            $leFirstTerm = $ourMedian / 2 - 1; // Subtract 1 to get the correct index
            $leSecondTerm = $ourMedian / 2;
            $solution = ($numbers[$leFirstTerm] + $numbers[$leSecondTerm]) / 2;
            return $solution; // Return the value of the median
        }
        
    }
        else {
            throw new \Exception("Array must have at least one element.");
        }
    }
}

