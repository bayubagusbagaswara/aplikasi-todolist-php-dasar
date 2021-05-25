<?php

// test untuk viewAddTodoList
require_once "./View/ViewAddTodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";
require_once "./BusinessLogic/AddTodoList.php";

// tambahkan todolist dulu
addTodoList("Bayu");
addTodoList("Bagus");
addTodoList("Bagaswara");

// tampilkan viewAddTodoList
viewAddTodoList();


// tampilkan todolist untuk memastikan datanya tersimpan
showTodoList();

viewAddTodoList();
showTodoList();
