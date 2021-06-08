<?php
include("koneksi.php");
include("HeaderFooter/header.php");

$def = $_GET['def'];
$sym = $_GET['sym'];
$rel = $_GET['rel'];
$pred = $_GET['pred'];
?>

<main role="menu">
    <div class="container">
        <form action="aksi.php" method="POST">
            <table class="table" align="center">
                <thad></thead>
                <tbody>
                    <tr>
                        <td>Defect :</td>
                        <td>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</td>
                        <td>
                             <select class="form-control" name="def" autocomplete="on" required>
                                <option value="">--Select--</option>
                                <option value="Analog Intermitent"<?php echo ($def == 'Analog Intermitent') ? 'selected' : ''; ?>> Analog Intermitent</option>
                                <option value="Corrupted"<?php echo ($def == 'Corrupted') ? 'selected' : ''; ?>> Corrupted</option>
                                <option value="Fail Tesjet"<?php echo ($def == 'Fail Tesjet') ? 'selected' : ''; ?>> Fail Tesjet</option>
                                <option value="No Booting"<?php echo ($def == 'No Booting') ? 'selected' : ''; ?>> No Booting</option>
                                <option value="Overvoltage"<?php echo ($def == 'Overvoltage') ? 'selected' : ''; ?>> Overvoltage</option>
                                <option value="PC Problem"<?php echo ($def == 'PC Problem') ? 'selected' : ''; ?>> PC Problem</option>
                                <option value="Power Supply Problem"<?php echo ($def == 'Power Supply Problem') ? 'selected' : ''; ?>> Power Supply Problem</option>
                                <option value="Short Card"<?php echo ($def == 'Short Card') ? 'selected' : ''; ?>> Short Card</option>
                                <option value="Vaccum Problem"<?php echo ($def == 'Vaccum Problem"') ? 'selected' : ''; ?>> Vaccum Problem"</option>
                            </select>
                        <td>
                    </tr>
                    <tr>
                        <td>Malfunction Symptom :</td>
                        <td></td>
                        <td>
                            <select class="form-control" name="sym" autocomplete="off" required>
                                <option value="">--Select--</option>
                                <option value="BT-Basic Error"<?php echo ($sym == 'BT-Basic Error') ? 'selected' : ''; ?>> BT-Basic Error</option>
                                <option value="Ground"<?php echo ($sym == 'Ground') ? 'selected' : ''; ?>> Ground</option>
                                <option value="No Booting"<?php echo ($sym == 'No Booting') ? 'selected' : ''; ?>> No Booting</option>
                                <option value="Overvoltage"<?php echo ($sym == 'Overvoltage') ? 'selected' : ''; ?>> Overvoltage</option>
                                <option value="PC Blue Screen"<?php echo ($sym == 'PC Blue Screen') ? 'selected' : ''; ?>> PC Blue Screen</option>
                                <option value="Power Supply Problem"<?php echo ($sym == 'Power Supply Problem') ? 'selected' : ''; ?>> Power Supply Problem</option>
                                <option value="PreShort Fail"<?php echo ($sym == 'PreShort Fail') ? 'selected' : ''; ?>> PreShort Fail</option>
                                <option value="Problem Vaccum"<?php echo ($sym == 'Problem Vaccum') ? 'selected' : ''; ?>> Problem Vaccum</option>
                                <option value="Tester Short"<?php echo ($sym == 'Tester Short') ? 'selected' : ''; ?>> Tester Short</option>
                            </select>
                        </td>                        
                    </tr>
                    <tr>
                        <td>Related Part :</td>
                        <td></td>
                        <td>
                            <select class="form-control" name="rel" autocomplete="off" required>
                                <option value="">--Select--</option>
                                <option value="AIR PRESSURE"<?php echo ($rel == 'AIR PRESSURE') ? 'selected' : ''; ?>>AIR PRESSURE</option>
                                <option value="CARD"<?php echo ($rel == 'CARD') ? 'selected' : ''; ?>>CARD</option>
                                <option value="DIAGNOSTIC"<?php echo ($rel == 'DIAGNOSTIC') ? 'selected' : ''; ?>>DIAGNOSTIC</option>
                                <option value="MPU"<?php echo ($rel == 'MPU') ? 'selected' : ''; ?>>MPU</option>
                                <option value="OTHER"<?php echo ($rel == 'OTHER') ? 'selected' : ''; ?>>OTHER</option>
                                <option value="PC CONTROLLER"<?php echo ($rel == 'PC CONTROLLER') ? 'selected' : ''; ?>>PC CONTROLLER</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <button type="submit" name="submit" onclick="return confirm('Apakah anda ingin memulai prediksi?')" class="btn btn-primary"><i class="fa fa-save"></i>Prediksi</button>
                        </td><br>
                    </tr>
                    <tr>
                        <td>Prediksi Actiontype :</td>
                        <td></td>
                        <td>
                            <input type="text" class="form-control" name="pred" autocomplete="off" value="<?php echo $pred;?>">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</main>

<!--Javascript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>        
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>