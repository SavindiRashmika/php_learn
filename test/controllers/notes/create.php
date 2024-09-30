<?php

use Core\Database;
use Core\Validator;


$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (! Validator::string($_POST['title'], 1, 1000)) {
        $errors['title'] = 'A body of no more than 1,000 characters is required.';
    }
    if (empty($errors)) {
        $db->query('INSERT INTO posts(title, user_id) VALUES(:title, :user_id)', [
            'title' => $_POST['title'],
            'user_id' => 1
        ]);
    }
}

view("notes/create.view.php", [
    'heading' => 'Create Note',
    'errors' => $errors
]);