<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Create Note';


if (!empty($_POST['title'])) {
    $db->query('INSERT INTO posts (title, user_id) VALUES (:title, :user_id)', [
        'title' => $_POST['title'],
        'user_id' => 1
    ]);
} else {
    echo "Title cannot be empty!";
}

require 'views/note-create.view.php';