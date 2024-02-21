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
    
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--CSS-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-sm text-center my-5">

        <header>
            <h1 class="title mb-3">La tua password</h1>
        </header>
        <main>
            <div class="card p-5">
                <p class="new-password text-center">  <?= $new_password ?> </p>
                <form action="index.html">
                    <button type="submit" class="btn-style">Back</button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>