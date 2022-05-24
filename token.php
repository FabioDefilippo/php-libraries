<?php
function generate_hex(string $salt, string $algo = 'sha256', $number = 63)
{
 return hash_hmac($algo, bin2hex(random_bytes($number)), $salt, false);
}

function compare_tokens(string $tokenClient, string $tokenServer)
{
 return hash_equals($tokenClient, $tokenServer);
}
?>
