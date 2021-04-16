<?php
//Koneksi dan Header
include("koneksi.php");
include("HeaderFooter/header.php");

//CHART 1
$arr_label1 = array();
$arr_satu = array();

$sql = "SELECT Defect, COUNT(Defect) AS Total FROM grafik GROUP BY Defect";
$query = mysqli_query($koneksi, $sql);  
while ($data = mysqli_fetch_assoc($query)) {
    $arr_label1[] = $data['Defect'];
    $arr_satu[] = $data['Total'];
}

$label1 = "'" . implode("','", $arr_label1) . "'";
$satu = implode(",", $arr_satu);

//CHART 2
$arr_label2 = array();
$arr_dua= array();

$sql = "SELECT Malfunction_Symptom, COUNT(Malfunction_Symptom) AS Total FROM grafik GROUP BY Malfunction_Symptom";
$query = mysqli_query($koneksi, $sql);  
while ($data = mysqli_fetch_assoc($query)) {
    $arr_label2[] = $data['Malfunction_Symptom'];
    $arr_dua[] = $data['Total'];
}

$label2 = "'" . implode("','", $arr_label2) . "'";
$dua = implode(",", $arr_dua);

//CHART 3
$arr_label3 = array();
$arr_tiga = array();

$sql = "SELECT RelatedPart, COUNT(RelatedPart) AS Total FROM grafik GROUP BY RelatedPart";
$query = mysqli_query($koneksi, $sql);  
while ($data = mysqli_fetch_assoc($query)) {
    $arr_label3[] = $data['RelatedPart'];
    $arr_tiga[] = $data['Total'];
}

$label3 = "'" . implode("','", $arr_label3) . "'";
$tiga = implode(",", $arr_tiga);

//CHART 4
$arr_label4 = array();
$arr_empat = array();

$sql = "SELECT Actiontype, COUNT(Actiontype) AS Total FROM grafik GROUP BY Actiontype";
$query = mysqli_query($koneksi, $sql);  
while ($data = mysqli_fetch_assoc($query)) {
    $arr_label4[] = $data['Actiontype'];
    $arr_empat[] = $data['Total'];
}

$label4 = "'" . implode("','", $arr_label4) . "'";
$empat = implode(",", $arr_empat);
?>
<!--HTML Grafik-->
<section class="content">
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <figure class="highcharts-figure">  
            <div id="chart1"></div>
          </figure>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <figure class="highcharts-figure">  
            <div id="chart2"></div>
          </figure>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <figure class="highcharts-figure">  
            <div id="chart3"></div>
          </figure>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <figure class="highcharts-figure">  
            <div id="chart4"></div>
          </figure>
        </div>
      </div>
    </div>
  </div>       
</section>

<!--Javascript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<!--Create the chart-->
<script>
  //CHART 1
  Highcharts.chart('chart1', {
    chart: {
      type: 'column'
    },
    title: {
      text: 'Grafik Defect'
    },
    accessibility: {
      announceNewData: {
      enabled: true
      }
    },
    xAxis: {
      categories: [<?=$label1?>],
      crosshair: true
    },
    yAxis: {
      min: 0
    },
    tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}:</td>'+'<td style="padding:0"><b>{point.y} data </b></td></tr>',
      footerFormat: '</table>',
      shared: true,
      useHTML: true
    },
    plotOptions: {
      column: {
        pointPadding: 0.2,
        borderWidth: 0
      }
    },
    series: [{
      name: 'Defect',
      data: [<?=$satu;?>]
    }]
  });

  //CHART 2
  Highcharts.chart('chart2', {
    chart: {
      type: 'column'
    },
    title: {
      text: 'Grafik Malfunction_Symptom'
    },
    accessibility: {
      announceNewData: {
      enabled: true
      }
    },
    xAxis: {
      categories: [<?=$label2?>],
      crosshair: true
    },
    yAxis: {
      min: 0
    },
    tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}:</td>'+'<td style="padding:0"><b>{point.y} data </b></td></tr>',
      footerFormat: '</table>',
      shared: true,
      useHTML: true
    },
    plotOptions: {
      column: {
        pointPadding: 0.2,
        borderWidth: 0
      }
    },
    series: [{
      name: 'Malfunction_Symptom',
      data: [<?=$dua;?>]
    }]
  });

  //CHART 3
  Highcharts.chart('chart3', {
    chart: {
      type: 'column'
    },
    title: {
      text: 'Grafik RelatedPart'
    },
    accessibility: {
      announceNewData: {
      enabled: true
      }
    },
    xAxis: {
      categories: [<?=$label3?>],
      crosshair: true
    },
    yAxis: {
      min: 0
    },
    tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}:</td>'+'<td style="padding:0"><b>{point.y} data </b></td></tr>',
      footerFormat: '</table>',
      shared: true,
      useHTML: true
    },
    plotOptions: {
      column: {
        pointPadding: 0.2,
        borderWidth: 0
      }
    },
    series: [{
      name: 'RelatedPart',
      data: [<?=$tiga;?>]
    }]
  });

  //CHART 4
  Highcharts.chart('chart4', {
    chart: {
      type: 'column'
    },
    title: {
      text: 'Grafik Actiontype'
    },
    accessibility: {
      announceNewData: {
      enabled: true
      }
    },
    xAxis: {
      categories: [<?=$label4?>],
      crosshair: true
    },
    yAxis: {
      min: 0
    },
    tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}:</td>'+'<td style="padding:0"><b>{point.y} data </b></td></tr>',
      footerFormat: '</table>',
      shared: true,
      useHTML: true
    },
    plotOptions: {
      column: {
        pointPadding: 0.2,
        borderWidth: 0
      }
    },
    series: [{
      name: 'Actiontype',
      data: [<?=$empat;?>]
    }]
  });
</script>