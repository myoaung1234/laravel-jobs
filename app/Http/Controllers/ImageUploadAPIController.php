<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadAPIController extends Controller
{


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            $filename = time().'.'.$request->file('image')->extension();
            $path = $request->file('image')->storeAs('public/banners/', $filename);
            return url("storage/banners/".$filename);

    }
}
