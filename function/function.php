<?php 

// Unire gli array
$characters = array_merge($alphabeth, $numbers, $symbols);


$rand_char = [];

// Ciclo per randomizzare e pushare
for ($i = 0; $i < $user_number; $i++){
    $key = array_rand($characters);
    $v = $characters[$key];
    array_push($rand_char, $v);
    
};

// Trasformare array in stringa
$new_password = implode($rand_char);

?>