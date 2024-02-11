
    <!DOCTYPE html>
    <html lang="pt">
    <head>
        @include('includes.head')
    </head>
    <body>

    <form action="{{ route('admin.login.submit') }}" method="POST">
        @csrf
        <section class="bg-white dark:bg-gray-900">
            <div class="flex flex-col items-center justify-center pt-16 mt-16 ">
                <div class="w-full bg-white rounded-lg justify-center shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6  items-center justify-center ">
                        <form class="space-y-4 mb-4 " action="#">
                            <h1 class="text-5xl font-bold leading-tight items-center text-center tracking-tight text-gray-900 md:text-5xl dark:text-white mb-2"> <!-- Adjusted margin-bottom -->
                                Pootis Quiz
                            </h1>
                            <a class="flex items-center justify-center "> <!-- Adjusted margin-bottom -->
                                <img src="{{ asset('pootisquiz.svg') }}" style="width: 200px; height: 280px;" alt="">
                            </a>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium mt-6 text-gray-900 dark:text-white">Email</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 mt-6 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 mt-6 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 mt-6 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                            </div>
                            <button type="submit" class="w-full text-white bg-purple-400 hover:bg-purple-100 focus:ring-4 mt-6 mb-6 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </form>
    </body>
    </html>
</form>

</body>
</html>
