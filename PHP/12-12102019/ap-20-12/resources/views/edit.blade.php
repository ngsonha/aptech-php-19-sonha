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
<div class="col-1 pl-0">
                    <form action="/articles" method="get">
                        <button class="btn btn-primary rounded-0 font-weight-bold">Home</button>
                    </form>
                </div>
<div class="container">


<div class="container">
<form action="{{route('articles.update',$article->id)}}" method="POST">
<input type="hidden" name="_method" value="PUT">
<input type="hidden" name="_token" value="{{csrf_token()}}">

<div>
<input type="text" value="{{$article->title}}" name="de">

</div>

<div>
<input type="text" value="{{$article->description}}" name="chinh">

</div>

<

<button type="submit">hehehehe</button>
</form>
</div>





</body>
</html>