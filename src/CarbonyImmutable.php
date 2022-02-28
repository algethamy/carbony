<?php

namespace Cammac\Carbony;

use Carbon\CarbonImmutable;

class CarbonyImmutable extends CarbonImmutable
{
    public static function hijriParse($time, $tz = null)
    {
        $time = new static($time, $tz);

        return static::createFromTimestamp(
            (new Cal())->mktime($time->month, $time->day, $time->year, $time->hour, $time->minute, $time->second)
        );
    }

    public function hijriFormat($format)
    {
        return (new Cal)->date($format, $this->timestamp);
    }
}