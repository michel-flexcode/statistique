<?php

namespace Michelcode\Statistique\Functions;

class StandardDeviation
{
    public static function calculate(array $numbers): float
    {
        if (count($numbers) >= 1) {
            // Step 1: Calculate the mean (average) de mon autre fonction
            $mean = Average::calculate($numbers);

            // Step 2: Calculate the squared differences
            $squaredDifferences = array_map(function ($number) use ($mean) {
                return pow($number - $mean, 2);
            }, $numbers);

            // Step 3: Calculate the average of squared differences
            $averageSquaredDifferences = Average::calculate($squaredDifferences);

            // Step 4: Take the square root to get the standard deviation
            $standardDeviation = sqrt($averageSquaredDifferences);
            echo $standardDeviation . "ho";
            return $standardDeviation;
        } else {
            throw new \Exception("Array must have at least one element.");
        }
    }
}
