<?php
 require_once 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello Wilder !');
$bessie->setTongue('U');

echo $bessie;

