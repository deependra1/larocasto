<x-layout>
    <h1>{{$post->title}}</h1>
    <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>

    <p>{{ $post->body }}</p>


    <a href="/">back</a>
</x-layout>
