<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CovidCaseResource;
use App\Models\CovidCase;
use Illuminate\Http\Request;

class CovidCaseController extends Controller
{
    public function index()
    {
        return CovidCaseResource::collection(CovidCase::all());
    }
}
