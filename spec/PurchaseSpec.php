<?php

namespace spec;

use Bread;
use Noodle;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Soup;

class PurchaseSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Purchase');
    }

    function it_can_add_a_single_product()
    {
        $bread = new Bread(1.00, 1);
        $this->addProduct($bread);

        $this->getTotal()->shouldEqual(1.00);
    }

    function it_can_add_multiple_products()
    {
        $bread = new Bread(1.00, 1);
        $this->addProduct($bread);

        $noodle = new Noodle(0.50, 1);
        $this->addProduct($noodle);

        $soup = new Soup(2.00, 2);
        $this->addProduct($soup);

        $this->getTotal()->shouldEqual(5.50);
    }

    function it_can_print_out_a_list_of_products_added()
    {
        $bread = new Bread(1.00, 1);
        $this->addProduct($bread);

        $noodle = new Noodle(0.50, 1);
        $this->addProduct($noodle);

        $soup = new Soup(2.00, 2);
        $this->addProduct($soup);

        $this->getItems()->shouldReturn([
            0 => $bread,
            1 => $noodle,
            2 => $soup,
        ]);
    }
}
