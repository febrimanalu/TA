<!DOCTYPE html>
<html lang="en">
    <head>
        <!--Required meta tags-->
        <meta charset="utf-8">
        <meta name="=viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no">

        <!--CSS-->
        <title>FLEX</title>
        <link rel="shortcut icon" href="img/flex.png" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    </head>
    <style>
    .highcharts-figure, .highcharts-data-table table {
        min-width: 310px; 
        max-width: 800px;
        margin: 1em auto;
        }

        #chart1 {
        height: 400px;
        }

        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #EBEBEB;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }
        .highcharts-data-table caption {
        padding: 1em 0;
        font-size: 1.2em;
        color: #555;
        }
        .highcharts-data-table th {
            font-weight: 600;
        padding: 0.5em;
        }
        .highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
        padding: 0.5em;
        }
        .highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
        }
        .highcharts-data-table tr:hover {
        background: #f1f7ff;
        }
        <?php
            include "koneksi.php";
            $sql = "SELECT Defect, COUNT(Defect) AS Total FROM grafik GROUP BY Defect";
            $arr_label = array();
            $arr_satu = array();
            $query = $koneksi->query($sql);
            while ($data = mysqli_fetch_array($query)) {
                $arr_label = $data['Defect'];
                $arr_satu = $data['Total'];
            }
            $label = join(",", $arr_label);
            $satu = join(",", $arr_satu);	
        ?>
    </style>
    <body>
        <header>
            <nav class="navbar navbar-expand-sm navbar-dark mb-1 bg-primary justify-content-center align-items-start">
                <a class="navbar-brand">
                    <img src="img/flex1.png" height="40" />
                </a>
                <span class="navbar-brand position-absolute"><h2>Machine Health</h2></span>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="data.php">Data Kerusakan Mesin</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="grafik.php">Grafik</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="prediksi.php">Prediksi</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto text-light">
                        <!-- Menampilkan Hari, Bulan dan Tahun -->
                        <h3>
                            <script type='text/javascript'>
                                var months = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];
                                var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                                var date = new Date();
                                var day = date.getDate();
                                var month = date.getMonth();
                                var thisDay = date.getDay(),
                                    thisDay = myDays[thisDay];
                                var yy = date.getYear();
                                var year = (yy < 1000) ? yy + 1900 : yy;
                                document.write(months[month] + '/' + day + '/' + year);
                            </script>
                        </h3>&nbsp&nbsp
                        <h6>
                        <!-- Menampilkan Jam (Aktif) -->
	                    <div id="clock"></div>
		                    <script type="text/javascript">
                                function showTime() {
                                    var a_p = "";
                                    var today = new Date();
                                    var curr_hour = today.getHours();
                                    var curr_minute = today.getMinutes();
                                    var curr_second = today.getSeconds();
                                    if (curr_hour < 12) {
                                        a_p = "AM";
                                    } else {
                                        a_p = "PM";
                                    }
                                    if (curr_hour == 0) {
                                        curr_hour = 12;
                                    }
                                    if (curr_hour > 12) {
                                        curr_hour = curr_hour - 12;
                                    }
                                    curr_hour = checkTime(curr_hour);
                                    curr_minute = checkTime(curr_minute);
                                    curr_second = checkTime(curr_second);
                                    document.getElementById('clock').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
                                }

                                function checkTime(i) {
                                    if (i < 10) {
                                        i = "0" + i;
                                    }
                                    return i;
                                }
                                setInterval(showTime, 500);
                            </script>
                        </h6>&nbsp&nbsp&nbsp&nbsp
                    </ul> 
                </div> 
            </nav>
        </header>
        <main role="menu">
            <figure class="highcharts-figure">
                <div id="chart1"></div>
            </figure>
        
        <!--Javascript-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="https://code.highcharts.com/modules/drilldown.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        <script>
        // Create the chart
        Highcharts.chart('chart1', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Grafik Data Defect'
            },
            accessibility: {
                announceNewData: {
                enabled: true
                }
            },
            xAxis: {
                type: 'category',
                title: {
                    text: 'Nama Defect'
                }
            },
            yAxis: {
                title: {
                text: 'Total persen Defect'
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.1f}%'
                }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
            },

            series: [{
            type: 'column',
            zIndex: 2,
            data: [<?= $satu ?>],
            }]
        }
        </script>
        </main>
    </body>
</html>