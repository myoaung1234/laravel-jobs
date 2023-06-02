<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobPostAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => 'true',
            'message' => 'Data retrieved successfully',
            'data' => [],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
            'success' => 'true',
            'message' => 'Data retrieved successfully',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            'success' => 'true',
            'message' => 'Data retrieved successfully',
            'data' => [],
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json([
            'success' => 'true',
            'message' => 'Data updated successfully',
            'data' => [],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


        return response()->json([
            'success' => 'true',
            'message' => 'Data deleted successfully',
            'data' => [],
        ]);
    }
}
