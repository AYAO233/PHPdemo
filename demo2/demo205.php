<?php
    $data = array(5, 8, 1, 7, 2);
    sort($data);
    print_r($data);
    echo "<br>";
    rsort($data);
    print_r($data);
    echo "<br>";

    $data = array(5=>"five", 8=>"eight", 1=>"one", 7=>"seven", 2=>"two");
    ksort($data);
    print_r($data);
    echo "<br>";
    krsort($data);
    print_r($data);
    echo "<br>";

    $data = array("l"=>"Linux", "a"=>"Apache", "m"=>"MySQL", "p"=>"PHP");
    asort($data);
    print_r($data);
    echo "<br>";
    arsort($data);
    print_r($data);
    echo "<br>";
    rsort($data);
    print_r($data);
    echo "<br>";

    $data = array("file1.txt", "file11.txt", "File2.txt", "FILE12.txt", "file.txt");
    natsort($data);
    print_r($data);
    echo "<br>";
    natcasesort($data);
    print_r($data);

    