<?php

require_once "../Model/Todolist.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../View/ViewAddTodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../Helper/Input.php";

function viewShowTodoList()
{
    while (true) {
        showTodolist();

        echo "MENU". PHP_EOL;
        echo "1. Tambah TodoList". PHP_EOL;
        echo "2. Hapus TodoList". PHP_EOL;
        echo "x. Keluar". PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            viewAddTodoList();
        } elseif ($pilihan == "2") {
            viewRemoveTodoList();
        } elseif ($pilihan == "x") {
            Break;
        } else {
            echo "Pilihan Tidak Dimengerti" . PHP_EOL;
        }

    }

    echo "Sampai Jumpa Lagi" . PHP_EOL;
}