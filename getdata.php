<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['uid'] !== null) {
    define('dirpath', true);
    require "koneksi.php";
    $tmp_data = array();
    $final_data = array();
    $empty_data = array();
    $result = false;
    $sql = "SELECT * FROM tb_onoff";
    if ($prepare = $db->query($sql)) {
        while ($data = $prepare->fetch(PDO::FETCH_ASSOC)) {
            if ($data['val']  !== "1") {
                array_push(
                    $empty_data,
                    [
                        "uid" => $data['uid'],
                        "teg" => "n/a",
                        "arus" => "n/a",
                        "log" => "n/a",
                        "status" => "0"
                    ]
                );
            } else {
                array_push($tmp_data, $data['uid']);
            }
        }
        $result = true;
    }
    if ($result) {
        // $in  = str_repeat('?,', count($tmp_data) - 1) . '?';
        $sql = "SELECT * FROM tb_data ORDER BY log DESC LIMIT 1";
        $prepare = $db->prepare($sql);
        if ($prepare->execute()) {
            $data = $prepare->fetch(PDO::FETCH_ASSOC);
            foreach ($data as $key => $value) {
                for ($i = 0; $i < count($tmp_data); $i++) {
                    if ($key == $tmp_data[$i]) {
                        $nn = explode(",", $value);
                        array_push(
                            $final_data,
                            [
                                "uid" => $tmp_data[$i],
                                "teg" => $nn[0],
                                "arus" => $nn[1],
                                "log" => $data['log'],
                                "status" => "1"
                            ]
                        );
                    }
                }
            }
        }
    }
    $final_data = array_merge($empty_data, $final_data);
    $json_data = json_encode($final_data);
    echo $json_data;
    $db = null;
}
