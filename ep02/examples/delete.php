<?php

require __DIR__."/../vendor/autoload.php";

use Source\Models\Address;
use Source\Models\User;

$user = (new User())->findById(5);

if ($user) {
    $user->destroy();
} else {
    var_dump($user);
}

$addr = (new Address())->findById(7);

if ($addr) {
    $addr->destroy();
} else {
    var_dump($addr);
}

var_dump($addr);