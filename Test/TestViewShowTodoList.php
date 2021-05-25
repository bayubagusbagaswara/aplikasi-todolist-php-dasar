<?php

// test untuk viewShowTodoList
require_once "./View/ViewShowTodoList.php";
require_once "./BusinessLogic/AddTodoList.php";

// coba tambahkan data todolist
addTodoList("Bayu");
addTodoList("Bagus");
addTodoList("Bagaswara");
addTodoList("Programmer");
addTodoList("Zaman");
addTodoList("Now");

// cukup panggil vieShowTodoList
viewShowTodoList();
