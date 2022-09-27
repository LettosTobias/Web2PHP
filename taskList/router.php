<?php
    require_once './app/task.php';

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    $action = 'list';

    if(!empty($_GET['action'])){

        $action = $_GET['action'];
    }

    $params = explode('/' , $action);

    
    switch ($params[0]) {
        case 'list':
            showTask();
            break;
        case 'add':
            addTask();
            break;
        case 'delete':
            $id = $params[1];
            deleteTask($id);
            break;

        default:
            echo "Error 404 Not Found"; 
            break;
    }




?>