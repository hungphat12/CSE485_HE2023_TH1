<?php
//Khai báo mảng 
    $arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
    function calculateOperations($arrs) {
        $sum = 0;
        $product = 1;
        $difference = $arrs[0];
        $quotient = $arrs[0];
        // Tính tổng và tích của các phần tử trong mảng
        foreach ($arrs as $num) {
            $sum += $num;
            $product *= $num;
        }
        // Tính hiệu và thương của các phần tử trong mảng
        for ($i = 1; $i < count($arrs); $i++) {
            $difference -= $arrs[$i];
            if ($arrs[$i] !== 0) {
                $quotient /= $arrs[$i];
            }
        }
        // Hiển thị kết quả
        echo 'Tổng các phần tử = ' . implode(' + ', $arrs) . ' = ' . $sum . '<br>';
        echo 'Tích các phần tử = ' . implode(' * ', $arrs) . ' = ' . $product . '<br>';
        echo 'Hiệu các phần tử = ' . implode(' - ', $arrs) . ' = ' . $difference . '<br>';
        echo 'Thương các phần tử = ' . implode(' / ', $arrs) . ' = ' . $quotient . '<br>';
    }
    // Gọi hàm tính toán và hiển thị kết quả
    calculateOperations($arrs);
    
?>