<?php

require_once __DIR__. "/../BusinessLogic/AddTodoList.php";
require_once __DIR__. "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__. "/../View/ViewRemoveTodoList.php";
require_once __DIR__. "/../Model/Todolist.php";

addTodoList("Agung");
addTodoList("Rizqy");
addTodoList("Wiryawan");
addTodoList("Belajar");
addTodoList("PHP");
addTodoList("Dasar");

showTodolist();

viewRemoveTodoList();

showTodolist();

