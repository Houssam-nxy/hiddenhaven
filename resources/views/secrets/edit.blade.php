<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Docs') }}
        </h2>
    </x-slot>


    <div role="alert" class="border border-gray-100 bg-white p-4">
        <div class="flex items-start gap-4">
            <span class="py-0.5 text-red-800">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                    <path
                      fill-rule="evenodd"
                      d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                      clip-rule="evenodd"
                    />
                </svg>
            </span>
        
            <div class="flex-1">
            <strong class="block font-medium text-gray-900"> Delete </strong>
        
            <p class="mt-1 text-sm text-gray-700">are you sure?</p>
        
            <div class="mt-4 flex gap-2">
                <a
                href="#"
                class="inline-flex items-center gap-2 rounded-lg bg-red-500 px-4 py-2 text-white hover:bg-red-600"
                >
                <span class="text-sm"> Delete {{ $post->title }}</span>
        
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                    <path
                      fill-rule="evenodd"
                      d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </a>
        
                <button class="block rounded-lg px-4 py-2 text-gray-700 transition hover:bg-gray-50">
                <span class="text-sm">Cancel</span>
                </button>
            </div>
            </div>
        
            <button class="text-gray-500 transition hover:text-gray-600">
            <span class="sr-only">Dismiss</span>
        
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6"
            >
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            </button>
        </div>
    </div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    All information contained herein is of a highly confidential nature and is strictly prohibited from disclosure.
                </div>
            </div>
        </div>
    </div>
  

        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
          <div class="flex justify-center items-center">
      
            <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
                <form action="{{ route('info.update', $post->id) }}" method="post" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    @method('PUT')
                
                    <div>
                        <label class="sr-only" for="title">Title</label>
                        <input
                            class="w-full rounded-lg border-gray-200 p-3 text-sm"
                            placeholder="Your Title"
                            type="text"
                            id="title"
                            name="title"
                            style="border:1px solid rgba(0, 0, 0, 0.497)"
                            value="{{ $post->title }}"
                        />
                    </div>
                
                    <div class="grid grid-cols-1 gap-4 text-center sm:grid-cols-3">
                        <label class="block" for="img">
                            <span class="sr-only">Choose profile photo</span>
                            <input 
                                type="file"
                                placeholder="Your Image"
                                id="img" 
                                name="img"
                                class="block w-full text-sm text-slate-500 rounded file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold hover:file:bg-blue-100"
                                value="{{ $post->img }}"
                            />
                        </label>
                    </div>
                
                    <div>
                        <label class="sr-only" for="description">Description</label>
                        <textarea
                            class="w-full rounded-lg border-gray-200 p-3 text-sm"
                            placeholder="Your Description"
                            rows="8"
                            id="description"
                            name="description"
                            style="border:1px solid rgba(0, 0, 0, 0.497)"
                        >
                            {{ $post->description }}
                        </textarea>
                    </div>
                
                    <div class="mt-4 text-center">
                        <button
                            type="submit"
                            class="inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white sm:w-auto"
                        >
                            Save
                        </button>
                    </div>
                </form>
                
            </div>
          </div>
        </div>




</x-app-layout>
