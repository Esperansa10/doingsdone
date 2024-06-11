<?php
require('counttasks.php'); 
require('helpers.php'); 
require('alarmtime.php'); 

$content = include_template('main.php', [
    'categories' => $categories,
    'tasks' => $tasks,
    'show_complete_tasks' => $show_complete_tasks
    ] ); 

$layout_content = include_template('layout.php', [
    'content' => $content,
    'categories' => $categories,
    'tasks' => $tasks,
    'show_complete_tasks' => $show_complete_tasks,
    'title' => 'Заголовок главной страницы'
    ] );  

print($layout_content); 

?>
