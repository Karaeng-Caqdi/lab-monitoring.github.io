<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['uid'] !== null) {
    define('dirpath', true);
    require "koneksi.php";
    $uid = strval(check($_POST['uid']));
    $sql = "SELECT * FROM tb_data ORDER BY log DESC LIMIT 10";
    $prepare = $db->prepare($sql);
    $tendata = array();
    if ($prepare->execute()) {
        while ($data = $prepare->fetch(PDO::FETCH_ASSOC)) {
            foreach ($data as $key => $value) {
                if ($key == $uid) {
                    $el = explode(",", $value);
                    array_push(
                        $tendata,
                        [
                            "teg" => $el[0],
                            "arus" => $el[1] - 0.11,
                            "log" => $data['log']
                        ]
                    );
                }
            }
        }
    }
    $tendata = array_reverse($tendata);
    $json_data = json_encode($tendata);
    echo $json_data;
    $db = null;
}
