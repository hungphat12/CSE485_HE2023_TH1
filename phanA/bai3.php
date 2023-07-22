<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
$result = "Tên khóa học: ";

foreach ($arrs as $key => $value) {
    $result .= $value;
    if ($key < count($arrs) - 1) {
        $result .= ', ';
    }
}
echo $result;
?>