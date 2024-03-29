<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<style>
    html {
        scroll-behavior: smooth;
    }
</style>
<body style="font-family: Open Sans, sans-serif">
<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/">
                <h1 class="text-4xl">Home</h1>
            </a>
        </div>

        <div class="mt-8 md:mt-0 flex items-center">
            @guest
                <a href="/register" class="text-xs font-bold uppercase">Register</a>
                <a href="/login" class="ml-6 text-xs font-bold uppercase">Login</a>
            @endguest
            @auth

                <x-dropdown>
                    <x-slot name="trigger">
                        <button class="font-bold text-sm ">Welcome, {{auth()->user()->name}}</button>
                    </x-slot>

                    @can('admin')
                    <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">Dashboard</x-dropdown-item>
                    <x-dropdown-item href="/admin/post/create" :active="request()->is('admin/post/create')">New Post
                    </x-dropdown-item>
                    @endcan

                    <x-dropdown-item href="#" x-data="{}"
                                     @click.prevent="document.querySelector('#logout-form').submit()">
                        Logout
                    </x-dropdown-item>
                </x-dropdown>


                <form method="POST"
                      action="/logout"
                      class="hidden"
                      id="logout-form"
                >
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @endauth
            <a href="#subscribe"
               class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                Subscribe for Updates
            </a>
        </div>
    </nav>

    {{$slot}}
    <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
        <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
        <h5 class="text-3xl">Stay in touch with the latest posts</h5>
        <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

        <div class="mt-10" id="subscribe">
            <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                <form method="POST" action="/newsletter" class="lg:flex text-sm">
                    @csrf
                    <div class="lg:py-3 lg:px-5 flex items-center">
                        <label for="email" class="hidden lg:inline-block">
                            <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                        </label>

                        <input id="email"
                               name="email"
                               type="email"
                               placeholder="Your email address"
                               class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none" required>
                    </div>

                    <button type="submit"
                            class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                    >
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
        <div>
            @error('email')
            <span class="text-red-500 text-xs">{{$message}}</span>
            @enderror
        </div>

    </footer>
</section>
@if(session()->has('success'))
    <div x-data="{show:true}"
         x-init="setTimeout(()=>show=false,4000)"
         x-show="show"
         class="fixed bg-blue-500 p-x-2 p-y-2 bottom-2 rounded-xl right-3 p-2">
        <p>{{session('success')}}</p>
    </div>
@endif

</body>
