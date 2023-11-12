<?php

$url = $_SERVER['PHP_SELF'];

if(stripos($url, 'index') > 0) $active_index = 'active';
if(stripos($url, 'projects') > 0) $active_projects = 'active';
if(stripos($url, 'tasks') > 0) $active_tasks = 'active';

?>
<div class="sidebar">
    <ul>
        <li class="<?= $active_index; ?>"><a href="index.php">Главная</a></li>
        <li class="<?= $active_projects; ?>"><a href="projects.php">Проекты</a></li>
        <li class="<?= $active_tasks; ?>"><a href="tasks.php">Задачи</a></li>
    </ul>
</div>