<?php
// khaibao mảng
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
function Mauyeuthich($arrs) {
    $ten = ['Anh', 'Sơn', 'Thắng', 'tôi'];
    $result = "Màu {$arrs[0]} là màu yêu thích của {$ten[0]}, ";
    $result .= "{$arrs[3]} là màu yêu thích của {$ten[1]}, ";
    $result .= "{$arrs[2]} là màu yêu thích của {$ten[2]}, ";
    $result .= "còn màu yêu thích của {$ten[3]} là màu {$arrs[2]}";
    echo $result;
}
Mauyeuthich($arrs);
?>