<?php

require __DIR__ . '/vendor/autoload.php';

foreach (glob(__DIR__ . '/config/*.php') as $file) {
    include $file;
}
