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
    Welcome to Edit page ! 
  </h1>
  <form action="{{route('update',$user->id)}}" method="POST">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="exampleInputPassword1">User Name</label>
    <input type="text" value="{{$user->name}}" name="name" class="form-control" id="exampleInputPassword1" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" value="{{$user->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"  value="{{$user->password}}" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password"  value="{{$user->password}}" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Re-type your Password">
  </div>
  
  <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>
</div>