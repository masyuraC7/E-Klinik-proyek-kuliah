<?php

    $halaman = $_GET['page'];

    if ($halaman == "dokterUmum")
        include "formulir-umum.php";
    elseif ($halaman == "poliklinik")
        include "formulir-poliklinik.php";
    
?>