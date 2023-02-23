<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ToDo List Json</title>
	
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="app">
        <ul>
            <li v-for="item in todo_list">
                {{ item.language }}
            </li>
        </ul>

        <input type="text" v-model="language" @keyup.enter="add_language">
        <button type="submit" @click="add_language">Invia</button>
    </div>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>