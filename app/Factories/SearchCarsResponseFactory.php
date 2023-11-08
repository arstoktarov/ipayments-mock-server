<?php

namespace App\Factories;

use App\Responses\ResponseEntity;
use App\Responses\SearchCarsSuccessResponse;
use Exception;

class SearchCarsResponseFactory
{
    /**
     * @throws Exception
     */
    public function createResponse($type, $request): ResponseEntity
    {
        switch ($type) {
            case 'success':
                return new SearchCarsSuccessResponse($request);
            default:
                throw new Exception('Invalid response type');
        }
    }
}
