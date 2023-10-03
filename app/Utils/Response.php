<?php

namespace App\Utils;

use App\Core\Glossary\ResponseCode;
use Illuminate\Http\JsonResponse;

trait Response
{
    public function responseData($data, $message = null): JsonResponse
    {
        if ($message != null) {
            return new JsonResponse([
                'result' => true,
                'message' => $message,
                'data' => $data,
            ], ResponseCode::SUCCESS['code']);
        }
        return new JsonResponse([
            'result' => true,
            'message' => 'Success',
            'data' => $data,
        ], ResponseCode::SUCCESS['code']);
    }

    public function responseError($message = null, $status = ResponseCode::SERVERERROR['code']): JsonResponse
    {
        if ($message != null) {
            return new JsonResponse([
                'result' => false,
                'message' => $message,
            ], $status);
        }
        return new JsonResponse([
            'result' => false,
            'message' => 'Error',
        ], $status);
    }


    public function responseValidation($validation, $data = null): JsonResponse
    {
        return new JsonResponse([
            'result' => false,
            'data' => $data,
            'message' => $validation,
        ], ResponseCode::UNPROCESSABLE_ENTITY['code']);
    }
}
