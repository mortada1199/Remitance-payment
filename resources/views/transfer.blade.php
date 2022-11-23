@extends('layouts.dashbord')
@section('content')


<div class=" text-gray-600 bg-[#050621] font-body">


<p class=" mt-10  text-white ml-8">Send to  <span class="font-bold">beneficiary</span></p>


<div class="flex flex-col items-center mt-10 ">


  <div class="mt-10 sm:mt-10">
      <div class=" md:gap-6 ">
        <div class="mt-5  md:mt-0">
          <form action="{{route('storetransfer')}}" method="POST" enctype="multipart/form-data">

            @csrf


            <div class="overflow-hidden shadow sm:rounded-md">
              <div class="bg-white px-4 py-5 sm:p-6 ">
                <div class="grid grid-cols-10 gap-4">
                  <div class="col-span-6 sm:col-span-6">
                    <label for="first-name" class="block text-sm font-medium text-gray-700">* Name on Card</label>
                    <input type="text" name="name"  class="bg-gray-200 h-10 w-96 mt-4 block  rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">

                    @error('name')
                    <small class="form-text text-danger"> {{$message}} </small>
                    @enderror


                </div>

                  <div class="col-span-6 sm:col-span-3">
                    <label for="last-name" class="block text-sm font-medium text-gray-700">* card number from</label>
                    <input type="text" name="cardnumberfrom"  class="bg-gray-200 h-10 w-96 mt-4 block  rounded-md  border-black shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    @error('cardnumberfrom')
                    <small class="form-text text-danger"> {{$message}} </small>
                    @enderror


                </div>

                  <div class="col-span-6 sm:col-span-6">
                      <label  class="mt-4 block text-sm font-medium text-gray-700">* Amount</label>
                      <input type="text" id="amount" name="amount"  class="bg-gray-200 h-10 w-96 mt-4 block  rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      @error('amount')
                      <small class="form-text text-danger"> {{$message}} </small>
                      @enderror

                    </div>

                    <div class="col-span-6 sm:col-span-3">
                      <label for="last-name" class="mt-4 block text-sm font-medium text-gray-700">* Date</label>
                      <input type="date" name="date"  class="bg-gray-200 h-10 w-96 mt-4 block  rounded-md  border-black shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      @error('date')
                      <small class="form-text text-danger"> {{$message}} </small>
                      @enderror

                    </div>


                     <div class="col-span-6 sm:col-span-6">
                      <label class="block text-sm font-medium text-gray-700">*Currency</label>
                    <select id="currency" onchange="results()" name="currency" class="bg-gray-200 h-10 w-96 mt-4 block  rounded-md border border-gray-300  py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" onchange="results()">
                      <option value="">chose currency</option>
                      <option value="USD">USD</option>
                      <option value="SDG">SDG </option>
                    </select>
                    @error('currency')
                    <small class="form-text text-danger"> {{$message}} </small>
                    @enderror

                </div>

                    <div class="col-span-6 sm:col-span-3 mt-4">
                      <label  class="block text-sm font-medium text-gray-700">* Currency Exchange</label>
                   <p id="result" class="mt-4 w-full h-10 bg-gray-200 text-gray-700 border border-gray-200 "></p>
                  </div>


                  <div class="col-span-6 sm:col-span-3">
                      <label for="last-name" class="block text-sm font-medium text-gray-700">* card number to</label>
                      <input type="text" name="cardnumberto"  class="bg-gray-200 h-10 w-96 mt-4 block  rounded-md  border-black shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      @error('cardnumberto')
                      <small class="form-text text-danger"> {{$message}} </small>
                      @enderror

                    </div>

                </div>
                <div class=" px-4 py-10 text-right flex flex-col items-center sm:px-6">
                  <button type="submit" class="rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Send</button>
                </div>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
            function results(){
              let amount = document.getElementById('amount').value;
              let currency =  document.getElementById('currency').value;
              if(currency=="SDG"){
                 return document.getElementById("result").innerHTML="SDG "+amount*10;
            }else{
              return document.getElementById("result").innerHTML="$ "+amount*100;

            }
            }
</script>



@endsection
