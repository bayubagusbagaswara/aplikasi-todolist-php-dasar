<?php

// require data modelnya
require_once "./model/TodoList.php";
// require business logic
require_once "./BusinessLogic/ShowTodoList.php";
require_once "./BusinessLogic/AddTodoList.php";
require_once "./BusinessLogic/RemoveTodoList.php";
// require view
require_once "./View/ViewShowTodoList.php";
require_once "./View/ViewAddTodoList.php";
require_once "./View/ViewRemoveTodoList.php";


echo 'Aplikasi Todolist' . PHP_EOL;
