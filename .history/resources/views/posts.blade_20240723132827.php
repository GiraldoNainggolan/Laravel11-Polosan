<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <div class="text-base text-gray-500 ">
                By
                <a href="/authors/{{ $post->author->username }}" class="">{{ $post->author->name }}</a>
                in
                <a href="#" class=" hover:underline">Web Programming</a> |
                {{ $post->created_at->format('j F Y') }}
            </div>
            <p class="my-4 font-light">
                {{ Str::limit($post['body'], 50) }}
            </p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read More
                &raquo;</a>
        </article>
    @endforeach

</x-layout>