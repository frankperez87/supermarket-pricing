<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BreadSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(1.00, 2);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Bread');
    }

    function it_should_implement_a_type_of_item()
    {
        $this->shouldImplement('Item');
    }

    function it_should_have_a_name()
    {
        $this->getName()->shouldReturn('Loaf of Bread');
    }

    function it_should_have_a_price()
    {
        $this->calculatePrice();
        $this->getPrice()->shouldEqual(2.00);
    }

    function it_has_a_unit_of_measure()
    {
        $this->getUnitOfMeasure()->shouldReturn('Each');
    }
}
