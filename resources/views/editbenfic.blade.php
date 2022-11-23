@extends('layouts.dashbord')
@section('content')



<div class="bg-[#050621]">

<p class=" mt-10  text-white ml-8">Edit  <span class="font-bold">beneficiary</span></p>


< <div class="flex flex-col items-center mt-10 ">
    <div class="mt-10 sm:mt-10 mb-20">
        <div class=" md:gap-6 ">
          <div class="mt-5  md:mt-0">
            <form action="{{route('updatebenfc', $benfic->id )}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="overflow-hidden shadow sm:rounded-md">
                <div class="bg-white px-4 py-5 sm:p-6 ">
                  <div class="grid grid-cols-10 gap-4">
                    <div class="col-span-6 sm:col-span-6">
                      <label for="first-name" class="block text-sm font-medium text-gray-700">* Name on Card</label>
                      <input type="text" name="name" placeholder="{{ $benfic->name }}"  class="bg-gray-200 h-10 w-96 mt-4 block  rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      @error('name')
                      <small class="form-text text-danger"> {{$message}} </small>
                      @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                      <label for="last-name" class="block text-sm font-medium text-gray-700">* card number to</label>
                      <input type="text" name="cardto" placeholder="{{ $benfic->cardto }}" class="bg-gray-200 h-10 w-96 mt-4 block  rounded-md  border-black shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                      @error('cardto')
                      <small class="form-text text-danger"> {{$message}} </small>
                      @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-6">
                        <label  class="mt-4 block text-sm font-medium text-gray-700">* short_name</label>
                        <input type="text"  name="amount" placeholder="{{ $benfic->amount }}" class="bg-gray-200 h-10 w-96 mt-4 block  rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        @error('amount')
                        <small class="form-text text-danger"> {{$message}} </small>
                        @enderror
                    </div>

                      <div class="col-span-6 sm:col-span-3">
                        <label for="last-name" class="mt-4 block text-sm font-medium text-gray-700">* phone</label>
                        <input type="text" name="phone" placeholder="{{ $benfic->phone }}"  class="bg-gray-200 h-10 w-96 mt-4 block  rounded-md  border-black shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        @error('phone')
                        <small class="form-text text-danger"> {{$message}} </small>
                        @enderror
                    </div>

                  </div>

                  <div class="flex flex-row px-4 py-10 text-right  items-center justify-center space-x-32 sm:px-6">

                    {{-- <a href="showbnifcary.html" class="rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Back</a> --}}
                    <button type="submit" class="rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                  </div>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
