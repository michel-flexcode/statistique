<?php

namespace Michelcode\Statistique\Functions;

class Average
{
    public static function calculate(array $numbers): float
    {   
        if (count($numbers) >= 1) {
            $sum = array_sum($numbers);
            $count = count($numbers);

            return $sum / $count;
        } else {
            throw new \Exception("Array must have at least one element.");
        }
    }
}
