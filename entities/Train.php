<?php

namespace Entities;

class Train implements EntityInterface
{
    protected $number = "";
    protected $carGroups = [];

    public function __construct($number, $carGroups)
    {
        $this->number = $number;
        $this->carGroups = $carGroups;
    }


    /**
     * @return array
     */
    public function toArray(): array
    {
        $carGroups = [];
        foreach ($this->carGroups as $carGroup) {
            $carGroups[] = $carGroup->toArray();
        }

        return [
            "Number" => $this->number,
            "Number2" => $this->number,
            "Type" => "СК",
            "Route" => [
                "НУРЛЫ ЖОЛ",
                "СЕМЕЙ"
            ],
            "DepartureDateTime" => "2023-11-17T00:20:00",
            "DepartureStop" => "00:25:00",
            "ArrivalDateTime" => "2023-11-17T02:35:00",
            "ArrivalStop" => "00:15:00",
            "TimeInWay" => "02:15:00",
            "ElRegPossible" => true,
            "Brand" => null,
            "FirmName" => null,
            "IsWithoutPassengerInfo" => false,
            "TrainDetail" => [
                "IsTransit" => false,
                "IsWithoutElReg" => false,
                "IsObligativeElReg" => false,
                "IsInternetTransit" => false,
                "IsInterstate" => false
            ],
            "Comments" => [],
            "Cars" => $carGroups,
            "ArrivalDiffTime" => 0,
            "DepartureDiffTime" => 0,
            "DepartureLocalDateTime" => "2023-11-17T00:20:00",
            "ArrivalLocalDateTime" => "2023-11-17T02:35:00",
            "ShowLocalDepartureTime" => false,
            "ShowLocalArrivalTime" => false,
            "IsTarifficated" => false
        ];
    }

}
