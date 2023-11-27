<?php

$todos = [
    [
        'text' => 'Fare la spesa',
        'done' => 'false'
    ],
    [
        'text' => 'Andare in palestra',
        'done' => 'false'
    ],
    [
        'text' => 'Finire questo esercizio',
        'done' => 'false'
    ],
];

header('Content-type: application/json');
echo json_encode($todos);
// var_dump($todos);

