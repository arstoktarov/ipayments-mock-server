<?php

namespace App\Responses;

use Illuminate\Http\Request;

abstract class ResponseEntity
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    abstract function generate(): array;

}
