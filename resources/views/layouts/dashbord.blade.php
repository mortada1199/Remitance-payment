<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">


<head>

    <title>  @yield('title') </title>

    @vite('resources/js/app.js')
<link rel="shortcut icon" type="image/ico" href="/img/logo norm.png">

</head>
<body class=" bg-[#050621] vertical-layout vertical-menu 2-columns"    data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->

<!-- Begin Header -->
<nav class="  flex  ml-9 mr-9  border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-white">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
      <a href="#" class="flex items-center">
          <img src="{{ asset('img/logo norm.png') }}" class="mr-3 h-6 sm:h-9" alt="logo" />
          <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-black">International Remittance</span>
      </a>
      <div class="hidden w-full md:block md:w-auto "  id="">
        <ul class=" font-bold uppercase flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-white md:dark:bg-white dark:border-gray-700">
            <!-- <li>
                <a href="#" class=" py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black md:dark:hover:text-red dark:hover:bg-gray-800 dark:hover:text-black md:dark:hover:bg-transparent">Home</a>
              </li> -->
          <li>
            <a href="{{ route('showbenfic') }}" class="  py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black md:dark:hover:text-red dark:hover:bg-gray-800 dark:hover:text-black md:dark:hover:bg-transparent">beneficiary</a>
          </li>
          <li>

            <div>
                <script>
                    function dropdown(){
                        (document.getElementById('dropmenu').style.display == 'none')? document.getElementById("dropmenu").style.display = 'block' : document.getElementById("dropmenu").style.display = 'none'
                    }
                </script>
                <button onclick="dropdown()">Payment</button>
                <ul id="dropmenu" style="display: none" class=" mt-2 space-y-2 lg:w-48 absolute bg-white">
                    <li>
                      <a href="{{ route('payshow') }}" class="flex p-2 font-medium text-gray-600 rounded-md  hover:bg-gray-100 hover:text-black" >CashCard</a>
                    </li>
                    <li>
                      <a href="{{ route('paybal') }}" class="flex p-2 font-medium text-gray-600 rounded-md  hover:bg-gray-100 hover:text-black" >PayPal</a >
                    </li>

                </ul>
            </div>
          </li>
          <li>
            <a href="{{ route('transfer') }}" class="  py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black md:dark:hover:text-red dark:hover:bg-gray-800 dark:hover:text-black md:dark:hover:bg-transparent">transfer</a>
          </li>
          <li>
            <a href="{{ route('history') }}" class=" py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black md:dark:hover:text-red dark:hover:bg-gray-800 dark:hover:text-black md:dark:hover:bg-transparent">history</a>
          </li>
          <li>
            <a href="{{ route('contact') }}" class=" py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black md:dark:hover:text-red dark:hover:bg-gray-800 dark:hover:text-black md:dark:hover:bg-transparent">Contact</a>
          </li>
          <li>
            <a href="{{ route('login') }}" class=" py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-black md:dark:hover:text-red dark:hover:bg-gray-800 dark:hover:text-black md:dark:hover:bg-transparent">log_out</a>
          </li>


        </ul>
      </div>
    </div>
  </nav>
<!--End  Header -->
{{-- begin body code --}}
            <div class="py-4">
                @yield('content')
            </main>
</body>
</html>














