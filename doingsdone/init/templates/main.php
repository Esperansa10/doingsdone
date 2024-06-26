<section class="content__side">
<h2 class="content__side-heading">Проекты</h2>

<nav class="main-navigation">
    <ul class="main-navigation__list">
      
<?php
   
  foreach($categories as $category) { ?>

  <li class="main-navigation__list-item">
    <a class="main-navigation__list-item-link" href="#"> <?= $category; ?> </a>
 <span class="main-navigation__list-item-count"><?= counttasks($tasks, $category); ?></span>
</li>

 <?php }; 
 ?>
</ul>
</nav>

<a class="button button--transparent button--plus content__side-button"
    href="pages/form-project.html" target="project_add">Добавить проект</a>
</section>

<main class="content__main">
<h2 class="content__main-heading">Список задач</h2>

<form class="search-form" action="index.php" method="post" autocomplete="off">
    <input class="search-form__input" type="text" name="" value="" placeholder="Поиск по задачам">

    <input class="search-form__submit" type="submit" name="" value="Искать">
</form>

<div class="tasks-controls">
    <nav class="tasks-switch">
        <a href="/" class="tasks-switch__item tasks-switch__item--active">Все задачи</a>
        <a href="/" class="tasks-switch__item">Повестка дня</a>
        <a href="/" class="tasks-switch__item">Завтра</a>
        <a href="/" class="tasks-switch__item">Просроченные</a>
    </nav>

    <label class="checkbox"  id="c1">
        <!--добавить сюда атрибут "checked", если переменная $show_complete_tasks равна единице-->
        <?php if ($show_complete_tasks === 1) {
            ?><input class="checkbox__input visually-hidden show_completed" type="checkbox"
                checked>
              
        <?php } else { ?>
            <input class="checkbox__input visually-hidden show_completed" type="checkbox">
           
        <?php }; 
        // считаем кол-во задач
        
        
        ?>

        <span class="checkbox__text">Показывать выполненные</span>
    </label>
</div>

<table class="tasks ">
   
    <?php foreach($tasks as $task) { 
        if ($task["Выполнен"] === true && $show_complete_tasks === 1) {
        
        ?>
        
        <!-- <tr class="tasks__item task" > -->
        <tr class="tasks__item task task--completed " >
        <td class="task__select">
            <label class="checkbox task__checkbox">
                <input class="checkbox__input visually-hidden task__checkbox" type="checkbox"
                    value="1">
                <span class="checkbox__text"><?=htmlspecialchars($task["Задание"]);?></span>
            </label>
        </td>

        <td class="task__file">
            <!-- <a class="download-link" href="#"></a> -->
        </td>

        <td class="task__date"><?=$task["Дата выполнения"];?></td>
    </tr>
    
    <?php 
    // не выполненные задачи 
 } elseif($task["Выполнен"] === false ) {
    
    //если null то обходим
    if( $task["Дата выполнения"] !== null ) {

    $userdate = date_create($task["Дата выполнения"]);
    $diffdate = alarmtime($userdate);   
    // добавляем огонек
    if($diffdate < 2 ) { ?>
        <tr class="tasks__item task task--important" > 
    <?php } else { ?>
  <tr class="tasks__item task " > 
    <?php } }; ?>
  <!-- <tr class="tasks__item task task--completed" > -->
        <td class="task__select">
            <label class="checkbox task__checkbox">
                <input class="checkbox__input visually-hidden task__checkbox" type="checkbox"
                    value="1">
                <span class="checkbox__text"><?=htmlspecialchars($task["Задание"])?></span>
            </label>
        </td>

        <td class="task__file">
            <!-- <a class="download-link" href="#"></a> -->
        </td>

        <td class="task__date"><?= $task["Дата выполнения"]; ?></td>
    </tr>

<?php 

}
}; ?>

</table>
</main>; 
