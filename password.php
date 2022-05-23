<?php
function generate(string $characters, $number)
{
  $password = "";
 for($I = 0; $I < $number; $I++)
 {
  $password .= $characters[rand(0, strlen($characters) - 1)];
 }
 return $password;
}

function compare(string $passwordI, string $passwordS)
{
 return password_verify($passwordI, $passwordS);
}
?>