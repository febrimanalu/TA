<?php
include("koneksi.php");
include("HeaderFooter/header.php");
?>

<main role="menu">
    <div class="container">
        <form action="" method="POST">
            <table class="table" align="center">
                <thad></thead>
                <tbody>
                    <tr>
                        <td>Defect :</td>
                        <td>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</td>
                        <td>
                             <select name="defect">
                                <option value="">--Select--</option>
                                <option value="">Analog Intermitent</option>
                                <option value="">Corrupted</option>
                                <option value="">Fail Tesjet</option>
                                <option value="">No Booting</option>
                                <option value="">Overvoltage</option>
                                <option value="">PC Problem</option>
                                <option value="">Power Supply Problem</option>>
                                <option value="">Short Card</option>
                                <option value="">Vaccum Problem</option>
                            </select>
                        <td>
                    </tr>
                    <tr>
                        <td>Malfunction Symptom :</td>
                        <td></td>
                        <td>
                            <select name="malf">
                                <option value="">--Select--</option>
                                <option value="">BT-Basic Error</option>
                                <option value="">Ground</option>
                                <option value="">No Booting</option>
                                <option value="">Overvoltage</option>
                                <option value="">PC Blue Screen</option>
                                <option value="">Power Supply Problem</option>
                                <option value="">PreShort Fail</option>
                                <option value="">Problem Vaccum</option>
                                <option value="">Tester Short</option>
                            </select>
                        </td>                        
                    </tr>
                    <tr>
                        <td>Related Part :</td>
                        <td></td>
                        <td>
                            <select name="part">
                                <option value="">--Select--</option>
                                <option value="">AIR PRESSURE</option>
                                <option value="">CARD</option>
                                <option value="">DIAGNOSTIC</option>
                                <option value="">MPU</option>
                                <option value="">OTHER</option>
                                <option value="">PC CONTROLLER</option>
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
                        <td>Prediksi Actiontype :</td>
                        <td></td>
                        <td>
                            <textarea rows="7" cols="70" name="type"></textarea>
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