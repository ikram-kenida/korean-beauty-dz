<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\ingredient;
use App\Models\product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //


public function edit(category $category)
{
    return view('admin.editCategory', compact('category'));
}

public function update(Request $request, Category $category)
{
    $request->validate([
        'title' => 'required',
        'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $category->title = $request->input('title');

    if ($request->hasFile('thumbnail')) {
        $thumbnail = $request->file('thumbnail');
        $thumbnailName = time() . '.' . $thumbnail->getClientOriginalExtension();
        $thumbnail->move('images', $thumbnailName);
        $category->thumbnail = $thumbnailName;
    }

    $category->save();

    return redirect()->route('addCategory', $category)->with('success', 'Category updated successfully.');
}



public function editP(product $product)
{
    return view('admin.editProduct', compact('product'),[
        'categories'=>category::all() ,
        'ingredients'=>ingredient::latest()->get(),
    ]);
}

public function updateP(Request $request, product $product)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'price' => 'required|numeric',
        'image1' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'image2' => 'image',
        'image3' => 'image',
        'image4' => 'image',
        'category' => 'required',
        'stock' => 'required',
        'ingredient' => 'exists:ingredients',
]);


   $product->title=$request->input('title');
   $product->description = $request->input('description');
   $product->price = $request->input('price');
   $product->statut = $request->input('statut');
   $product->old_price = $request->input('oldPrice');
   $product->category_id = $request->input('category');
   $product->stock = $request->input('stock');
   $product->ingredient = $request->input('ingredient');
       $product->type_de_peau = $request->input('type');
   if ($request->hasFile('image1')) {
    $image1 = $request->file('image1');
    $image1Name = time() . '_image1.' . $image1->getClientOriginalExtension();
    $image1->move('images', $image1Name);
    $product->main_img = $image1Name;
}
if ($request->hasFile('image2')) {
$image2 = $request->file('image2');
$image2Name = time() . '_image2.' . $image2->getClientOriginalExtension();
$image2->move('images', $image2Name);
$product->img_2 = $image2Name;

}
if ($request->hasFile('image3')) {
   $image3 = $request->file('image3');
   $image3Name = time() . '_image3.' . $image3->getClientOriginalExtension();
   $image3->move('images', $image3Name);
   $product->img_3 = $image3Name;
}
if ($request->hasFile('image4')) {
   $image4 = $request->file('image4');
   $image4Name = time() . '_image4.' . $image4->getClientOriginalExtension();
   $image4->move('images', $image4Name);
   $product->img_4 = $image4Name;
}
   $product->save();

    return redirect()->back()->with('success', 'Produit modifié .');
}


}
