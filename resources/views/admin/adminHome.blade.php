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
<x-adminNav />
 <!-- ========================= Main ==================== -->
 <div class="main">
    <div class="topbar">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>



        <div class="user">
            <img src="images/aad3b753-c19b-4441-b3ac-d822d53c6923.jpeg" alt="">
        </div>
    </div>

    <!-- ======================= Cards ================== -->
    <div class="cardBox">


        <div class="card">
            <div>
                <div class="numbers">{{$orders->count()}}</div>
                <div class="cardName">Ventes</div>
            </div>

            <div class="iconBx">
                <ion-icon name="cart-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>



                <div class="numbers">{{ $comments->count() }}</div>

                <div class="cardName">Commentaires</div>
            </div>

            <div class="iconBx">
                <ion-icon name="chatbubbles-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                 @php

                   $count =0;
                    @endphp
                    @foreach($orders as $order)
                     @php
                     $count =$count+$order->total
                     @endphp
                     @endforeach
                <div class="numbers">
                   {{$count}} da
                </div>
                <div class="cardName">Gains</div>
            </div>

            <div class="iconBx">
                <ion-icon name="cash-outline"></ion-icon>
            </div>
        </div>
    </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Les commandes</h2>
                        <a href="/adminOrders" class="btn">Voir plus</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>image</td>
                                <td>nom</td>
                                <td>prénom</td>
                                <td>prix</td>
                                <td>ville</td>
                                <td>Statut</td>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                             $count=0;
                            @endphp



                            @foreach($orders as $order)
                            @if ($count<8)
                            @php
                            $count++;
                           @endphp
                            <tr>
                                <td><img style="height: 70px;width:70px;" src="{{asset('images/' . $order->product_img)}}" alt=""></td>

                                <td>{{$order->nom}}</td>
                                <td>{{$order->prenom}}</td>
                                <td>{{$order->total }} da</td>
                                <td>{{$order->ville}}</td>

                                @if ($order->statut ==null)
                                <td><span  class="status pending "> attente</button></span>
                                @elseif($order->statut =='livré')
                               <td><span class="status delivered ">{{$order->statut}}</span></td>
                               @else
                               <td><span class="status return ">{{$order->statut}}</span></td>
                                 @endif
                            </tr>
@endif
@endforeach







                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->

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
