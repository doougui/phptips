<?php

require __DIR__."/../vendor/autoload.php";

use Source\Models\Address;
use Source\Models\User;

$user = new User();
$user->first_name = "Juliana";
$user->last_name = "Silva";
$user->gender = "F";
$user->save();

$addr = new Address();
$addr->add($user, "Rua Tal", "55c")->save();

var_dump($addr);