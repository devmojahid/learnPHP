<?php 

$to = "education.mojahid@gmail.com";
$from = "raofahmedmojahid@gmail.com";
$subject = "Life Is Nice";

$body="How Are You";
$header = "From {$from}\r\n";

mail($to,$subject,$body,$header);

