<?php

namespace App\Helpers;

/**
 * Format response. 
 */

 class ResponseFormatter
 {
    /**
     * API Response
     * 
     * @var array
     */

     protected static $response = [
        'meta' => [
            'code' => 200,
            'status' => 'succes',
            'message' => null,
        ],
        'data' => null,
    ];

    /**
     * Give succes responsive. 
     *
     */

     public static function succes($data= null, $message = null)
     {
        self::$response['meta']['message'] = $message;
        self::$response['data'] = $data;

        return response()->json(self::$response, self::$response['meta']['code']);
     }

    /**
     * Give succes responsive. 
     */
    public static function error($data= null, $message = null, $code = 400)
    {
        self::$response['meta']['status'] = 'error';
        self::$response['meta']['code'] = $code;
        self::$response['meta']['message'] = $message;
        self::$response['data'] = $data;
        
        return response()->json(self::$response, self::$response['meta']['code']);
    }

 }