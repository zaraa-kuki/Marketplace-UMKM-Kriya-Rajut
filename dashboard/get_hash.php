<?php
$password_asli = "akucantik"; // PASSWORD FORM LOGIN
$hash_aman = password_hash($password_asli, PASSWORD_DEFAULT);
echo $hash_aman;
?>