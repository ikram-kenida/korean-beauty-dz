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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Pacifico&display=swap" rel="stylesheet">
  </head>
  <body>
<x-nav />



     <section id="main">


     <div class="container-fluid p-0 first-div" >
      <div id="carouselExampleIndicators" class="carousel slide intro" >
        <div class="carousel-indicators mt-3" style="margin-top: 70%;">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner col-12" id="introduction">
          <div class="carousel-item active">
            @if($thumbnail->main_img !=null)
            <img src="{{ asset('images/' . $thumbnail->main_img) }}" class="d-block w-100" alt="...">
        @else
            <img src="{{ asset('images/products/Design sans titre (1).jpg')}}" class="d-block w-100" alt="Default Image">
        @endif


          </div>
          <div class="carousel-item">
            @if($thumbnail->img_2 !=null)
            <img src="{{asset('images/'.$thumbnail->img_2)}}" class="d-block w-100" alt="...">
           @else
           <img src="{{asset('images/products/Design sans titre (2).jpg')}}" class="d-block w-100" alt="...">
           @endif
          </div>
          <div class="carousel-item">
            @if($thumbnail->img_3 !=null)
            <img src="{{asset('images/'.$thumbnail->img_3)}}" class="d-block w-100" alt="...">
            @else
            <img src="{{asset('images/products/Design sans titre (4).jpg')}}" class="d-block w-100" alt="...">
            @endif
          </div>
        </div>
          <div class="col-5 text-center introduction scale-up-center">
          <h1 class="pacifico-regular ">From korea to you </h1>
          <hr><br>
         {{--  <p class="pacifico-regular ">Prendre soin de sa peau, c'est investir dans la santé et la confiance en soi. Chaque rituel de soins est une déclaration d'amour envers soi-même, offrant à la peau l'attention qu'elle mérite pour révéler une beauté naturelle et éclatante. </p>
           --}}
            <div class="  justify-content-start ">
             <a href="#categories" class="btn  text-center " style="margin-bottom: 100px">Découvrir</a>

            </div>
            {{--
        <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
--}}
      </div></div>


     </div>
      <!--phone-->
     <div  class=" phone container-fluid p-0" >

      <div class="carousel-inner col-12">
        <div class="carousel-item active">
            @if($thumbnail->phone_img !=null)
          <img src="{{asset('images/'.$thumbnail->phone_img)}}" class="d-block w-100" alt="...">
            @else
            <img src="{{asset('images/_ (1).jpeg')}}" class="d-block w-100" alt="...">
            @endif
        </div>


      </div>



    </div></div>


   </div>

     <!--phone-->
     <div class="container categories" id="categories">
      <h2 class="text-center titles">Acheter par catégories</h2>
      <p class="text-center titles" style="margin-bottom: 60px;">Nos produits sont les meilleurs</p>


      <!--caraousel-->

      <!--end-->
      <!-- categories -->
      <div class="owl-carousel owl-theme" >
        @foreach ($categories as $category)
 <div class="item">        <a href="{{ url('/categoryProducts', ['category' => $category->id]) }}" class="shop"><div class="col">
          <div class="card border-0">
            <img src="{{asset('images/'.$category->thumbnail)}}" class="card-img-top" alt="...">
            <div class="card-body text-center">
             {{$category->title;}}</a>

            </div>

          </div>
        </div></div>
        @endforeach






    </div>

      <!-- categories -->


     </div>
     </div>
      <!-- best sellers -->
      @if($promos->count()>0)
     <div class="container " id="bestSeller">

      <h2 class="text-center titles " style="margin-bottom: 0px;font-family:Georgia, 'Times New Roman', Times, serif ; color:gray">Les articles en promotion</h2><br>
            <p class="text-center" style=" margin-bottom:60px;  font-family:Georgia, 'Times New Roman', Times, serif ; color:gray" >Craquez pour nos articles soldés ! </p>
       <!-- best sellers caraousel-->
       <div class="owl-carousel owl-theme " style="margin-bottom: 100px">
        @foreach ($promos as $promo)
        <div class="item"><div class="col">
          <div class="card  border-0">
            <img src="{{asset('images/'.$promo->main_img)}}" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <p class="card-title">{{$promo->title}} </p>
              <p style="font-family: Georgia, 'Times New Roman', Times, serif ; color:gray"> {{$promo->price}} da</p>
            @if($promo->old_price !== null)
              <p style="font-family: Georgia, 'Times New Roman', Times, serif ; color:gray"> <s>{{$promo->old_price}} da</s></p>
             @endif
              <a href="{{ route('singleProduct', ['id' => $promo->id]) }}" class="shopping">Je  shop</a>
            </div>


          </div>
        </div></div>

      @endforeach



    </div>
    @endif
        <!-- best sellers caraousel-->

        <!-- shop by ingredient -->
        <div class="container ingredients" style="margin-bottom: 100px" id="ingredient">
            <h2 class="text-center titles" style="margin-bottom: 60px;">Acheter par ingredient</h2>
            <div class="owl-carousel owl-theme " >
                @foreach($ingredients as $ingredient)
                <div class="item heartbeat " id="heart">
                    <a href="{{ url('/ingredientProducts', ['ingredient' => $ingredient->id]) }}" class="text-center  d-flex align-items-center justify-content-center"> <div class="ingredient  d-flex align-items-center justify-content-center">
               <h5>{{$ingredient->title}}</h5>
                </div></a>
                </div>
                @endforeach





            </div>
        </div>







         <!-- shop by ingredient -->

      <div class="row row-cols-2 row-cols-md-5 g-4">





      </div>
     </div>
       <!-- best sellers -->

        <!-- Services -->

          <div class="container-fluid p-0 " id="services">
           <div class="row">


              <div class="d-md-flex justify-content-evenly Services">
                     <div class=" text-center  col-md-4">
                      <i class="fa-solid fa-truck-fast "></i><br><br>
                      <h5>Livraison gratuite a partir de <br> 25000 da </h5>
                     </div>

                     <div class=" text-center  col-md-4">
                      <i class="fa-solid fa-right-left"></i><br><br>
                      <h5>Echange des produits endommagé </h5>
                     </div>
                     <div class=" text-center  col-md-4">
                      <i class="fa-solid fa-money-check"></i><br><br>
                      <h5>paiment à la livraison</h5>
                     </div>
              </div>
          </div>
        </div>

         <!-- Services -->



         <!-- products -->
         <div class="container" id="products">
          <h2 class="text-center titles" style="margin-bottom: 60px;">Nos produits</h2>

         <div class="row row-cols-2 row-cols-md-4 g-4 produits justify-content-center">
            @foreach($products as $product)
            @if($product->category !=null)
          <div class="col text-focus-in">
            <div class="card border-0">
              <img src="{{asset('images/'.$product->main_img)}}" class="card-img-top " alt="...">
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

 @endif
          @endforeach
          </div>
          <div class="container text-center mt-5">


 <a href="/products" class="text-center mt-5 " style="padding: 15px;text-decoration:none;font-family:Georgia, 'Times New Roman', Times, serif;color:gray;background-color:whitesmoke;margin-top:20px;font-size:large">Voir tout les produits <span style="margin-left: 5px"><i class="fa-solid fa-bag-shopping fa-bounce fa-flip-horizontal" style="color: pink;"></i></span></a>
  </div>







{{--
<div class="conatainer justify-content-center mt-3 pagination">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</div>
      </div>
--}}
         <!-- products -->
    </section>


         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
         <script src={{asset('js/file.js')}}></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
      $('.owl-carousel').owlCarousel({

  margin:10,
  nav:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:4
      }
  }
})
  </script>
<!--footer-->
<x-footer />

<!--footer-->

  </body>
</html>
