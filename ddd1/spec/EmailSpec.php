<?php

namespace spec\App;

use App\Email;
use PhpSpec\ObjectBehavior;

class EmailSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Email::class);
    }
}
