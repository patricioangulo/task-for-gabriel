<?php
ini_set('display_errors', '1');
$testData = json_decode(file_get_contents("php://input"));

$TASK = array(
    ['id'=>'1', 'task'=> 'Subir archivo con Git Bash', 'nombre'=>'Gabriel', 'fecha_inicio'=>'29-07-2022'],
    ['id'=>'2', 'task'=> 'Crear HTML usando Bootstrap', 'nombre'=>'Gabriel', 'fecha_inicio'=>'29-07-2022'],
    ['id'=>'3', 'task'=> 'PHP pendiente', 'nombre'=>'Pato', 'fecha_inicio'=>'29-07-2022'],
    ['id'=>'4', 'task'=> 'SQL pendiente', 'nombre'=>'Pato', 'fecha_inicio'=>'29-07-2022'],
    
);

$action = $testData->action;

if($action == 'GET TASK'){
    $retTask = getTask($TASK);
    echo json_encode($retTask);
    die();
}

function getTask($TASK){
    return $TASK;
}



?>