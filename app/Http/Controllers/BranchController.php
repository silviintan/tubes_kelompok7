<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Product;

use Illuminate\Http\Request;

class BranchController extends Controller
{
  
  
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'phone' => 'required|string|max:15',
        ]);

        $branch = Branch::create($validated);
        return response()->json($branch, 201);
    }
        
}