<?php
    $arr = array(1, 5, 8, 4, 6, 2, 9);
    print_r($arr);
    sort($arr);
    print_r($arr);
    
    function person($name="张三", $age=20, $sex="男") {
        echo "我的名字是：{$name}, 我的年龄是：{$age}, 性别：{$sex} <br>";
    }
    
    echo "<br>";
    person();
    person("李四");
    person("王五",22);
    person("贾六", 18, "女");

    echo "<br>";

    function more_args() {
        $args = func_get_args();
        for ($i=0; $i<count($args); $i++) {
            echo "第".$i."个参数是".$args[$i]."<br>";
        }
    }

    more_args("one","two","three","four","five",1,2,3,4,5);