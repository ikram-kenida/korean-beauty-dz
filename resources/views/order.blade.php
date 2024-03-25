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
<x-nav/>
 @if(session('success'))

        <div class="alert   text-center col-12 slide-bottom" style="height:fit-content;background-color:whitesmoke;color:gray;border-radius:0;margin-top:50px;position:fixed;font-family:Georgia, 'Times New Roman', Times, serif;font-size:larger;margin-bottom:70px;padding:40px;z-index:2">
            {{ session('success') }}

        </div>
    @endif

    @if(session('error'))
        <div class="alert  text-center col-12">
            {{ session('error') }}

        </div>
    @endif
   <main style="margin-top: 200px;" >

    <div class="container">
    <div class="row " style="margin-top: 70px">

        <div class="order  col-12 col-md-7 ">



       <form action="/order" method="POST" class="text-center">
        @csrf
           <h3>Contact</h3>
           <div>


           <input class="col-md-6 col-12 " type="email" placeholder="email" name="email">

         </div>
           <br>

           <h3>Livraison</h3>
           <select style=" border-radius: 5px;
           padding: 7px;
             border: 0.2px solid gray;" name="region" id="" class="col-md-6 col-12" required>
            <option value="algerie">Algérie</option>
           </select>

           <br><br>



           <input type="text" placeholder="prénom" name="prenom" class="col-md-3 col-12 mb-3 " required>




           <input type="text" placeholder="nom" name="nom" class=" col-md-3 col-12 nom mb-3" required>


           <br><br>
           <input style="padding-bottom: 30px" type="text" name="address" placeholder="addresse" class="col-12 col-md-6" required>
           <br><br>
           <input type="text" name="code_postal" placeholder="code postal" class="col-12 col-md-3 mb-3">

           <input type="text" name="ville" placeholder="la  ville" class="col-12 col-md-3 nom mb-3" required>

           <br><br>
           <input type="number" name="phone" placeholder="téléphone" class="col-12 col-md-6 " required>


           <br><br>
           <h3>Mode de Livraison</h3>
           <div class="container text-start col-md-6">



                <label class="text-start livraison-radio" >
                    <input class="text-start deliveryOption" type="radio" name="livraison" value="Stop-desk Yalidine : Alger - 𝟭 JOUR (400 DA)">
                    Stop-desk Yalidine : Alger - 𝟭 JOUR (400 DA)
                  </label>
                   <br>
                  <label class="text-start livraison-radio">

                    <input class="text-start deliveryOption " type="radio" name="livraison" value=" Stop-desk Yalidine : Blida, Boumerdes, Tipaza - 𝟭 JOUR (400 DA)">
                    Stop-desk Yalidine : Blida, Boumerdes, Tipaza - 𝟭 JOUR (400 DA)
                  </label>
<br>
                  <label class="livraison-radio">
                    <input class="deliveryOption" type="radio" name="livraison" value="A domicile : Alger - 𝟭 JOUR (500 DA)">
                    A domicile : Alger - 𝟭 JOUR (500 DA)
                  </label>
                  <br>
                  <label class="livraison-radio">
                    <input class="deliveryOption" type="radio" name="livraison" value="A domicile : Blida, Boumerdes, Tipaza - 𝟭 JOUR (550 DA)">
                    A domicile : Blida, Boumerdes, Tipaza - 𝟭 JOUR (550 DA)
                  </label>
                  <br>
                  <label class="livraison-radio">
                    <input class="deliveryOption" type="radio" name="livraison" value="Stop-desk Yalidine : Ain Defla, Ain Témouchent, Annaba, Batna, Bejaia, BBA, Bouira, Chlef, Constantine, El Tarf - 𝟭 JOUR (550 DA)">
                    Stop-desk Yalidine : Ain Defla, Ain Témouchent, Annaba, Batna, Bejaia, BBA, Bouira, Chlef, Constantine, El Tarf - 𝟭 JOUR (550 DA)
                  </label>
                  <br>
                  <label class="livraison-radio">
                    <input class="deliveryOption" type="radio" name="livraison" value="Stop-desk Yalidine : Guelma, Jijel, Khenchela, Mascara,Médéa, Mila, Mostaganem, M'sila, Oran, Oum El Bouaghi, Relizane - 𝟭 JOUR (550 DA)">

     Stop-desk Yalidine : Guelma, Jijel, Khenchela, Mascara,Médéa, Mila, Mostaganem, M'sila, Oran, Oum El Bouaghi, Relizane - 𝟭 JOUR (550 DA)
                  </label>
                  <br>
                  <label class="livraison-radio">
                    <input class="deliveryOption" type="radio" name="livraison" value="Stop-desk Yalidine : Saida, Setif, Sidi Bel Abbes, Skikda, Souk Ahras, Tiaret, Tizi Ouzou, Tissemsilt, Tlemcen - 𝟭 JOUR (550 DA)">

Stop-desk Yalidine : Saida, Setif, Sidi Bel Abbes, Skikda, Souk Ahras, Tiaret, Tizi Ouzou, Tissemsilt, Tlemcen - 𝟭 JOUR (550 DA)
                  </label>
                  <br>
                  <label class="livraison-radio">
                    <input class="deliveryOption" type="radio" name="livraison" value="Stop-desk Yalidine : Biskra, Djelfa, El Oued, Laghouat, Tébessa - 𝟭 JOUR - Ghardaïa, Ouargla - 𝟮 JOURS (700 DA)">

Stop-desk Yalidine : Biskra, Djelfa, El Oued, Laghouat, Tébessa - 𝟭 JOUR - Ghardaïa, Ouargla - 𝟮 JOURS (700 DA )

                  </label>
                  <br>
                  <label class="livraison-radio">
                    <input class="deliveryOption" type="radio" name="livraison" value="A domicile : Ain Defla, Ain Témouchent, Annaba, Batna, Bejaia, BBA, Bouira, Chlef, Constantine, El Tarf, Guelma, Jijel - 𝟭 JOUR (750 DA)">


A domicile : Ain Defla, Ain Témouchent, Annaba, Batna, Bejaia, BBA, Bouira, Chlef, Constantine, El Tarf, Guelma, Jijel - 𝟭 JOUR ( 750 DA)

                  </label>
                  <br>
                  <label class="livraison-radio">
                    <input class="deliveryOption" type="radio" name="livraison" value="
                    A domicile : Khenchela, Mascara, Médéa, Mila, Mostaganem, M'sila, Oran, Oum El Bouaghi, Relizane, Saida, Sétif - 𝟭 JOUR (750 DA)">


A domicile : Khenchela, Mascara, Médéa, Mila, Mostaganem, M'sila, Oran, Oum El Bouaghi, Relizane, Saida, Sétif - 𝟭 JOUR (750 DA)
                  </label>
                  <br>
                  <label class="livraison-radio">
                    <input class="deliveryOption" type="radio" name="livraison" value=" A domicile : Sidi Bel Abbes, Skikda, Souk Ahras, Tiaret, Tizi Ouzou, Tissemsilt, Tlemcen - 𝟭 JOUR (750 DA)">


 A domicile : Sidi Bel Abbes, Skikda, Souk Ahras, Tiaret, Tizi Ouzou, Tissemsilt, Tlemcen - 𝟭 JOUR (750 DA)
                  </label>
                  <br>
                  <label class="livraison-radio">
                    <input class="deliveryOption" type="radio" name="livraison" value=" A domicile : Biskra, Djelfa, El Oued, Laghouat, Tébessa - 𝟭 JOUR - Ghardaïa, Ouargla - 𝟮 JOURS (1000 DA)">

 A domicile : Biskra, Djelfa, El Oued, Laghouat, Tébessa - 𝟭 JOUR - Ghardaïa, Ouargla - 𝟮 JOURS (1000 DA)

                  </label>
                  <br>
                  <label class="livraison-radio">
                    <input class="deliveryOption" type="radio" name="livraison" value="Stop-desk Yalidine : El bayadh, - 𝟮 JOURS - Adrar, Béchar, Naama - 𝟯 JOURS (1100 DA)">

Stop-desk Yalidine : El bayadh, - 𝟮 JOURS - Adrar, Béchar, Naama - 𝟯 JOURS (1100 DA)

                  </label>
                  <br>
                  <label class="livraison-radio">
                    <input class="deliveryOption" type="radio" name="livraison" value="
                    Stop-desk Yalidine : Tamanrasset, Tindouf - 𝟱 JOURS - Illizi - 𝟲 JOURS (1200 DA)">

Stop-desk Yalidine : Tamanrasset, Tindouf - 𝟱 JOURS - Illizi - 𝟲 JOURS (1200 DA)

                  </label>
                  <br>
                  <label class="livraison-radio">
                    <input class="deliveryOption" type="radio" name="livraison" value="A domicile : El bayadh, - 𝟮 JOURS - Adrar, Béchar, Naama - 𝟯 JOURS (1350 DA)">


A domicile : El bayadh, - 𝟮 JOURS - Adrar, Béchar, Naama - 𝟯 JOURS (1350 DA)
                  </label>
                  <br>
                  <label class="livraison-radio">
                    <input class="deliveryOption" type="radio" name="livraison" value="
                    A domicile : Tamanrasset, Tindouf - 𝟱 JOURS - Illizi - 𝟲 JOURS (1550 DA)">
                    A domicile : Tamanrasset, Tindouf - 𝟱 JOURS - Illizi - 𝟲 JOURS (1550 DA)"

                  </label>
                  <br>

        </div>


           <br><br>
           @foreach(Session::get('cart', []) as $cartItem)

           <input type="hidden" name="img" value="{{ asset('images/' . $cartItem['image']) }}">
       @endforeach
     <div class="container text-center col-12 col-md-6">
          <button class="col-12   text-center acheter mb-5" type="submit">Envoyer l'achat</button>
     </div>

       </form>
        </div>

        <div class="col-12 col-md-5 text-center " >

           <h2 class="col-12 text-secondary text-center"  style="font-family: Georgia, 'Times New Roman', Times, serif">Vos produits sélectionnés</h2><hr>
           <table class="table col-12">
            @php
            $total=0;
        @endphp



            @foreach(Session::get('cart', []) as $cartItem)
            <tr >

                 <td ><img src="{{ asset('images/' . $cartItem['image']) }}"  style="height: 60px;width:60px" alt=""></td>
            <td class="text-secondary" style="font-family: Georgia, 'Times New Roman', Times, serif">{{ $cartItem['product_title'] }}</td>
            <td class="text-secondary" style="font-family: Georgia, 'Times New Roman', Times, serif">{{$cartItem['price']*$cartItem['quantity']}}</td>
            <td class="text-secondary" style="font-family: Georgia, 'Times New Roman', Times, serif">
                @if($cartItem['quantity']==null)
                {{$cartItem['quantity']==1}}
                @else
                {{$cartItem['quantity']}}
                @endif
            </td>
             @php
            $total=$total+$cartItem['price']*$cartItem['quantity']
        @endphp

            </tr>


            @endforeach

            <tr>


 <td><h5 class="text-secondary" style="font-family: Georgia, 'Times New Roman', Times, serif">sous total</h5></td>
 <td></td>
 <td></td>
        <td><h5 class="text-secondary" style="font-family: Georgia, 'Times New Roman', Times, serif">{{$total}} da</h5></td>
     </tr>
     <tr>
        <td class="text-secondary" style="font-family: Georgia, 'Times New Roman', Times, serif">Livraison</td>
        <td></td>
        <td></td>
        <td class="text-secondary" id="deliveryCost"  style="font-family: Georgia, 'Times New Roman', Times, serif">400 da</td>

     </tr>
     <tr>
        <td class="text-secondary" style="font-family: Georgia, 'Times New Roman', Times, serif"> Total</td>
        <td></td>
        <td></td>
        <td class="text-secondary" style="font-family: Georgia, 'Times New Roman', Times, serif" id="totalPrice">{{$total+400}} da</td>
     </tr>
           </table>


        </div>
        </div>
   </main>
    <script>
        document.getElementById('next').onclick = function(){
  let lists = document.querySelectorAll('.item');
  document.getElementById('slide').appendChild(lists[0]);
}
document.getElementById('prev').onclick = function(){
  let lists = document.querySelectorAll('.item');
  document.getElementById('slide').prepend(lists[lists.length - 1]);
}

      </script>
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"
  ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="js/file.js"></script>
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


    <x-footer/>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    // Get the elements
    const totalPriceElement = document.getElementById('totalPrice');
    const deliveryCostElement = document.getElementById('deliveryCost');
    const deliveryOptions = document.querySelectorAll('.deliveryOption');

    // Function to update the total price and delivery cost based on the selected delivery option
    function updatePrices() {
        // Get the selected delivery option
        const selectedOption = document.querySelector('.deliveryOption:checked');

        if (selectedOption) {
            const optionValue = selectedOption.value;
            const deliveryCost = extractDeliveryCost(optionValue);
            const newTotalPrice = {{$total}} + deliveryCost;

            // Update the displayed total price and delivery cost
            totalPriceElement.textContent = newTotalPrice + ' da';
            deliveryCostElement.textContent = deliveryCost + ' da';
        }
    }

    // Helper function to extract the delivery cost from the option value
    function extractDeliveryCost(optionValue) {
    const regex = /\((\d+)\s*DA\)/;
    const matches = optionValue.match(regex);

    if (matches && matches.length > 1) {
        return parseInt(matches[1]);
    }

    return 0;
}

    // Attach change event listeners to the delivery options
    deliveryOptions.forEach(function (option) {
        option.addEventListener('change', updatePrices);
    });

    // Initial update
    updatePrices();
});
    </script>
    <script src="{{ asset('js/file.js') }} "></script>
<script src="jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
</body>
</html>
