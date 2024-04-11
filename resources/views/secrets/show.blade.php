<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ONE GOAL') }}
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

    <div class="flex justify-center items-center">
        <div class="inline-flex rounded-lg border border-gray-100 bg-white p-1">
            <a href="{{ route('info.edit', $post->id) }}">
                <button
                    class="inline-block rounded-md px-4 py-2 text-sm text-gray-500 hover:text-gray-700 focus:relative"
                >
                Edit
                </button>
            </a>
          
            <a href="">
                <button
                class="inline-block rounded-md bg-slate-200 px-4 py-2 text-sm text-bg-white shadow-sm focus:relative"
                >
                View
                </button>
            </a>
          
            <a href="">
                <form action="{{ route('info.destroy', $post->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this post?')" class="inline-block rounded-md px-4 py-2 text-sm text-gray-500 hover:text-gray-700 focus:relative">
                        Delete
                    </button>
                </form>
            </a>

          </div>
    </div>
    

    <div class="rounded-lg overflow-hidden">
        <div class="px-6 py-8 md:p-10">
            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold text-gray-900">{{ $post->title }}</h1>
                <p class="text-gray-600">{{ $post->created_at->format('M d, Y') }}</p>
            </div>

            <br><br>
            

            <div class="flex justify-center items-center">
                <div class="flex flex-col md:flex-row items-center justify-center md:justify-between">
                    <div class="w-[50%] md:mr-8 mb-4 max-w-xs md:max-w-none">
                        <img src="/images/{{ $post->img }}" class="w-full rounded-md" alt="img" width="300px">
                    </div>
                    <div class="w-[50%]">
                        <p class="w-full text-gray-800 leading-relaxed">{{ $post->description }}</p>                        
                        <br>
                        <div>
                            <a
                            class="group relative inline-block text-sm font-medium text-red-600 focus:outline-none focus:ring active:text-red-500"
                            href="#"
                            >
                            <span class="absolute inset-0 border border-current"></span>
                            <span
                                class="block border border-current bg-white px-12 py-3 transition-transform group-hover:-translate-x-1 group-hover:-translate-y-1"
                            >
                             Download
                            </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

           

        </div>
    </div>
    
    
    
    
    

<br><br><br>    

</x-app-layout>
