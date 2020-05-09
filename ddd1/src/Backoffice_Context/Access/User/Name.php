<?php

namespace App;

use phpDocumentor\Reflection\Types\String_;

class Name
{
    private $username;

    function __construct()
    {
    }

    public function uniqueName($username)
    {
        if (empty($username)) {
            throw new \InvalidArgumentException("Username cannot be empty");
        }

        if (strlen($username) <= 4) {
            throw new \InvalidArgumentException("User name must be longer than 4 characters");
        }

        $this->username = $username;

    }



}
