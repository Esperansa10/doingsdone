<?php
// require('counttasks.php'); 

// $userdate = date_create($tasks[0]["Дата выполнения"]);
// $diffdate = alarmtime($userdate); 
// print_r($diffdate); 

function alarmtime($userdate) {
date_default_timezone_set('Europe/Moscow');

$today = date_create(date("j-n-Y"));
$interval = date_diff($today, $userdate);
$diffdate = $interval->d; // если 0 то important
return $diffdate; 

// if($diffdate<1) {
//     return 'менее 24 часов'; 
// }

// return 'время еще есть'; 

}; 

// print_r(alarmtime($userdate)); 

