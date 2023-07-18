<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $log = "log.txt";
    $data = "Ad: $name\nE-posta: $email\nMesaj: $message\n\n";

    file_put_contents($log, $data, FILE_APPEND | LOCK_EX);

    echo "Form bilgileri log dosyasına kaydedildi.";
?>
