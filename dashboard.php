<?php
$department =htmlspecialchars($_POST["department"] ?? ""); 
$email = htmlspecialchars($_POST["email"] ?? "");
$user_name = htmlspecialchars($_POST["name"] ?? "");
$user_address = htmlspecialchars($_POST["user_address"] ?? "");
$level = htmlspecialchars($_POST["level"] ?? "");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboardsty">
</head>
<body>
    <h2>Welcome to dashboard</h2>
    <p><b>Name:</b><?= $user_name ?></p>
    <p><b>Department:</b> <?= $department ?></p>
    <p><b>Level:</b> <?= $level ?></p>
    <p><b>Email:</b> <?= $email ?></p>
    <p><b>Address:</b> <?= $user_address ?></p>
</body>
</html>