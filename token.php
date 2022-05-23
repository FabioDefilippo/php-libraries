<?php
function generate(string $algo, $number, string $salt)
{
 return hash_hmac($algo, bin2hex(random_bytes($number)), $salt, false);
}

function compare(string $tokenC, string $tokenS)
{
 return hash_equals($tokenC, $tokenS);
}
?>