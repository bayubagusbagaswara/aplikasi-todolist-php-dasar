<?php
// tambahkan __DIR__ untuk mengganti absolute path/directory, karena kita menggunakan relatif directory
// require data modelnya
require_once __DIR__ . "/Model/TodoList.php";
// require business logic
require_once __DIR__ . "/BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/BusinessLogic/RemoveTodoList.php";
// require view
require_once __DIR__ . "/View/ViewShowTodoList.php";
require_once __DIR__ . "/View/ViewAddTodoList.php";
require_once __DIR__ . "/View/ViewRemoveTodoList.php";
// require helper
require_once __DIR__ . "/Helper/Input.php";

echo 'Aplikasi Todolist' . PHP_EOL;

// Langsung display layar pertama yakni menampilkan todolist
viewShowTodoList();
