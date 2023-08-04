<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Echoing JavaScript code
    echo '<script type="text/javascript">';
    echo 'alert("Hello, JavaScript!");';
    echo '</script>';
} else {
    // Echoing JavaScript code
    echo '<script type="text/javascript">';
    echo 'alert("Not POST, JavaScript!");';
    echo '</script>';
}

