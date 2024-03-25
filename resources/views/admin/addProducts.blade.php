<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Korean beauty Algeria</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="/adminStyle/css/style.css">
    <script src="https://kit.fontawesome.com/042bea9eca.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- =============== Navigation ================ -->
    <x-adminNav />

        <!-- ========================= Main ==================== -->
        <div class="main">

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div>
            <div>
                <div class="topbar">
                    <div class="toggle">
                        <ion-icon name="menu-outline"></ion-icon>
                    </div>

<div style="margin-top: 1400px;margin-bottom:400px">

<div class="container">
          <h1  class="text-center text-secondary mt-5">Ajouter produit</h1>
          <form action="/adminHome" method="POST" class="row g-3 text-center mt-2" style="border: 3px solid gray;padding:20px;border-radius:10px;margin-bottom-100px;" enctype="multipart/form-data">
           @csrf
                <div class="col-md-12 text-center ">
                  <label for="title" class="form-label">titre</label>
                  <input type="text" class="form-control"  name="title" id="title">   @error('title')
                   <p style="color: red"> {{$message}}</p>
                @enderror
                </div>

                <div class="col-md-12">
                  <label for="inputdescription" class="form-label">Description</label>
                  <input type="text" class="form-control" id="description" name="description">
                    @error('description')
                <p style="color: red"> {{$message}}</p>
             @enderror
                </div>

                <div class="col-6">
                  <label for="inputAddress" class="form-label">prix</label>
                  <input type="number" class="form-control" id="prix" name="price">

                @error('price')
                <p style="color: red"> {{$message}}</p>
             @enderror   </div>
                <div class="col-6">
                  <label for="inputAddress2" class="form-label">prix ancien</label>
                  <input type="number" class="form-control" id="oldPrice" name="oldPrice" >
                </div>

                <div class="col-md-6">
                  <label for="inputCity" class="form-label"> image principale</label>
                  <input type="file" class="form-control" id="image" name="image1">

                @error('image1')
                <p style="color: red"> {{$message}}</p>
             @enderror  </div>

                <div class="col-md-6">
                    <label for="inputCity" class="form-label">  image 2</label>
                    <input type="file" class="form-control" id="image" name="image2">
                    @error('image2')
                    <p style="color: red"> {{$message}}</p>
                 @enderror
                  </div>
                  <div class="col-md-6">
                    <label for="inputCity" class="form-label"> image 3</label>
                    <input type="file" class="form-control" id="image" name="image3">
                    @error('image3')
                    <p style="color: red"> {{$message}}</p>
                 @enderror
                  </div>
                  <div class="col-md-6">
                    <label for="inputCity" class="form-label">  image 4</label>
                    <input type="file" class="form-control" id="image" name="image4">
                    @error('image4')
                    <p style="color: red"> {{$message}}</p>
                 @enderror
                  </div>

                <div class="col-md-6">
                  <label for="" class="form-label">Catégorie</label>
                  <select id="category" class="form-select" name="category">
                    <option value="">choisir une catégorie </option>
                    @foreach ($categories as $category)
                          <option selected value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach


                  </select>

                @error('category')
                <p style="color: red"> {{$message}}</p>
             @enderror   </div>

             <div class="col-md-6">
                <label for="" class="form-label">Ingrédient</label>
                <select id="ingredient" class="form-select" name="ingredient">
                    <option value="">choisir un ingredient </option>
                  @foreach ($ingredients as $ingredient)
                        <option selected value="{{$ingredient->id}}">{{$ingredient->title}}</option>
                  @endforeach


                </select>

              @error('ingredient')
              <p style="color: red"> {{$message}}</p>
           @enderror   </div>
           <div class="col-md-6">
            <label for="" class="form-label">Type de peau</label>
            <select id="type_de_peau" class="form-select" name="type">
              <option value="peau normale">peau normale</option>
              <option value="peau sèche">peau sèche</option>
              <option value="peau grasse">peau grasse</option>
              <option value="peau mixte">peau mixte</option>
              <option value="peau sensible">peau sensible</option>
            </select>

         </div>
             <div class="col-md-6">
                <label for="" class="form-label">statut</label>
             <select class="form-select" aria-label="Default select example" name="statut">

                <option value="en stock">en stock</option>
                <option value="rupture de stock">reupture de stock</option>
                <option value="soon">soon !</option>
                <option value="promo">promo</option>
              </select></div>
              <div class="col-12">
                <label for="inputAddress2" class="form-label">La quantité disponible</label>
                <input type="number" class="form-control" id="stock" name="stock" >
              </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-secondary mt-2">Ajouter le produit</button>
                </div>

          </form></div></div></div>
        </div>
    </div>
        </div>
    <!-- =========== Scripts =========  -->
    <script src="/adminStyle/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>


    {{--
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Admin Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">

                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
--}}
</body>
</html>
