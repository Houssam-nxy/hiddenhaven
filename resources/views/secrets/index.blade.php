<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Informations') }}
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
    

    <span class="relative flex justify-center">
        <div class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75"></div>
        <span class="relative z-10 bg-[#f3f4f6] px-6">All articles here</span>
    </span>


    @if (count($posts) > 0)
    
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 justify-center justify-items-center">
    @foreach ($posts as $post)
        <div class="p-8">
            <article class="overflow-hidden w-full sm:w-96 h-96 rounded-lg border border-gray-100 bg-white shadow-sm">
                <img
                    alt="img of the front"
                    src="images/{{ $post['img'] }}"
                    class="h-56 w-full object-cover"
                />
                <div class="p-4 sm:p-6">
                    <a href="{{ route('info.show', $post->id) }}">
                        <h3 class="text-lg font-medium text-gray-900">
                            {{ $post['title'] }}
                        </h3>
                    </a>
                    <div class="text-gray-500">
                        @if (strlen($post['description']) > 50)
                        <p class="mt-2 sm:mt-4 w-full sm:w-80 line-clamp-3 text-sm/relaxed" style="overflow-x: hidden; height: 20px;">
                            {{ $post['description'] }}
                        </p>
                        <a href="#" class="text-blue-600 hover:underline read-more">...Read More</a>
                        @else
                        <p class="mt-2 sm:mt-4 line-clamp-3 text-sm/relaxed">
                            {{ $post['description'] }}
                        </p>
                        @endif
                    </div>
                    <a href="{{ route('info.show', $post->id) }}" class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
                        Find out more
                        <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
                            &rarr;
                        </span>
                    </a>
                </div>
            </article>
        </div>
    @endforeach
    </div>

    

    @else

            <br>

            <div class="py-0">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            There is no article yet.
                        </div>
                    </div>
                </div>
            </div>

    @endif


    <br><br><br>

</x-app-layout>
