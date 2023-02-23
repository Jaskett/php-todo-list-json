<?php
    include __DIR__. '/functions.php';

    $string = file_get_contents('todo-list.json');

    $todo_list = json_decode($string, true);

    if(isset($_POST['todo_input'])) {
        $todo_list = add_language($todo_list, $_POST['todo_input']);
    }

    if(isset($_POST['delete'])) {
        unset($todo_list[$_POST['delete']]);

        file_put_contents('todo-list.json', json_encode($todo_list, JSON_PRETTY_PRINT));
    }

    if(isset($_POST['edit'])) {
        $replacement = array(
            $_POST['edit'] => array(
                "language" => $_POST['language_edit'],
                "done" => false
            )
        );
        $todo_list = array_replace($todo_list, $replacement);
    }

    header('Content-Type: application/json');
    echo json_encode($todo_list);
?>