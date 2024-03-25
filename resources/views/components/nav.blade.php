<div class="container-fluid navigation   ">


    <header class="container d-flex " >
       <nav class="navbar-expand-lg d-flex w-100 fixed-top navi" id="navbar"  x-data="{ open: false }">

        <div class="container justify-content-start d-flex">
           <ul class="d-flex">
             <li class="mt-2 align-items-center">

              <i class="fa-solid fa-bars" @click="open = true" id="menu-icon">
                <div id="menu-items" style="display: none;" class="slide-right">

            <ul class="links"  x-show="open"
  @click.away="open = false">

              <li>
                <a href="/#introduction" style="font-family: Georgia, 'Times New Roman', Times, serif">Accueil</a>
              </li>

              <li>
                <a href="/#categories" style="font-family: Georgia, 'Times New Roman', Times, serif">Categories</a>
              </li>
              <li>
                <a href="/#ingredient" style="font-family: Georgia, 'Times New Roman', Times, serif">  Ingrédients</a>
              </li>
               <li>
                <a href="/#services" style="font-family: Georgia, 'Times New Roman', Times, serif">Nos services</a>
              </li>
              <li>
                <a href="/#bestSeller" style="font-family: Georgia, 'Times New Roman', Times, serif">Nos promotions</a>
              </li>

              <li>
                <a href="/#products" style="font-family: Georgia, 'Times New Roman', Times, serif">Produits</a>
              </li>
              <li>
                <a href="/peaunormale" style="font-family: Georgia, 'Times New Roman', Times, serif">Peau normale</a>
              </li>
              <li>
                <a href="/peauséche" style="font-family: Georgia, 'Times New Roman', Times, serif">Peau séche</a>
              </li>
              <li>
                <a href="/peaugrace" style="font-family: Georgia, 'Times New Roman', Times, serif">Peau grasse</a>
              </li>
              <li>
                <a href="/peausensible" style="font-family: Georgia, 'Times New Roman', Times, serif">Peau sensible</a>
              </li>






            </ul>
          </div></i>

            </li>
            {{--
           <li class="align-items-center d-flex">
            <a href="/dashboard"> <i class="fa-regular fa-user "  ></i></a>
           </li>--}}
          </ul>

        </div>
        <div class="container logo text-center mt-3">
         <img src={{asset('images/422390366_1532453367612136_6865065650974596319_n-removebg-preview.png')}} height="80px" width="100px" alt="">
        </div>
        <div class="container d-flex justify-content-end right-part" >
          <ul class="d-flex">
            <li class="d-flex align-items-center" >
              <i class="fa-solid fa-magnifying-glass" id="search" onclick="toggleSearchBox()" ></i>

           </li>
           <li class="d-flex align-items-center">
           <a href="/panier"> <i class="fa-solid fa-bag-shopping"></i></a>
         </li>
         {{--
         <li class="d-flex align-items-center">
         <i class="fa-regular fa-heart"></i>
         </li>--}}
         </ul>
       </div>


       </nav>

    </header>

    <div class="container-fluid  text-center chercher fixed-top " id="search_input" style="display: none;">
    <div class="search-box  justify-content-center" id="searchBox" style="margin-top: 110px;  ">
        <form action="/search" method="GET">
            @if (request('search'))
            <input type="hidden" name="search" value="{{ request('search') }}">
        @endif
             <input type="text" name="query" id="searchInput" class=" col-md-6 col-10 srch" placeholder="Chercher" value="{{request('search')}}">

      <button type="submit" style="height: 40px; border-radius: 4px; border: none;">
        <i class="fa-solid fa-magnifying-glass" style="color: gray;"></i>
      </button>

        </form>

    </div>
  </div>
   </div>

