<?php

declare(strict_types=1);
namespace Tests; 

use App\InterfaceItem;
use PHPUnit\Framework\TestCase;
use App\Updater\AgedBrieUpdater;


class AgedBrieUpdaterTest extends TestCase
{
    public function testAgedBrieResolveReturnTrue() :void
    {
     $item = $this->getMockBuilder(InterfaceItem::class)->getMock();
     $item->name = 'Aged Brie';
     $agedBrieUpdater = new AgedBrieUpdater($item);
     //$reflection = new ReflectionClass(AgedBrieUpdater::class);
     $this->assertTrue($agedBrieUpdater->resolve($item));
    }
}
