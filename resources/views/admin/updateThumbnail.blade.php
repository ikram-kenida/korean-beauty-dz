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
        <div>
            <div>

                <div class="topbar">
                    <div class="toggle">
                        <ion-icon name="menu-outline"></ion-icon>
                    </div>

<div class="container" style="margin-top: 620px">
          <h1  class="text-center text-secondary " style="margin-top: 40px">Mdifier les images d'arriére plan</h1>
          <br><br>
          <form action="/editThumbnail" method="POST" class="row g-3 text-center col-12" style="border: 3px solid gray;padding:20px;border-radius:10px;" enctype="multipart/form-data">
           @csrf





                <div class="col-md-12">
                  <label for="inputCity" class="form-label">image 1 pour pc</label>
                  <input type="file" class="form-control" id="image" name="thumbnail1">

                @error('thumbnail')
                <p style="color: red"> {{$message}}</p>
             @enderror  </div>

             <div class="col-md-12">
                <label for="inputCity" class="form-label">image 2 pour pc</label>
                <input type="file" class="form-control" id="image" name="thumbnail2">

              @error('thumbnail')
              <p style="color: red"> {{$message}}</p>
           @enderror  </div>

           <div class="col-md-12">
            <label for="inputCity" class="form-label">image 3 pour pc</label>
            <input type="file" class="form-control" id="image" name="thumbnail3">

          @error('thumbnail')
          <p style="color: red"> {{$message}}</p>
       @enderror  </div>

       <div class="col-md-12">
        <label for="inputCity" class="form-label">image pour téléphone</label>
        <input type="file" class="form-control" id="image" name="thumbnail4">

      @error('thumbnail')
      <p style="color: red"> {{$message}}</p>
   @enderror  </div>






                <div class="col-12">
                  <button type="submit" class="btn btn-secondary mt-2">Modifier</button>
                </div>

          </form>

          </table>
        </div>
    </div>
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
</body>
</html>
