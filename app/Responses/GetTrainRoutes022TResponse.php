<?php

namespace App\Responses;

use Illuminate\Http\Request;

class GetTrainRoutes022TResponse extends ResponseEntity
{
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    function generate(): array
    {
        return [
            "TrainRoute" => [
                "Number" => "022Т",
                "Routes" => [
                    "КЫЗЫЛОРДА",
                    "СЕМЕЙ"
                ]
            ],
            "Routes" => [
                [
                    "Title" => "ОСНОВНОЙ МАРШРУТ",
                    "Route" => [
                        "КЫЗЫЛОРДА",
                        "СЕМЕЙ"
                    ],
                    "Stop" => [
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "КЫЗЫЛОРДА",
                            "Code" => "2704999",
                            "ArvTime" => null,
                            "WaitingTime" => null,
                            "DepTime" => "15:15:00",
                            "Sign" => null,
                            "Days" => "00",
                            "Distance" => "0"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ШИЕЛИ",
                            "Code" => "2704920",
                            "ArvTime" => "17:10:00",
                            "WaitingTime" => "00:17:00",
                            "DepTime" => "17:27:00",
                            "Sign" => null,
                            "Days" => "00",
                            "Distance" => "127"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ЖАНАКОРГАН",
                            "Code" => "2704970",
                            "ArvTime" => "18:09:00",
                            "WaitingTime" => "00:04:00",
                            "DepTime" => "18:13:00",
                            "Sign" => null,
                            "Days" => "00",
                            "Distance" => "179"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ТАЛАП",
                            "Code" => "2704943",
                            "ArvTime" => "18:44:00",
                            "WaitingTime" => "00:17:00",
                            "DepTime" => "19:01:00",
                            "Sign" => null,
                            "Days" => "00",
                            "Distance" => "216"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "БЕСАРЫК",
                            "Code" => "2704944",
                            "ArvTime" => "19:12:00",
                            "WaitingTime" => "00:01:00",
                            "DepTime" => "19:13:00",
                            "Sign" => null,
                            "Days" => "00",
                            "Distance" => "227"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ТУРКЕСТАН",
                            "Code" => "2700860",
                            "ArvTime" => "19:59:00",
                            "WaitingTime" => "00:15:00",
                            "DepTime" => "20:14:00",
                            "Sign" => null,
                            "Days" => "00",
                            "Distance" => "285"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ТИМУР",
                            "Code" => "2700881",
                            "ArvTime" => "21:08:00",
                            "WaitingTime" => "00:01:00",
                            "DepTime" => "21:09:00",
                            "Sign" => null,
                            "Days" => "00",
                            "Distance" => "339"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "АРЫС 2",
                            "Code" => "2700877",
                            "ArvTime" => "22:02:00",
                            "WaitingTime" => "00:20:00",
                            "DepTime" => "22:22:00",
                            "Sign" => null,
                            "Days" => "00",
                            "Distance" => "396"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ШЫМКЕНТ",
                            "Code" => "2700770",
                            "ArvTime" => "23:33:00",
                            "WaitingTime" => "00:15:00",
                            "DepTime" => "23:48:00",
                            "Sign" => null,
                            "Days" => "00",
                            "Distance" => "473"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "МАНКЕНТ",
                            "Code" => "2700872",
                            "ArvTime" => "00:19:00",
                            "WaitingTime" => "00:02:00",
                            "DepTime" => "00:21:00",
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "500"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ТЮЛЬКУБАС",
                            "Code" => "2700880",
                            "ArvTime" => "01:30:00",
                            "WaitingTime" => "00:05:00",
                            "DepTime" => "01:35:00",
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "557"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "БОРАНДЫ",
                            "Code" => "2700866",
                            "ArvTime" => "02:38:00",
                            "WaitingTime" => "00:02:00",
                            "DepTime" => "02:40:00",
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "621"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ТАРАЗ",
                            "Code" => "2700710",
                            "ArvTime" => "04:02:00",
                            "WaitingTime" => "00:20:00",
                            "DepTime" => "04:22:00",
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "691"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ТУРКСИБ",
                            "Code" => "2700850",
                            "ArvTime" => "06:03:00",
                            "WaitingTime" => "00:10:00",
                            "DepTime" => "06:13:00",
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "808"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ШУ",
                            "Code" => "2700780",
                            "ArvTime" => "07:51:00",
                            "WaitingTime" => "00:27:00",
                            "DepTime" => "08:18:00",
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "923"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ОТАР",
                            "Code" => "2700750",
                            "ArvTime" => "10:36:00",
                            "WaitingTime" => "00:06:00",
                            "DepTime" => "10:42:00",
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "1078"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "АЛМАТЫ 1",
                            "Code" => "2700002",
                            "ArvTime" => "13:22:00",
                            "WaitingTime" => "00:38:00",
                            "DepTime" => "14:00:00",
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "1234"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ЖЕТЫГЕН",
                            "Code" => "2700805",
                            "ArvTime" => "14:45:00",
                            "WaitingTime" => "00:02:00",
                            "DepTime" => "14:47:00",
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "1277"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "КАПЧАГАЙ",
                            "Code" => "2700804",
                            "ArvTime" => "15:15:00",
                            "WaitingTime" => "00:03:00",
                            "DepTime" => "15:18:00",
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "1305"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "САРЫ-ОЗЕК",
                            "Code" => "2700796",
                            "ArvTime" => "17:39:00",
                            "WaitingTime" => "00:14:00",
                            "DepTime" => "17:53:00",
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "1426"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "УШ ТОБЕ",
                            "Code" => "2700760",
                            "ArvTime" => "19:49:00",
                            "WaitingTime" => "00:15:00",
                            "DepTime" => "20:04:00",
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "1537"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "МАТАЙ",
                            "Code" => "2700773",
                            "ArvTime" => "22:05:00",
                            "WaitingTime" => "00:18:00",
                            "DepTime" => "22:23:00",
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "1645"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ЛЕПСЫ",
                            "Code" => "2700769",
                            "ArvTime" => "23:03:00",
                            "WaitingTime" => "00:02:00",
                            "DepTime" => "23:05:00",
                            "Sign" => null,
                            "Days" => "01",
                            "Distance" => "1687"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "АКТОГАЙ",
                            "Code" => "2700670",
                            "ArvTime" => "00:55:00",
                            "WaitingTime" => "00:30:00",
                            "DepTime" => "01:25:00",
                            "Sign" => null,
                            "Days" => "02",
                            "Distance" => "1791"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ТАНСЫК",
                            "Code" => "2700745",
                            "ArvTime" => "02:03:00",
                            "WaitingTime" => "00:01:00",
                            "DepTime" => "02:04:00",
                            "Sign" => null,
                            "Days" => "02",
                            "Distance" => "1830"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "АЯГОЗ",
                            "Code" => "2700690",
                            "ArvTime" => "03:36:00",
                            "WaitingTime" => "00:25:00",
                            "DepTime" => "04:01:00",
                            "Sign" => null,
                            "Days" => "02",
                            "Distance" => "1924"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "УШ-БИИК",
                            "Code" => "2700733",
                            "ArvTime" => "05:08:00",
                            "WaitingTime" => "00:03:00",
                            "DepTime" => "05:11:00",
                            "Sign" => null,
                            "Days" => "02",
                            "Distance" => "1985"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ЖАРМА",
                            "Code" => "2700720",
                            "ArvTime" => "06:06:00",
                            "WaitingTime" => "00:03:00",
                            "DepTime" => "06:09:00",
                            "Sign" => null,
                            "Days" => "02",
                            "Distance" => "2033"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "БАЛЫКТЫ-КОЛ",
                            "Code" => "2700727",
                            "ArvTime" => "07:02:00",
                            "WaitingTime" => "00:01:00",
                            "DepTime" => "07:03:00",
                            "Sign" => null,
                            "Days" => "02",
                            "Distance" => "2072"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ЖАНГИЗ ТОБ",
                            "Code" => "2700810",
                            "ArvTime" => "07:34:00",
                            "WaitingTime" => "00:05:00",
                            "DepTime" => "07:39:00",
                            "Sign" => null,
                            "Days" => "02",
                            "Distance" => "2096"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ШАР",
                            "Code" => "2700722",
                            "ArvTime" => "08:36:00",
                            "WaitingTime" => "00:15:00",
                            "DepTime" => "08:51:00",
                            "Sign" => null,
                            "Days" => "02",
                            "Distance" => "2143"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "СУУК БУЛАК",
                            "Code" => "2700719",
                            "ArvTime" => "09:23:00",
                            "WaitingTime" => "00:02:00",
                            "DepTime" => "09:25:00",
                            "Sign" => null,
                            "Days" => "02",
                            "Distance" => "2173"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "ЖАНА СЕМЕЙ",
                            "Code" => "2700708",
                            "ArvTime" => "10:44:00",
                            "WaitingTime" => "00:03:00",
                            "DepTime" => "10:47:00",
                            "Sign" => null,
                            "Days" => "02",
                            "Distance" => "2251"
                        ],
                        [
                            "Title" => "ОСНОВНОЙ МАРШРУТ",
                            "Station" => "СЕМЕЙ",
                            "Code" => "2700900",
                            "ArvTime" => "11:05:00",
                            "WaitingTime" => null,
                            "DepTime" => null,
                            "Sign" => null,
                            "Days" => "02",
                            "Distance" => "2259"
                        ]
                    ]
                ]
            ]
        ];
    }
}
