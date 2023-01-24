<?php

require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Agung");
addTodoList("Rizqy");
addTodoList("Wiryawan");
addTodoList("Belajar");
addTodoList("PHP");
addTodoList("Dasar");

viewShowTodoList();