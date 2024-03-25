<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class OrderController extends Controller
{

/*
public function store(Request $request)
{
    // Validate the request
    $request->validate([
        'email' => 'required|email',
        'region' => 'required',
        'prenom' => 'required',
        'nom' => 'required',
        'address' => 'required',
        'code_postal' => 'required',
        'ville' => 'required',
        'phone' => 'required',
        'mode' => 'required',
    ]);
    //the session
    $cart = $request->session()->get('cart', []);
    foreach ($cart as $item) {
    // Create a new order
    $order = new Order();
    $order->user_id = '1'; // You may use Auth::id() if you have user authentication
    $order->email = $request->input('email');
    $order->region = $request->input('region');
    $order->prenom = $request->input('prenom');
    $order->nom = $request->input('nom');
    $order->address = $request->input('address');
    $order->code_postal = $request->input('code_postal');
    $order->ville = $request->input('ville');
    $order->phone = $request->input('phone');
    $order->livraison = $request->input('mode');
    $order->product_id = $item['product_id'];
    $order->product_img = $item['image'];
    $order->product_title = $item['product_title'];
    $order->total = $item['price'];
    $order->quantity = $item['quantity'];

    // Retrieve selected products from the session


    // Save order details before creating order items
    $order->save();

    // Loop through selected products and attach them to the order
    }
    // Clear the cart session after order creation
    $request->session()->forget('cart');

    return redirect()->back()->with('success', 'Votre commande a été prise. Merci pour votre confiance!');
}
*/
public function store(Request $request)
{
    // Validate the request
    $request->validate([
        'email' => 'required|email',
        'region' => 'required',
        'prenom' => 'required',
        'nom' => 'required',
        'address' => 'required',
        'code_postal' => 'required',
        'ville' => 'required',
        'phone' => 'required',
        'livraison' => 'required',
    ]);

    // The session
    $cart = $request->session()->get('cart', []);

    foreach ($cart as $item) {
        // Retrieve the product from the database
        $product = Product::find($item['product_id']);

        // Check if the requested quantity is available in stock
        if ($product->stock >= $item['quantity']) {
            // Decrement the product stock
            $product->stock -= $item['quantity'];

            $product->save();
        }
        if($product->stock===0){
            $product->statut = 'rupture de stock';
      }
      $product->save();
        // Create a new order
        $order = new Order();
        $order->user_id = '1'; // You may use Auth::id() if you have user authentication
        $order->email = $request->input('email');
        $order->region = $request->input('region');
        $order->prenom = $request->input('prenom');
        $order->nom = $request->input('nom');
        $order->address = $request->input('address');
        $order->code_postal = $request->input('code_postal');
        $order->ville = $request->input('ville');
        $order->phone = $request->input('phone');
        $order->livraison = $request->input('livraison');
        $order->product_id = $item['product_id'];
        $order->product_img = $item['image'];
        $order->product_title = $item['product_title'];
        $order->total = $item['price']* $item['quantity'];
        $order->quantity = $item['quantity'];

        // Save order details before creating order items
        $order->save();

        // Loop through selected products and attach them to the order
    }

    // Clear the cart session after order creation
    $request->session()->forget('cart');

    return redirect()->back()->with('success', 'Votre commande a été prise. Merci pour votre confiance!');
}

public function deleteOrder($id)
{
    order::find($id)->delete();


    return redirect()->back()->with('success', 'category deleted successfully');
}



}

