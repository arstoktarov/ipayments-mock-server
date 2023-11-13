<?php

namespace Entities;

class Car implements EntityInterface
{

    public $number = 0;
    public $subType = null;
    private $seats = [
        "SeatsUndef" => 4,
        "SeatsDn" => 0,
        "SeatsUp" => 0,
        "SeatsLateralDn" => null,
        "SeatsLateralUp" => null,
        "FreeComp" => 0
    ];
    private $places = ['001', '002', '003', '004'];

    public function __construct($number, $subType)
    {
        $this->number = $number;
        $this->subType = $subType;
    }

    public function setSeats($seatsUp, $seatsDown, $seatsUndef, $freeComp) {
        $this->seats = [
            "SeatsUndef" => $seatsUndef,
            "SeatsDn" => $seatsUp,
            "SeatsUp" => $seatsDown,
            "SeatsLateralDn" => null,
            "SeatsLateralUp" => null,
            "FreeComp" => $freeComp
        ];
    }

    public function setPlaces($places) {
        $this->places = $places;
    }
    public function toArray(): array
    {
        return [
            "Number" => $this->number,
            "SubType" => $this->subType,
            "ElRegPossible" => [
                "UK" => false,
                "AKP" => false
            ],
            "Station" => null,
            "NonSmoking" => false,
            "DesignCar" => [
            ],
            "Seats" => $this->seats,
            "SeatsSexDto" => null,
            "TypePlaces" => null,
            "Places" => $this->places,
            "SpecialCarDetails" => [
            ],
            "BoardingForm" => 0,
            "AirConditionedCar" => true,
            "EcoFriendlyToilets" => true
        ];
    }

}
