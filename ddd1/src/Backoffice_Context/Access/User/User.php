<?php

namespace App;

class User
{
    private $username;
    private $email;
    private $password;

    function __construct(Name $username, Email $email, Password $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    function registerUser()
    {
        $password = $this->password;
        $password_hash = $password->geHash();

        return UserService::registerUser($this->username, $this->email, $password_hash);
    }


}