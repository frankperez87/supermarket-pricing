<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SoupSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(2.00, 2);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Soup');
    }

    function it_should_implement_a_type_of_item()
    {
        $this->shouldImplement('Item');
    }

    function it_should_have_a_name()
    {
        $this->getName()->shouldReturn('Soup cans');
    }

    function it_should_have_a_price()
    {
        $this->calculatePrice();
        $this->getPrice()->shouldEqual(4.00);
    }

    function it_has_a_unit_of_measure()
    {
        $this->getUnitOfMeasure()->shouldReturn('Each');
    }

    function it_allows_you_to_buy_4_and_get_1_free()
    {
        $this->setUnits(4);
        $this->applySpecial();
        $this->getUnits()->shouldReturn(5);
    }

    function it_allows_you_to_buy_12_and_get_3_free()
    {
        $this->setUnits(12);
        $this->applySpecial();
        $this->getUnits()->shouldReturn(15);
    }
}
