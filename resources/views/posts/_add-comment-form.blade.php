@auth
    <x-panel>
        <form method="POST" action="/posts/{{$post->slug}}/comments" class="form-group">
            @csrf
            <header class="flex">
                <img src="https://i.pravatar.cc/100?u={{auth()->id()}}" alt="" width="50"
                     height="50" class="rounded-full">
                <h2 class="ml-3 mt-3">What's on your mind?</h2>
            </header>
            <div class="mt-6">
                <textarea name="body" id="" placeholder="Write a comment..." rows="5"
                          class="w-full text-black focus:outline-none focus:ring" required></textarea>
                @error('body')
                    <p class="text-red-500 text-xs">{{$message}}</p>
                @enderror
            </div>

            <div class="flex justify-end mt-5 pt-6 border-t border-gray-200">
                <x-submit-button>Post</x-submit-button>
            </div>

        </form>
    </x-panel>
@endauth
