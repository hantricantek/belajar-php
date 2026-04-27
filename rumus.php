<?php

// 1. menghitung luas persegi panjang
// 2. menghitung luas persegi
// 3. menghitung luas segi tiga

function luasPersegiPanjang(int $panjang, int $lebar){
    $luas = $panjang * $lebar;
    return $luas;
}

function luasPersegi (int $sisi){
    $luas = $sisi * $sisi;
    return $luas;
}

function luasSegitiga (int $alas, int $tinggi){
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}

