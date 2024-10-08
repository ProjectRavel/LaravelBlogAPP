<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title> <!-- Menggunakan $post untuk judul -->
    <article class="py-1 max-w-screen-md border-b border-gray-300">
        <h1 class="text-2xl font-bold">{{ $title }}</h1>
        <div class="text-base text-gray-500">
            <a href="#">{{ $writter }}</a> | {{ $title }}
            <!-- Menggunakan created_at -->
        </div>
        <p class="my-4 font-light">
            {{ $content }}
        </p>
        <a href="/blog" class="font-medium text-blue-600 hover:underline">&laquo;Back</a>
    </article>
</x-layout>
