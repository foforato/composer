<?php
require "../vendor/autoload.php";
$say_Hello = new App\Wcs\Hello();
$say_Hello_1 = new HelloWorld\SayHello();

echo $say_Hello->talk();
echo $say_Hello_1->world();