<?php
include("koneksi.php");
include("HeaderFooter/header.php");
?>

<main role="menu">
    <div class="container">
        <br>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file" required="required">
            <input type="submit" name="upload" value="Import">
        </form>
        <br><br>
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
                $data = mysqli_query($koneksi, "SELECT * FROM data");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <th><?php echo $d['Defect']; ?></th>
                        <th><?php echo $d['Malfunction_Symptom']; ?></th>
                        <th><?php echo $d['RelatedPart']; ?></th>
                        <th><?php echo $d['Actiontype']; ?></th>
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
    $(document).ready(function() {
        $('#example').DataTable( {
            autoFill: true
        } );
    } );
</script>