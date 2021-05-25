<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

/**
 * screen untuk menambah todo list
 */

// kita terima input data dari user untuk todolistnya
// input berupa string
function viewAddTodoList()
{
    echo "MENAMBAH TODO" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    // cek jika ingin membatalkan tambah todolist 

    if ($todo == "x") {
        // batal menambah todolist
        echo "Batal menambah todo" . PHP_EOL;
    } else {
        // menambahkan todolist
        addTodoList($todo);
    }
}
