<?php

use Michelcode\Statistique\Functions\StandardDeviation;

test('Test standard deviation', function(){
    $list = [];
    expect(function () use ($list) {
        StandardDeviation::calculate($list);
    })->toThrow(new \Exception("Array must have at least one element."));
});