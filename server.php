<?php
    $string = file_get_contents('todo-list.json');

    $todo_list = json_decode($string, true);

    if(isset($_POST['todo_input'])) {
        $todo_input = $_POST['todo_input'];
        $todo_list[] = ["language" => $todo_input, "done" => false];

        file_put_contents('todo-list.json', json_encode(($todo_list)));
    }

    header('Content-Type: application/json');
    echo json_encode($todo_list);
?>