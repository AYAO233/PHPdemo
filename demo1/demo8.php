<?php


    function table($tablename, $rows, $cols) {
        $str_table = "";
        $str_table .= "<table align='center' border='1' width='700'>";
        $str_table .= "<caption><h1> $tablename </h1></coption>";

        for ($out = 0; $out < $rows; $out++){
            $bgcolor = $out % 2 == 0 ? "#FFFFFF" : "#DDDDDD";
            $str_table .= "<tr bgcolor=".$bgcolor.">";
            for ($in = 0; $in < $cols; $in++) {
                $str_table .= "<td>".($out * 10 + $in)."</td>";
            }
            $str_table .= "</tr>";
        }
        $str_table .= "</table>";
        return $str_table;
    }

    $str = table("第一个3行4列的表", 3, 4);
    echo table("第二个2行10列的表", 2, 10);
    echo $str;