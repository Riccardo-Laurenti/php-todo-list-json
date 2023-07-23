<?php

include 'functions.php';

header('Content-Type: application/json');

$toDoListJson = file_get_contents('database.json');
