<?php

namespace Cammac\Carbony;

use Illuminate\Support\ServiceProvider;

class CarbonyServiceProvider extends ServiceProvider
{
    public function register()
    {
        \Carbon\Carbon::macro(
            'hijriParse',
            function (...$args) {
                return Carbony::hijriParse(...$args);
            }
        );
        \Carbon\CarbonImmutable::macro(
            'hijriParse',
            function (...$args) {
                return CarbonyImmutable::hijriParse(...$args);
            }
        );

        \Carbon\Carbon::macro(
            'hijriFormat',
            function ($format) {
                return (new Cal)->date($format, $this->timestamp);
            }
        );
        \Carbon\CarbonImmutable::macro(
            'hijriFormat',
            function ($format) {
                return (new Cal)->date($format, $this->timestamp);
            }
        );
    }
}
