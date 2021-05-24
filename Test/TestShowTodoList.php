<?php

/**
 * untuk mengetest logic untuk menampilkan todolist
 */

require_once "./model/TodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";

// coba tambahkan todolist ke list dulu
$todoList[1] = "Belajar PHP Dasar";
$todoList[2] = "Belajar PHP OOP";
$todoList[3] = "Belajar PHP Database";
// cukup panggil showTodoList();
showTodoList();
