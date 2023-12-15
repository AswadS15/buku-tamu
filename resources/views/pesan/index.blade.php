@extends('componen.app')
@section('isi')
<div class=" sm:ml-64 bg-white rounded-t-xl h-screen">
      <div class="p-4  rounded-lg dark:border-gray-700 mt-16 md:mt-0">
         <h1 class="text-2xl text-emerald-700 font-bold  px-3 py-3 border-b">Data Divisi</h1>
         <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
            

         <div class="relative overflow-x-hidden shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
               <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  <tr>
                        <th scope="col" class="px-6 py-3">
                           No
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Tujuan
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Aksi
                        </th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($pesan as $item)
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                     <td scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $loop->iteration }}
                     </td>
                     <td scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $item->pengunjung->nama }}
                     </td>
                     <td scope="row" title="{{$item->data }}"  class="overflow-hidden px-6 py-4 font-semibold text-gray-900 whitespace-nowrap dark:text-white ">
                        {{ $item->data }}
                     </td>
                     <td scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                        <div class="flex ">
                           <a href="pesan/{{ $item->id }}" class="text-white bg-blue-400 px-5 py-1 rounded-lg me-3" >Detail</a>
                           <form action="{{route('divisi.destroy', $item->id)}}" method="post">
                              @csrf
                              @method('delete')
                              <button type="submit" class="text-white bg-red-400 px-5 py-1 rounded-lg me-3"
                                 onclick="return confirm('Apakah anda yakin ingin menghapus Data Pengunjung ini ?')">Delete</button>
                        </form>
                        </div>
                     </td>  
                  </tr>     
                  @endforeach
               </tbody>
            </table>
         </div>

         </div>
      </div>
</div>  
@endsection