<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Korean beauty Algeria</title>
    <link rel="stylesheet"  href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet"  href="{{ asset('css/product.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/042bea9eca.js" crossorigin="anonymous"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="https://kit.fontawesome.com/042bea9eca.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<x-nav />


  <div class="container" style="margin-top: 190px;margin-bottom:70px">


    @if(count(Session::get('cart', []))==0)

    <h4 class="text-center" style="color: gray; font-family:Georgia, 'Times New Roman', Times, serif">Votre panier est vide ! </h4>
    <hr>
    <h6  class="text-center mt-5" style=" letter-spacing: 1px;color: gray; font-family:Georgia, 'Times New Roman', Times, serif">Explorez notre collection exceptionnelle de produits de beauté coréens et découvrez l'art de sublimer votre beauté naturelle. Même si votre panier est actuellement vide, laissez-vous tenter par nos produits de qualité exceptionnelle qui sauront répondre à tous vos besoins. Embellissez votre routine beauté dès maintenant et découvrez une nouvelle dimension de soins et d'éclat pour votre peau 🛍! </h6>
    <br><br>
    <div class="d-flex justify-content-center">
         <a href="/products" class="text-center" style=" text-shadow: rgb(211, 202, 202) 1px 0 10px;font-size:20px;color:white; font-family:Georgia, 'Times New Roman', Times, serif; padding-top:13px ; padding-bottom:13px ; padding-left:20px; padding-right:20px; background-color:pink ; text-decoration:none">Explorez nos produits</a>
    </div>


  @else
     <div class="row" style="margin-top: 70px">

     <div class="products-table mt-5 col-12 col-md-8">

        <div class="d-flex ">
        <h1 class="text-secondary mb-5 p-2 flex-grow-1 " style="font-family: Georgia, 'Times New Roman', Times, serif">Panier </h1>
        <a href="/products" class="  Shop p-2" style="text-decoration: none;height:50px;color:gray;background-color:whitesmoke;margin-top:10px;border:0.2px solid gray;font-family:Georgia, 'Times New Roman', Times, serif" >Continuer mes achats</a>
        <hr>
        </div>
        <table class="table">
            <thead>
              <tr>

                <th scope="col" class="text-secondary" style="font-family: Georgia, 'Times New Roman', Times, serif;font-size:smaller">Produit</th>
                <th scope="col" class="text-secondary" style="font-family: Georgia, 'Times New Roman', Times, serif;font-size:smaller">titre</th>
                <th scope="col" class="text-secondary" style="font-family: Georgia, 'Times New Roman', Times, serif;font-size:smaller">Prix</th>
                <th scope="col" class="text-secondary" style="font-family: Georgia, 'Times New Roman', Times, serif;font-size:smaller">Quantité</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @php
                    $total=0;
                @endphp
                @foreach (Session::get('cart', []) as $cartItem)


              <tr>
                <input type="hidden" >
                <td ><img src="{{ asset('images/' . $cartItem['image']) }}"  style="height: 100px;width:80px" alt=""></td>
                <td class="text-secondary" style="font-family: Georgia, 'Times New Roman', Times, serif;">{{ $cartItem['product_title'] }}</td>
                <td class="text-secondary" style="font-family:'Times New Roman', Times, serif">{{ $cartItem['price'] }} da</td>

                <td class="container col-2 text-secondary"  style="font-family:'Times New Roman', Times, serif">
                    {{ $cartItem['quantity'] }}
                   @php
                      $total += $cartItem['price'] * $cartItem['quantity'];
                   @endphp
                </td>



                    <td><a href="{{ route('removeCartItem', ['id' => $cartItem['product_id']]) }}" class="border-0 bg-transparent"><svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash text-secondary" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                  </svg></a></td>
              </tr>
               @endforeach


            </tbody>
          </table>
     </div>

     <div class="col-12 col-md-4 text-center total mt-5 fact" >

        <h1 class="text-secondary mb-5 mt-3" style="font-family: Georgia, 'Times New Roman', Times, serif">votre sous total</h1>
        <div class="d-flex text-center">
              <p class="justify-content-start p-2 flex-grow-1" style="margin-left: -140px;font-family: Georgia, 'Times New Roman', Times, serif ;color:gray">Sous-total :</p>
              <p class="p-2" style="font-family: Georgia, 'Times New Roman', Times, serif">{{$total}} da</p>
        </div>

      <hr class="text-secondary">
  {{--
      <div class="d-flex text-center">
        <p class="justify-content-start p-2 flex-grow-1" style="margin-left: -140px;font-family: Georgia, 'Times New Roman', Times, serif ; color:gray">Livraison à Alger :</p>
        <p class="p-2" style="font-family: Georgia, 'Times New Roman', Times, serif">{{$livraison=400}} da</p>
  </div>
<hr class="text-secondary">

<div class="d-flex text-center">
    <p class="justify-content-start p-2 flex-grow-1" style="margin-left: -140px;font-family: Georgia, 'Times New Roman', Times, serif ; color:gray">votre total :</p>
    <p class="p-2" style="font-family: Georgia, 'Times New Roman', Times, serif">{{$total+$livraison}} da</p>
</div>--}}<br><br>

<a href="/order" class=" Shop" style="background-color: gray;margin-bottom:50px;margin-top:50px;font-family: Georgia, 'Times New Roman', Times, serif ; padding:15px ; text-decoration:none ; color:whitesmoke">Effectuer l'achat</a>
@endif
</div>

     </div>

  </div>







    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"
  ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="/js/file.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/042bea9eca.js" crossorigin="anonymous"></script>
<script src="jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script>$(document).ready(function(){
$(".owl-carousel").owlCarousel();
});</script>
<!-- Footer -->
<x-footer />
</body>
</html>
