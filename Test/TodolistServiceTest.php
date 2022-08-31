<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;


function testShowTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl;

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->showTodolist();
}

function testAddTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl;
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Halo dunia");
    $todolistService->addTodolist("Apa kabar");
    $todolistService->showTodolist();
}

function testRemoveTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl;
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Halo dunia");
    $todolistService->addTodolist("Apa kabar");
    $todolistService->removeTodolist(2);
    $todolistService->showTodolist();
}


testRemoveTodolist();