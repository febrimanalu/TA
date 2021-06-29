<?php
include("koneksi.php");
include("HeaderFooter/header.php");
?>

<div id="wrap">
    <br>
    <div class="container">
        <div class="wrap text-center">
        <form action="import.php" method="post" name="upload_excel" enctype="multipart/form-data">
            <input type="file" name="file" id="file" class="input-large">
            <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
        </form>
        </div>   
        <br>
        <table id="example" class="table table-striped table-bordered" style="width:100%">  
            <thead>
                <tr>
                    <th>ReqID</th>
                    <th>Malfunction Symptom</th>
                    <th>PIC</th>
                    <th>Create_at</th>
                    <th>CloseDate</th>
                    <th>Defect</th>
                    <th>Actiontype</th>
                    <th>RelatedPart</th>  
                </tr>
            </thead>
            <?php
                $data = "SELECT * FROM mesin";
                $result = mysqli_query($koneksi, $data);
                while($d = mysqli_fetch_array($result))
                {
            ?>
            <tr>
                <td><?php echo $d['ReqID']; ?></td>
                <td><?php echo $d['Malfunction Symptom']; ?></td>
                <td><?php echo $d['PIC']; ?></td>
                <td><?php echo $d['Create_at']; ?></td>
                <td><?php echo $d['CloseDate']; ?></td>
                <td><?php echo $d['Defect']; ?></td>
                <td><?php echo $d['Actiontype']; ?></td>
                <td><?php echo $d['RelatedPart']; ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</main>

<!--Javascript-->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready( function () {
        $('#example').DataTable();
    } );
</script>