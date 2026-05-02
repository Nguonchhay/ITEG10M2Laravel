<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function sendSuccess($data, $message, $status = 200)
    {
        return response()->json([
            "status" => $status,
            "message" => $message,
            "data" => $data
        ]);
    }

    public function sendError($message, $status = 400, $data = [])
    {
        return response()->json([
            "status" => $status,
            "message" => $message,
            "data" => $data
        ]);
    }
}

