<?php
$a = Defect;
$b = Malfunction_Symptom;
$c = RelatedPart;

if $a ="Analog Intermitent"{
    if $b ="PreShort Fail"{
        if $c ="CARD"{
            echo "Repair";
        }
    }
} elseif $a ="Corrupted"{
    if $b ="BT-Basic Error"{
        if $c ="PC CONTROLLER"{
            echo "Reboot";
        }
    }elseif $b ="No Booting"{
        if $c ="PC CONTROLLER"{
            echo "Restore";
        }
    }           
} elseif $a ="Fail Tesjet"{
    if $b ="Ground"{
        if $c ="CARD"{
            echo "Repair";
        }
    }
} elseif $a ="No Booting"{
    if $b ="No Booting"{
        if $c ="PC CONTROLLER"{
            echo "Restore";
        }
    } elseif $b ="Tester Short"{
        if $c ="OTHER"{
            echo "Repair";
        }
    }
} elseif $a ="Overvoltage"{
    if $b ="Overvoltage"{
        if $c ="MPU"{
            echo "Reboot";
        }
    } elseif $b ="Power Supply Problem"{
        if $c ="OTHER"{
            echo "Repair";
        }
    }
} elseif $a ="PC Problem"{
    if $b ="PC Blue Screen"{
        if $c ="OTHER"{
            echo "Repair";
        } elseif $c ="PC CONTROLLER"{
            echo "Restore";
        }
    }
} elseif $a ="Short Card"{
    if $b ="Tester Short"{
        if $c ="DIAGNOSTIC"{
            echo "Repair";
        } elseif $c ="CARD"{
            echo "Repair";
        }
    }
} else $a ="Vaccum Issue"{
    if $b ="Problem Vaccum"{
        if $c ="OTHER"{
            echo "False Call";
        } elseif $c ="AIR PRESSURE"{
            echo "Repair";
        }
    }
}
?>