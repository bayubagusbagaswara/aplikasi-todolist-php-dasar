<?php

require_once "./Model/TodoList.php";
require_once "./View/ViewRemoveTodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";
require_once "./BusinessLogic/AddTodoList.php";

// tambahkan todolist dulu
addTodoList("Bayu");
addTodoList("Bagus");
addTodoList("Bagaswara");
addTodoList("Programmer");
addTodoList("Zaman");
addTodoList("Now");

// tampilkan todolist
showTodoList();

// screen hapus todo list
viewRemoveTodoList();

// tampilkan todolist sesudah dihapus
showTodoList();
