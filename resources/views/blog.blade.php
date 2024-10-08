<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href='/blog/{{ $post->id }}'
                class="hover:underline mb-1 text-3xl tracking-tight font-bold text-gray-900"> {{ $post->title }} </a>
            <div class="text-base text-gray-500">
                <a href="#"> {{ $post->writter }} </a> | {{ $post->created_at->diffForHumans()}}
            </div>
            <p class="my-4 font-light">
                {{ Str::limit($post->content, 150) }} <!-- Gunakan notasi objek -->
            </p>
            <a href="/blog/{{ $post->id }}" class="font-medium text-blue-600 hover:underline">Read More &raquo;</a>
        </article>
    @endforeach
</x-layout>

