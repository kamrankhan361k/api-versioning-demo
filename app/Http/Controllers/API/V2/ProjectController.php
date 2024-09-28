<?php

namespace App\Http\Controllers\API\V2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // Sample response for v2
        return response()->json(['message' => 'List of Projects from API V2']);
    }

    public function store(Request $request)
    {
        // Sample response for creating a project in v2
        return response()->json(['message' => 'Project Created - API V2 with new features']);
    }
}
