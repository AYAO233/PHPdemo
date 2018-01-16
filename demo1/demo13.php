<?php
    class Demo {
        static function fun($msg1, $msg2) {
            echo "$msg1 = ".$msg1;
            echo "<br>";
            echo "$msg2 = ".$msg2;
        }
    }

    class Test {
        function fun($msg1, $msg2) {
            echo "$msg1 = ".$msg1;
            echo "<br>";
            echo "$msg2 = ".$msg2;
        }
    }

    call_user_func_array(array("DEMO","fun"), array("LAMP", "兄弟连"));
    call_user_func_array(array(new Test(), "fun"), array("BroPHP", "学习型PHP框架"));