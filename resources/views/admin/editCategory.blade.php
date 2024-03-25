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
        <div class="main container">


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



<h1 class="text-center mt-5 mb-5 text-secondary">Modifier la catégorie</h1>

                        <div class="toggle">
                            <ion-icon name="menu-outline"></ion-icon>
                        </div><br><br>

                <form action="{{ route('categories.update', $category) }}" method="POST" class="row g-3 text-center col-12" style="border: 3px solid gray;padding:20px;border-radius:10px; margn-top:700px" enctype="multipart/form-data" class="mt-5">
                    @csrf
                    @method('PUT')
                         <div class="col-md-12 text-center">
                           <label for="title" class="form-label">Titre </label>
                           <input type="text" class="form-control"  name="title" id="title" value="{{$category->title}}">
                             @error('title')
                            <p style="color: red"> {{$message}}</p>
                         @enderror
                         </div>





                         <div class="col-md-12">
                           <label for="inputCity" class="form-label">L'image</label>
                           <input type="file" class="form-control" id="image" name="thumbnail">

                         @error('thumbnail')
                         <p style="color: red"> {{$message}}</p>
                      @enderror  </div>






                         <div class="col-12">
                           <button type="submit" class="btn btn-secondary mt-2">Modifier la  catégorie</button>
                         </div>

                   </form>



        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="/adminStyle/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>


   </body>
</html>
