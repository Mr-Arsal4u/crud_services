<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  
</head>
<body>
    @include('partials.nav')
<div class="container-sm">
  <h1 class="mt-3">
    Welcome to home page ! 
  </h1>
<table class="table table-striped mt-5">
<thead>
  
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <th scope="row">{{$user->name }}</th>
      <td>{{$user->email }}</td>
      <td>{{$user->password }}</td>
      <td>
      <a href="{{route('edit',$user->id)}}" type="button" class="btn btn-warning">Edit</a>
<form action="{{route('delete',$user->id)}}" method="POST">
  @csrf
  @method('DELETE')
      <button type="submit" class="btn btn-danger">delete</button>
      </form>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>