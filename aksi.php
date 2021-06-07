<?php
if(isset($_POST['submit'])){
    $def =($_POST['def']);
    $sym =($_POST['sym']);
    $rel =($_POST['rel']);
    $pred = "";
echo "$def";
echo "$sym";
echo "$rel";
    if(($def == "Analog Intermitent") && ($sym == "PreShort Fail") && ($rel == "CARD")){
        $pred == "Repair";
        header("location: localhost/TA/prediksi1.php?def=$def&sym=$sym&rel=$rel&pred=$pred");
    } else if(($def == "Corrupted") && ($sym == "BT-Basic Error") && ($rel == "PC CONTROLLER")){
        $pred == "Reboot";
        header("location: localhost/TA/prediksi1.php?def=$def&sym=$sym&rel=$rel&pred=$pred");
    } else if(($def == "Corrupted") && ($sym == "No Booting") && ($rel == "PC CONTROLLER")){
        $pred == "Restore";
        header("location: localhost/TA/prediksi1.php?def=$def&sym=$sym&rel=$rel&pred=$pred");
    } else if(($def == "Fail Tesjet") && ($sym == "Ground") && ($rel == "CARD")){
        $pred == "Repair";
        header("location: localhost/TA/prediksi1.php?def=$def&sym=$sym&rel=$rel&pred=$pred");
    } else if(($def == "No Booting") && ($sym == "No Booting") && ($rel == "PC CONTROLLER")){
        $pred == "Restore";
        header("location: localhost/TA/prediksi1.php?def=$def&sym=$sym&rel=$rel&pred=$pred");
    } else if(($def == "No Booting") && ($sym == "Tester Short") && ($rel == "OTHER")){
        $pred == "Repair";
        header("location: localhost/TA/prediksi1.php?def=$def&sym=$sym&rel=$rel&pred=$pred");
    } else if(($def == "Overvoltage") && ($sym == "Overvoltage") && ($rel == "MPU")){
        $pred == "Reboot";
        header("location: localhost/TA/prediksi1.php?def=$def&sym=$sym&rel=$rel&pred=$pred");
    } else if(($def == "Overvoltage") && ($sym == "Power Supply Problem") && ($rel == "OTHER")){
        $pred == "Repair";
        header("location: localhost/TA/prediksi1.php?def=$def&sym=$sym&rel=$rel&pred=$pred");
    } else if(($def == "PC Problem") && ($sym == "PC Blue Screen") && ($rel == "PC CONTROLLER")){
        $pred == "Restore";
        header("location: localhost/TA/prediksi1.php?def=$def&sym=$sym&rel=$rel&pred=$pred");
    } else if(($def == "PC Problem") && ($sym == "PC Blue Screen") && ($rel == "OTHER")){
        $pred == "Repair";
        header("location: localhost/TA/prediksi1.php?def=$def&sym=$sym&rel=$rel&pred=$pred");
    } else if(($def == "Short Card") && ($sym == "Tester Short") && ($rel == "DIAGNOSTIC")){
        $pred == "Repair";
        header("location: localhost/TA/prediksi1.php?def=$def&sym=$sym&rel=$rel&pred=$pred");
    } else if(($def == "Short Card") && ($sym == "Tester Short") && ($rel == "CARD")){
        $pred == "Repair";
        header("location: localhost/TA/prediksi1.php?def=$def&sym=$sym&rel=$rel&pred=$pred");
    } else if(($def == "Vaccum Issue") && ($sym == "Problem Vaccum") && ($rel == "OTHER")){
        $pred == "False Call";
        header("location: localhost/TA/prediksi1.php?def=$def&sym=$sym&rel=$rel&pred=$pred");
    } else if(($def == "Vaccum Issue") && ($sym == "Problem Vaccum") && ($rel == "AIR PRESSURE")){
        $pred == "Repair";
        header("location: localhost/TA/prediksi1.php?def=$def&sym=$sym&rel=$rel&pred=$pred");
    }
}
?>