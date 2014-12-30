<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NoodleSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(0.50, 1);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Noodle');
    }

    function it_should_implement_a_type_of_item()
    {
        $this->shouldImplement('Item');
    }

    function it_should_have_a_name()
    {
        $this->getName()->shouldReturn('Noodles');
    }

    function it_should_have_a_price()
    {
        $this->calculatePrice();
        $this->getPrice()->shouldEqual(0.50);
    }

    function it_has_a_unit_of_measure()
    {
        $this->getUnitOfMeasure()->shouldReturn('Each');
    }

    function it_allows_purchase_of_3_items_for_discounted_price()
    {
        $this->setUnits(3);
        $this->applySpecial();
        $this->getPrice()->shouldReturn(1.00);
    }
}
