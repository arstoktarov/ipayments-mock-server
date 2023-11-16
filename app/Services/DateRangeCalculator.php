<?php

namespace App\Services;

use Carbon\CarbonPeriod;

interface DateRangeCalculator
{
    function calculate($fromDate, $toDate);
}
