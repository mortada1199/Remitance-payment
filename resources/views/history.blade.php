@extends('layouts.dashbord')
@section('content')

<div class="py-4 bg-[#050621] text-white  mt-4">

<p class=" mt-16  text-white ml-8">Report > <span class="font-bold">Transaction History</span></p>

<p class=" mt-16  text-white ml-8"><span class="font-bold">Filter By</span></p>



<!--Begin table -->
<div class="flex flex-col p-12">
    <table class="col-start-2 col-span-4 text-sm text-left text-white mt-14 bg-gray-300 rounded-lg ">
        <thead class="text-black uppercase font-bold border-collapse border-black">
            <tr class="">
                <th scope="col" class="py-3 px-6">
                   Name
                </th>
                <th scope="col" class="py-3 px-5">
                    Amount
                </th>
                <th scope="col" class="py-3 px-6">
                    date
                </th>
                <th scope="col" class="py-4 px-6">
                    card_to_number
                </th>
                <th scope="col" class="py-3 px-6 ">
                    card_from_number
                </th>


            </tr>
        </thead>
        <tbody>
            @foreach($history as $val)
            <tr class="bg-gray-200 text-black">
                <td class="py-3 px-6">
                {{ $val->name }}
                </td>
                <td class="py-3 px-6">
                    {{ $val->amount }}
                </td>
                <td class="py-3 px-6">
                    {{ $val->date }}
                </td>
                <td class="py-3 px-6">
                    {{ $val->cardnumberto }}
                </td>
                <td class="py-3 px-6">
                    {{ $val->cardnumberfrom }}
                </td>
            </tr>
            @endforeach
        </tbody>


    </table>
<!-- End table -->
<!-- Previous Button -->
{{-- <div class="flex flex-row justify-end mt-5 ">
    <a href="#" class="  w-36 inline-flex items-center py-2 px-4 mr-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-900 hover:bg-gray-900 hover:text-gray-900 dark:bg-gray-600 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-black">
        <svg aria-hidden="true" class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
        Previous
      </a>

      <a href="#" class=" w-36 inline-flex items-center py-2 px-4 mr-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-900 hover:bg-gray-900 hover:text-gray-900 dark:bg-gray-600 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-black">
        Next
        <svg aria-hidden="true" class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </a>
</div> --}}

</div>
</div>

@endsection
