{{--<x-layout>--}}

    <article>
<h1>{{ $post->title }}</h1>
        By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> Category: <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
    <p>
        {!! $post->body !!}
    </p>
    </article>
{{--</x-layout>--}}




