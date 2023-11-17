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
        $randNum = random_int(10000,100000);
        $image = $randNum . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('/images/uploads'), $image);
        $food['image'] = $image;
        Food::create($food);
        return view('admin.add-foods');
    }

    public function update(Food $food, Request $request) {
        $updatedFood = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required'
        ]);
        $request->file('image')->move(public_path('/images/uploads'), $request->file('image')->getClientOriginalName());
        $food->name = $updatedFood['name'];
        $food->description = $updatedFood['description'];
        $food->price = $updatedFood['price'];
        $food->image = $updatedFood['image'];
        $food->update();
        return redirect('/admin/view-foods');
    }

    public function destroy(Food $food) {
        $food->delete();
        return redirect('/admin/view-foods');
    }

    public function create() {
        return view('admin.add-foods');
    }

    public function index() {
        return view('admin.view-foods', ['foods' => Food::all()]);
    }

    public function edit(Food $food) {
        return view('admin.edit-food', ['food' => $food]);
    }
    
    public function delete(Food $food) {
        return view('admin.delete-food', ['food' => $food]);
    }

}
