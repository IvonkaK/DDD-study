<?php

namespace App;

class Password
{
    /**
     * @var string
     */
    private $password;

    function __construct()
    {

    }

    public function fromString($password)
    {
        if (strlen($password) <= 8) {
            throw new \InvalidArgumentException("Password is too short");
        }

        $this->password = $password;

        return true;
    }

    public function geHash()
    {
        return password_hash($this->password, PASSWORD_BCRYPT);
    }

}
