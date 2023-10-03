<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Http\JsonResponse;

class ClientController extends Controller
{
    public function store(ClientRequest $request): JsonResponse
    {
        $client = new Client();
        $client->fill($request->all());
        if ($client->save()) {
            return $this->responseData($client);
        }
        return $this->responseError();
    }
}
