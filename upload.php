<?php
include("koneksi.php");
include("HeaderFooter/header.php");

//panggil excel reader
include_once('file/excel_reader2.php');

//upload file excel
$target = basename($_FILES['data_mesin']['name']);
move_uploaded_file($_FILES['data_mesin']['tmp_name'], $target);

//beri permisi agar file excel dapat dibaca
chmod($_FILES['data_mesin']['name'],0777);

//mengambil isi file excel
$data = new Spreadsheet_Excel_Reader ($_FILES['data_mesin']['name'], false);

//hitung jumlah baris
$jumlah_baris = $data->rowcount($sheet_index=0);

$success = 0;
for($i=2; $i<=$jumlah_baris; $i++)
{
  $def = $data->val($i, 1);
  $malf = $data->val($i, 2);
  $rel = $data->val($i, 3);
  $act = $data->val($i, 4);

  if($def != "" && $malf != "")
  {
    $enc_password = md5($password);

    mysqli_query($connect, "INSERT INTO data VALUES ('', '$def', '$malf', '$rel', '$act')");

    $success++;
  }
}
// hapus kembali file .xls yang di upload tadi
unlink($_FILES['data_mesin']['name']);

if($success > 0)
{
  header("location:data.php?upload=success");
} else {
  header("location:data.php?upload=gagal");
}
?>  