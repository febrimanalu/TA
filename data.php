<?php
include("koneksi.php");
include("HeaderFooter/header.php");
?>

<main role="menu">
    <div class="container">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Defect</th>
                    <th>Malfunction Symptom</th>
                    <th>Related Part</th>
                    <th>Actiontype</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $data = mysqli_query($koneksi, "SELECT * FROM grafik");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <th><h6><?php echo $d['Defect']; ?></h6></th>
                        <th><h6><?php echo $d['Malfunction_Symptom']; ?></h6></th>
                        <th><h6><?php echo $d['RelatedPart']; ?></h6></th>
                        <th><h6><?php echo $d['Actiontype']; ?></h6></th>
                    </tr>
                    <?php
                }
            ?>
            </tbody>
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