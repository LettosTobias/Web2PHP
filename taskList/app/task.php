<?php

require_once './app/db.php';


function showTask(){

  include './templates/header.php';  

  $tasks = getAllTasks();

  include './templates/form-alta.php';
   
  echo '<ul class=list-group>';
    foreach ($tasks as $task) {
        echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
                <span> <b>$task->title</b> - $task->description (prioridad $task->priority) </span>
                <a href='delete/$task->id' type='button' class='btn btn-danger ml-auto'>Borrar</a>
            </li>";

    }
  echo '<ul>';

  include './templates/footer.php';

}

function addTask(){

    $title = $_POST['title'];
    $description = $_POST['description'];
    $priority = $_POST['priority'];

    $id = insertTask($title, $description, $priority);

    header("location: " .BASE_URL);
}

function deleteTask($id){

    deleteTaskByID($id);
    header("location: " .BASE_URL);
}









