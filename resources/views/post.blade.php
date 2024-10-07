<x-layout>
    <x-slot:title>Post</x-slot:title>
    <article class="py-1 max-w-screen-md border-b border-gray-300">
        <h1 class="text-2xl font-bold"> {{$title    }} </h1>
        <div class="text-base text-gray-500">
            <a href="#"> {{ $writter }} </a> | {{ $date }}
        </div>
        <p class="my-4 font-light">
            {{ $content }}
        </p>
        <a href="/blog" class="font-medium text-blue-600 hover:underline">&laquo;Back </a>
    </article>
</x-layout>
