<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadAPIController extends Controller
{


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'image' => 'required|mimes:jpg,jpeg,png,webp',
        ]);

        if( $validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors(),
            ], 400);
        }

        $filename = time().'.'.$request->file('image')->extension();
        $path = $request->file('image')->storeAs('public/companies/', $filename);
        $url = url("storage/companies/".$filename);

        return response()->json([
            'success'=>true,
            'message'=> 'Successfully Uploaded',
            'image'=>$url
        ]);
    }
}
