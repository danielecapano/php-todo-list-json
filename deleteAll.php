<?php





$todos_json = file_get_contents('./todos.json');
$todos = json_decode($todos_json, true);

$todos = [];
    
    $response['results'] = $todos;



$todos_json = json_encode($todos);
file_put_contents('./todos.json', $todos_json);

header('Content-type: application/json');
echo json_encode($todos);

?> 