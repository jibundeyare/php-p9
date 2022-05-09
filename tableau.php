<?php

$fruits = [
    'ananas',
    'banane',
    'cerise',
];

// la même chose
$fruits = [
    0 => 'ananas',
    1 => 'banane',
    2 => 'cerise',
];

foreach ($fruits as $key => $value) {
    echo "{$key}: {$value}";
    echo '<br>';
}

echo $fruits[1];
echo '<br>';

$legumes = [
    'a' => 'artichaut',
    'b' => 'brocoli',
    'c' => 'carotte',
];

foreach ($legumes as $key => $value) {
    echo "{$key}: {$value}";
    echo '<br>';
}

echo $legumes['b'];
echo '<br>';
