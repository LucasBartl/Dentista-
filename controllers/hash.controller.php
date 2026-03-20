<?php

$password = "Bartl321@"; 
$hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash;