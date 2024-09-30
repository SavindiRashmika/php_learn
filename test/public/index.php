<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH.'Core/functions.php';

spl_autoload_register(function ($class) {
   // require base_path("Core/" . $class . '.php');

   $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});


require base_path('Core/router.php');




// require 'Database.php';

// $config = require('config.php');
// $db = new Database($config['database']);

// $id = $_GET['id'];
// $query = "select * from posts where id = :id";

// $posts = $db->query($query, [':id' => $id])->fetch();

// dd($posts);