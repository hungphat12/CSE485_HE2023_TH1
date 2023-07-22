<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];

// Lấy ra phần tử đầu tiên và phần tử cuối cùng trong mảng
$ptudautien = reset($numbers);
$ptucuoicung = end($numbers);
echo "Phần tử đầu tiên: " . $ptudautien . "<br>";
echo "Phần tử cuối cùng: " . $ptcuoicung ."<br>";

// Tìm số lớn nhất, số nhỏ nhất, và tổng các giá trị từ mảng
$maxNumber = max($numbers);
$minNumber = min($numbers);
$sum = array_sum($numbers);
echo "Số lớn nhất: " . $maxNumber ."<br>";
echo "Số nhỏ nhất: " . $minNumber ."<br>";
echo "Tổng các giá trị: " . $sum ."<br>";