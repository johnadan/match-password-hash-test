<?php 

$transaction_id = 1;
$amount = 20000;
$time = time();
$password_hashed = hash_hmac('ripemd160', 'The quick brown fox jumped over the lazy dog.', 'secret');
$secret_key = 'qwertyuiopasdfghjklzxcvbnm1234567890';
// $hash_digest
// $password_hashed = password_hash('test123456', PASSWORD_BCRYPT);
?>

<form method="POST" action="controller.php">
    <input type="hidden" value="<?php echo $transaction_id ?>" name="transac_id">
    <!-- <input type="text" value="<?php echo $transaction_id ?>"><br> -->
    <label for="fname">Amount:</label><br>
    <input type="text" value="<?php echo $amount ?>" name="amt"><br>
    <label for="fname">Time:</label><br>
    <input type="text" value="<?php echo date("m/d/Y",$time) ?>" name="time"><br>
    <label for="fname">Hashed Password:</label><br>
    <input type="text" value="<?php echo $password_hashed ?>" name="pw_hashed"><br>
    <label for="fname">Secret key:</label><br>
    <input type="text" value="<?php echo $secret_key ?>" name="secret"><br>
    <input type="submit"> 
</form>