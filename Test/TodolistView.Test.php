<?php

include_once __DIR__ . "/../View/TodolistView.php";
include_once __DIR__ . "/../Repository/TodolistRepository.php";
include_once __DIR__ . "/../Service/TodolistService.php";

use Repository\TodolistRepositoryImpl;
use View\TodolistView;
use Service\TodolistServiceImpl;

function testViewShowTodolist(){
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);
    $todolistView->showTodolist();
}

testViewShowTodolist();