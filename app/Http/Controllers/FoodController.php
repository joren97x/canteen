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
        return view('Student.food-zone', ['foods' => Food::all()]);
    }

    public function create() {
        return view('Admin.add-food');
    }

}
