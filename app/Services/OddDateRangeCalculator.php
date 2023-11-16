<?php

namespace App\Services;

use Carbon\CarbonPeriod;

class OddDateRangeCalculator implements DateRangeCalculator
{

    function calculate($fromDate, $toDate): CarbonPeriod
    {
        return CarbonPeriod::between($fromDate, $toDate)->filter(function ($date) {
            return $date->day % 2 === 1;
        });
    }
}
