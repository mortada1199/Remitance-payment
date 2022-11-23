@extends('layouts.dashbord')
@section('content')


<div class="bg-[#050621]">


<p class=" mt-10  text-white ml-8">Show <span class="font-bold">beneficiary</span></p>

<div class="flex flex-col p-12">

    <div class="flex flex-row justify-end mt-5 ">
    <a href="{{ route('addbenfic') }}" class="  w-36 inline-flex items-center py-2 px-4 mr-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-900 hover:bg-gray-900 hover:text-gray-900 dark:bg-gray-600 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:hover:text-green-600">
      Add_beneficiary
    </a>
  </div>
    <table  class="col-start-2 col-span-4 text-sm text-left text-white mt-14 bg-gray-300 rounded-lg ">

      <thead class="text-black uppercase font-bold border-collapse border-black">
            <tr class="">

                <th scope="col" class="py-3 px-6">
                    #
                 </th>

                <th scope="col" class="py-3 px-6">
                   Name
                </th>
                <th scope="col" class="py-3 px-5">
                    short_name
                </th>
                <th scope="col" class="py-3 px-6">
                    phone
                </th>
                <th scope="col" class="py-4 px-6">
                    card_to_number
                </th>
                <th scope="col" class="py-3 px-6 ">
                    Action
                </th>


            </tr>
        </thead>
        <tbody>
            @foreach($benfic as $val)
            <tr class="bg-gray-200 text-black">
                <td class="py-3 px-6">
                    {{ $val->id }}
                </td>
                <td class="py-3 px-6">
                    {{ $val->name }}
                </td>
                <td class="py-3 px-6">
                    {{ $val->amount }}
                </td>
                <td class="py-3 px-6">
                    {{ $val->phone }}
                </td>
                <td class="py-3 px-6">
                    {{ $val->cardto }}
                </td>
                <td class="py-3 px-6 flex flex-row">
                  <a href="{{ route('editbenfic',['benfic_id'=>$val->id]) }}">
                    <svg
                      xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600"  fill="none"  viewBox="0 0 24 24" stroke="currentColor" > <path
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2  2 0 112.828  2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                  </a>

                  <a href="{{ route('deletebenfic',['benfic_id'=>$val->id]) }}">
                    <img src="/img/delete.png" class="w-6 h-6 ml-4 text-blue-600" alt="">
                  </a>
                </td>

            </tr>

            @endforeach
        </tbody>

    </table>
<!-- End table -->


</div>



</div>

<div class="flex flex-col items-end mr-10">
    {{ $benfic->links() }}
</div>
@endsection

