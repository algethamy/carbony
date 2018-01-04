<?php

namespace Cammac\Carbony\Tests;

use Cammac\Carbony\Cal;
use Cammac\Carbony\Carbony;
use Carbon\Carbon;
use PHPUnit\Framework\TestCase;

class CarbonyTest extends TestCase
{
    /** @test */
    public function can_convert_gregorian_to_Hijri()
    {
        Carbony::setTestNow(Carbon::parse('2018-01-04'));

        $this->assertEquals('1439-04-17', Carbony::now()->hijriFormat('Y-m-d'));
    }

    /** @test */
    public function can_parse_Hijri_to_gregorian()
    {
        $this->assertEquals('1989-01-21', Carbony::hijriParse('1409-06-14')->format('Y-m-d'));
    }

    /** @test */
    public function can_do_some_carbon_functionality()
    {
        $date = Carbony::hijriParse('1409-06-14');

        $this->assertEquals('1989-01-21', $date->format('Y-m-d'));

        $this->assertEquals('1989-01-26', $date->addDays(5)->format('Y-m-d'));

        $this->assertEquals('1989-06-26', $date->addMonths(5)->format('Y-m-d'));
    }
}
