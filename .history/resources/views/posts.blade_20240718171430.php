<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, adipisci dolorem iusto odit suscipit asperiores ad sunt facilis et laboriosam harum soluta magni, deserunt quibusdam veniam incidunt. Nulla, ea fugit!
    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <div class="text-base text-gray-500">
                <a href="#">{{ $post['author'] }}</a> | 1 Maret 2024
            </div>
            <p class="my-4 font-light">
                {{ Str::limit($post['body'], 50) }}
            </p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read More
                &raquo;</a>
        </article>
    @endforeach

</x-layout>
