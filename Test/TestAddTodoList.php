<?php 

    require_once "../Model/Todolist.php";
    require_once "../BusinessLogic/AddTodoList.php";

    addTodoList("Agung");
    addTodoList("Rizqy");
    addTodoList("Wiryawan");


    var_dump($todolist);