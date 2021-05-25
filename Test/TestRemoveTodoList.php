<?php
require_once "./Model/TodoList.php";
require_once "./BusinessLogic/RemoveTodoList.php";
require_once "./BusinessLogic/AddTodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";

// tambahkan todolist dulu
addTodoList("Bayu");
addTodoList("Bagus");
addTodoList("Bagaswara");
addTodoList("Joko");
addTodoList("Kurniawan");

// tampilkan todolist 
showTodoList();

// remove todolist
// misal remove data ke-3
removeTodoList(3);

// tampilkan todolist lagi
showTodoList();

// jika memasukkan number todolist yang lebih dari number todolist, atau datanya kosong
$success = removeTodoList(4);
var_dump($success); // harusnya false karena datanya kosong
