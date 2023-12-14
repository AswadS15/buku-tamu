@extends('componen.app')
@section('isi')
<div class=" sm:ml-64 bg-white rounded-t-xl h-screen">
      <div class="p-4  rounded-lg dark:border-gray-700 mt-16 md:mt-0">
         <h1 class="text-2xl text-emerald-700 font-bold">Detail Pengunjung</h1>



<div class="relative overflow-x-auto max-w-6xl">
    <table class="w-full text-left rtl:text-right text-gray-500 dark:text-gray-400 mt-10 text-lgresources/views/pengunjung/detail.blade.php">
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white font-semibold">
                    Nama Tamu
                </th>
                <td class="px-6 py-4">
                    :
                </td>
                <td class="px-6 py-4 ">
                    {{ Str::ucfirst($pengunjung->nama) }}
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white font-semibold">
                    Instansi/Kelompok Masyarakat
                </th>
                <td class="px-6 py-4">
                    :
                </td>
                <td class="px-6 py-4 ">
                    {{ Str::ucfirst($pengunjung->instansi) }}
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white font-semibold">
                    Alamat
                </th>
                <td class="px-6 py-4">
                    :
                </td>
                <td class="px-6 py-4 ">
                    {{ Str::ucfirst($pengunjung->alamat) }}
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white font-semibold">
                    No. Handphone
                </th>
                <td class="px-6 py-4">
                    :
                </td>
                <td class="px-6 py-4 ">
                    {{ Str::ucfirst($pengunjung->hp) }}
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white font-semibold">
                    Divisi
                </th>
                <td class="px-6 py-4">
                    :
                </td>
                <td class="px-6 py-4 ">
                    {{ Str::ucfirst($pengunjung->divisi->divisi_type) }}
                </td>
            </tr>
    </table>
    <a href="/pengunjung "><button class=" font-semibold text-white rounded-lg mt-5 py-3 px-6 bg-blue-400 max-w-sm">Kembali</button></a>
        
</div>

      </div>
</div>  
@endsection