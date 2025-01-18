<?php
include 'Task.php';
include 'Project.php';

$project=new Project("Разработка нового проекта");
$task1=new Task("Создать макет", "Создание макета интерфейса");
$task2=new Task("Написать документацию", "Документация для пользователей");

$project->addTask($task1);
$project->addTask($task2);

echo $project . "\n";
echo $task1 . "\n";
echo $task2 . "\n";

$task1->setStatus("Выполнено");
echo $task1 . "\n";

unset($task1);
unset($task2);
unset($project);