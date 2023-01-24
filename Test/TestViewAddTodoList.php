<?php

require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../View/ViewAddTodoList.php";

addTodoList("Agung");
addTodoList("Rizqy");
addTodoList("Wiryawan");

viewAddTodoList();

showTodolist();
