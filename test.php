<?php

$info = [
    'name' => 'MKM',
    'age' => 27,
    'learn' => ['HTML', 'CSS', 'Javascript']
];

foreach ($info['learn'] as $l) {
    echo $l;
    echo " <br>";
}

if ($info['age'] > 30) {
    echo "your are older man";
} else {
    echo "you lie";
}


function register($user) {}

require 'test.view.php';
