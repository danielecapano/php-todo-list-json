<?php

$index = $_POST['id'] ?? '';


$todos_json = file_get_contents('./todos.json');
$todos = json_decode($todos_json, true);

$response = [
    'success' => true,
];

if($todos[$index]['done'] === false){

    $todos[$index]['done'] = true;
} else {
    $todos[$index]['done'] = false;
}



$response['results'] = $todos;

$todos_json = json_encode($todos);
file_put_contents('./todos.json', $todos_json);

header('Content-type: application/json');
echo json_encode($todos);

?>