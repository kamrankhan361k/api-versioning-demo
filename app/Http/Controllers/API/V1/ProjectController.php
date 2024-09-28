<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // Sample response for v1
        return response()->json(['message' => 'List of Projects from API V1']);
    }

    public function store(Request $request)
    {
        // Sample response for creating a project in v1
        return response()->json(['message' => 'Project Created - API V1']);
    }
}
