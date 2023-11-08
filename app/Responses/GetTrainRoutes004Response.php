<?php

namespace App\Responses;

class GetTrainRoutes004Response extends ResponseEntity
{
    function generate(): array
    {
        return [
            "TrainRoute" => [
                "Number" => "004Ц",
                "Routes" => [
                    "НУРЛЫ ЖОЛ",
                    "АЛМАТЫ 2"
                ]
            ],
            "Routes" => [
                [
                    "Title" => "ОСНОВНОЙ МАРШРУТ",
                    "Route" => [
                        "НУРЛЫ ЖОЛ",
                        "АЛМАТЫ 2"
                    ],
                    "Stop" => [
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "НУРЛЫ ЖОЛ",
                            "Code" => "2700152",
                            "ArvTime" => null,
                            "WaitingTime" => null,
                            "DepTime" => "16:00:00",
                            "Sign" => null,
                            "Days" => "00",
                            "Distance" => "0"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "КАРАГАНД П",
                            "Code" => "2708950",
                            "ArvTime" => "18:54:00",
                            "WaitingTime" => "00:10:00",
                            "DepTime" => "19:04:00",
                            "Sign" => null,
                            "Days" => "00",
                            "Distance" => "235"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "АКАДЫР",
                            "Code" => "2708921",
                            "ArvTime" => "21:09:00",
                            "WaitingTime" => "00:04:00",
                            "DepTime" => "21:13:00",
                            "Sign" => null,
                            "Days" => "00",
                            "Distance" => "434"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "САРЫ ШАГАН",
                            "Code" => "2700917",
                            "ArvTime" => "23:53:00",
                            "WaitingTime" => "00:10:00",
                            "DepTime" => "00:03:00",
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "697"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ШУ",
                            "Code" => "2700780",
                            "ArvTime" => "03:25:00",
                            "WaitingTime" => "00:30:00",
                            "DepTime" => "03:55:00",
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "1017"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ОТАР",
                            "Code" => "2700750",
                            "ArvTime" => "05:47:00",
                            "WaitingTime" => "00:06:00",
                            "DepTime" => "05:53:00",
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "1172"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "АЛМАТЫ 2",
                            "Code" => "2700001",
                            "ArvTime" => "07:57:00",
                            "WaitingTime" => null,
                            "DepTime" => null,
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "1337"
                        ]
                    ]
                ]
            ]
        ];
    }
}
