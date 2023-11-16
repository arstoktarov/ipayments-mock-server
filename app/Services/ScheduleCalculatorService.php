<?php

namespace App\Services;

use Carbon\Carbon;
use Carbon\CarbonPeriod;

class ScheduleCalculatorService
{

    public function calculate($trainRoutes, $from, $to): array
    {
        return $this->calculateTrainSchedule($trainRoutes, $from, $to);
    }

    public function calculateTrainSchedule($trainRoutes, $fromDate, $toDate): array
    {
        $routes = $trainRoutes['Routes'][0]['Stop'];

        $dateRangeCalculatorFactory = new DateRangeCalculatorFactory();
        $calculator = $dateRangeCalculatorFactory->create($trainRoutes['TrainRoute']['Schedule']);

        $dateRange = $calculator->calculate($fromDate, $toDate);

        $overallSchedule = [];

        foreach ($dateRange as $date) {
            $overallSchedule[$date->format('Y-m-d')] = $this->createScheduleForDay($routes, $date);
        }

        return $overallSchedule;
    }

    public function createScheduleForDay($routes, $date)
    {
        return collect($routes)->map(function($route) use ($date) {
            $waitingTime = $route['WaitingTime'];
            $depTime = $route['DepTime'];

            $isDepInNextDay = $this->checkIsDepInNextDay($waitingTime, $depTime);

            $arvDateTime = $this->createDateTime(
                $date,
                $route['ArvTime'],
                $isDepInNextDay ? $route['Days'] - 1 : $route['Days']
            );

            $depDateTime = $this->createDateTime(
                $date,
                $route['DepTime'],
                $route['Days']
            );

            return [
                'Station' => $route['Station'],
                'Code' => $route['Code'],
                'arvDateTime' => $arvDateTime,
                'depDateTime' => $depDateTime,
            ];
        });
    }

    public function createDateTime($date, $time, $days)
    {
        if (!$time) {
            return null;
        }

        $date = (clone $date)->setTimeFromTimeString($time)->addDays($days);

        return $date->format('Y-m-d H:i:s');
    }

    public function checkIsDepInNextDay($waitingTime, $depTime): bool
    {
        if ($waitingTime && $depTime) {
            $waitingDateTime = Carbon::createFromFormat('H:i:s', $waitingTime);
            $depDateTime = Carbon::createFromFormat('H:i:s', $depTime);
            return $waitingDateTime->greaterThan($depDateTime);
        }
        return false;
    }
}
