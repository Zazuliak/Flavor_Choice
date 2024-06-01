<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вхід адміністратора</title>
</head>

<body>
    <h1>Вхід адміністратора</h1>
    <form action="admin_login.php" method="post">
        <label for="username">Ім'я користувача:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Увійти</button>
    </form>
</body>

</html>
<?php
session_start();

// Замість цього використовуйте більш безпечний спосіб зберігання паролів
$admin_username = 'admin';
$admin_password = 'password123';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $admin_username && $password == $admin_password) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin_panel.php");
        exit();
    } else {
        echo "Неправильне ім'я користувача або пароль.";
    }
}
?>