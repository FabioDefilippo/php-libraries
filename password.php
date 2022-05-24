<?php
function generate_string($number, string $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?+-")
{
 $password = "";
 for($I = 0; $I < $number; $I++)
 {
  $password .= $characters[rand(0, strlen($characters) - 1)];
 }
 return $password;
}

function verify_passwords(string $passwordInput, string $passwordStored)
{
 return password_verify($passwordInput, $passwordStored);
}

function encrypt_password(string $password, string $algo = PASSWORD_BCRYPT, $cost = 12)
{
 $options = [
    'cost' => $cost,
 ];
 return password_hash($password, $algo, $options);
}
?>
