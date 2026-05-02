<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Http\Resources\DoctorResource;

class DoctorController extends ApiController
{
    public function index()
    {
        $doctors = Doctor::get();
        return $this->sendSuccess(DoctorResource::collection($doctors), 'Doctor list retrieved successfully');
    }

    public function show(Doctor $doctor)
    {
        return $this->sendSuccess([new DoctorResource($doctor)], 'Doctor retrieved successfully');
    }
}
