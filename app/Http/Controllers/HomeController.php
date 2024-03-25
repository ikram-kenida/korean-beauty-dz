<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\comment;
use App\Models\order;
use App\Models\product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{

    public function index(){
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->admin) {
                return view('admin.adminHome' ,  ['comments'=>comment::all(),
                'users'=>User::all(),
                'orders'=>order::latest()->get()
            ]);

            } else {
                return view('dashboard');
            }
        } else {
            return redirect()->route('login');
        }

        }





public function addCart(Request $request, $id)
{
    // Retrieve the product details
    $product = Product::find($id);

    // Check if the cart exists in the session, otherwise initialize it
    $cart = Session::get('cart', []);

    // Check if the product is already in the cart
    $existingItemKey = array_search($id, array_column($cart, 'product_id'));

    // Check if the stock is greater than 0
    if ($product->stock >= $request->quantity  || $product->statut != 'rupture de stock') {
        if ($existingItemKey !== false) {
            // Product is already in the cart, update the quantity
            $cart[$existingItemKey]['quantity'] += $request->quantity;
        } else {
            // Product is not in the cart, add it
            $cartItem = [
                'product_id' => $id,
                'product_title' => $product->title,
                'price' => $product->price,
                'image' => $product->main_img,
                'quantity' => $request->quantity,
            ];

            $cart[] = $cartItem;
        }



        // Store the updated cart in the session
        Session::put('cart', $cart);

        // Redirect to the cart page or wherever you want
        return redirect('/panier')->with('success', 'Item added to cart.');
    } else {
        // Redirect with an error message if the stock is not sufficient
        return redirect()->back()->with('error', 'Quantité non disponible pour le moment.');
    }
}

public function updateO(Request $request, order $order)
{
    $request->validate([
        'statut' => 'required|in:livré,annulé',
]);


   $order->statut=$request->input('statut');

   $order->save();

    return redirect()->back()->with('success', 'Order statue updated successfully.');
}
//delete from cart
public function removeCartItem($id)
{
    // Check if the cart exists in the session
    if (Session::has('cart')) {
        // Retrieve the cart from the session
        $cart = Session::get('cart');

        // Find the key of the item to be removed
        $itemKey = array_search($id, array_column($cart, 'product_id'));

        // If the item is found, remove it from the cart
        if ($itemKey !== false) {
            unset($cart[$itemKey]);

            // Update the cart in the session
            Session::put('cart', $cart);

            return redirect('/panier')->with('success', 'Item removed from cart.');
        }
    }

    return redirect('/panier')->with('error', 'Item not found in cart.');
}


public function add_comment(Request $request ){
    $request->validate([
        'text' => 'required|string',
        'product_id' => 'required|exists:products,id', // Assuming products table has 'id' field
    ]);

    // Create a new comment
    $comment = new Comment();
    $comment->product_id = $request->input('product_id');
    $comment->text = $request->input('text');

    // Save the comment
    $comment->save();

    return redirect()->back()->with('success', 'Merci de votre commentaire ! ');

}



    }



