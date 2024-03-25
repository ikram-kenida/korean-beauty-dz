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



                <div style="margin-top:70px" class="container">
                    <div class="toggle">
                        <ion-icon name="menu-outline"></ion-icon>
                    </div>
         <h1 class="text-center"style="margin-top: 0px;margin-bottom:70px">Nos commandes</h1>

                <table class="table " >
                    <thead>
                      <tr>

                        <th scope="col">Produit</th>
                        <th scope="col">Date</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">La ville</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Total</th>
                        <th scope="col"> Téléphone</th>
                        <th scope="col">Email</th>
                         <th scope="col" colspan="2">Mode de livraison</th>
                        <th scope="col" colspan="2">Adresse</th>




                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($orders as $order)


                      <tr>



                        <td><img style="height: 80px;width:80px" src="{{asset('images/' . $order->product_img)}}" alt=""></td>
                        <td>{{$order->created_at}}</td>
                        <td>{{$order->nom}}</td>
                        <td>{{$order->prenom}}</td>
                        <td>{{$order->ville}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->total}} da</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->livraison}}</td>
                        <td>{{$order->address}}</td>



                         @if ($order->statut ==null)
                         <td><a  class="btn btn-info "> attente</button></a>
                         @elseif($order->statut =='livré')
                        <td><a href="" class="btn btn-success ">{{$order->statut}}</a></td>
                        @elseif($order->statut=="annulé")
                        <td><a href="" class="btn btn-danger ">{{$order->statut}}</a></td>
                        @else
                        <td><a href="" class="btn btn-warning ">{{$order->statut}}</a></td>
                          @endif
                          <td>
                            <form method="POST" action="{{ route('update.order', $order) }}">
                                @csrf
                                @method('PATCH')
                                <div class="d-flex ">


                            <select name="statut" id="statut" style=" border-radius: 5px;
                            padding: 7px;
                              border: 2px solid gray;" >
                                <option value="livré" @if($order->statut == 'livré') selected @endif>livré</option>
                                <option value="annulé" @if($order->statut == 'annulé') selected @endif>annulé</option>

                            </select>
                            <button style=" border-radius: 5px;
                            padding: 7px;
                              border: 2px solid gray; margin-left:5px" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                              </svg></button>
                        </div>
                            </form>
                          </td>
                          <td><a href="{{ route('orders.delete', ['id' => $order->id]) }}" style="color: gray ; margin-top:35px" href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                          </svg></a></td>
                      </tr>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
