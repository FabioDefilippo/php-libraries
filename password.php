<?php
function generate_string(string $characters, $number)
{
  $password = "";
 for($I = 0; $I < $number; $I++)
 {
  $password .= $characters[rand(0, strlen($characters) - 1)];
 }
 return $password;
}

function verify_passwords(string $passwordI, string $passwordS)
{
 return password_verify($passwordI, $passwordS);
}

function encrypt_password(string $password, string $algo, $cost)
{
 $options = [
    'cost' => $cost,
];
 return password_hash($password, $algo, $options);
}
?>
