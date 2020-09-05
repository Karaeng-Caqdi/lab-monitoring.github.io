<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/switch.css" />
    <title>Laboratory Monitoring System</title>
</head>

<body>
    <div class="container-fluid my-2 mx-auto">
        <!-- Bagian Header -->
        <nav class="navbar navbar-dark bg-dark">
            <span class="navbar-brand mb-0 h1 font-weight-bold">Laboratory Monitoring System</span>
        </nav>
        <!-- Akhir Header -->
        <!-- Bagian Konten -->
        <div class="row">
            <!-- Sidebar Kiri -->
            <div class="col-lg-3 col-md">
                <div class="card my-2">
                    <div class="card-header font-weight-bold">Room 1</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md align-self-center">
                                <!-- <input type="checkbox" checked data-toggle="switchbutton" class="swbtn" data-onstyle="success" data-id="rg1"><br /> -->
                                <label class="switch">
                                    <input type="checkbox" class="swbtn" data-id="rg1">
                                    <span class="slider round"></span>
                                </label>
                                <button type="button" class="btn btn-warning mt-1 details" id="rg1" data-name="Ruangan 1">Show Chart</button>
                            </div>
                            <div class="col-md">
                                <table>
                                    <tr>
                                        <td class="font-weight-bold">Power (W)</td>
                                        <td>&nbsp;:&nbsp;</td>
                                        <td><span class="teg" data-id="rg1"></span></td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Current (A)</td>
                                        <td>&nbsp;:&nbsp;</td>
                                        <td><span class="arus" data-id="rg1"></span></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Center Graph -->
                <div class="card my-2">
                    <div class="card-header font-weight-bold">Room 2</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md align-self-center">
                                <!-- <input type="checkbox" data-toggle="switchbutton" class="swbtn" data-onstyle="success" data-id="rg2"> -->
                                <label class="switch">
                                    <input type="checkbox" class="swbtn" data-id="rg2">
                                    <span class="slider round"></span>
                                </label>
                                <button class="btn btn-warning mt-1 details" id="rg2" data-name="Ruangan 2">Show Chart</button>
                            </div>
                            <div class="col-md">
                                <table>
                                    <tr>
                                        <td class="font-weight-bold">Power (W)</td>
                                        <td>&nbsp;:&nbsp;</td>
                                        <td><span class="teg" data-id="rg2"></span></td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Current (A)</td>
                                        <td>&nbsp;:&nbsp;</td>
                                        <td><span class="arus" data-id="rg2"></span></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card my-2">
                    <div class="card-header font-weight-bold">Room 3</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md align-self-center">
                                <!-- <input type="checkbox" data-toggle="switchbutton" class="swbtn" data-onstyle="success" data-id="rg3"> -->
                                <label class="switch">
                                    <input type="checkbox" class="swbtn" data-id="rg3">
                                    <span class="slider round"></span>
                                </label>
                                <button class="btn btn-warning mt-1 details" id="rg3" data-name="Ruangan 3">Show Chart</button>

                            </div>
                            <div class="col-md align-self-center">
                                <table>
                                    <tr>
                                        <td class="font-weight-bold">Power (W)</td>
                                        <td>&nbsp;:&nbsp;</td>
                                        <td><span class="teg" data-id="rg3"></span></td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Current (A)</td>
                                        <td>&nbsp;:&nbsp;</td>
                                        <td><span class="arus" data-id="rg3"></span></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir Sidebar Kiri -->
            <!-- Center Graph -->
            <div class="col-lg-6 col-md">
                <div class="row py-1 px-2">
                    <fieldset class="border" style="width:100%;min-height:80vh;">
                        <legend class="px-5 bg-dark text-white ml-2 w-auto">Chart</legend>
                        <div style="display: block;">
                            <div id="grafik" style="height: 260px;display: inline-block;"></div>
                            <div id="grafik2" style="height: 260px;display: inline-block;"></div>
                        </div>
                    </fieldset>
                </div>
            </div>
            <!-- Akhir Center Graph -->
            <!-- Sidebar Kanan -->
            <div class="col-lg-3">
                <div class="row">
                    <div class="col-md">
                        <div class="card my-2" style="width:100%;">
                            <div class="card-header font-weight-bold">Socket 1</div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Power (W)</th>
                                            <th scope="col">Current (A)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="teg" data-id="sk1"></span></td>
                                            <td><span class="arus" data-id="sk1"></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button class="btn btn-warning mt-1 details" id="sk1" data-name="Stopkontak 1">Show Chart</button>
                            </div>
                        </div>
                        <div class="card my-2" style="width:100%;">
                            <div class="card-header font-weight-bold">Socket 2</div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Power (W)</th>
                                            <th scope="col">Current (A)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="teg" data-id="sk2"></span></td>
                                            <td><span class="arus" data-id="sk2"></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button class="btn btn-warning mt-1 details" id="sk2" data-name="Stopkontak 2">Show Chart</button>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="mx-auto">
                            <form action="reset.php" method="POST">
                                <button class="btn btn-danger mt-1 details" name="reset">Reset Data</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir Sidebar Kanan -->
        </div>
        <!-- Akhir Konten -->
    </div>
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/plotly.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script>
        (function() {
            $(".swbtn").each(function() {
                $(this).on("click", () => {
                    $.post("update.php", {
                        uid: $(this).attr("data-id"),
                        val: $(this).attr("data-val")
                    });
                })
            });
        })();

        setInterval(() => {
            $.post("getdata.php", {
                uid: true
            }, function(data) {
                getdata(data);
            });
            if (localStorage.getItem("graph_item")) {
                $.post("get10lastdata.php", {
                    uid: localStorage.getItem("graph_item")
                }, function(data) {
                    getgraph(data);
                });
            }
        }, 1000);

        function getdata(data) {
            let dt = JSON.parse(data);
            let len = Object.keys(dt).length;
            $(".teg").each(function() {
                for (let i = 0; i < len; i++) {
                    if (dt[i].uid == $(this).data('id')) {
                        if (dt[i].status == 0) {
                            $(`.swbtn[data-id=${dt[i].uid}]`).removeAttr("checked");
                            $(`.swbtn[data-id=${dt[i].uid}]`).attr("data-val", "1");
                        } else {
                            $(`.swbtn[data-id=${dt[i].uid}]`).attr("checked", "checked");
                            $(`.swbtn[data-id=${dt[i].uid}]`).attr("data-val", "0");
                        }
                        $(this).html(dt[i].teg);
                        $(`.arus[data-id=${dt[i].uid}]`).html(dt[i].arus);
                    }
                }
            });
        }
        (function() {
            $(".details").each(function() {
                $(this).on("click", () => {
                    localStorage.setItem("graph_item", $(this).attr("id"));
                    localStorage.setItem("graph_name", $(this).attr("data-name"));
                });
            });
        })();

        function getgraph(val) {
            const item = localStorage.getItem("graph_item");
            let teg = [],
                arus = [],
                waktu = [];
            let graph_data = JSON.parse(val);
            let len = Object.keys(graph_data).length;
            let [tgl, _] = (graph_data[len - 1].log).split(" ");
            tgl = tgl.split("-");
            let ntgl = tgl.reverse().join("/");
            for (let i = 0; i < len; i++) {
                teg.push(graph_data[i].teg);
                if(graph_data[i].arus < 0) {
                    graph_data[i].arus = 0;
                }
                arus.push(graph_data[i].arus);
                let [_, tmp] = (graph_data[i].log).split(" ");
                waktu.push(tmp);
            }

            var teg_d = {
                y: teg,
                x: waktu,
                mode: 'lines+markers',
                name: 'Daya',
            };

            var arus_d = {
                y: arus,
                x: waktu,
                mode: 'lines+markers',
                name: 'Arus',
                line: {
                    color: 'rgb(255,100,0)'
                }
            };
            var data = [teg_d];
            var data2 = [arus_d];
            var titles = {
                title: `<b>Daya ${localStorage.getItem('graph_name')}</b> <br /> Tanggal : ${ntgl}`,
                xaxis: {
                    title: 'Waktu'
                },
                yaxis: {
                    title: 'Daya (W)'
                }
            }
            var titles2 = {
                title: `<b>Arus ${localStorage.getItem('graph_name')}</b> <br /> Tanggal : ${ntgl}`,
                xaxis: {
                    title: 'Waktu'
                },
                yaxis: {
                    title: 'Arus (Amp)'
                }
            }
            Plotly.newPlot('grafik', data, titles);
            Plotly.newPlot('grafik2', data2, titles2);
        }
    </script>
</body>

</html>