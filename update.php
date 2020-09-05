<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['uid'] !== null) {
    define('dirpath', true);
    require "koneksi.php";
    $uid = strval(check($_POST['uid']));
    $val = strval(check($_POST['val']));
    $sql = 'UPDATE tb_onoff SET val = :val WHERE uid = :uid';
    $prepare = $db->prepare($sql);
    $prepare->bindParam(":val", $val, PDO::PARAM_STR);
    $prepare->bindParam(":uid", $uid, PDO::PARAM_STR);
    if($prepare->execute()) {
		$file = fopen("cekbtn1.txt", "w");
		fwrite($file, $val);
		fclose($file);
	}
    $db = null;
}
