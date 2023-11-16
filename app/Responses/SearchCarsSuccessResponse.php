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
        $trains = include(base_path('data/trains.php'));

        $trainNumber = $this->request['ForwardDirection']['Train']['Number'];

        foreach ($trains as $train) {
            if ($train['Number'] === $trainNumber) {
                return $train['response'];
            }
        }

        return [];
    }
}
