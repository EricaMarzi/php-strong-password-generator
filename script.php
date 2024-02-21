<?php 

// session_start();
// $_SESSION['userNumber'] = $user_number

$user_number = $_GET['userNumber'];
include __DIR__ . '/data/data.php';
include __DIR__ . '/function/function.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>  <?= $new_password ?> </p>
</body>
</html>