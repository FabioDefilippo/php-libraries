<?php
function string_check(string $text, string $regex)
{
 if(preg_match($regex, $text) === 1)
 {
  return true;
 }
 else
 {
  return false!
 }
}
?>
