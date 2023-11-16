<!DOCTYPE html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.gstatic.com" />
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet" />


<body style="font-family: Open Sans, sans-serif">




    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="./images/logo.svg" alt="Laracasts Logo" width="165" height="16" />
                </a>
            </div>
            <!-- sign in and out -->

            <div class="mt-8 md:mt-0 flex items-center">
                @auth
                <span class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name}}</span>
                <!-- logout -->
                <form action="/logout" method="POST" class="text-xs font-semibold text-blue-500 ml-6">
                    @csrf
                    <button type="submit">Log Out</button>
                </form>
                @else
                <a href="/register" class="text-xs font-bold uppercase">Register</a>
                <a href="/login" class="ml-6 text-xs font-bold uppercase">Log In</a>
                @endauth
            </div>

       
 







            <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                Subscribe for Updates
            </a>
            </div>
        </nav>
        <br>
        <br>
        
                 <!-- Login -->
                 <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-2  00">
            <h1 class="text-center font-bold text-xl">Log In</h1>
            <form action="/sessions" method="POST" class="mt-10">
                @csrf
                    <!-- email -->
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">Email</label>
                        <input type="email" class="border  border-gray-400 p-2 w-full" name="email" id="email " required value="{{ old('email')}}">
                    </div>
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    <!-- password --> 
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">Password</label>
                        <input type="password" class="border  border-gray-400 p-2 w-full" name="password" id="password " required">
                    </div>
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    <!-- submit button -->
                    <div class="mb-6">
                        <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Log In</button>
                    </div>
            </form>
        </main>
        </form>
        </main>
        </form>
        </main>


   


      
        <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="./images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px" />
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">
                Promise to keep the inbox clean. No bugs.
            </p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">
                    <form method="POST" action="#" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="./images/mailbox-icon.svg" alt="mailbox letter" />
                            </label>

                            <input id="email" type="text" placeholder="Your email address" class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none" />
                        </div>

                        <button type="submit" class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>

    </section>
</body>