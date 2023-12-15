<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])

    <style>
        html, body {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
{{-- NAVBAR --}}
    <nav id="myNavbar" class="bg-emerald-700 backdrop-blur-sm dark:bg-gray-900 fixed w-full z-20 top-0 start-0 dark:border-gray-600 ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-4xl text-white font-bold whitespace-nowrap dark:text-white">BPKHTL-XV</span>
            </a>
            <div style="color: aliceblue" class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a href="#layanan"><button type="button"  class="text-white bg-green-400 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-green-600 rounded-lg text-lg font-bold px-4 py-2 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Get started</button></a>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-gray-800">
                    <li>
                        <a href="#" class="block py-2 px-3 text-white bg-green-700 rounded md:bg-transparent md:text-white md:p-0 md:dark:text-green-500" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#layanan" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Layanan</a>
                    </li>
                    <li>
                        <a href="#about" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
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
<section class= "bg-emerald-700 dark:bg-gray-900 pt-9 bg-cover bg-center pb-10" >
    <div class="container mx-auto">
        <div class="py-8 md:px-40 mx-auto max-w-screen-xl sm:pt-10 ">
            <div class="mx-10 mb-8 lg:mb-16 md:text-center place-content-center border-b pt-10 pb-16">
                <div class="flex justify-center pb-4">
                    <img src="{{ asset('/img/2.png') }}" width="100px" alt="Deskripsi Gambar">
                </div>
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
<section id="layanan" class="pb-24 pt-24 " >
    <div class="bg-gray-100 max-w-2xl mx-auto p-5 rounded-lg">
        <h3 class="text-center font-semibold text-3xl text-emerald-700 pb-10">LAYANAN</h3>
        <form class="max-w-xl mx-auto" method="post" action="/home">
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
                    <input type="text" name="hp" id="hp" class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required />
                    <label for="hp" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No. Handphone</label>
                </div>
            </div>

            <label for="divisi" class="block mb-2 text-lg font-medium text-gray-500 dark:text-white">Pilih divisi</label>
            <select id="divisi" name="divisi" class="bg-gray-50 border border-gray-300 text-gray-500 text-lg rounded-lg focus:ring-green-600 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-600 dark:focus:border-green-600">
                <option></option>
                @foreach ($divisi as $item)
                <option value="{{ $item->id }}">{{ $item->divisi_type }}</option>    
                @endforeach
                
                
            </select>

            <div class="relative z-0 w-full mb-5 group pt-5">
                <label for="data"  class="block mb-2 text-lg font-medium text-gray-500 dark:text-white">Masukan tujuan Anda</label>
                <textarea id="data" name="data" rows="4" class="block p-2.5 w-full text-lg text-gray-500 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-600 focus:border-green-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-600 dark:focus:border-green-600" placeholder="Apa tujuan anda..."></textarea>
            </div>
            <button type="submit" class="text-white bg-green-700 hover:bg-green-300 focus:ring-4 focus:outline-none focus:ring-green-300 rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 font-semibold mb-2">Submit</button>
            
            {{-- @error('nama')
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
            @enderror --}}

        </form>
    </div>
</section>
{{-- END SECTION 2 --}}

{{-- SECTION 3 --}}
<section id="about" class= "bg-emerald-700 pt-24 pb-72 ">
    <div class="container mx-auto"> 
        <h3 class="text-white text-3xl text-center font-bold pb-10">ABOUT US</h3>      
        <div class="max-w-screen mx-auto px-5 grid grid-cols-2 gap-10">
            <div class="col-span-1">
                <h3 class="text-white text-xl font-semibold  pb-2"> Visi</h3>
                <p class="text-white font-sans">"Terwujudnya pemantapan kawasan hutan dan penataan lingkungan hidup secara partisipatif dan berkelanjutan sebagai prakondisi pembangunan nasional" dalam mendukung:
                    Terwujudnya Keberlanjutan Sumber Daya Hutan dan Lingkungan Hidup untuk Kesejahteraan Masyarakat
                </p>
            </div>  
            <div class="col-span-1">
                <h3 class="text-white text-xl font-semibold pb-2"> Misi</h3>
                <p class="text-white font-sans">Dengan memperhatikan Misi Presiden dan Wakil Presiden serta berpedoman pada tugas, fungsi dan kewenangan KLHK, sebagaimana telah di tetapkan dalam undang-undang nomor 41 tahun 1999 tentang Kehutanan dan Undang-Undang Nomor 32 Tahun 2009 tentang Perlindungan dan Pengelolaan Lingkungan Hidup serta Peraturan Presiden Nomor 16 Tahun 2015 Tentang Kementrian Lingkungan Hidup dan Kehutanan, maka misi BPKH Wilayah XV Gorontalo:
                    <br>
                    1.	Mewujudkan pemantapan Kawasan melalui Inventarisasi Hutan, Pengukuhan Kawasan hutan dan Penatagunaan Kawasan Hutan dan penyusun Rencana kehutanan dalam mendukung terwujudnya hutan yang Lestari;
                    <br>
                    2.	Mewujudkan pengendalian penggunaan Kawasan hutan dalam mendukung terwujudnya optimalisasi pemanfaatan ekonomi sumber daya hutan dan lingkungan secara berkeadilan dan berkelanjutan;
                    <br>
                    3.	Meningkatnya Tata Kelola Pemerintahan di BPKH Wilayah XV Gorontalo sesuai Kerangka Reformasi Birokrasi dalam mendukung terwujudnya tata Kelola pemerintahan yang baik.</p>
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

  document.addEventListener('DOMContentLoaded', function () {
    var navbar = document.getElementById('myNavbar');

    window.addEventListener('scroll', function () {
      if (window.scrollY > 50) {
        navbar.classList.add('bg-green-700'); // Ganti dengan warna latar belakang yang diinginkan
        navbar.classList.add('bg-opacity-80');
       
        navbar.classList.remove('bg-emerald-700');
      } else {
        navbar.classList.add('bg-emerald-700');
        navbar.classList.remove('bg-green-700');
        navbar.classList.remove('bg-opacity-80');
       
      }
    });
  });




</script>

</body>

</html>