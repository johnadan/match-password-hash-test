<?php

$transaction_id = $_POST['transac_id'];
$amount = $_POST['amt'];
$time = $_POST['time'];
// $secret = $_POST['secret'];
// $pw_hashed = $_POST['pw_hashed'];

$h1 = $_POST['pw_hashed'];

//true fc6a70ae831ce241ac0a3cd4a470b006e40b7b0d
//false cece0581a56741694995b14c25056bf7e3572df4

//correct use of $secret
//hashed password
$h2 = '05809a224c4f550ee2f30dc8a087b02a71d3ff62';
//incorrect hashed pw
// $h2 = '05809a224c4f550ee2f30dc8a087b02a71d3ff61';

if(hash_equals($h1,$h2)){
    echo "Success!".'<br>';
    var_dump($h1);
    echo '<br>';
    var_dump($h2);
} else {
    echo "Invalid!";
}
