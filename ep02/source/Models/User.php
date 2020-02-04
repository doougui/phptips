<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
    public function __construct()
    {
        parent::__construct("users", ["first_name", "last_name"], "id", true);
    }

    public function addresses(): Address
    {
        return (new Address())->find("user_id = :user_id", "user_id={$this->id}")->fetch(true);
    }
}