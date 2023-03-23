<?php

$todo_list_text = file_get_contents('./todos.json');
$todo_list = json_decode($todo_list_text,true);

// $todo_list = [
//     [
//         'text' => 'Comprare il caffè',
//         'done' => true,
//     ],
//     [
//         'text' => 'Veterinario alle 15:00',
//         'done' => true,
//     ],
//     [
//         'text' => 'Comprare il caffè',
//         'done' => false,
//     ],
//     [
//         'text' => 'giovedì fare visita dal dottore',
//         'done' => true,
//     ],
//     [
//         'text' => 'Portare il cane fuori',
//         'done' => false,
//     ],
//     [
//         'text' => 'Tagliare i capelli',
//         'done' => true,
//     ],
// ];


// file_put_contents('./todos.json',json_encode($todo_list));

$todo_text = isset($_POST['todo']) ? $_POST['todo'] : null;

if ($todo_text) {

    $todo =  [
        'text' => $todo_text,
        'done' => false,
    ];

    $todo_list[] = $todo;
    file_put_contents('./todos.json',json_encode($todo_list));
     
}

header('content-type: application/json');

echo json_encode($todo_list);