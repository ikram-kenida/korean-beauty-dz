<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"  href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/042bea9eca.js" crossorigin="anonymous"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="https://kit.fontawesome.com/042bea9eca.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Korean beauty Algeria</title>
</head>
<body>
    <x-nav />
    <!-- dashboard -->
    <div class="container-fluid p-0 center-container compte ">

      <div class="row">
        <div class="col-12 text-center">
         <h4 class="mt-4  ">Mon compte</h4>
      </div>
      </div>

   </div>
   <!-- dashboard -->
   <div class="conatiner">
      <div class="row">
        <div class="col-12 col-md-3 lists text-center mt-5">
            <div class="col">
                <div class="d-flex justify-content-center">
                     <img src="images/aad3b753-c19b-4441-b3ac-d822d53c6923.jpeg" style="height: 50px ; width:50px ; border-radius:50%" alt="">
                     <p style="margin-top: 5% ; margin-left:10px;">{{auth()->user()->email }}</p>

                </div>

            </div>
            <hr>
            <div class="col">
                <a href="">Tableau de bord</a>
           </div>
           <hr>
           <div class="col">
            <a href="">Commandes</a>
       </div>
       <hr>
       <div class="col">
        <a href="">Téléchargements</a>
   </div>
   <hr>
   <div class="col">
    <a href="">Addresses</a>
</div>
<hr>
<div class="col">
    <a href="">Wishlist</a>
</div>
<hr>
<div class="col">
    <a href="/logout">Déconnexion</a>
</div>
<hr>
        </div>
        <div class="col-12 col-md-9 lists mt-5 ">
            <div class="col-12  text-center" style="margin-bottom: 30px">
                 <p>Bonjour <span style="font-size: 20px"> {{auth()->user()->name}} </span> , À partir du tableau de bord de votre compte, vous pouvez visualiser vos commandes récentes, gérer vos adresses de livraison et de facturation ainsi que changer votre mot de passe et les détails de votre compte.</p>
            </div>
            <div class="d-flex align-content-end flex-wrap mt-3">
                <a href="" class="dash col-12 col-md-3 text-center">Commandes</a>
                <a href="" class="dash col-12 col-md-3 text-center">Wishlist</a>
                <a href="" class="dash col-12 col-md-3 text-center">Addresse</a>
                <a href="" class="dash col-12 col-md-3 text-center">Détailles de compte</a>

            </div>
        </div>
      </div>

   </div>
    <x-footer />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src={{asset('js/file.js')}}></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


