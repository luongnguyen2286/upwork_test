<?php

namespace App\Http\Requests;

class ClientRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'client_id' => 'required|uuid',
            'email' => 'required|email',
            'phone_number' => 'nullable',
            'name' => 'required',
            'comment' => 'required|max:1000'
        ];
    }
}
