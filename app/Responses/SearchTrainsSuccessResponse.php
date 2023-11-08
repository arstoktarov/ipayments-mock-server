<?php

namespace App\Responses;

use Illuminate\Http\Request;

class SearchTrainsSuccessResponse extends ResponseEntity
{
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    public function generate(): array
    {
        return [
            "ShowWithoutPlaces" => false,
            "ForwardDirection" => [
                "PassRouteFrom" => "АЛМАТЫ 1",
                "PassRouteTo" => "АКТОГАЙ",
                "PassRouteCodeFrom" => "2700002",
                "PassRouteCodeTo" => "2700670",
                "NotAllTrains" => false,
                "Trains" => [
                    [
                        "Date" => "2023-11-16T00:00:00",
                        "TrainsCollection" => [
                            [
                                "Number" => "031Х",
                                "Number2" => "032*Х",
                                "Type" => "СК",
                                "Route" => [
                                    "АЛМАТЫ 2",
                                    "ПАВЛОДАР"
                                ],
                                "DepartureDateTime" => "2023-11-16T05:25:00",
                                "DepartureStop" => "00:35:00",
                                "ArrivalDateTime" => "2023-11-16T16:37:00",
                                "ArrivalStop" => "00:28:00",
                                "TimeInWay" => "11:12:00",
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
                                "Comments" => [
                                ],
                                "Cars" => [
                                    [
                                        "Type" => 2,
                                        "FreeSeats" => 141,
                                        "Seats" => [
                                            "SeatsUndef" => 141,
                                            "SeatsDn" => null,
                                            "SeatsUp" => null,
                                            "SeatsLateralDn" => null,
                                            "SeatsLateralUp" => null,
                                            "FreeComp" => null
                                        ],
                                        "Tariffs" => [
                                            [
                                                "ClassService" => [
                                                    "Type" => "2С",
                                                    "Value" => null
                                                ],
                                                "ClassServiceInt" => null,
                                                "AddSigns" => null,
                                                "TariffValue" => 3313,
                                                "TariffValue2" => null,
                                                "TariffService" => null,
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
                                                "ElRegPossible" => [
                                                    "UK" => false,
                                                    "AKP" => false
                                                ],
                                                "Seats" => [
                                                    "SeatsUndef" => 141,
                                                    "SeatsDn" => null,
                                                    "SeatsUp" => null,
                                                    "SeatsLateralDn" => null,
                                                    "SeatsLateralUp" => null,
                                                    "FreeComp" => null
                                                ],
                                                "BoardingForm" => 0
                                            ]
                                        ]
                                    ],
                                    [
                                        "Type" => 4,
                                        "FreeSeats" => 169,
                                        "Seats" => [
                                            "SeatsUndef" => null,
                                            "SeatsDn" => 75,
                                            "SeatsUp" => 94,
                                            "SeatsLateralDn" => null,
                                            "SeatsLateralUp" => null,
                                            "FreeComp" => 35
                                        ],
                                        "Tariffs" => [
                                            [
                                                "ClassService" => [
                                                    "Type" => "2Д",
                                                    "Value" => null
                                                ],
                                                "ClassServiceInt" => null,
                                                "AddSigns" => null,
                                                "TariffValue" => 8600,
                                                "TariffValue2" => null,
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
                                                "ElRegPossible" => [
                                                    "UK" => false,
                                                    "AKP" => false
                                                ],
                                                "Seats" => [
                                                    "SeatsUndef" => null,
                                                    "SeatsDn" => 75,
                                                    "SeatsUp" => 94,
                                                    "SeatsLateralDn" => null,
                                                    "SeatsLateralUp" => null,
                                                    "FreeComp" => 35
                                                ],
                                                "BoardingForm" => 0
                                            ]
                                        ]
                                    ],
                                    [
                                        "Type" => 6,
                                        "FreeSeats" => 4,
                                        "Seats" => [
                                            "SeatsUndef" => null,
                                            "SeatsDn" => 2,
                                            "SeatsUp" => 2,
                                            "SeatsLateralDn" => null,
                                            "SeatsLateralUp" => null,
                                            "FreeComp" => 2
                                        ],
                                        "Tariffs" => [
                                            [
                                                "ClassService" => [
                                                    "Type" => "1Б",
                                                    "Value" => null
                                                ],
                                                "ClassServiceInt" => null,
                                                "AddSigns" => "У0",
                                                "TariffValue" => 9355,
                                                "TariffValue2" => null,
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
                                                "ElRegPossible" => [
                                                    "UK" => false,
                                                    "AKP" => false
                                                ],
                                                "Seats" => [
                                                    "SeatsUndef" => null,
                                                    "SeatsDn" => 2,
                                                    "SeatsUp" => 2,
                                                    "SeatsLateralDn" => null,
                                                    "SeatsLateralUp" => null,
                                                    "FreeComp" => 2
                                                ],
                                                "BoardingForm" => 0
                                            ]
                                        ]
                                    ]
                                ],
                                "ArrivalDiffTime" => 0,
                                "DepartureDiffTime" => 0,
                                "DepartureLocalDateTime" => "2023-11-16T05:25:00",
                                "ArrivalLocalDateTime" => "2023-11-16T16:37:00",
                                "ShowLocalDepartureTime" => false,
                                "ShowLocalArrivalTime" => false,
                                "IsTarifficated" => false
                            ],
                        ]
                    ]
                ]
            ],
            "BackwardDirection" => null
        ];
    }
}
