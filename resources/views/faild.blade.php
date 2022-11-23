<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>faild payment</title>
    @vite('resources/js/app.js')
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
</head>
<body class="bg-[#050621]">
    <div class="flex justify-center items-center h-full ">
        <div class="flex justify-center ">
            <div class="rounded-lg shadow-lg bg-white max-w-sm">
              <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                <img class="rounded-t-lg" src="IMG/fall.jfif" alt=""/>


              </a>
              <div class="p-6">
                <h5 class="text-gray-900 text-xl font-medium mb-2">Faild</h5>
                <p class="text-gray-700 text-base mb-4">
                  please tray agin latter....... . . . .
                </p>
                <a href="{{ route('showbenfic') }}" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">GO BACK</a>
              </div>
            </div>
          </div>
    </div>



</body>
</html>
