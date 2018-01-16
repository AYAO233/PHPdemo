<?php
    for ($i = 1; $i <= 9; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "$j x $i = ".$j*$i."&nbsp;&nbsp;";
        }
        echo "<br>";
    }
    @$conn = mysqli_connect("localhost", "root", "redwolf233") or exit("连接数据库失败");
    mysqli_select_db("mysql", $conn) or die("选择数据库失败");
    $result = mysql_query("select * from table");
    if (!$result) {
        echo "SQL语句执行失败";
        exit;
    }