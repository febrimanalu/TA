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
    .card {
        width: 1100px;
        height: 350px;
        margin-top: 125px;
        margin-left: 30px;
        margin-right:30px;
    }
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
            <div class="container">
                <form action="" method="POST">
                <table align="center">
                    <thead>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                            Defect :
                            </td>
                            <td>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</td>
                            <td>
                                <select name="defect">
                                    <option value="">--Select--</option>
                                    <option value="">Analog Intermitent</option>
                                    <option value="">Corrupted</option>
                                    <option value="">Digital Intermitent</option>
                                    <option value="">Fail Tesjet</option>
                                    <option value="">No Booting</option>
                                    <option value="">Often Red Alarm</option>
                                    <option value="">Overvoltage</option>
                                    <option value="">PC Problem</option>
                                    <option value="">Power Supply Problem</option>
                                    <option value="">RTS Error</option>
                                    <option value="">Short Card</option>
                                    <option value="">Vaccum Issue</option>
                                </select>
                            <td>
                        </tr>
                        <tr>
                            <td>
                                Malfunction Symptom :       
                            </td>
                            <td></td>
                            <td>
                                <select name="malf">
                                    <option value="">--Select--</option>
                                    <option value="">BT-Basic Error</option>
                                    <option value="">Ground</option>
                                    <option value="">No Booting</option>
                                    <option value="">Overvoltage</option>
                                    <option value="">PC Blue Screen</option>
                                    <option value="">PC Error</option>
                                    <option value="">Power Nodes</option>
                                    <option value="">Power Supply Problem/option>
                                    <option value="">PreShort Fail</option>
                                    <option value="">Problem I/O</option>
                                    <option value="">Problem Tester</option>
                                    <option value="">Problem Vaccum</option>
                                    <option value="">Red Alarm</option>
                                    <option value="">Tester No Booting</option>
                                    <option value="">Tester Short</option>
                                    <option value="">Testhead No Boot</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Related Part :
                            </td>
                            <td></td>
                            <td>
                                <select name="part">
                                    <option value="">--Select--</option>
                                    <option value="">AIR PRESSURE</option>
                                    <option value="">BNC HUB</option>
                                    <option value="">CARD</option>
                                    <option value="">DIAGNOSTIC</option>
                                    <option value="">FALSE CALL</option>
                                    <option value="">MPU</option>
                                    <option value="">OTHER</option>
                                    <option value="">PC CONTROLLER</option>
                                    <option value="">REBOOT</option>
                                    <option value="">SELENOID</option>
                                    <option value="">SOFTWARE</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <input type="submit" name="insert" value="Prediksi"/><br><br>
                            </td><br>
                        </tr>
                        <tr>
                            <td>
                                Prediksi Actiontype :
                            </td>
                            <td></td>
                            <td>
                                <textarea rows="7" cols="70" name="type"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </form>
            </div>
            
        </mai>
        <!--Javascript-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script>
            $('.carousel').carousel({
                interval: 2000
            })
        </script>
        </main>
    </body>
</html>