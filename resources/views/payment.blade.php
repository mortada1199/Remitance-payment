@extends('layouts.dashbord')
@section('content')

<div class=" text-gray-600 bg-[#050621] font-body">


    <p class=" mt-4 text-white ml-8 ">Form  --<span class="font-bold">Payment</span></p>


      <div class="flex flex-col items-center mt-10 ">


        <div class="mt-10 sm:mt-10 mb-10">
            <div class=" md:gap-6 ">
              <div class="mt-5  md:mt-0">
                <form action="{{route('storepayment')}}" method="POST" enctype="multipart/form-data">

                    @csrf

                  <div class="overflow-hidden shadow sm:rounded-md">
                    <div class="bg-white px-4 py-5 sm:p-6 ">
                      <div class="grid grid-cols-10 gap-4">
                        <div class="col-span-6 sm:col-span-6">
                          <label for="card-number" class="block text-sm font-medium text-gray-700">* card number from</label>
                          <input type="text" name="cardfrom"   class="bg-gray-200 h-10 w-96 mt-4 block  rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">

                         {{-- validaton --}}
                         @error('cardfrom')
                         <small class="form-text text-danger"> {{$message}} </small>
                         @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                          <label for="password" class="block text-sm font-medium text-gray-700">* Pin</label>
                          <input type="password"  name="password"  class="bg-gray-200 h-10 w-96 mt-4 block  rounded-md  border-black shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">


                          @error('password')
                    <small class="form-text text-danger"> {{$message}} </small>
                    @enderror
                        </div>



                        <div class="col-span-6 sm:col-span-6">
                            <label for="amount" class="mt-4 block text-sm font-medium text-gray-700">* Amount</label>
                            <input type="text"  id="amount" name="amount" class="bg-gray-200 h-10 w-96 mt-4 block  rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            @error('amount')
                            <small class="form-text text-danger"> {{$message}} </small>
                            @enderror

                        </div>

                          <div class="col-span-6 sm:col-span-3">
                            <label for="exp-date" class="mt-4 block text-sm font-medium text-gray-700">*Exp Date</label>
                            <input type="date"  name="exdate"  class="bg-gray-200 h-10 w-96 mt-4 block  rounded-md  border-black shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            @error('exdate')
                            <small class="form-text text-danger"> {{$message}} </small>
                            @enderror
                        </div>


                           <div class="col-span-6 sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">*Currency</label>
                          <select  onchange="results()" id="currencyop" name="currency" class="bg-gray-200 h-10 w-96 mt-4 block  rounded-md border border-gray-300  py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            <option value="">chose currency</option>
                            <option value="USD">USD</option>
                            <option value="SDG">SDG </option>
                          </select>
                          @error('currency')
                          <small class="form-text text-danger"> {{$message}} </small>
                          @enderror

                        </div>

                          <div class="col-span-6 sm:col-span-3 mt-4">
                            <label for="last-name" class="block text-sm font-medium text-gray-700">* Currency Exchange</label>
                                              <p id="result"></p>
                        </div>


                        <div class="col-span-6 sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">*pay to</label>

                          <select  id="pay" name="payto" class="bg-gray-200 h-10 w-96 mt-4 block  rounded-md border border-gray-300  py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">

                            <option value="">chose pay to</option>
                            @foreach ($payment as $val)
                            <option value=" {{ $val->name }}"> {{ $val->name }}</option>
                            {{-- <option value="sust">unv sudan </option>
                            <option value="kh">unv khartoum</option>
                            <option value="sust">unv sudan </option> --}}
                            @endforeach
                          </select>

                          @error('payto')
                          <small class="form-text text-danger"> {{$message}} </small>
                          @enderror

                        </div>


                          <div class="flex flex-row col-span-6 sm:col-span-3 mt-4">
                            <label for="last-name" class="block text-sm font-medium text-gray-700">* Pay</label>
                                 <div class="mt-0 flex w-auto border-spacing-8 border-slate-800">
                                    <input  type="radio" name="pay" id="pay" checked >
                                    <img src="/img/paypal.png" class="w-20 h-20" alt="">
                                 </div>
                                 <div class="ml-10 mt-0 flex w-auto border-spacing-8 border-slate-800">
                                    <input  type="radio" name="pay" id="cash" >
                                    <img src="/img/cashcard.webp" class="w-20 h-20" alt="">
                                 </div>
                        </div>

                      </div>
                      <div class=" px-4 py-10 text-right flex flex-col items-center sm:px-6">
                        <button type="submit" class="rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"> Pay   </button>
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



$(function(){
    $('input[name="option"]').click(function(){
        var $radio = $(this);

        // if this was previously checked
        if ($radio.data('waschecked') == true)
        {
            $radio.prop('checked', false);
            $radio.data('waschecked', false);
        }
        else
            $radio.data('waschecked', true);

        // remove was checked from other radios
        $radio.siblings('input[name="option"]').data('waschecked', false);
    });


});
            function results(){
              let amount = document.getElementById('amount').value;
              let currency =  document.getElementById('currencyop').value;
              if(currency=="SDG"){
                 return document.getElementById("result").innerHTML="SDG "+amount*10;
            }else{
              return document.getElementById("result").innerHTML="$ "+amount*100;
            }
            }
    </script>

@endsection
