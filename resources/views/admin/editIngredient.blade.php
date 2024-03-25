<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Korean beauty Algeria</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="/adminStyle/css/style.css">
    <script src="https://kit.fontawesome.com/042bea9eca.js" crossorigin="anonymous"></script>
</head>
<body>
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







<div class="container" style="margin-top: 70px">
  <div class="toggle">
                        <ion-icon name="menu-outline"></ion-icon>
                    </div>



          <h1  class="text-center text-secondary " style="margin-top: 40px">Ajouter ingredient</h1>
          <br><br>
          <form action="{{ route('ingredients.update', $ingredient) }}"  method="POST" class="row g-3 text-center col-12" style="border: 3px solid gray;padding:20px;border-radius:10px;" enctype="multipart/form-data">
           @csrf
           @method('PUT')
                <div class="col-md-12 text-center">
                  <label for="title" class="form-label">titre</label>
                  <input type="text" class="form-control"  name="title" id="title" >
                    @error('title')
                   <p style="color: red"> {{$message}}</p>
                @enderror
                </div>
                <div class="col-md-12 text-center">
                    <label for="title" class="form-label">Description</label>
                    <input type="text" class="form-control"  name="description" id="description">
                      @error('description')
                     <p style="color: red"> {{$message}}</p>
                  @enderror
                  </div>




                <div class="col-md-12">
                  <label for="inputCity" class="form-label">image</label>
                  <input type="file" class="form-control" id="image" name="image">

                @error('image')
                <p style="color: red"> {{$message}}</p>
             @enderror  </div>
             <div class="col-md-12">
                <label for="" class="form-label">Les combinaisons avec l'ingrédient</label>
                <br><br>
                <div class="d-flex justify-content-center">
                    @foreach ($ingredients as $ingredient)
                        <div class="form-check me-3 ">
                            <input class="form-check-input" type="checkbox" value="{{ $ingredient->id }}" id="combo{{ $ingredient->id }}" name="combos[]">
                            <label class="form-check-label" for="combo{{ $ingredient->id }}">
                                {{ $ingredient->title }}
                            </label>
                        </div>
                    @endforeach
                </div>
                @error('combos')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>

            <p style="color: red">NB : seulement 5 combinaisons possibles</p>




                <div class="col-12">
                  <button type="submit" class="btn btn-secondary mt-2">Ajouter l'ingrédient</button>
                </div>

          </form>
          <br><br>

</div></div>
<script src="/adminStyle/js/main.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
