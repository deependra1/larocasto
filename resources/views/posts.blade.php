<x-layout>
    @foreach($posts as $post)
        <a href="/posts/{{ $post->slug }}"><h1>{{ $post->title }}</h1></a>
        <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        <p>{{ $post->excerpt }}</p>
    @endforeach
</x-layout>
