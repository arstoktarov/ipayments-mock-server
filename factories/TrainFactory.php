<?php

namespace factories;

use Entities\Train;

class TrainFactory
{

    public function createTrain($number, $carGroups) {
        return new Train($number, $carGroups);
    }

}
