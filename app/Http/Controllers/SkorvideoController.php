<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skorvideo;

class SkorvideoController extends Controller
{
    public function index()
    {
        // Fetch all records from skorvideo table
        $skorvideos = Skorvideo::all();

        // Pass the data to the view
        return view('hasil-test', compact('skorvideos'));
    }
}
