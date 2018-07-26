<?php

require 'autoload.php';

use liesauer\GLib\Config;
use liesauer\GLib\ServerChan;

ServerChan::send(Config::get('serverchan')['SCKEY'], '你好', '![nihao](http://www.liesauer.net/)');
