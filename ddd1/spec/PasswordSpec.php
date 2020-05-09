<?php

namespace spec\App;

use App\Password;
use PhpSpec\ObjectBehavior;

class PasswordSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Password::class);
    }


    function it_should_verify_user_password()
    {
        $string = 'password1';
        $new_password = password_hash($string, PASSWORD_DEFAULT);

        $this->fromString($new_password)->shouldBe(true);
    }

    function it_should_not_validate_short_passwords()
    {
        $provided_password_string = 'iwonka';

        $this->shouldThrow('\InvalidArgumentException')->during('fromString', [ $provided_password_string ]);
    }

    function it_should_give_hash_of_password()
    {
        $this->geHash()->shouldBeString();
    }
}
