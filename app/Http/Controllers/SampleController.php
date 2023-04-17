<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function apiHello (Request $request) {
        return response()->json(
            [
                'morning' => $request->input('morning'),
                'noon' => $request->input('noon'),
            ]
        );
    }
}
