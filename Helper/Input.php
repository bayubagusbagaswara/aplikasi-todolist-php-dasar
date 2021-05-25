<?php
// untuk helper input data dari usernya
// fgets akan membaca input dari user di terminalnya

function input(string $info): string
{
    echo "$info : ";
    $result = fgets(STDIN);
    return trim($result); // trim untuk menghilangkan whitespace/enter 
}
