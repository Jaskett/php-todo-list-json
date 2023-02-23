<?php
    $string = file_get_contents('./todo-list.json');

    $todo_list = json_decode($string, true);
?>