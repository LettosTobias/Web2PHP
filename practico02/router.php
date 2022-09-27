

<?php


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if(!empty($_GET['action'])){

    $action = $_GET['action'];
}
else{
    $action = 'home';
}

    $params = explode('/' , $action);

 switch($params[0]){    
    case 'home':{
        showCalculadora();
        break;
    }
    case 'sumar':{
        sumar($params[1], $params[2]);
    }
    case 'restar':{
       restar($params[1], $params[2]);
    }
    case 'dividir':{
        dividir($params[1], $params[2]);
    }
    case 'multiplicar':{
        multiplicar($params[1], $params[2]);
    }

    default:
    echo "404 not found";
  
    break;

 }   



?>