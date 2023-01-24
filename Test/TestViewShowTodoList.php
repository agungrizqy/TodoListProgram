<?php

require_once __DIR__. "/../View/ViewShowTodoList.php";
require_once __DIR__. "/../BusinessLogic/AddTodoList.php";

addTodoList("Agung");
addTodoList("Rizqy");
addTodoList("Wiryawan");
addTodoList("Belajar");
addTodoList("PHP");
addTodoList("Dasar");

viewShowTodoList();