<? 
 $show_complete_tasks = rand(0, 1);
 $categories = ['Входящие', 'Учеба', 'Работа', 'Домашние дела', 'Авто']; 

 $tasks = [
     ['Задание'=>'Собеседование в IT компании', 'Дата выполнения'=>'25.06.2024', 'Категория'=>$categories[3], 'Выполнен'=>false], 
     ['Задание'=>'Выполнить тестовое задание', 'Дата выполнения'=>'25.12.2019', 'Категория'=>$categories[3], 'Выполнен'=>false],
     ['Задание'=>'Сделать задание первого раздела', 'Дата выполнения'=>'25.12.2019', 'Категория'=>$categories[3], 'Выполнен'=>true],
     ['Задание'=>'Встреча с другом', 'Дата выполнения'=>'22.12.2019', 'Категория'=>$categories[1], 'Выполнен'=>false], 	 	 	 	
     ['Задание'=>'Купить корм для кота', 'Дата выполнения'=>'10.06.2024', 'Категория'=>$categories[4], 'Выполнен'=>false],
     ['Задание'=>'Заказать пиццу', 'Дата выполнения'=>null, 'Категория'=>$categories[4], 'Выполнен'=>false]
 ]; 



 
 // считает кол-во задач в категории
 function counttasks($tasks, $category) {

    $count = 0;
    foreach ($tasks as $key=>$value) {
    if ($value ['Категория'] == $category) {
        $count++;
    }  
}
return $count;
 }; 
