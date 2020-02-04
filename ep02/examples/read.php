<?php

use Source\Models\Address;
use Source\Models\User;

require __DIR__."/../vendor/autoload.php";

//$user = new User();
//$list = $user->find()->fetch(true);
//
///** @var $userItem User */
//foreach ($list as $userItem) {
//    var_dump($userItem->first_name);
//    foreach ($userItem->addresses() as $address) {
//        var_dump($address->data());
//    }
//}

$addr = new Address();
$list = $addr->find()->fetch(true);

/** @var $addrItem Address */
foreach ($list as $addrItem) {
    var_dump($addrItem->street);
    foreach ($addrItem->users() as $user) {
        var_dump($user->data());
    }
}