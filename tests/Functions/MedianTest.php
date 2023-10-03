<?php
// importer au début les use
use Michelcode\Statistique\Functions\Median;

// écriture d'un test
test('vérifier médianne', function(){
    $list = [10, 11, 14, 16, 20];

    expect(Median::calculate($list))->toBe(14.0);
});

test('vérifier médianne vide', function(){
    $list = [];
    expect(function () use ($list) {
        Median::calculate($list);
    })->toThrow(new \Exception("Array must have at least one element."));
});