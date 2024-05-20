<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create(Request $request)
    {
        dd($request->all());
        
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required',
            'content' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'status' => 'nullable|boolean', // Assuming status is optional and boolean
        ]);

        $create = DB::table('blog_posts')->create([
            'name' => $request->input('name'),
            'content' => $request->input('content'),
            'short_description' => $request->input('short_description'),
            'description' => $request->input('description'),
            'status' => $request->input('status', false),

        ]);
    }
}
