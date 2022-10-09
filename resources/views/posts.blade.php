    <h1>My Blog</h1>


    @foreach ($posts as $post)
        <article>
            <h2><a href="/posts/{{$post->slug}}">{{$post->title}}</a></h2>
            <div>
                {{$post->excerpt}}
            </div>
            <a href="#">{{$post->category->name}}</a>
        </article>
    @endforeach
