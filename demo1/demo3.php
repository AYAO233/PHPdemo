<?php
    define("CON_INT", 100);
    echo CON_INT;

    define("FLO", 99.99);
    echo FLO;

    define("BOO", true);
    echo BOO;

    define("CONSTANT", "Hello world.");
    echo CONSTANT;
    echo Constant;

    define("GREETING", "Hello world.", true);
    echo GREETING;
    echo Greeting;

    if (defined('CONSTANT')) {
        echo CONSTANT;
    }

