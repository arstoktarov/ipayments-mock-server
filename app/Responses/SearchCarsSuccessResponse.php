<?php

namespace App\Responses;

use Entities\Car;
use Entities\CarGroup;
use Entities\Train;
use Illuminate\Http\Request;

class SearchCarsSuccessResponse extends ResponseEntity
{
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    function generate(): array
    {
        $car1 = new Car('1', '32К');
        $car2 = new Car('1', '32К');
        $carGroup = new CarGroup('Купе', [$car1, $car2]);
        $train1 = (new Train('031K', [$carGroup]))->toArray();

        return [
            "ShowWithoutPlaces" => false,
            "ForwardDirectionDto" => [
                "Type" => 0,
                "PassRoute" => [
                    "From" => "АЛМАТЫ 1",
                    "To" => "АКТОГАЙ",
                    "CodeFrom" => "2700002",
                    "CodeTo" => "2700670"
                ],
                "Trains" => [
                    [
                        "Date" => "2023-11-16T00:00:00",
                        "Train" => $train1
                    ]
                ]
            ],
            "BackwardDirectionDto" => null
        ];
    }
}
