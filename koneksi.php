<?php
error_reporting(0);
defined('dirpath') or die("404 file not found.");
define('host', 'localhost');
define('uname', 'root');
define('pass', '');
define('dbname', 'mon');

function check($data)
{
    $data = trim($data);
    $data = strip_tags($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$host = check(host);
$uname = check(uname);
$pass = check(pass);
$dbname = check(dbname);

try {
    $db = new PDO("mysql:host={$host};dbname={$dbname}", $uname, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    exit();
}
