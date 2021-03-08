<?php

$transaction_id = $_POST['transac_id'];
$amount = $_POST['amt'];
$time = $_POST['time'];
$secret = $_POST['secret'];
// $pw_hashed = $_POST['pw_hashed'];

$h1 = $_POST['pw_hashed'];
//hash without using secret
//correct
// $h2= 'b8e7ae12510bdfb1812e463a7f086122cf37e4f7';
//incorrect
// $h2= 'b8e7ae12510bdfb1812e463a7f086122cf37e4f6';
//new hash when using secret
$h2 = 'a1e880706e7d76cfd54d06976a907bbf760d8cda';

if(hash_equals($h1,$h2)){
    echo "Success!".'<br>';
    var_dump($h1);
    echo '<br>';
    var_dump($h2);
} else {
    echo "Invalid!";
}
