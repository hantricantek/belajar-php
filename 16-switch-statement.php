<?php

$nilaimahasiswa = "A";

switch ($nilaimahasiswa) {
    case "A":
        echo "Anda Lulus Dengan Sangat Baik";
        break;
    case "B":
        echo "Anda Lulus Dengan Baik";
        break;
    case "C":
        echo "Anda Lulus Dengan Cukup";
        break;
    case "D":
        echo "Anda Lulus Dengan Kurang";
        break;
    case "E":
        echo "Anda Tidak Lulus";
        break;
    default:
        echo "Nilai Tidak Valid";
}