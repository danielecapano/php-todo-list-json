<?php

$index = $_POST['id'] ?? null;



$todos_json = file_get_contents('./todos.json');
$todos = json_decode($todos_json, true);

if($index !== null){
    $index = intval($index);
    $response = [
        'success' => true,
    ];
    
    array_splice($todos, $index, 1);
    
    $response['results'] = $todos;
}


$todos_json = json_encode($todos);
file_put_contents('./todos.json', $todos_json);

header('Content-type: application/json');
echo json_encode($todos);

?> 