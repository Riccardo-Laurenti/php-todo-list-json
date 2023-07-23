<?php

include 'functions.php';

header('Content-Type: application/json');

$toDoListJson = file_get_contents('database.json');

if (isset($_POST['action'])) {
    $toDoList = json_decode($toDoListJson);

    if ($_POST['action'] == 'sign') {
        $toDoList = signTask($toDoList, $_POST['taskId']);
    } else if ($_POST['action'] == 'delete') {
        $toDoList = deleteTask($toDoList, $_POST['taskId']);
    } else if ($_POST['action'] == 'add') {
        $toDoList = addTask($toDoList, $_POST['taskText']);
    }

    $toDoListJson = json_encode($toDoList);
    file_put_contents('database.json', $toDoListJson);
}
