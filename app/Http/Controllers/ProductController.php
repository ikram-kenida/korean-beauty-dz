<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function search(){
        $search_text = request('query');

        $products= product::where('title' , 'like' , '%' . $search_text. '%')->get();
        return view('products',compact('products'));
    }
    public function destroy(product $product)
{
    $product->delete();
    return redirect()->back()->with('success', 'Product deleted successfully');
}
public function delete(category $category,product $products)
{ $products->delete();
    $category->delete();

    return redirect()->back()->with('success', 'category deleted successfully');
}

public function deleteCart($id)
{
    cart::find($id)->delete();


    return redirect()->back()->with('success', 'Order deleted successfully');
}




}
