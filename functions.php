<?php

function signTask($toDoList, $taskId){
    $toDoList[$taskId]->did = !$toDoList[$taskId]->did;
    return $toDoList;
}


function deleteTask($toDoList, $taskId){
    unset($toDoList[$taskId]);
    $toDoList = array_values($toDoList);
    return $toDoList;
}

function addTask(&$toDoList, $taskText){
    $toDoList[] = [
        'text' => $taskText,
        'did' => false
    ];
    return $toDoList;
}
