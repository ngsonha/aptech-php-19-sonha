<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
            <table class="table table-hover table-bordered">
            
            <thead>
            <tr>
            <th class="text-center">id</th>
            <th class="text-center">name</th>
            <th class="text-center">email</th>
            <th class="text-center">password</th>
            </tr>
            </thead>




            <tbody>
            
           
            @foreach ($users as $user)
            <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->username}}</td>
            <td>{{$user->password}}</td>
            </tr>
            @endforeach
        
            </tbody>

            </table>
            </div>
        </div>
    </div>
</body>
</html>
