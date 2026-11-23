<?php
$name = isset($_GET['name']) ? trim($_GET['name']) : '';
if ($name != '') {
    echo "Привет, гость!";
} else {
    echo "Привет, . name";
}
?>