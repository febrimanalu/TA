<?php
include("koneksi.php");
include("HeaderFooter/header.php");
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
                                <option value="Analog Intermitent"> Analog Intermitent</option>
                                <option value="Corrupted"> Corrupted</option>
                                <option value="Fail Tesjet"> Fail Tesjet</option>
                                <option value="No Booting"> No Booting</option>
                                <option value="Overvoltage"> Overvoltage</option>
                                <option value="PC Problem"> PC Problem</option>
                                <option value="Short Card"> Short Card</option>
                                <option value="Vaccum Issue"> Vaccum Issue</option>
                            </select>
                        <td>
                    </tr>
                    <tr>
                        <td>Malfunction Symptom :</td>
                        <td></td>
                        <td>
                            <select class="form-control" name="sym" autocomplete="off" required>
                                <option value="">--Select--</option>
                                <option value="BT-Basic Error"> BT-Basic Error</option>
                                <option value="Ground"> Ground</option>
                                <option value="No Booting"> No Booting</option>
                                <option value="Overvoltage"> Overvoltage</option>
                                <option value="PC Blue Screen"> PC Blue Screen</option>
                                <option value="Power Supply Problem"> Power Supply Problem</option>
                                <option value="PreShort Fail"> PreShort Fail</option>
                                <option value="Problem Vaccum"> Problem Vaccum</option>
                                <option value="Tester Short"> Tester Short</option>
                            </select>
                        </td>                        
                    </tr>
                    <tr>
                        <td>Related Part :</td>
                        <td></td>
                        <td>
                            <select class="form-control" name="rel" autocomplete="off" required>
                                <option value="">--Select--</option>
                                <option value="AIR PRESSURE">AIR PRESSURE</option>
                                <option value="CARD">CARD</option>
                                <option value="DIAGNOSTIC">DIAGNOSTIC</option>
                                <option value="MPU">MPU</option>
                                <option value="OTHER">OTHER</option>
                                <option value="PC CONTROLLER">PC CONTROLLER</option>
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
                            <input type="text" class="form-control" name="pred" autocomplete="off">
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