<?php
    function one($a, $b) {
        return $a + $b;
    }

    function two($a, $b) {
        return $a * $b + $b * $b;
    }

    function three($a, $b) {
        return $a * $a * $a + $b * $b * $b;
    }

    $result = "one";
    echo "运算结果是：".$result(2,3)."<br>";

    $result = "two";
    echo "运算结果是：".$result(2,3)."<br>";

    $result = "three";
    echo "运算结果是：".$result(2,3)."<br>";