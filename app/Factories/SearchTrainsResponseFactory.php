<?php

namespace App\Factories;

use App\Responses\ResponseEntity;
use App\Responses\SearchTrainsSuccessResponse;
use Exception;

class SearchTrainsResponseFactory
{
    /**
     * @throws Exception
     */
    public function createResponse($type, $request): ResponseEntity
    {
        switch ($type) {
            case 'success':
                return new SearchTrainsSuccessResponse($request);
            default:
                throw new Exception('Invalid response type');
        }
    }
}
