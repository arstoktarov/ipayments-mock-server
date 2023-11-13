<?php

namespace Entities;

class CarGroup implements EntityInterface
{

    public $type = 'Люкс';
    public $cars = [];

    public function __construct($type, $cars)
    {
        $this->type = $type;
        $this->cars = $cars;
    }

    public function toArray(): array
    {
        $cars = [];
        foreach ($this->cars as $car) {
            $cars[] = $car->toArray();
        }

        return [
            "Type" => $this->type,
            "TrainLetter" => "Х",
            "CarServiceType" => "Х Люкс",
            "ClassService" => [
                "Type" => "1Б",
                "Value" => null
            ],
            "ClassServiceInt" => null,
            "AddSigns" => "У0",
            "Tariff" => 5000,
            "Tariff2" => null,
            "TariffService" => 848,
            "Carrier" => [
                "Name" => "КТЖ"
            ],
            "Owner" => [
                "Type" => "КЗХ/КЗХ",
                "Country" => [
                    "Code" => "27",
                    "Name" => "КАЗАХСТАН"
                ],
                "Railway" => [
                    "Code" => "68",
                    "Name" => "КАЗАХСТАНСКАЯ"
                ]
            ],
            "SaleLimitation" => 0,
            "Cars" => $cars,
        ];
    }

}
