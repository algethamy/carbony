<?php

namespace Cammac\Carbony;

use Carbon\Carbon;

class Carbony extends Carbon
{
    public static function hijriParse($time, $tz = null)
    {
        $time = new static($time, $tz);

        return static::createFromTimestamp(
            (new Cal())->mktime($time->hour, $time->minute, $time->second, $time->month, $time->day, $time->year)
        );
    }

    public function hijriFormat($format)
    {
        return (new Cal)->date($format, $this->timestamp);
    }
}