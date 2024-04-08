<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Docs') }}
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

    
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 justify-center justify-items-center">


        

        
        @foreach ($posts as $post)

        <div class="p-8">
        
            <article class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm">
                <img
                alt=""
                src="{{ $post['img'] }}"
                class="h-56 w-full object-cover"
                />
            
                <div class="p-4 sm:p-6">
                <a href="#">
                    <h3 class="text-lg font-medium text-gray-900">
                    {{ $post['title'] }}
                    </h3>
                </a>
            
                <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                    {{ $post['description'] }}
                </p>
            
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



</x-app-layout>
