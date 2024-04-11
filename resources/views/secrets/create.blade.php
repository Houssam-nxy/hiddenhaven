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
  

        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
          <div class="flex justify-center items-center">
      
            <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
                <form action="{{ route('info.store') }}" method="post" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                
                    @error('title')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                
                    <div>
                        <label class="sr-only" for="title">Title</label>
                        <input
                            class="w-full rounded-lg border-gray-200 p-3 text-sm"
                            placeholder="Your Title"
                            type="text"
                            id="title"
                            name="title"
                            style="border:1px solid rgba(0, 0, 0, 0.497)"
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
                        ></textarea>
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


<br><br><br>
</x-app-layout>
