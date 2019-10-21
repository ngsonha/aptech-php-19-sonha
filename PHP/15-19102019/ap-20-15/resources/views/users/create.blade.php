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
                   <h1 class="text-center font-weight-bold text-uppercase ">CREATE</h1>
                </div>

               

            </div>
        </div>
    </div>
    
</div>
<hr>
<div class="container">
  <div class="row">
    <div class="col-12">
      <span class="badge badge-success text-uppercase text-left">Create page</span>
    </div>
  </div>
</div>

    <div class="container">
        <div class="row">
            <div class="col-12">
            
            
            <form action="{{route('users.store')}}" method="post">
            
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div class="form-group ">
                <label class="text-uppercase font-weight-bold" for="name">name</label>
                <br>
                <input type="text" placeholder="Ten nguoi dung" name="ten">
            </div>

            <div class="form-group">
             <label class="text-uppercase font-weight-bold" for="email">email</label>
                <br>
                <input type="email" placeholder="email" name="thu">
            </div>

            <div class="form-group">
             <label class="text-uppercase font-weight-bold" for="password">password</label>
                <br>
                <input type="password" placeholder="password" name="mk">
            </div>    

            <div class="form-group">
             <label class="text-uppercase font-weight-bold" for="role">role</label>
                <br>
                <input type="role_id" placeholder="role" name="rl">
            </div>

                <button type="submit" class="btn btn-sm btn-danger   rounded-0">
                                  tao nguoi dung
                </button>
            </form>

            
            </div>
        </div>
    </div>
</body>
</html>