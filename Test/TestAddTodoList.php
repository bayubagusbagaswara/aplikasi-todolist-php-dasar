<?php
require_once "./Model/TodoList.php";
require_once "./BusinessLogic/AddTodoList.php";

// coba tambahkan todolist nya menggunakan function addTodoList
addTodoList("Bayu");
addTodoList("Bagus");
addTodoList("Bagaswara");

// pastikan data todolist yang kita tambahkan telah tersimpan di dalam model data $todoList
var_dump($todoList);
