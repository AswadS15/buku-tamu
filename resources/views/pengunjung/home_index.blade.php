<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body style="background-image: url('{{ asset('img/1.jpeg') }}');" class="bg-cover bg-center bg-opacity-50">
{{-- NAVBAR --}}
    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">BPKHTL-XV</span>
            </a>
            <div style="color: aliceblue" class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button" class="text-white bg-green-700 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-600 rounded-lg text-lg font-bold px-4 py-2 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Get started</button>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#" class="block py-2 px-3 text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 md:dark:text-green-500" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
{{-- NAVBAR --}}


{{-- SECTION 1 --}}
<section class= "dark:bg-gray-900 mt-14 bg-cover bg-center pb-40" >
    <div class="container mx-auto">
        <div class="py-8 md:px-40 mx-auto max-w-screen-xl sm:pt-10 ">
            <div class="mx-10 mb-8 lg:mb-16 md:text-center place-content-center border-b pt-10 pb-16">
                <h2 class="mb-4 md:text-4xl tracking-tight font-extrabold text-gray-100 dark:text-white text-3xl">MATODUWOLO <br> BPKHTL WILAYAH XV GORONTALO</h2>
                <p class="text-gray-100 sm:text-xl dark:text-gray-400"></p>
                <div class="p-8  text-3xl font-bold max-w-sm mx-auto">
                    <!-- Tampilkan waktu -->
                    <div id="digitalClock" class="text-[50px] text-center text-white"></div>
                </div>
            </div>
        </div>
    
        <div class="max-w-screen mx-auto px-5">
            <div class="grid lg:grid-cols-4 md:grid-cols-2  grid-rows-4 md:grid-rows-none gap-5 pb-28 ">
                {{-- KOTAK 1 --}}
                <div class="rounded-lg col-span-1 p-5 border shadow-md bg-gray-50">
                    <div class="flex justify-center  pb-5 border-b mb-4">
                        <h3 class="font-semibold text-xl text-center text-gray-900 border shadow-md px-3">STATISTIK PENGUNJUNG</h3>
                    </div>
                    <div class="max-w-xl ">
                        <h2 class="text-2xl font-semibold mb-6 text-center">JUMLAH</h2>
                        <div x-data="{ activeSlide: 1 }" x-init="setInterval(() => { activeSlide = (activeSlide % 3) + 1; }, 3000)" class="mt-8">
                          <div x-show="activeSlide === 1">
                            <div class="grid grid-cols-2 px-5">
                                <div class="col-span-1">
                                    <p class="text-6xl font-bold text-center" style="color: #36a2eb">{{ $hari }}</p>
                                </div>
                                <div class="col-span-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 mx-auto" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                                </div>
                            </div>  
                          </div>
                          <div x-show="activeSlide === 2">
                            <div class="grid grid-cols-2 px-5">
                                <div class="col-span-1">
                                    <p class="text-6xl font-bold text-center" style="color: #ff6384">{{ $hari2 }}</p>
                                </div>
                                <div class="col-span-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 mx-auto" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                                </div>
                            </div>   
                          </div>
                          <div x-show="activeSlide === 3">
                            <div class="grid grid-cols-2 px-5">
                                <div class="col-span-1">
                                    <p class="text-6xl font-bold text-center" style="color: #ff9f40">{{ $hari3 }}</p>
                                </div>
                                <div class="col-span-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 mx-auto" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                                </div>
                            </div>   
                          </div>
                          <div class="flex justify-center border shadow-md rounded-md mt-7">
                            <button
                              class="flex-1 bg-gray-300 hover:bg-gray-400 py-2  rounded-l-md"
                              :class="{ 'bg-gray-400': activeSlide === 1 }"
                              @click="activeSlide = 1"
                            >
                            Harian
                            </button>
                            <button
                              class="flex-1 bg-gray-300 hover:bg-gray-400 py-2"
                              :class="{ 'bg-gray-400': activeSlide === 2 }"
                              @click="activeSlide = 2"
                            >
                            Mingguan
                            </button>
                            <button
                              class="flex-1 bg-gray-300 hover:bg-gray-400 py-2 rounded-r-md"
                              :class="{ 'bg-gray-400': activeSlide === 3 }"
                              @click="activeSlide = 3"
                            >
                            Bulanan
                            </button>
                          </div>
                        </div>
                    </div>
                </div>
                {{-- END KOTAK 1 --}}

                {{-- KOTAK 2 --}}
                <div class="rounded-lg col-span-1 p-5 border shadow-md bg-gray-50">
                    <div class="flex justify-center  pb-5 border-b mb-4">
                        <h3 class="font-semibold text-xl text-center text-gray-900 border shadow-md px-5">GRAFIK PENGUNJUNG</h3>
                    </div>
                    <div>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
                {{-- END KOTAK 2 --}}

                {{-- KOTAK 3 --}}
                <div class="rounded-lg col-span-1 p-5 border shadow-md bg-gray-50">
                    <div class="flex justify-center  pb-5 border-b mb-4">
                        <h3 class="font-semibold text-xl text-center text-gray-900 border shadow-md px-5">STATISTIK ULASAN</h3>
                    </div>
                    <div class="max-w-xl ">
                        <h2 class="text-2xl font-semibold mb-6 text-center">JUMLAH</h2>
                        <div x-data="{ activeSlide: 1 }" x-init="setInterval(() => { activeSlide = (activeSlide % 2) + 1; }, 3000)" class="mt-8">
                          <div x-show="activeSlide === 1">
                            <div class="grid grid-cols-2">
                                <div class="col-span-1">
                                    <p class="text-6xl font-bold text-center" style="color: #36a2eb">{{ $puas }}23</p>
                                </div>
                                <div class="col-span-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 mx-auto" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                                </div>
                            </div>  
                          </div>
                          <div x-show="activeSlide === 2">
                            <div class="grid grid-cols-2 ">
                                <div class="col-span-1">
                                    <p class="text-6xl font-bold text-center" style="color: #ff6384">{{ $tidakpuas }}23</p>
                                </div>
                                <div class="col-span-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 mx-auto" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                                </div>
                            </div>   
                          </div>
                          <div class="flex justify-center border shadow-md rounded-md mt-7">
                            <button
                              class="flex-1 bg-gray-300 hover:bg-gray-400 py-2  rounded-l-md"
                              :class="{ 'bg-gray-400': activeSlide === 1 }"
                              @click="activeSlide = 1"
                            >
                              Puas
                            </button>
                            <button
                              class="flex-1 bg-gray-300 hover:bg-gray-400 py-2  rounded-r-md"
                              :class="{ 'bg-gray-400': activeSlide === 2 }"
                              @click="activeSlide = 2"
                            >
                            Kurang Puas
                            </button>
                          </div>
                        </div>
                    </div>
                </div>
                {{-- END KOTAK 3 --}}

                {{-- KOTAK 4 --}}
                <div class="rounded-lg col-span-1 p-5 border shadow-md bg-gray-50">
                    <div class="flex justify-center  pb-5 border-b mb-4">
                        <h3 class="font-semibold text-xl text-center text-gray-900 border shadow-md px-5">GRAFIK ULASAN</h3>
                    </div>
                    <div>
                        <canvas id="ulasan"></canvas>
                    </div>
                    
                </div>
                {{-- END KOTAK 4--}}
            </div>
        </div>
    </div>
</section>
{{-- END SECTION 1 --}} 

{{-- SECTION 2 --}}
<section class="pb-24" id="form">
    <div class="bg-gray-100 max-w-2xl mx-auto p-5 rounded-lg">
        <h3 class="text-center text-basa font-semibold text-3xl text-gray-900 pb-10">LAYANAN</h3>
        <form class="max-w-xl mx-auto" method="post" action="/pengunjung">
            @csrf
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="nama" id="nama" class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required />
                    <label for="nama" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                    
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="instansi" id="instansi" class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required />
                    <label for="instansi" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Instasi/Kelompok Masyrakat</label>
                </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="tel" name="alamat" id="alamat" class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required />
                    <label for="alamat" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat</label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="no_handphone" id="no_handphone" class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required />
                    <label for="no_handphone" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No. Handphone</label>
                </div>
            </div>

            <label for="sub-bagian" class="block mb-2 text-lg font-medium text-gray-500 dark:text-white">Pilih Sub-Bagian</label>
            <select id="sub-bagian" name="sub-bagian" class="bg-gray-50 border border-gray-300 text-gray-500 text-lg rounded-lg focus:ring-green-600 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-600 dark:focus:border-green-600">
                <option>TATA USAHA</option>
                <option>PKH</option>
                <option>ISDHTL</option>
            </select>

            <div class="relative z-0 w-full mb-5 group pt-5">
                <label for="tujuan"  class="block mb-2 text-lg font-medium text-gray-500 dark:text-white">Masukan Tujuan Anda</label>
                <textarea id="tujuan" name="tujuan" rows="4" class="block p-2.5 w-full text-lg text-gray-500 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-600 focus:border-green-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-600 dark:focus:border-green-600" placeholder="Apa tujuan anda..."></textarea>
            </div>
            <button type="submit" class="text-white bg-green-700 hover:bg-green-300 focus:ring-4 focus:outline-none focus:ring-green-300 rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 font-semibold mb-2">Submit</button>
            
            @error('nama')
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-1 rounded relative" role="alert">
                            <strong class="font-bold">Error!</strong>
                            <span class="block sm:inline">{{ $message }}</span>
                        </div>
            @enderror
            @error('instansi')
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-1 rounded relative" role="alert">
                            <strong class="font-bold">Error!</strong>
                            <span class="block sm:inline">{{ $message }}</span>
                        </div>
            @enderror
            @error('alamat')
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-1 rounded relative" role="alert">
                            <strong class="font-bold">Error!</strong>
                            <span class="block sm:inline">{{ $message }}</span>
                        </div>
            @enderror
            @error('no_handphone')
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-1 rounded relative" role="alert">
                            <strong class="font-bold">Error!</strong>
                            <span class="block sm:inline">{{ $message }}</span>
                        </div>
            @enderror
            @error('tujuan')
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-1 rounded relative" role="alert">
                            <strong class="font-bold">Error!</strong>
                            <span class="block sm:inline">{{ $message }}</span>
                        </div>
            @enderror

        </form>
    </div>
</section>
{{-- END SECTION 2 --}}

{{-- SECTION 3 --}}
<section class= "dark:bg-gray-900 mt-40 mb-16">
    <div class="container mx-auto">       
        <div class="max-w-screen mx-auto px-5 grid grid-cols-2 gap-10">
            <div class="cols-span-1">
                <form action="/pengunjung/ulasan" method="POST" class="max-w-lg bg-gray-100 p-12 mx-auto rounded-md">
                    @csrf
                    <h3 class="text-center text-basa font-semibold text-3xl pb-10">ULASAN PELAYANAN</h3>
                    <div class="relative z-0 mb-5 group">
                        <input type="text" name="nama" id="nama" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required />
                        <label for="nama" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Masukan nama anda</label>
        
                        <label for="ulasan" class="mt-10 block mb-2 text-lg font-medium text-gray-600 dark:text-white">Ulasan anda</label>
                        <textarea id="ulasan" name="ulasan" rows="4" class="block p-2.5 w-full text-lg text-gray-600 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>
                    </div>                
                    <div class="form-group">
                        <label>Pilih Alasan Ketidakpuasan:</label><br>
                        <input type="checkbox" name="alasan[]" value="Layanan Kurang Memuaskan"> Layanan Kurang Memuaskan<br>
                        <input type="checkbox" name="alasan[]" value="Pelayanan Lambat"> Pelayanan Lambat<br>
                        <input type="checkbox" name="alasan[]" value="Fasilitas Tidak Memadai"> Fasilitas Tidak Memadai<br>
                        <!-- Tambahkan pilihan alasan lainnya sesuai kebutuhan -->
                    </div>
                    <button type="submit" class="text-white bg-green-700 hover:bg-green-300 focus:ring-4 focus:outline-none focus:ring-green-300 rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 font-semibold mb-2">Submit</button>
                </form>
            </div>
            <div class="bg-gray-100 p-10 rounded-md">
                <div class="col-span-1 p-5 h-[500px] overflow-x-scroll border-l ">
                    <div class="flex justify-between pb-4 pt-10">
                        <div class="flex ">
                            <img src="https://flowbite.com/docs/images/logo.svg" class="h-12 " alt="Flowbite Logo">
                            <h3 class="text-2xl pt-1 ps-5 ">Mohamad Aswad Supu</h3>
                        </div>
                        <p class="text-lg pt-2">3 jam yang lalu</p>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus ullam delectus nihil, alias atque recusandae voluptas ducimus debitis facilis ratione sequi. Odio magnam sapiente, perspiciatis vero facere ipsam molestias nemo. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis, aspernatur? Repellat, laboriosam odit at porro facere quasi quae officia iste non quos iusto aut provident sint corporis modi. Libero, odio?</p>
                    <div class="flex justify-between pb-4 pt-10">
                        <div class="flex ">
                            <img src="https://flowbite.com/docs/images/logo.svg" class="h-12 " alt="Flowbite Logo">
                            <h3 class="text-2xl pt-1 ps-5 ">Mohamad Aswad Supu</h3>
                        </div>
                        <p class="text-lg pt-2">3 jam yang lalu</p>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus ullam delectus nihil, alias atque recusandae voluptas ducimus debitis facilis ratione sequi. Odio magnam sapiente, perspiciatis vero facere ipsam molestias nemo. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis, aspernatur? Repellat, laboriosam odit at porro facere quasi quae officia iste non quos iusto aut provident sint corporis modi. Libero, odio?</p>
                    <div class="flex justify-between pb-4 pt-10">
                        <div class="flex ">
                            <img src="https://flowbite.com/docs/images/logo.svg" class="h-12 " alt="Flowbite Logo">
                            <h3 class="text-2xl pt-1 ps-5 ">Mohamad Aswad Supu</h3>
                        </div>
                        <p class="text-lg pt-2">3 jam yang lalu</p>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus ullam delectus nihil, alias atque recusandae voluptas ducimus debitis facilis ratione sequi. Odio magnam sapiente, perspiciatis vero facere ipsam molestias nemo. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis, aspernatur? Repellat, laboriosam odit at porro facere quasi quae officia iste non quos iusto aut provident sint corporis modi. Libero, odio?</p>
                    <div class="flex justify-between pb-4 pt-10">
                        <div class="flex ">
                            <img src="https://flowbite.com/docs/images/logo.svg" class="h-12 " alt="Flowbite Logo">
                            <h3 class="text-2xl pt-1 ps-5 ">Mohamad Aswad Supu</h3>
                        </div>
                        <p class="text-lg pt-2">3 jam yang lalu</p>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus ullam delectus nihil, alias atque recusandae voluptas ducimus debitis facilis ratione sequi. Odio magnam sapiente, perspiciatis vero facere ipsam molestias nemo. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis, aspernatur? Repellat, laboriosam odit at porro facere quasi quae officia iste non quos iusto aut provident sint corporis modi. Libero, odio?</p>
                    
                </div>
            </div>
            
        </div>
    </div>
</section>
{{-- END SECTION 3 --}}
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

    // JAM
    function updateClock() {
            // Dapatkan objek Date untuk waktu saat ini
            var now = new Date();

            // Ekstrak jam, menit, dan detik dari objek Date
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();

            // Format waktu dalam format 12 jam
            var ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12; // Jam 0 akan dianggap sebagai 12

            // Buat string waktu dalam format HH:mm:ss AM/PM
            var timeString = hours + ':' + addLeadingZero(minutes) + ':' + addLeadingZero(seconds) + ' ' + ampm;

            // Tampilkan waktu di dalam elemen dengan id "digitalClock"
            document.getElementById('digitalClock').innerText = timeString;
        }

        function addLeadingZero(number) {
            // Tambahkan nol di depan angka jika angka < 10
            return number < 10 ? '0' + number : number;
        }

        // Panggil fungsi updateClock setiap detik
        setInterval(updateClock, 1000);

        // Inisialisasi jam pada saat halaman dimuat
        updateClock();
    // GRAFIK
  const ctx1 = document.getElementById('myChart');

  new Chart(ctx1, {
    type: 'doughnut',
    data: {
      labels: ['Hari ini', 'Minggu ini', 'Bulan ini'],
      datasets: [{
          label: ['Jumlah'],
          data: [{{ $hari }}, {{ $hari2 }}, {{ $hari3 }}],
        borderWidth: 1
      }]
    },
  });

  const ctx2 = document.getElementById('ulasan');

  new Chart(ctx2, {
    type: 'doughnut',
    data: {
      labels: ['Puas', 'Kurang Puas'],
      datasets: [{
          label: ['Jumlah'],
        data: [{{ $puas }}, {{ $tidakpuas }}],
        borderWidth: 1
      }]
    },
  });
</script>

</body>

</html>