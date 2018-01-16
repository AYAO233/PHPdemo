<?php
    
    function filter($fun) {
        for($i=0; $i<=20; $i++) {
            if ($fun($i))
                continue;
                echo $i."<br>";
        }
    }

    function one($num) {
        return $num % 3 == 0;
    }

    function two($num) {
        return $num == strrev($num);
    }

    filter("one");
    echo "-----------------------<br>";
    filter("two");