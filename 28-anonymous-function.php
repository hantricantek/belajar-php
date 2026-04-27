<?php

$menghitungLuasPersegiPanjang = function (int $panjang, int $lebar) {
    $luas = $panjang * $lebar;
    return $luas;
};                      

$luasPersegiPanjang = $menghitungLuasPersegiPanjang(10, 5);
echo "luas persegi panjang adalah: " . $luasPersegiPanjang;