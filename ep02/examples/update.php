<?php

require __DIR__."/../vendor/autoload.php";

use Source\Models\Address;
use Source\Models\User;

$user = (new User())->findById(4);
$user->first_name = "Lucas";
$user->save();

$addr = (new Address())->findById(4);
$addr->user_id = $user->id;
$addr->save();

var_dump($addr);