<?php

require_once "./Helper/Input.php";
require_once "./BusinessLogic/RemoveTodoList.php";

/**
 * screen untuk menghapus todo list
 */
function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batalkan)");

    if ($pilihan == "x") {
        echo "Batal menghapus todo" . PHP_EOL;
    } else {
        $success = removeTodoList($pilihan);
        // cek untuk melakukan penghapusan
        if ($success) {
            echo "Sukses menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }
}
