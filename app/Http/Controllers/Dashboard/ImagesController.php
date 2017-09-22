<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImagesController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['file' => 'required|mimes:jpg,jpeg,png,gif']);

        $path = $request->file('file')->store(
            '/images/uploads/'.$request->user()->id, 'uploads'
        );

        return response()->json([
            'success' => true,
            'location' => '/'.$path,
        ]);
    }
}
