<?php

namespace App\Core\Glossary;

class ResponseCode extends BasicEnum
{
    const SUCCESS = ['code' => 200, 'message' => 'Success'];
    const CREATE = ['code' => 201, 'message' => 'Created'];
    const NO_CONTENT = ['code' => 204, 'message' => 'No content'];
    const BAD_REQUEST = ['code' => 400, 'message' => 'Bad request'];
    const UNAUTHORIZED = ['code' => 401, 'message' => 'Unauthorized'];
    const FORBIDDEN = ['code' => 403, 'message' => 'Forbidden'];
    const NOTFOUND = ['code' => 404, 'message' => 'Not Found'];
    const METHOD_NOT_ALLOWED = ['code' => 405, 'message' => 'Method Not Allowed'];
    const UNACCEPTABLE = ['code' => 406, 'message' => 'Not Acceptable'];
    const UNSUPPORTED_MEDIA_TYPE = ['code' => 415, 'message' => 'Unsupported Media Type'];
    const UNPROCESSABLE_ENTITY = ['code' => 422, 'message' => 'Unprocessable Entity'];
    const SERVERERROR = ['code' => 500, 'message' => 'Internal Server Error'];
}
