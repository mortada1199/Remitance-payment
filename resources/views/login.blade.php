<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    @vite('resources/js/app.js')
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">

</head>

<body>
    <section class="flex flex-col md:flex-row h-screen items-center">

       <div class="bg-blue-600 hidden lg:block w-full md:w-1/2 xl:w-1/2 h-screen">
             <img src="img/bg.jpg" alt="" class="w-full h-full object-cover">
        </div>

        <div class="bg-white w-full md:max-w-md lg:max-w-full  md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
              flex items-center justify-center">

            <div class="w-full h-100">

                <h1 class="text-xl font-bold"> Login page</h1>
                <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Log in to your account</h1>

                <form class="mt-6" action="{{route('CreateLogin')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label class="block text-gray-700">User Name</label>
                        <input type="text" name="name" id="" placeholder="Enter Email Address" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required>
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700">Password</label>
                        <input type="password" name="password" id="" placeholder="Enter Password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                      focus:bg-white focus:outline-none" required>
                    </div>

                    <div class="text-right mt-2">
                        <a href="#" class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">Forgot Password?</a>
                    </div>

                    <button type="submit" class="w-full block bg-blue-500 hover:bg-blue-400 focus:bg-blue-400 text-white font-semibold rounded-lg
                    px-4 py-3 mt-6">Log In</button>
                </form>

                <hr class="my-6 border-gray-300 w-full">



                <p class="mt-8">
                    Need an account?
                    <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-700 font-semibold">
                Create an account
              </a>
                </p>

                <p class="text-sm text-gray-500 mt-12">&copy; 2022 - maxnet</p>
            </div>

        </div>

    </section>
</body>

</html>
