<?php

declare(strict_types=1);

namespace Tests; 


use PHPUnit\Framework\TestCase;
use App\Item;

class ItemTest extends TestCase
{
    public function testItemReturnString() :void
    {
        $item = new Item('Elixir of the Mongoose', 5, 3);
        $this->assertSame('Elixir of the Mongoose, 5, 3', $item->__toString());

    }
}