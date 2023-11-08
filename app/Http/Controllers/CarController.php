<?php

namespace App\Http\Controllers;

use App\Factories\GetTrainRoutesResponseFactory;
use App\Factories\SearchCarsResponseFactory;
use App\Factories\SearchTrainsResponseFactory;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use PHPUnit\Util\Json;

class CarController extends Controller
{

    /**
     * @throws ValidationException
     */
    public function searchTrains(Request $request, SearchTrainsResponseFactory $responseFactory): JsonResponse
    {
        $this->validate($request, [
            'ShowWithoutPlaces'                    => 'boolean',
            'StationFrom'                          => 'string',
            'StationTo'                            => 'string',
            'ForwardDirection.DateTimeFrom'        => 'date',
            'ForwardDirection.DateTimeTo'          => 'date',
            'ForwardDirection.IsArrivalDateTime'   => 'boolean',
            'BackwardDirection.DateTimeFrom'       => 'date',
            'BackwardDirection.DateTimeTo'         => 'date',
            'BackwardDirection.IsArrivalDateTime'  => 'boolean',
        ]);

        try {
            $responseGenerator = $responseFactory->createResponse('success', $request);
            $response = $responseGenerator->generate();
            return response()->json($response);
        } catch (Exception $e) {
            return response()->json([], 500);
        }
    }

    public function searchCars(Request $request, SearchCarsResponseFactory $responseFactory): JsonResponse
    {
        $this->validate($request, [
            'ShowWithoutPlaces'                => 'boolean',
            'DetailNumPlaces'                  => 'boolean',
            'DetailTypePlaces'                 => 'boolean',
            'StationFrom'                      => 'string',
            'StationTo'                        => 'string',
            'ForwardDirection.DepDate.Value'   => 'date',
            'ForwardDirection.DepTime'         => '',
            'ForwardDirection.Train.Number'    => 'string',
            'BackwardDirection.DepDate.Value'  => 'date',
            'BackwardDirection.DepTime'        => 'date',
            'BackwardDirection.Train.Number'   => 'string',
        ]);

        try {
            $responseGenerator = $responseFactory->createResponse('success', $request);
            $response = $responseGenerator->generate();
            return response()->json($response);
        } catch (Exception $e) {
            return response()->json([], 500);
        }
    }

    public function getTrainRoutes(Request $request, GetTrainRoutesResponseFactory $responseFactory) {
        $this->validate($request, [
            'TrainRouteVersion' => 'numeric',
            'TrainNumber'       => 'string',
            'Date'              => 'date',
            'Standard'          => 'boolean',
        ]);

        try {
            $responseGenerator = $responseFactory->createResponse($request['TrainNumber'], $request);
            $response = $responseGenerator->generate();
            return response()->json($response);
        } catch (Exception $e) {
            return response()->json([], 500);
        }
    }
}
