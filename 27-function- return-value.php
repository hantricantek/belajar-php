<?php

// rumus menghitung luas persegi panjang
function luasPersegiPanjang(int $panjang, int $lebar){
    $luas = $panjang * $lebar;
    return $luas;
}

$menghitungluas = luasPersegiPanjang(10, 5);
echo "luas persegi panjang adalah: " . $menghitungluas;
