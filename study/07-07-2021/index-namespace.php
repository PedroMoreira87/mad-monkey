<?php

require 'namespace.php';

use study\test\{hello, anotherTest as t};

$object = new hello;
$object1 = new t;

echo "<p> <h2>Functions:<h2> </p>";

use function study\test\{all, all2 as a};

all();
a();

echo "<p> <h2>Constants:<h2> </p>";

use const study\test\{HELLO, GOODBYE as GB};

echo HELLO;
echo GB;
