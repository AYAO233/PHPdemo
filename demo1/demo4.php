<?php
    $week = date("D");

    if ($week == "Mon") {
        echo "星期一";
    } elseif ($week == "Tue") {
        echo "星期二";
    } elseif ($week == "Wed") {
        echo "星期三";
    } elseif ($week == "Thu") {
        echo "星期四";
    } elseif ($week == "Fri") {
        echo "星期五";
    } elseif ($week == "Sat") {
        echo "星期六";
    } elseif ($week == "Sun") {
        echo "星期日";
    }