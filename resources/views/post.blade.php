<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet" />

    <!-- <link rel="stylesheet" href="/assets/css/app.css"> -->
    <title>Blog posts</title>
</head>

<body style="font-family: Open Sans, sans-serif">




    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16" />
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





        <div class="mx-auto text-center mt-10">
            <article>
                <h1 class="text-xxl font-bold uppercase"><?= $item->title; ?></h1>
                <img style="width: 500px;" class="mt-5 top-image rounded-xl mx-auto text-center" src="/images/illustration-5.png" alt="Blog Post illustration" />
                <div>
                    <p class="mt-5"> <?= $item->info; ?></p>
                    <br>
                    <p><?= $item->excerpt; ?></p>
                </div>

                <div class="comments">

                </div>
                <br>
                <script>

                </script>
                <a class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" href="/">Go back</a>

                <div class="">
                    <div class="create-comment">
                        <h2 class="mt-5 font-bold">Add reaction</h2>
                        <!-- action=" <?php //echo url('post/'.$item->id); 
                                        ?>"  -->
                        <form method="post">
                            @csrf
                            <input name="post_id" type="hidden" value=" {{$item->id}}">
                            
                            <br>
                            <label class="mb-2 text-sm font-medium text-gray-900 dark:text-white" for="">Name</label><br>
                            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-1/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="name" type="text">
                            <br>
                            <br>
                            <label class="mb-2 text-sm font-medium text-gray-900 dark:text-white" for="comment">Comment</label>
                            <br>
                            <textarea class=" p-2.5 w-1/3 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2" name="comment" cols="30" rows="10"></textarea>
                            <br>
                            <input class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit">
                        </form>
                    </div>

                    <br>
                    <hr>
                    
                    <div class="flex justify-center text-left">
                        <div class="w-2/3">
                            @foreach($comment_item as $comment)

                            <br>
                            <div class="border-1">
                                <div class="border-2 p-3 rounded-xl"><b> {{$comment->name}}</b><br> {{$comment->comment}} </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                </div>
        </div>
        </article>
        <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px" />
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">
                Promise to keep the inbox clean. No bugs.
            </p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">
                    <form method="POST" action="#" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter" />
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
</body>

</html>