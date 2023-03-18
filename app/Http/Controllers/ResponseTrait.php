<?php

namespace App\Http\Controllers;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;

trait ResponseTrait
{
    public function successResponse($data = [], $message = ''): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data'    => $data,
            'message' => $message,
        ]);
    }

    public function errorResponse($message = '', $data = [], $status = 400): JsonResponse
    {
        return response()->json([
            'success' => false,
            'data'    => $data,
            'message' => $message,
        ], $status);
    }

    public function failedValidation(Validator $validator)
    {
        if ($validator->fails()) {
//            throw new HttpResponseException(self::errorResponse($validator->errors()));
            return self::errorResponse($validator->errors());
        }
    }
}
