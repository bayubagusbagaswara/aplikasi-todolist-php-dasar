<?php

/**
 * menambah todo ke list
 */
function addTodoList(string $todo)
{
    // menerima input data dari user, berupa text artinya function ini butuh parameter

    // tombol tambah untuk menambah ke list
    global $todoList;

    // kita harus tahu banyaknya todolist yang ada saat ini
    $number = sizeof($todoList) + 1;

    $todoList[$number] = $todo;
}
