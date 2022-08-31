<?php


include_once __DIR__ . "/View/TodolistView.php";
include_once __DIR__ . "/Service/TodolistService.php";
include_once __DIR__ . "/Repository/TodolistRepository.php";

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

$todolistRepository = new TodolistRepositoryImpl();
$todolistService = new TodolistServiceImpl($todolistRepository);
$todolistView = new TodolistView($todolistService);
$todolistView->showTodolist();
