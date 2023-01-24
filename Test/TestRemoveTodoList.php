<?php

require_once "../Model/Todolist.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Agung");
addTodoList("Rizqy");
addTodoList("Wiryawan");
addTodoList("Kurnia");
addTodoList("Eko");

showTodolist();

removeTodoList(4);

showTodolist();

removeTodoList(2);

showTodolist();

$success = removeTodoList(4);

var_dump($success);

showTodolist();