<?php
include("koneksi.php");
include("HeaderFooter/header.php");
?>

<?php
if (isset($_POST['upload'])) {
    require ('spreadsheet-reader-master/php-excel-reader/excel_reader2.php');
    require('spreadsheet-reader-master/SpreadsheetReader.php');
}
//upload file excel
$target = "Upload/".basename($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_file'], $target);

//beri permisi agar file excel dapat dibaca
chmod($_FILES['file']['name'],0777);

//mengambil isi file excel
$data = new SpreadsheetReader($target);

foreach ($data as $Key => $Row)
  {
   // import data excel mulai baris ke-2 (karena ada header pada baris 1)
   if ($Key < 1) continue;   
   $query=mysql_query("INSERT INTO data(Defect,Malfunction_Symptom,RelatedPart,Actiontype) VALUES ('".$Row[0]."', '".$Row[1]."','".$Row[2]."','".$Row[3]."')");
  }
  if ($query) {
    echo "Import data berhasil";
   }else{
    echo mysql_error();
   }

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['file']['name']);
?>  