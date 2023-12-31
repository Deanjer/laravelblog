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
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <Form method="GET" action="#">
                <input type="text" name="search" placeholder="Search" class="bg-transparent placeholder-black font-semibold text-sm">
            </Form>
        </div>


    
        <p class="fixed bottom-3 left-3 bg-blue-500 text-white rounded-xl py-2 px-4 absolute">{{ session()->get('success')}}</p>
        <div class="lg:grid lg:grid-cols-3">
            <?php
            foreach ($posts as $item) {
            ?>
                <article class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                    <div class="py-6 px-5">
                        <div>
                            <img src="./images/illustration-5.png" alt="Blog Post illustration" class="rounded-xl" />
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <a href="#" class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold" style="font-size: 10px">Techniques</a>
                                    <a href="#" class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold" style="font-size: 10px">Updates</a>
                                </div>

                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                        <?php echo $item->title; ?>
                                    </h1>

                                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published
                                        <?php
                                        $timestamp = $item->date;
                                        $date = date('Y-m-d', $timestamp);

                                        // echo $date;

                                        // Assuming $startTime is the time you did something
                                        $startTime = Carbon\Carbon::parse($date);  // Replace with your actual start time
                                        // Calculate the difference and format for humans
                                        $timeDifference = $startTime->diffForHumans();

                                        echo $timeDifference;
                                        ?>
                                    </span>
                                </div>
                            </header>

                            <div class="text-sm mt-4">
                                <p>
                                    <?php echo $item->excerpt; ?>
                                </p>

                                <p class="mt-4">
                                    <?php echo $item->info; ?>
                                </p>
                            </div>

                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="./images/lary-avatar.svg" alt="Lary avatar" />
                                    <div class="ml-3">
                                        <h5 class="font-bold">Lary Laracore</h5>
                                        <h6>Mascot at Laracasts</h6>
                                    </div>
                                </div>

                                <div>
                                    <a href="post/<?php echo $item->id; ?>" class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">
                                        Read More
                                    </a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>

            <?php } ?>
            <br>


        </div>
        </main>

        {{ $posts ->links() }}
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