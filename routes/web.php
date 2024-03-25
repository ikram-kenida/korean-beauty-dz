<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ingredientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\cart;
use App\Models\category;
use App\Models\comment;
use App\Models\ingredient;
use App\Models\order;
use App\Models\product;
use App\Models\thumbnail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteUri;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (category $category, product $product , User $user) {
    $thumbnail = thumbnail::first();

    if (!$thumbnail) {
        $thumbnail = (object) [
            'main_img' => '', // Set default values or set them to whatever you need
           'img_2' =>'',
           'img_3' =>'',
           'phone_img' =>'',

        ];
    }
    return view('welcome',[
         'categories'=>category::all(),
         'users'=>User::all(),
           'products' => product::latest()->paginate(8)->withQueryString(),
           'promos' => product::where('statut', 'promo')->get(),
           'thumbnail'=>$thumbnail,
           'ingredients' => ingredient::with('products')->get()

    ]);


});
Route::get('/ingredient' , function(product $product){
    return view('ingredient',[

          'products' => product::latest(),


   ]);
});
Route::get('/singleProduct/{id}',function ($id){

    {
        // Fetch the product with the provided ID from the database
        $product = product::find($id);

        if (!$product) {
            // Handle the case where the product with the given ID is not found
            abort(404);
        }


        // Pass the product data to the "singleProduct" view
        return view('singleProduct', ['product' => $product, 'comments' => Comment::where('product_id', $id)->get()]);

    }
})->name('singleProduct');
Route::get('/products', function (category $category, product $product , User $user) {

    return view('products',[
         'categories'=>category::all(),
           'products' => product::latest()->get()

    ]);


});
Route::get('/peaugrace', function (Category $category, Product $product, User $user) {

    $products = Product::where('type_de_peau', 'peau grasse')->latest()->get();

    return view('products', [
        'products' => $products
    ]);

});

Route::get('/peauséche', function (Category $category, Product $product, User $user) {

    $products = Product::where('type_de_peau', 'peau séche')->latest()->get();

    return view('products', [
        'products' => $products
    ]);

});
Route::get('/peaunormale', function (Category $category, Product $product, User $user) {

    $products = Product::where('type_de_peau', 'peau normale')->latest()->get();

    return view('products', [
        'products' => $products
    ]);

});
Route::get('/peausensible', function (Category $category, Product $product, User $user) {

    $products = Product::where('type_de_peau', 'peau sensible')->latest()->get();

    return view('products', [
        'products' => $products
    ]);

});

Route::get('/search',[ProductController::class, 'search'] );

Route::get('/dashboard', [HomeController::class, 'index'

])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/home', [HomeController::class , 'index']);
Route::get('/adminHome', function (comment $comment ) {
    return view('/admin/adminHome' , ['orders'=>order::with('product')->latest()]);
}
);
Route::get('/addProducts' , function(){
    return view('/admin/addProducts',[
        'categories'=>category::all(),
        'ingredients' => ingredient::with('products')->get()

    ]);  });
    Route::get('adminProducts', function(Request $request){
        return view('/admin/products',
        ['products'=>product::latest()->get(),
        'ingredients' => ingredient::with('products')->get()
    ],

    );


    });
Route::post('/adminProducts',function(){
    return view('/admin/products',[
        'products' => Product::with('category')->get()
    ]);
});
Route::get('/adminIngredient',function(){
    return view('/admin/addIngredient',[
        'ingredients' => ingredient::all(),
        'products'=>product::all()

    ]);
});

    Route::get('/orders', function(){
        return view('/admin/orders');
    });

    Route::post('/adminHome' ,function (Request $request){

$request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'image',
            'image3' => 'image',
            'image4' => 'image',
            'category' => 'required',
          //s  'ingredient' => 'exists:ingredients',
  ]);
          $product= new product();

       $product->title=$request->input('title');
       $product->description = $request->input('description');
       $product->price = $request->input('price');
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
    $product->statut=$request->input('statut');
       $product->save();
       return redirect()->back()->with('success', 'Product added successfully');

    });
    Route::get('/addCategory',function(){
      return view('/admin/addCategory',[
        'categories' => Category::latest()->with('product')->get(),

      ]);
    })->name('addCategory');
    Route::get('/updateThumbnail',function(){
        return view('/admin/updateThumbnail',);
    });


    Route::post('/addCategory', function (Request $request) {
        $request->validate([
            'title' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $category = new Category();

        $category->title = $request->input('title');

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailName = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move('images', $thumbnailName);
            $category->thumbnail = $thumbnailName;
        }

        $category->save();
        return redirect()->back()->with('success', 'Category added successfully');
    });

    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
    Route::delete('/products/{product}', [ProductController::class,'destroy'])->name('products.destroy');
    Route::get('/products/{product}', [ProductController::class,'destroy'])->name('products.destroy');
    Route::delete('/categories/{category}', [ProductController::class,'delete' ])->name('categories.delete');
    Route::get('/categories/{category}', [ProductController::class,'delete' ])->name('categories.delete');
    Route::delete('/carts/{cart}', [ProductController::class,'deleteCart' ])->name('carts.deleteCart');
    Route::get('/carts/{cart}', [ProductController::class,'deleteCart' ])->name('carts.deleteCart');

//Route::patch('/products/{product}', [ProductController::class,'edit'])->name('posts.edit');

require __DIR__.'/auth.php';



//updating
//category
Route::get('/admin/categories/{category}/edit', [CategoryController::class,'edit'])->name('categories.edit');
Route::put('/admin/categories/{category}',[CategoryController::class,'update'] )->name('categories.update');
Route::put('/addCategory',function(){
    return view('admin.addCategory',
    ['categories'=>category::latest()->with('product')->get()]);
});
//product
Route::get('/admin/products/{product}/edit', [CategoryController::class,'editP','categories'=>category::all(),
'ingredients' => ingredient::with('products')->get()])->name('products.editP');
Route::put('/admin/products/{product}',[CategoryController::class,'updateP' , 'ingredients' => ingredient::with('products')->get() ] )->name('products.updateP');


Route::get('/categoryProducts/{category}',function(Category $category){


    return view('categoryProducts', [
          'products' =>  $category->product ,


    ]);


});
Route::get('/ingredientProducts/{ingredient}',function(ingredient $ingredient){


    return view('ingredient', [
        'ingredient' => $ingredient,
           'products'=>product::latest()->get(),
           'ingredients'=>ingredient::latest()->get(),


    ]);


});

Route::get('/panier' , function(){
    return view('cart');
});

Route::post('addCart/{id}',[HomeController::class,'addCart']);
Route::get('/removeCartItem/{id}', [HomeController::class , 'removeCartItem'])->name('removeCartItem');

Route::get('/order' , function(){
return view('order');
});
Route::post('/order' , [OrderController::class , 'store']);
Route::get('/adminOrders',function(){
    return view('admin.orders',[
       'orders'=>order::latest()->get(),


    ]);
});
Route::get('/logout' , [AuthenticatedSessionController::class , 'destroy']);


// routes/web.php

Route::patch('/update-order/{order}', [HomeController::class , 'updateO'])->name('update.order');
Route::delete('/orders/{id}', [OrderController::class, 'deleteOrder'])->name('orders.delete');
Route::get('/orders/{id}', [OrderController::class, 'deleteOrder'])->name('orders.delete');
Route::post('/editThumbnail', function (Request $request) {
    $request->validate([
        'main_img' => 'image',
        'img_2' => 'image',
        'img_3' => 'image',
        'phone_img' => 'image',
    ]);

    $thumbnailId = 1; // Assuming the ID is always 1
    $thumbnail = Thumbnail::find($thumbnailId);

    if (!$thumbnail) {
        return redirect()->back()->with('error', "Thumbnail not found.");
    }

    if ($request->hasFile('thumbnail1')) {
        $image1 = $request->file('thumbnail1');
        $image1Name = time() . '_image1.' . $image1->getClientOriginalExtension();
        $image1->move('images', $image1Name);
        $thumbnail->main_img = $image1Name;
    }

    if ($request->hasFile('thumbnail2')) {
        $image2 = $request->file('thumbnail2');
        $image2Name = time() . '_image2.' . $image2->getClientOriginalExtension();
        $image2->move('images', $image2Name);
        $thumbnail->img_2 = $image2Name;
    }

    if ($request->hasFile('thumbnail3')) {
        $image3 = $request->file('thumbnail3');
        $image3Name = time() . '_image3.' . $image3->getClientOriginalExtension();
        $image3->move('images', $image3Name);
        $thumbnail->img_3 = $image3Name;
    }

    if ($request->hasFile('thumbnail4')) {
        $image4 = $request->file('thumbnail4');
        $image4Name = time() . '_image4.' . $image4->getClientOriginalExtension();
        $image4->move('images', $image4Name);
        $thumbnail->phone_img = $image4Name;
    }

    $thumbnail->save();
    return redirect()->back()->with('success', "l'image est modifiée ! ");
});
Route::post('/store-ingredient', [ingredientController::class, 'storeIngredient'])->name('store-ingredient');

Route::post('/products/comments', [HomeController::class, 'add_comment']);
Route::delete('/deleteIngredient',  [ingredientController::class , 'deleteIng'])->name('deleteIngredient');
Route::get('/deleteIngredient/{ingredient}',  [ingredientController::class , 'deleteIng'])->name('deleteIngredient');
Route::get('/admin/ingredients/{ingredient}/edit', [IngredientController::class, 'editI'])->name('ingredients.editI');
Route::put('/admin/updateIngredient/{ingredient}', [IngredientController::class, 'update'])->name('ingredients.update');

