<?php

use Michelcode\statistique\Functions\Average;

$list = [10, 15, 14, 16, 20];

expect(Average::calculate($list))->toBe(15.0);