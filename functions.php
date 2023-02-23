<?php
    function add_language($todo_list, $post) {
        $todo_list[] = ["language" => $post, "done" => false];

        file_put_contents('todo-list.json', json_encode($todo_list, JSON_PRETTY_PRINT));

        return $todo_list;
    }

    function remove_language($todo_list) {
		unset($todo_list[$_POST['delete']]);

		file_put_contents('todo-list.json', json_encode($todo_list, JSON_PRETTY_PRINT));

		return $todo_list;
	}
?>