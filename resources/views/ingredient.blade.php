<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <div class="container-fluid p-0 " style="margin-top: 200Px">
      <h3 class="titles text-center">{{$ingredient->title}}</h3><br><br>
      <div class="row d-flex justify-content-center align-items-center">

            <div class=" col-12 col-md-6 text-center">
                <img class="" src="{{asset('images/'.$ingredient->image)}}" height="300px" alt="">
            </div>
            <div class="col-12 col-md-5 text-center mt-4">
                <p class="titles">{{$ingredient->description}}</p>


            </div>

      </div>
      @if($ingredient->combo1 !=null)
      <h3 class="titles text-center mt-3 ">Des combinaisons avec {{$ingredient->title}}</h3><br><br>
      <div class="row d-flex justify-content-center align-items-center combos">

        <div class=" col-12 col-md-4 text-center">
            <img class=" c-img" style="border-radius: 50%"  height="250" width="250" src="{{asset('images/'.$ingredient->image)}}" alt="">
        </div>
        <div class=" col-12 col-md-2 text-center mt-3">
            <i  class="fa-solid fa-plus"></i>
        </div>
        <br><br>
        <div class="owl-carousel owl-theme col-12 col-md-4" >
            @php
            $i = 1;
        @endphp

        @foreach($ingredients as $ingredientcombo)
            @if (!empty($ingredient->{'combo' . $i}))
                @php
                    $comboId = $ingredient->{'combo' . $i};
                    $comboIngredient = $ingredients->where('id', $comboId)->first();
                @endphp

                @if ($comboIngredient)
                    <div class="item">
                        <div class="text-center">
                            <a href="{{ url('/ingredientProducts', ['ingredient' => $comboIngredient->id]) }}" style="font-size: 20px; color:pink; text-decoration:none; margin-top:30px" class="titles">{{$comboIngredient->title}}</a><br><br>
                            <p class="titles">{{$comboIngredient->description}}</p><br>
                            <a href="{{ url('/ingredientProducts', ['ingredient' => $comboIngredient->id]) }}" style="font-family:Georgia, 'Times New Roman', Times, serif; padding: 15px;color:white;background-color:pink;text-decoration:none" class="col-12">Choisir des produits avec {{$comboIngredient->title}}</a>
                            <br><br>
                        </div>
                    </div>
                @endif
            @endif

            @php
                $i++;
            @endphp
        @endforeach

      </div>
    </div>
    @endif
   <!-- products -->
   <div class="container mt-5" id="products">
    <h2 class="text-center titles" style="margin-bottom: 60px;">Nos produits avec {{$ingredient->title}}</h2>

   <div class="row row-cols-2 row-cols-md-4 g-4 produits justify-content-center">
      @foreach($products as $product)
      @if($product->category !=null && $product->ingredient == $ingredient->id)
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

@endif
    @endforeach









  </div>

   </div></div>

   <!-- products -->
    <x-footer />
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
  nav:true,
  dots:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1
      }
  }
})
  </script>
</body>
</html>
