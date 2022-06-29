<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud</title>
  </head>
  <body>
    <div class="container col-md-6 pt-5">   
    <a class="btn btn-primary" href="{{('/')}}">Show Data</a>  
        <form action="{{ url('/updateData/'.$editData->id)}}" method="POST">
             @csrf
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" value="{{ $editData->name }}" id="exampleInputEmail1">
                @error('name')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
               

                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="text" class="form-control" value="{{ $editData->email }}" id="exampleInputEmail1">
                @error('email')
                  <span class="text-danger">{{ $message }}</span>
                @enderror

                <button class="btn btn-primary mt-3" type="submit">Submit</button>
        </form>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>