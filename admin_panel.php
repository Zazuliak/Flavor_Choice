<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: admin_login.php");
    exit();
}

$subscribers_file = 'subscribers.txt';

if (file_exists($subscribers_file)) {
    $subscribers = file($subscribers_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
} else {
    $subscribers = [];
}
?>

<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Адмін-панель</title>
</head>

<body>
    <h1>Адмін-панель</h1>
    <h2>Список підписників:</h2>
    <ul>
        <?php foreach ($subscribers as $subscriber) : ?>
            <li><?php echo htmlspecialchars($subscriber); ?></li>
        <?php endforeach; ?>
    </ul>
    <form action="logout.php" method="post">
        <button type="submit">Вийти</button>
    </form>
</body>

</html>