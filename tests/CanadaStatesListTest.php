<?php declare(strict_types=1);

namespace Cdtweb;

use PHPUnit\Framework\TestCase;

class CanadaStatesListTest extends TestCase
{
    /**
     * @covers CanadaProvincesList::all(), CanadaProvincesList::abbreviations(), CanadaProvincesList::names()
     */
    public function testCanadaProvincesList()
    {
        $states = CanadaProvincesList::all();
        $abbreviations = CanadaProvincesList::abbreviations();
        $names = CanadaProvincesList::names();
        $this->assertTrue(is_array($states) && is_array($abbreviations) && is_array($names));
        $this->assertEquals($states, array_combine($abbreviations, $names));
    }
}
