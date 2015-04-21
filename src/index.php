<?php
include(dirname(__DIR__) . '/vendor/autoload.php');

use Tales\Tale;
use Tales\Orderers\RandomOrderer;
// use Tales\Orderers\DefaultOrderer;
use Tales\Formatters\EchoFormatter;

print_r((new Tale(new RandomOrderer, new EchoFormatter))->recite());
