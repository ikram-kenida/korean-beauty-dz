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
   @if(session('error'))

   <div class="alert   text-center col-12 slide-bottom" style="height:fit-content;background-color:whitesmoke;color:gray;border-radius:0;margin-top:50px;position:fixed;font-family:Georgia, 'Times New Roman', Times, serif;font-size:larger;margin-bottom:70px;padding:40px;z-index:2">
       {{ session('error') }}
       <div class="text-center">
            <h6 style="color: gray;font-family:Georgia, 'Times New Roman', Times, serif;margin-top:10px;margin-bottom:10px">  vous puvez séléctionner un autre produit de notre site !  💫</h6><br>
            <a href="/products" class=" mt-5" style="margin-top:30px;text-decoration: none;font-family:Georgia, 'Times New Roman', Times, serif;color:white;padding:10px;background-color:pink">Voir les produits</a>
       </div>
   </div>
   @endif
     <main class="product-container">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-5 product-gallery text-center">
            <div class="main-pic d-flex" >
                <img src="{{asset('images/'.$product->main_img)}}" class=" col-12 slide-fwd-center" alt="" id="mainImage">
                <i  class="fa-regular fa-heart"style="font-size: 40px;color: white; margin-left: -70px; margin-top:20px;"></i>
              </div>
  @if($product->img_2 !=null or $product->img_3 !=null or $product->img_4 !=null)
                   <img src="{{asset('images/'.$product->main_img)}}" alt="" class="col-2 rest-gal slide-fwd-center" onclick="changeImage('{{asset('images/'.$product->main_img)}}') "  >
@endif
              @if ($product->img_2 !=null)
              <img src="{{asset('images/'.$product->img_2)}}" alt="" class="col-2 rest-gal slide-fwd-center" onclick="changeImage('{{asset('images/'.$product->img_2)}}')">
              @endif
              @if ($product->img_3 !=null)
              <img src="{{asset('images/'.$product->img_3)}}" alt="" class="col-2 rest-gal slide-fwd-center" onclick="changeImage('{{asset('images/'.$product->img_3)}}')">
             @endif
             @if ($product->img_4 !=null)
              <img src="{{asset('images/'.$product->img_4)}}" alt="" class="col-2 rest-gal slide-fwd-center" onclick="changeImage('{{asset('images/'.$product->img_4)}}')">
          @endif

          </div>
          <div class="col-md-6 col-12 product-details  ">
           <a href="/" class="a" >Accueil</a>
           <h5>{{$product->title}}</h5>
           <h6 class="prix">{{$product->price}} da</h6>
         @if($product->old_price != null)  <h6 class="prix">au lieu de  {{$product->old_price}} da</h6>@endif
           <form action="{{url('addCart',$product->id)}}" method="POST">
            @csrf
            <label class="mr-2" for="">saisir la quantité désirée !</label><br>
             <input type="number" min="1" max="10" value="1" class="col-4 mt-2 text-center" name="quantity" placeholder="1" required><br><br>
            <input type="submit" class=" text-center acheter text-center col-12 col-md-6 bg-trasnparant border-0"  value="Ajouter au panier" style="margin-top: 0px;margin-bottom:-100px">

           {{-- <form action="{{url('addCart',$product->id)}}" method="POST">
            @csrf--}}

           </form>





           <div class="product-description" style="color: gray ; font-family: Georgia, 'Times New Roman', Times, serif;">

                <h6>Description :</h6>
                <hr>
            <p> {{$product->description}} </p>


           </div>
          </div>

          <div class="comments">

          <div class="col-12">
             <h4  onclick="showHidecomment()" style="cursor: pointer;">Commentaires de nos clients <i class="fa-solid fa-chevron-down float-end" style="cursor: pointer;" onclick="showHidecomment()" ></i></h4>
             <div class="owl-carousel owl-theme " id="commentaire">
    @foreach($comments as $comment)
             <div class="  item">
                 <h6 class="text-center" style="color: gray;font-family:Georgia, 'Times New Roman', Times, serif">{{$comment->text}}</h6>

             </div>

    @endforeach
 </div>
          </div>


          </div>
        </div>

        <form action="{{ url("/products/comments") }}" method="POST" class="mt-5  container" >
            @csrf
                 <input type="hidden" name="product_id" value="{{$product->id}}">
                 <textarea required style="padding-bottom: 50px" name="text" class="col-12 add_comment" placeholder="Ajoutez votre commentaire ici ..."></textarea>
            <input type="submit" value="Envoyer" class="col-12  mt-3 text-center" style="background-color: whitesmoke ; border:1px solid gray;padding:10px;color:gray;font-family:Georgia, 'Times New Roman', Times, serif">


         </form>
      </div>
   <div class="container produits  mt-5" >
     <h4 class="text-center" style="font-family: Georgia, 'Times New Roman', Times, serif;color:gray">Produits similaires </h4>
      <!--produits similaire-->
      <div class="owl-carousel owl-theme mt-5 ">
        @foreach ($product->category->product as $product)
        <div class="item"><div class="col" style="height: 500px">
          <div class="card products border-0" >
            <img src="{{asset('images/'.$product->main_img)}}" class="card-img-top" alt="..." >
            <div class="card-body text-center">
              <p class="card-title">{{$product->title}}</p>
              <p class="prix"> {{$product->price}} da</p>
              <a href="{{ route('singleProduct', ['id' => $product->id]) }}" class="shopping" style="margin-bottom: 20px" >Je shop</a>
            </div>
            <h6 class="statue  text-center">
                {{$product->statut}}

            </h6>

          </div>
        </div></div>
        @endforeach






    </div>
      <!--produits similaires-->




   </div>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script src="{{ asset('js/file.js') }} "></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
$('.owl-carousel').owlCarousel({

margin:10,
nav:true,
dots: false,

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
