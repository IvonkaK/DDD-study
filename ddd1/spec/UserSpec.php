<?php

namespace spec\App;

use App\User;
use PhpSpec\ObjectBehavior;

class UserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(User::class);
    }

    function it_should_register_user()
    {
        $this->registerUser()->shouldBe(true);
    }

}
