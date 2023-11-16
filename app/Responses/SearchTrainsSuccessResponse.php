<?php

namespace App\Responses;

use App\Services\ScheduleCalculatorService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchTrainsSuccessResponse extends ResponseEntity
{
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    public function generate(): array
    {

        $trains = include(base_path('data/trains.php'));
        $trainRoutes = include(base_path('data/train_routes.php'));

        $suitableTrainNumbers = $this->findSuitableTrainNumbers(
            $trainRoutes,
            $this->request['StationFrom'],
            $this->request['StationTo']
        );


        $suitableSchedule = DB::table('train_schedules')
            ->whereIn('train_number', $suitableTrainNumbers)
            ->whereBetween('arv_date_time', [$this->request['ForwardDirection']['DateTimeFrom'], $this->request['ForwardDirection']['DateTimeTo']])
            ->get();

        $responses = [];

        foreach ($suitableTrainNumbers as $trainNumber) {
            foreach ($trains as $train) {
                if ($train['Number'] === $trainNumber) {
                    $responses[] = $train['shortResponse'];
                }
            }
        }

        return [
            "ShowWithoutPlaces" => false,
            "ForwardDirection" => [
                "PassRouteFrom" => "АЛМАТЫ 1",
                "PassRouteTo" => "НУР-СУЛТАН 1",
                "PassRouteCodeFrom" => "2700002",
                "PassRouteCodeTo" => "2700670",
                "NotAllTrains" => false,
                "Trains" => [
                    [
                        'Date' => $this->request->get('DateTimeFrom'),
                        'TrainsCollection' => $responses,
                    ]
                ]
            ],
            "BackwardDirection" => null
        ];
    }
    public function findSuitableTrainNumbers($trainRoutes, $fromStationCode, $toStationCode) {
        $suitableTrainNumbers = [];

        foreach ($trainRoutes as $trainNumber => $data) {
            $schedule = $data['Routes'][0]['Stop'];
            $fromIndex = null;
            $toIndex = null;
            foreach ($schedule as $ind => $stationSchedule) {
                if ($stationSchedule['Code'] === $fromStationCode) {
                    $fromIndex = $ind;
                }
                if ($stationSchedule['Code'] === $toStationCode) {
                    $toIndex = $ind;
                }
            }
            if (($fromIndex !== null && $toIndex !== null) && ($fromIndex < $toIndex)) {
                $suitableTrainNumbers[] = $trainNumber;
            }
        }

        return $suitableTrainNumbers;
    }
}
