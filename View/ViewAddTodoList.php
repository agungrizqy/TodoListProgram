<?php

require_once __DIR__. "/../Helper/Input.php";
require_once __DIR__. "/../Model/Todolist.php";
require_once __DIR__. "/../BusinessLogic/AddTodoList.php";

function viewAddTodoList()
{
    echo "MENAMBAH TODO". PHP_EOL;

    $todo = input("Todo (Tekan x untuk batal)");

    if ($todo == "x") {
        echo "Batal Menambah Todo". PHP_EOL;
    } else {
        addTodoList($todo);
    }
}