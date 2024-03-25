<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Korean beauty Algeria</title>
    <link rel="stylesheet"  href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/042bea9eca.js" crossorigin="anonymous"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="https://kit.fontawesome.com/042bea9eca.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
<x-nav />
<div class="container products" style="margin-top: 200Px">



    @if($products->first()==null)
          <h1 class="text-center">Cette categorie est vide pour le moment ! </h1>

@else



 <h1 class="text-center" style="margin-bottom: 40px; font-family:Georgia, 'Times New Roman', Times, serif; color:gray">Nos {{$products->first()->category->title}}</h1>
    <div class="row row-cols-2 row-cols-md-4 g-4 produits justify-content-center" >


 @foreach($products as $product)

 <div class="col">
    <div class="card border-0">
      <img src="{{asset('images/'.$product->main_img)}}" class="card-img-top" alt="...">
      <div class="card-body text-center">
         <p class="card-title  ">{{$product->title}}</p>



        <p class="prix"> {{$product->price}} da</p>


        <a href="{{ route('singleProduct', ['id' => $product->id]) }}" class="shopping">Je shop</a>
      </div>
      <h6 class="statue  text-center ">
        {{$product->statut}}

      </h6>
    </div>
  </div>

@endforeach

@endif

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
