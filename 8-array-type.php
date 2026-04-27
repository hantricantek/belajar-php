<?php

$name = ["hantri", "danu", "akbar"];

$status = array("siswa", "guru", "karyawan");

$names[1] = "perdanes";

// menamabah sebuah data ke array yang lama
$names[] = "hantri";

// halo nama saya hantri status saya sekarang siswa

echo "halo nama saya $name[4] status saya sekarang $status[0]\njumlah data ada ". count($names)."orang";

// jumalah data status adalah 3
echo "jumlah data status adalah ". count($status)."orang";