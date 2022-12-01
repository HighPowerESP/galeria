<?php

    function debug( $var ){
        $debug = debug_backtrace();
        echo "<pre>";
        echo $debug[0]['file']. "<br><br>";
        print_r($var);
        echo "</pre>";
        echo "<br>";
    }