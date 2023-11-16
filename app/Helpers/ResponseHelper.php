<?php

namespace App\Helpers;

class ResponseHelper
{
  public static function json($status = 200, $message, $data = [])
  {
    $response = [
      'error' => false,
      'code' => $status,
      'message' => $message,
    ];

    if ($status !== 200) {
      $response['error'] = true;
    }
    
    $response['data'] = $data;
    return response()->json($response, $status);
  }
}
