<?php

/**
 * menghapus todo di list
 */
// butuh nomor todolist nya 
// karena menghapus berdasarkan nomornya

function removeTodoList(int $number): bool
{
    // remove datanya
    global $todoList;
    // setelah menghapus todolist, kita juga harus menggeser nomor todolistnya (geser array nya), agar tetap berurutan

    // mengecek jumlah data di todolist, jika datanya kosong, maka return false
    if ($number > sizeof($todoList)) {
        return false;
    }

    // 1. Bayu
    // 2. Bagus
    // 3. Bagaswara
    // yang di unset itu data terakhir, untuk menghilangkan datanya

    // 1. Bayu
    // 2. $todoList[2 + 1]
    // 3. $todoList[3 + 1]

    for ($i = $number; $i < sizeof($todoList); $i++) {

        $todoList[$i] = $todoList[$i + 1];
    }
    unset($todoList[sizeof($todoList)]);

    return true; // untuk memberitahu kita sukses menghapus todonya
}
