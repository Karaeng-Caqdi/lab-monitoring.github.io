<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $data = $_POST["data"];
	$data = explode(",", $data);
    $data[0] = (float) $data[0];
    $data[1] = (float) $data[1];
    if($data[0] <= 0.02) {
        $data[0] = 0.00;
    }
    if($data[1] <= 0.02) {
        $data[1] = 0.00;
    }
    $daya1 = $data[0] * 220;
    $daya2 = $data[1] * 220;
    $sk2 = $daya1.",".$data[0];
	$sk1 = $daya2.",".$data[1];
    $tmp = "0,0";
    define('dirpath', true);
    require "koneksi.php";
    $sql = "INSERT INTO tb_data (rg1, rg2, rg3, sk1, sk2) VALUES(:rg1, :rg2, :rg3, :rg4, :rg5)";
    $pre = $db->prepare($sql);
    $pre->bindParam(":rg1", $sk1, PDO::PARAM_STR);
    $pre->bindParam(":rg2", $tmp, PDO::PARAM_STR);
    $pre->bindParam(":rg3", $tmp, PDO::PARAM_STR);
    $pre->bindParam(":rg4", $sk2, PDO::PARAM_STR);
    $pre->bindParam(":rg5", $tmp, PDO::PARAM_STR);
    if ($pre->execute()) {
        echo "Berhasil";
    } else {
        echo "Gagal";
    }
    $db = null;
}