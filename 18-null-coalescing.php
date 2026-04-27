<?php

//$data = [
//    "nama" => "Hantri",
//    "age" => 20
//];
// $data = ["dsa","asda"];

$data =[
    "name" =>"danu",
    "age" => 17,
];

$name = $data["address"] ?? "data tidak ada bos";

echo $name;