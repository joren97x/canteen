<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class FoodController extends Controller
{
    //
    public function store(Request $request) {
        $food = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required'
        ]);
        Food::create($food);
        return view('admin.add-food');
    }

    public function create() {
        return view('admin.add-food');
    }

}
