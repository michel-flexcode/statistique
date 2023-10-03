<?php
// importer au début les use
use Michelcode\Statistique\Functions\Average;

// écriture d'un test
test('vérifier moyenne', function(){
    $list = [10, 15, 14, 16, 20];

    expect(Average::calculate($list))->toBe(15.0);
});


test('vérifier moyenne vide', function(){
    $list = [];
    expect(function () use ($list) {
        Average::calculate($list);
    })->toThrow(new \Exception("Array must have at least one element."));
});