<?php include_once 'templates/layout/header.php' ?>
<?php include_once 'app.php' ?>

<?php

$tasks = [];
if( isset($_GET['project_id']) ) {
    $project_id = $_GET['project_id'];
    foreach($data['tasks'] as $task) {
        if( $task['project_id'] == $project_id ) {
            $tasks[] = $task;
        }
    }
    
} else {
    $tasks = $data['tasks'];
}

?>


	<div id="app">

        <?php include_once 'templates/layout/sidebar.php' ?>

		<div class="main">

            <div class="tasks">
                <h3>Задачи</h3><br>
                <?php
                    foreach($tasks as $task) {
                        $checked = $task['status'] ? 'checked':'';
                        echo '
                            <div class="task item">
                                <input type="checkbox" '.$checked.'>
                                <p>'.$task['name'].'</p>
                                <span>удалить</span>
                            </div>
                        ';
                    }
                ?>
			
                <button>Добавить задачу</button>
            </div>
			
		</div>

	</div>

<?php include_once 'templates/layout/footer.php' ?>
