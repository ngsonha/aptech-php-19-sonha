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
                   <h1 class="text-center font-weight-bold text-uppercase ">SHOW</h1>
                </div>

               

            </div>
        </div>
    </div>
    
</div>
<hr>
<div class="container">
  <div class="row">
    <div class="col-12">
      <span class="badge badge-success text-uppercase text-left">Show page</span>
    </div>
  </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col" class="">#</th>
                        <th scope="col" class="">Name</th>
                        <th scope="col" class="">Email</th>
                        <th scope="col" class="">Password</th>
                        

                    </tr>
                </thead>
                <tbody>
                    
                   
                    <tr class="text-center">
                   
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->password}}</td>
                        

                        
                    </tr>
                  
                    
                    

               
          
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
