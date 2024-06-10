<?php
require('counttasks.php'); 
require('helpers.php'); 

$content = include_template('main.php', [
    'categories' => $categories,
    'tasks' => $tasks
    ] ); 

$layout_content = include_template('layout.php', [
    'content' => $content,
    'categories' => $categories,
    'tasks' => $tasks,
    'title' => 'Заголовок главной страницы'
    ] );  

print($layout_content); 

?>

