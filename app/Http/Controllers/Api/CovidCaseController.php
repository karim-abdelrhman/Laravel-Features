<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CovidCaseResource;
use App\Models\CovidCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CovidCaseController extends Controller
{
    public function index()
    {
        return CovidCaseResource::collection(Cache::remember('covid-cases', 60*60*24, function () {
            return CovidCase::all();
        }));
    }
}
