<?php

namespace App\Http\Controllers;

use App\Models\ingredient ;
use Illuminate\Http\Request;

class ingredientController extends Controller
{

public function storeIngredient(Request $request, Ingredient $ingredient)
{
    $validatedData = $request->validate([
        'title' => 'required|string',
        'image' => 'required',
        'description' => 'required',
        'combos' => 'array|max:5', // Ensure 'combos' is an array and has at most 5 elements
    ]);

    $ingredient->title = $request->input('title');
    $ingredient->description = $request->input('description');

    // Handle image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_image.' . $image->getClientOriginalExtension();
        $image->move('images', $imageName);
        $ingredient->image = $imageName;
    }

    // Handle combos
    $combos = $request->input('combos', []);

    // Ensure there are at most 5 combos
    if (count($combos) > 5) {
        return redirect()->back()->with('error', 'Vous pouvez sélectionner seulement 5 ingrédients.');
    }

    // Save the chosen ingredient IDs in combos
    foreach ($combos as $index => $comboId) {
        $comboKey = 'combo' . ($index + 1);
        $ingredient->$comboKey = $comboId;
    }

    $ingredient->save();

    return redirect()->back()->with('success', 'Ingredient created successfully.');
}

public function deleteIng(ingredient $ingredient){
$ingredient->delete();
return redirect()->back()->with('success', 'Ingredient supprimé.');
}

// IngredientController.php
public function editI(ingredient $ingredient)
{

    return view('admin.editIngredient', compact('ingredient'),['ingredients'=>ingredient::all()]);
}
public function update(Request $request, Ingredient $ingredient)
{
    $validatedData = $request->validate([
        'title' => 'required|string',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'combos' => 'array|max:5',
    ]);

    $ingredient->title = $request->input('title');
    $ingredient->description = $request->input('description');

    // Handle image upload if provided
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_image.' . $image->getClientOriginalExtension();
        $image->move('images', $imageName); // Adjust the directory as needed
        $ingredient->image = $imageName;
    }

    // Update combos
    $combos = $request->input('combos', []);

    // Ensure there are at most 5 combos
    if (count($combos) > 5) {
        return redirect()->back()->with('error', 'Vous pouvez sélectionner seulement 5 ingrédients.');
    }

    // Save the chosen ingredient IDs in combos
    foreach ($combos as $index => $comboId) {
        $comboKey = 'combo' . ($index + 1);
        $ingredient->$comboKey = $comboId;
    }

    $ingredient->save();

    return redirect()->back()->with('success', 'Ingredient updated successfully.');
}

}
