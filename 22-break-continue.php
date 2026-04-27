<?php

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue; // Skip the rest of the loop when $i is 5
    }
    if ($i == 8) {
        break; // Exit the loop when $i is 8
    }
    echo "mahasiswa dengan nomor : $i" . PHP_EOL;
}

