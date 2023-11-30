<?php

$new_todo = $_POST['todo'] ?? '';

$todos_json = file_get_contents('./todos.json');
$todos = json_decode($todos_json, true);

$response = [
    'success' => true,
];

if($new_todo !== '') {
    $todo = [
        'text' => $new_todo,
        'done' => false
    ];
    
    $todos[] = $todo;
    
    $response['results'] = $todos;
}


$todos_json = json_encode($todos);
file_put_contents('./todos.json', $todos_json);

header('Content-type: application/json');
echo json_encode($todos);

?>

