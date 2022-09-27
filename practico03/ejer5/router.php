<?php

    require_once "./app/controllers/subject-controller.php";

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


    $action = 'materias';
    if(!empty($_GET['action'])){
    $action = $_GET['action'];

    }

    $params = explode("/" , $action);

//instancio el unico controller que existe por ahora
    $subjectController = new SubjectController();



    switch ($params[0]) {
        case 'materias':
            $subjectController->showSubjects();
            break;
        case 'add':
            $subjectController->addSubject();
            break;
         case 'delete':
        // obtengo el parametro de la acción
        $id = $params[1];
        $subjectController->deleteSubject($id);
        break;


        default:
            echo("Eror 404 :(");
            break;
    }