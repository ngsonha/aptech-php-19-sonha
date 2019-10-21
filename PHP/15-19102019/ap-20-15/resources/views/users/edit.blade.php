<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container mt-3 ">
    <div class="row">
        <div class="col-12">
            <div class="d-flex flex-row algin-items-center">

                <div class="col-1 pl-0">
                    <form action="/users" method="get">
                        <button class="btn btn-primary rounded-0 font-weight-bold">Home</button>
                    </form>
                </div>

                <div class="col-10 pl-0">
                   <h1 class="text-center font-weight-bold text-uppercase ">EDIT</h1>
                </div>

               

            </div>
        </div>
    </div>
    
</div>
<hr>
<div class="container">
  <div class="row">
    <div class="col-12">
      <span class="badge badge-success text-uppercase text-left">Edit page</span>
    </div>
  </div>
</div>




<div class="container">
<div class="form-group ">
<form action="{{route('users.update',$user->id)}}" method="POST">
<input type="hidden" name="_method" value="PUT">
<input type="hidden" name="_token" value="{{csrf_token()}}">


                <label class="text-uppercase font-weight-bold" for="name">name</label>
                <br>
                <input type="text" value="{{$user->name}}" name="name">
            </div>


            <div class="form-group ">
                <label class="text-uppercase font-weight-bold" for="email">email</label>
                <br>
                <input type="text" value="{{$user->email}}" name="email">
            </div>

            <div class="form-group ">
                <label class="text-uppercase font-weight-bold" for="password">password</label>
                <br>
                <input type="password" value="{{$user->password}}" name="password">
            </div>

            <div class="form-group ">
                <label class="text-uppercase font-weight-bold" for="role">Role</label>
                <br>
                <input type="text" value="{{$user->role_id}}" name="role_id">
            </div>
<button type="submit" class="btn btn-sm btn-danger   rounded-0">hehehehe</button>
</form>
</div>





</body>
</html>