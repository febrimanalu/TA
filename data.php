<!DOCTYPE html>
<html lang="en">
    <head>
        <!--Required meta tags-->
        <meta charset="utf-8">
        <meta name="=viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no">

        <!--CSS-->
        <title>FLEX</title>
        <link rel="shortcut icon" href="img/flex.png" />
        <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

        <!--Javascript-->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-sm navbar-dark mb-1 bg-primary justify-content-center align-items-start">
                <a class="navbar-brand">
                    <img src="img/flex1.png" height="40" />
                </a>
                <span class="navbar-brand position-absolute"><h2>Machine Health ICT</h2></span>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="data.php">Data ICT</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="mining.php">Proses Mining</a>
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
                <table id="data" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                    <thread>
                        <tr>
                            <th>No</th>
                            <th>S/N</th>
                            <th>Description</th>
                            <th>Family</th>
                            <th>Location</th>
                            <th>Line</th>
                            <th>Status</th>
                            <th>Engineer</th>
                            <th>EAM</th>
                            <th>Asset_Group_ID</th>
                            <th>Asset_Group_Desc</th>
                        </tr>
                    </thread>
                    <tbody>
                        <?php
                        include "koneksi.php";
                        $employee = mysqli_query($koneksi, "select * from data");
                        while($row = mysqli_fetch_array($employee))
                        {
                            echo "<tr>
                            <td>".$row['No']."</td>
                            <td>".$row['S/N']."</td>
                            <td>".$row['Description']."</td>
                            <td>".$row['Family']."</td>
                            <td>".$row['Location']."</td>
                            <td>".$row['Line']."</td>
                            <td>".$row['Status']."</td>
                            <td>".$row['Engineer']."</td>
                            <td>".$row['EAM']."</td>
                            <td>".$row['Asset_Group_ID']."</td>
                            <td>".$row['Asset_Group_Desc']."</td>
                            </tr>";
                        }
                        ?>
                    <tbody>
                </table>
            </div>
        </main>
    <script>
        $(document).ready(function() {
            $('#data').DataTable();
        } );
    </script>
    </body>
</html>