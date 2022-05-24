<?php
function string_check(string $text, string $regex = '/^[a-zA-Z0-9]+$/')
{
 if(preg_match($regex, $text) === 1)
 {
  return true;
 }
 else
 {
  return false;
 }
}
?>
