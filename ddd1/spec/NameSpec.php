<?php

namespace spec\App;

use App\Name;
use PhpSpec\ObjectBehavior;

class NameSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Name::class);
    }

    function it_should_check_if_name_is_not_empty()
    {
        $username = '';

        $this->shouldThrow('\InvalidArgumentException')->during('uniqueName', [ $username ]);
    }

    function it_should_not_accept_username_shorter_than_four_chars()
    {
        $username = 'iwo';

        $this->shouldThrow('\InvalidArgumentException')->during('uniqueName', [ $username ]);
    }
}
