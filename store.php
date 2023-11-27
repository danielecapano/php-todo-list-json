<?php

$new_todo = $_POST['todo'] ?? '';

var_dump($new_todo);
// $todos = [
//     [
//         'text' => 'Fare la spesa',
//         'done' => 'false'
//     ],
//     [
//         'text' => 'Andare in palestra',
//         'done' => 'false'
//     ],
//     [
//         'text' => 'Finire questo esercizio',
//         'done' => 'false'
//     ],
// ];

// $todo = [
//     'text' => $new_todo,
//     'done' => 'false'
// ];

// $todos[] = $todo;

// header('Content-type: application/json');
// echo json_encode($todos);