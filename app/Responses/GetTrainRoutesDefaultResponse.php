<?php

namespace App\Responses;

use Illuminate\Http\Request;

class GetTrainRoutesDefaultResponse extends ResponseEntity
{
    protected $type;

    public function __construct($type, Request $request)
    {
        $this->type = $type;
        parent::__construct($request);
    }

    function generate(): array
    {
        $trainRoutes = include(base_path('data/train_routes.php'));
        if (array_key_exists($this->type, $trainRoutes)) {
            return $trainRoutes[$this->type];
        }

        return [
            "TrainRoute" => [
                "Number" => "031Х",
                "Routes" => [
                    "АЛМАТЫ 2",
                    "ПАВЛОДАР"
                ]
            ],
            "Routes" => [
                [
                    "Title" => "ОСНОВНОЙ МАРШРУТ",
                    "Route" => [
                        "АЛМАТЫ 2",
                        "ПАВЛОДАР"
                    ],
                    "Stop" => [
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "АЛМАТЫ 2",
                            "Code" => "2700001",
                            "ArvTime" => null,
                            "WaitingTime" => null,
                            "DepTime" => "04:30:00",
                            "Sign" => null,
                            "Days" => "00",
                            "Distance" => "0"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "АЛМАТЫ 1",
                            "Code" => "2700002",
                            "ArvTime" => "04:50:00",
                            "WaitingTime" => "00:35:00",
                            "DepTime" => "05:25:00",
                            "Sign" => null,
                            "Days" => "00",
                            "Distance" => "9"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ЖЕТЫГЕН",
                            "Code" => "2700805",
                            "ArvTime" => "06:17:00",
                            "WaitingTime" => "00:13:00",
                            "DepTime" => "06:30:00",
                            "Sign" => null,
                            "Days" => "00",
                            "Distance" => "52"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "КАПЧАГАЙ",
                            "Code" => "2700804",
                            "ArvTime" => "06:53:00",
                            "WaitingTime" => "00:05:00",
                            "DepTime" => "06:58:00",
                            "Sign" => null,
                            "Days" => "00",
                            "Distance" => "80"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "САРЫ-ОЗЕК",
                            "Code" => "2700796",
                            "ArvTime" => "09:26:00",
                            "WaitingTime" => "00:14:00",
                            "DepTime" => "09:40:00",
                            "Sign" => null,
                            "Days" => "00",
                            "Distance" => "201"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "УШ ТОБЕ",
                            "Code" => "2700760",
                            "ArvTime" => "11:30:00",
                            "WaitingTime" => "00:15:00",
                            "DepTime" => "11:45:00",
                            "Sign" => null,
                            "Days" => "00",
                            "Distance" => "312"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "МАТАЙ",
                            "Code" => "2700773",
                            "ArvTime" => "13:53:00",
                            "WaitingTime" => "00:22:00",
                            "DepTime" => "14:15:00",
                            "Sign" => null,
                            "Days" => "00",
                            "Distance" => "420"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ЛЕПСЫ",
                            "Code" => "2700769",
                            "ArvTime" => "15:05:00",
                            "WaitingTime" => "00:03:00",
                            "DepTime" => "15:08:00",
                            "Sign" => null,
                            "Days" => "00",
                            "Distance" => "462"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "АКТОГАЙ",
                            "Code" => "2700670",
                            "ArvTime" => "16:37:00",
                            "WaitingTime" => "00:28:00",
                            "DepTime" => "17:05:00",
                            "Sign" => null,
                            "Days" => "00",
                            "Distance" => "566"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "АЯГОЗ",
                            "Code" => "2700690",
                            "ArvTime" => "19:14:00",
                            "WaitingTime" => "00:15:00",
                            "DepTime" => "19:29:00",
                            "Sign" => null,
                            "Days" => "00",
                            "Distance" => "699"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "УШ-БИИК",
                            "Code" => "2700733",
                            "ArvTime" => "21:05:00",
                            "WaitingTime" => "00:05:00",
                            "DepTime" => "21:10:00",
                            "Sign" => null,
                            "Days" => "00",
                            "Distance" => "760"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ЖАРМА",
                            "Code" => "2700720",
                            "ArvTime" => "22:01:00",
                            "WaitingTime" => "00:03:00",
                            "DepTime" => "22:04:00",
                            "Sign" => null,
                            "Days" => "00",
                            "Distance" => "808"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ЖАНГИЗ ТОБ",
                            "Code" => "2700810",
                            "ArvTime" => "23:25:00",
                            "WaitingTime" => "00:10:00",
                            "DepTime" => "23:35:00",
                            "Sign" => null,
                            "Days" => "00",
                            "Distance" => "871"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ШАР",
                            "Code" => "2700722",
                            "ArvTime" => "00:25:00",
                            "WaitingTime" => "00:15:00",
                            "DepTime" => "00:40:00",
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "918"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ЖАНА СЕМЕЙ",
                            "Code" => "2700708",
                            "ArvTime" => "02:07:00",
                            "WaitingTime" => "00:16:00",
                            "DepTime" => "02:23:00",
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "1026"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "СЕМЕЙ",
                            "Code" => "2700900",
                            "ArvTime" => "02:41:00",
                            "WaitingTime" => "00:40:00",
                            "DepTime" => "03:21:00",
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "1034"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ДЕГЕЛЕН",
                            "Code" => "2700709",
                            "ArvTime" => "05:15:00",
                            "WaitingTime" => "00:22:00",
                            "DepTime" => "05:37:00",
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "1177"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "КОКТОБЕ",
                            "Code" => "2709901",
                            "ArvTime" => "06:56:00",
                            "WaitingTime" => "00:14:00",
                            "DepTime" => "07:10:00",
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "1296"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "АКСУ 2",
                            "Code" => "2709983",
                            "ArvTime" => "08:29:00",
                            "WaitingTime" => "00:10:00",
                            "DepTime" => "08:39:00",
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "1363"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "АКСУ 1",
                            "Code" => "2709928",
                            "ArvTime" => "08:57:00",
                            "WaitingTime" => "00:01:00",
                            "DepTime" => "08:58:00",
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "1374"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ЖОЛКУДУК",
                            "Code" => "2708992",
                            "ArvTime" => "09:25:00",
                            "WaitingTime" => "00:02:00",
                            "DepTime" => "09:27:00",
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "1402"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ПАВЛОДАР",
                            "Code" => "2708900",
                            "ArvTime" => "09:45:00",
                            "WaitingTime" => null,
                            "DepTime" => null,
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "1416"
                        ]
                    ]
                ]
            ]
        ];
    }
}
