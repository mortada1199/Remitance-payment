<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register page</title>
    @vite('resources/js/app.js')
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
</head>

<body>
    <section class="flex flex-col md:flex-row h-screen items-center">

        <div class="bg-cyan-900 hidden lg:block w-full md:w-1/2 xl:w-1/2 h-screen">
             <img src="img/bg.jpg" alt="" class="w-full h-full object-cover">

        </div>

        <div class="bg-white w-full md:max-w-md lg:max-w-full  md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
              flex items-center justify-center">

            <div class="w-full h-screen">
                <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Register new account</h1>

                <form class="mt-4" action="{{route('saveregister')}}"  method="POST" enctype="multipart/form-data">

                    @csrf
                    <div>
                        <label class="block text-gray-700"> user name</label>

                    <input type="text" name="name" id="" placeholder="Enter user name" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required>
                    @error('name')
                    <small class="form-text text-danger"> {{$message}} </small>
                    @enderror
                </div>

                    <div class="mt-3">
                        <label class="block text-gray-700">address</label>
                        <input type="text" name="address" id="" placeholder="Enter address" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                      focus:bg-white focus:outline-none" required>
                      @error('address')
                      <small class="form-text text-danger"> {{$message}} </small>
                      @enderror
                    </div>

                    <div class="mt-3">
                        <label class="block text-gray-700">phone</label>
                        <input type="text" name="phone" id="" placeholder="Enter phone number" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                      focus:bg-white focus:outline-none" required>
                      @error('phone')
                      <small class="form-text text-danger"> {{$message}} </small>
                      @enderror
                    </div>

                    <div class="mt-3">
                        <label class="block text-gray-700">password</label>
                        <input type="password" name="password" id="" placeholder="Enter password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                      focus:bg-white focus:outline-none" required>
                      @error('password')
                      <small class="form-text text-danger"> {{$message}} </small>
                      @enderror
                    </div>


                    <button type="submit" class="w-full block bg-blue-500 hover:bg-blue-400 focus:bg-blue-400 text-white font-semibold rounded-lg
                    px-4 py-3 mt-6">Sign up</button>
                </form>

                <hr class="my-6 border-gray-300 w-full">




                <p class="text-sm text-gray-500 mt-12">&copy; 2022 - Maxnte</p>
            </div>

        </div>

    </section>
</body>

</html>
