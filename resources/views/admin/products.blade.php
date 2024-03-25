<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Korean beauty Algeria</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="/adminStyle/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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


                <div style="margin-top:50px" class="container">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div> <br><br>
         <h1 class="text-center"style="margin-top: 0px;margin-bottom:70px">Nos produits</h1>

                <table class="table " >
                    <thead>
                      <tr>

                        <th scope="col">image</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Catégorie</th>
                        <th scope="col">Type de peau</th>
                        <th scope="col">déscription</th>
                        <th scope="col">prix</th>
                        <th scope="col">prix ancien</th>
                        <th scope="col">statut</th>
                        <th scope="col" colspan="2">actions</th>

                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($products as $product)


                      <tr>
@if($product->category !=null)
                        <td><img style="height: 120px;width:120px" src="{{asset('images/'.$product->main_img)}}" alt=""></td>
                        <td>{{$product->title}}</td>
                        <td>{{$product->category->title}}</td>
                        <td>{{$product->type_de_peau}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->old_price}}</td>
                        <td>{{$product->statut}}</td>

                        <td><a href="{{ route('products.destroy', $product->id) }}" type="submit" class="btn btn-danger ">supprimer</a></td>


                        <td><a href="{{ route('products.editP', $product->id) }}" class="btn btn-secondary ">modifier</a></td>

                      </tr>
                      @endif
                @endforeach

                    </tbody>
                  </table>
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
