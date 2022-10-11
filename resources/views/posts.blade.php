{{--   <x-layout>--}}
    <h1>My Blog</h1>

    @foreach ($posts as $post)
        <article>
            <h2><a href="/posts/{{$post->slug}}">{{$post->title}}</a></h2>
            By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> Category: <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
            <div>
                {!!$post->excerpt!!}
            </div>
        </article>
    @endforeach
{{--   </x-layout>--}}
