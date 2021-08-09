<?php
try {
    $db = new PDO("mysql:hostmname=location;dbname=cart;charset=utf8", "root", "");
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
