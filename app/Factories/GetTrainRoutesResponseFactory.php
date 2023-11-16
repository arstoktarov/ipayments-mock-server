<?php

namespace App\Factories;

use App\Responses\GetTrainRoutes004Response;
use App\Responses\GetTrainRoutes022TResponse;
use App\Responses\GetTrainRoutesDefaultResponse;
use App\Responses\ResponseEntity;
use Exception;

class GetTrainRoutesResponseFactory
{

    /**
     * @throws Exception
     */
    public function createResponse($type, $request): ResponseEntity
    {

        switch ($type) {
            case '022Т':
                return new GetTrainRoutes022TResponse($request);
            case '004Ц':
                return new GetTrainRoutes004Response($request);
            default:
                return new GetTrainRoutesDefaultResponse($type, $request);
        }
    }
}
