<?php

namespace View
{
    include_once __DIR__ . "/../Helper/InputHelper.php";

    use Service\TodolistService;
    use Helper\Input;

    class TodolistView
    {
        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService)
        {
            $this->todolistService = $todolistService;
        }

        function showTodolist(): void
        {
            
            while(true){
                $this->todolistService->showTodolist();
                echo "Menu" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;

                $pilihan = Input::input("pilih");

                if($pilihan == 1){
                    $this->addTodolist();
                }elseif($pilihan == 2){
                    $this->removeTodolist();
                }elseif($pilihan == "x"){
                    break;
                }else{
                    echo "Perintah tidak dimengerti" . PHP_EOL;
                }

            }
            echo "Sampai Jumpa Lagi";
        }

        function addTodolist(): void
        {
            $todo = Input::input("Tambah Todo");
            $this->todolistService->addTodolist($todo);
        }

        function removeTodolist(): void
        {
            $todo = Input::input("Todo ke");
            $this->todolistService->removeTodolist($todo);
        }
    }
}   