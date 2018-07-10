<?php
//Test script
$user = "nuww995zo3buv717";
$pass = "v8svds1zt43sfz47";
$conn = new PDO("mysql:host=ko86t9azcob3a2f9.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=msglfa18mc2ig9k3", $user, $pass);
//$conn = new PDO("mysql:host=localhost;dbname=test");

$sth = $conn->prepare("SELECT * FROM new_table");
$sth->execute();
$result = $sth->fetchAll();
$account = $result['0'];

echo "Hello.  Here is the array: <br/> <br/>";
print_r($account);
?>