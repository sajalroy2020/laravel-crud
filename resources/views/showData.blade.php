<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud</title>
  </head>
  <body>
    <div class="container pt-5">
    @if(Session::has('msg'))
      <p class="alert alert-success">{{ Session::get('msg') }}</p>
      @endif
        <a class="btn btn-primary" href="{{('/addData')}}">Add Data</a>
    <table class="table text-center border mt-4">
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach( $showData as $key => $data )
      <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $data->name }}</td>
        <td>{{ $data->email }}</td>
        <td><a class="btn btn-dark" href="{{ url('/editData/'.$data->id) }}">Update</a> <a class="btn btn-danger" onclick="return confirm('are you sure')" href="{{ url('/deleteData/'.$data->id) }}">Delete</a></td>        
      </tr>
      @endforeach
    </tbody>
  </table>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>