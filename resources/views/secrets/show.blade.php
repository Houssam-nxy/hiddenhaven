<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    All information contained herein is of a highly confidential nature and is strictly prohibited from disclosure.
                </div>
            </div>
        </div>
    </div>

    <div class="p-8 flex flex-col items-center justify-center">
        <div class="text-center">
            @isset($post)
                <h1 class="text-2xl font-bold text-gray-900">{{ $post->title }}</h1><br>
                <p>{{ $post->created_at }}</p>
            @endisset
        </div>
        
        <br>
        <div>
            @isset($post)
                <img src="{{ $post->img }}" width="300" alt="img">
            @endisset
        </div>
        <br>
        <div>
            @isset($post)
                <p class="mt-4 leading-relaxed text-gray-500">{{ $post->description }}</p>
            @endisset
        </div>
    </div>

    

</x-app-layout>
