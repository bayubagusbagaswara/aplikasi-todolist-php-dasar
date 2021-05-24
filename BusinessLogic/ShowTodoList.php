<?php

/**
 * menampilkan todolist
 */
function showTodoList()
{
    // ambil model datanya
    global $todoList;

    // kita tampilkan list dari arraynya, pake perulangan foreach
    echo "TODOLIST" . PHP_EOL;

    foreach ($todoList as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}
