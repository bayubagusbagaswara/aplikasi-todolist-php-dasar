<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

/**
 * screen untuk menampilkan semua todo list
 */
function viewShowTodoList()
{
    // harus di iterasi, jika misal setelah menambah todolist kita ingin melihat todolistnya
    // ini akan di iterasi terus, sampai pilihan keluar

    while (true) {

        // tampilkan todolist
        showTodoList();

        // sebelum menerima input dari user kita kasih instruksi terlebih dahulu
        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "3. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");

        // cek berdasarkan pilihan menu
        if ($pilihan == "1") {
            // pindahkan ke screen Tambah Todo
            viewAddTodoList();
        } else if ($pilihan == "2") {
            // pindahkan ke screen Hapus Todo
            viewRemoveTodoList();
        } else if ($pilihan == "x") {
            // keluar
            break; // keluar dari perulangan
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }
    echo "Sampai Jumpa Lagi" . PHP_EOL;
}
