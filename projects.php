<?php include_once 'templates/layout/header.php' ?>
<?php include_once 'app.php' ?>

<?php

$projects_work = [];
$projects_personal = [];
foreach($data['projects'] as $project) {
    if( $project['category'] == 'work' ) {
        $projects_work[] = $project;
    } else if( $project['category'] == 'personal') {
        $projects_personal[] = $project;
    }
}

?>

	<div id="app">

        <?php include_once 'templates/layout/sidebar.php' ?>

		<div class="main">
			
            <div class="projects">
                <div class="title">
                    <h3>Проекты</h3>
                    <button>Новый проект</button>
                </div>
                <hr>
                
                <h5>Рабочие</h5><br>
                <?php
                    foreach($projects_work as $project) {
                        echo '
                            <a href="tasks.php?project_id='.$project['id'].'" class="project item">
                                <div>
                                    <span class="client">'.$project['client'].'</span>
                                    <b class="name">'.$project['name'].'</b>
                                </div>
                                <div>
                                    <h6 class="price">'.$project['price'].' ₽</h6>
                                </div>
                            </a>
                        ';
                    }
                ?>
                <hr>

                <h5>Личные</h5><br>
                <?php
                    foreach($projects_personal as $project) {
                        echo '
                            <a href="tasks.php?project_id='.$project['id'].'" class="project item">
                                <div>
                                    <span class="client">'.$project['client'].'</span>
                                    <b class="name">'.$project['name'].'</b>
                                </div>
                                <div>
                                    <h6 class="price">'.$project['price'].' ₽</h6>
                                </div>
                            </a>
                        ';
                    }
                ?>
                
            </div>
			
		</div>

	</div>

<?php include_once 'templates/layout/footer.php' ?>