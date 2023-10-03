<?php
namespace App\Http\Requests;

use App\Utils\Response;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class BaseRequest extends FormRequest
{
    use Response;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    public function failedValidation(Validator $validator): JsonResponse
    {
        $errors = $validator->errors()->first();
        throw new HttpResponseException($this->responseValidation($errors));
    }
}
