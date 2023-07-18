<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $log = "log.txt";
    $data = "Ad: $name\nE-posta: $email\nMesaj: $message\n\n";

    file_put_contents($log, $data, FILE_APPEND | LOCK_EX);

    echo "Post successfull.";
} else {
    header("HTTP/1.1 405 Method Not Allowed");
    echo "405 Method Not Allowed";
}
?>
