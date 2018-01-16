<?php
    function fun($msg1, $msg2) {
        echo "$msg1 = ".$msg1;
        echo "<br>";
        echo "$msg2 = ".$msg2;
    }

    call_user_func_array("fun", array("LAMP", "兄弟连"));

    function filter($fun) {
        for ($i=0; $i<=100; $i++) {
            if (call_user_fanc_array($fun, array($i)))
                continue;
            echo $i."<br>";
        }
    }

    filter();