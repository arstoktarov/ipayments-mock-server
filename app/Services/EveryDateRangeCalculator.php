<?php

namespace App\Services;

use Carbon\CarbonPeriod;

class EveryDateRangeCalculator implements DateRangeCalculator
{

    function calculate($fromDate, $toDate): CarbonPeriod
    {
        return CarbonPeriod::between($fromDate, $toDate);
    }
}
