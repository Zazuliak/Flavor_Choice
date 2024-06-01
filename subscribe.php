<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $file = 'subscribers.txt';
        file_put_contents($file, $email . PHP_EOL, FILE_APPEND);
        echo "Дякуємо за підписку!";
    } else {
        echo "Будь ласка, введіть коректну електронну адресу.";
    }
}
