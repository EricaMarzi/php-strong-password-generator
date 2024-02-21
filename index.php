<?php 

$alphabeth = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
$numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$symbols = ['!', '£', '%', '&', '/', '#', '@', '*', '§', 'ù', 'ç'];

// Unire gli array
$characters = array_merge($alphabeth, $numbers, $symbols);
// var_dump($characters);

// $new_password = array_rand($characters, 10);
// var_dump($new_password);

// $key = array_rand($characters);
// $v = $characters[$key];
// $new_password = [];
// array_push($new_password, $v);
// var_dump($new_password);

for ($i = 0; $i < 10; $i++){
    $key = array_rand($characters);
    $v = $characters[$key];
    $new_password = [];
    array_push($new_password, $v);
    
};

var_dump($new_password);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    
</body>
</html>