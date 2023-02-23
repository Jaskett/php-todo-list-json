<?php
    $string = file_get_contents('todo-list.json');

    $todo_list = json_decode($string, true);

    if(isset($_POST['todo_input']) && $_POST['todo_input'] != '') {
        $todo_input = $_POST['todo_input'];
        $todo_list[] = ["language" => $todo_input, "done" => false];

        file_put_contents('todo-list.json', json_encode($todo_list, JSON_PRETTY_PRINT));
    }

    if(isset($_POST['delete'])) {
        unset($todo_list[$_POST['delete']]);

        file_put_contents('todo-list.json', json_encode($todo_list, JSON_PRETTY_PRINT));
    }

    header('Content-Type: application/json');
    echo json_encode($todo_list);
?>