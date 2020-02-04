<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Address extends DataLayer
{
    public function __construct()
    {
        parent::__construct("addresses", ["user_id"], "addr_id", false);
    }

    public function add(User $user, string $street, string $number): Address
    {
        $this->user_id = $user->id;
        $this->street = $street;
        $this->number = $number;

        return $this;
    }

    public function users()
    {
        return (new User())->find("id = :id", "id={$this->user_id}");
    }
}