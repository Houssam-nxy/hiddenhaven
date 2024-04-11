@section('alert_delete')
    
<form action="{{ route('posts.destroy', $post->id) }}" method="POST">
    @csrf
    @method('DELETE')

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

</form>

@endsection