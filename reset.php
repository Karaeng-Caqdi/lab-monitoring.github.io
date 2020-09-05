<?php
if(isset($_POST['reset'])) {
	define('dirpath', true);
    require "koneksi.php";
    $db->query("TRUNCATE TABLE tb_data");
    $db = null;
    header("Location: index.php");
}

?>