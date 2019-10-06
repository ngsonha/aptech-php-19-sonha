@foreach ($posts as $post )

    <p>tieu de cua bai viet co id {{$post->id}} la {{$post->descripton}}</p>

@endforeach


@for ($i=0;$i< count($posts);$i++)

    <p> tieu de cua bai viet la {{$i}} va {{$posts[$i]->title}} </p>

@endfor
