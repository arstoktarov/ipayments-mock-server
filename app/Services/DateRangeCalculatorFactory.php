<?php

namespace App\Services;

class DateRangeCalculatorFactory
{
    public function create($type) : DateRangeCalculator {
        switch ($type) {
            case 'every_odd_day':
                return new OddDateRangeCalculator();
            default:
                return new EveryDateRangeCalculator();
        }
    }
}
