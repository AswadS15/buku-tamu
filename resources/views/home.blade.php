<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
{{-- NAVBAR --}}
    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">BPKHTL-XV</span>
            </a>
            <div style="color: aliceblue" class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button" class="text-white bg-green-700 hover:bg-green-300 focus:ring-4 focus:outline-none focus:ring-green-700 rounded-lg text-lg font-bold px-4 py-2 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Get started</button>
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
<section class= "dark:bg-gray-900 mt-8 bg-neutral-50">
    <div class="container mx-auto">
        <div class="py-8 md:px-40 mx-auto max-w-screen-xl sm:pt-10 ">
            <div class="mx-10 mb-8 lg:mb-16 md:text-center place-content-center border-b pt-10 pb-32">
                <h2 class="mb-4 md:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white text-3xl">SELAMAT DATANG PADA LAYANAN BUKU TAMU BPKHTL-XV</h2>
                <p class="text-gray-500 sm:text-xl dark:text-gray-400">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
            </div>
        </div>
    
        <div class="max-w-screen mx-auto px-5">
            <div class="grid lg:grid-cols-4 md:grid-cols-2  grid-rows-4 md:grid-rows-none gap-5 pb-28 ">
                <div class="rounded-lg col-span-1 p-5 border shadow-md">
                    <div class="flex justify-center  pb-5 border-b mb-4">
                        <h3 class="font-semibold text-xl text-center text-gray-600">JUMLAH PENGUNJUNG</h3>
                    </div>
                        <table class="text-gray-500">
                            <tr class="md:text-lg text-xl">
                                <td>Hari ini</td>
                                <td class="md:px-10 px-16">:</td>
                                <td>5</td>
                            </tr>
                            <tr class="md:text-lg text-xl">
                                <td>Hari ini</td>
                                <td class="md:px-10 px-16">:</td>
                                <td>10</td>
                            </tr>
                            <tr class="md:text-lg text-xl">
                                <td>Hari ini</td>
                                <td class="md:px-10 px-16">:</td>
                                <td>20</td>
                            </tr>
                        </table>
                </div>
                <div class="rounded-lg col-span-1 p-5 border shadow-md">
                    <div class="flex justify-center  pb-5 border-b mb-4">
                        <h3 class="font-semibold text-xl text-center text-gray-600">GRAFIK PENGUNJUNG</h3>
                    </div>
                        <table class="text-gray-500">
                            <tr class="md:text-lg text-xl">
                                <td>Hari ini</td>
                                <td class="md:px-10 px-16">:</td>
                                <td>5</td>
                            </tr>
                            <tr class="md:text-lg text-xl">
                                <td>Hari ini</td>
                                <td class="md:px-10 px-16">:</td>
                                <td>10</td>
                            </tr>
                            <tr class="md:text-lg text-xl">
                                <td>Hari ini</td>
                                <td class="md:px-10 px-16">:</td>
                                <td>20</td>
                            </tr>
                        </table>
                </div>
                <div class="rounded-lg col-span-1 p-5 border shadow-md">
                    <div class="flex justify-center  pb-5 border-b mb-4">
                        <h3 class="font-semibold text-xl text-center text-gray-600">JUMLAH ULASAN</h3>
                    </div>
                        <table class="text-gray-500">
                            <tr class="md:text-lg text-xl">
                                <td>Hari ini</td>
                                <td class="md:px-10 px-16">:</td>
                                <td>5</td>
                            </tr>
                            <tr class="md:text-lg text-xl">
                                <td>Hari ini</td>
                                <td class="md:px-10 px-16">:</td>
                                <td>10</td>
                            </tr>
                            <tr class="md:text-lg text-xl">
                                <td>Hari ini</td>
                                <td class="md:px-10 px-16">:</td>
                                <td>20</td>
                            </tr>
                        </table>
                </div>
                <div class="rounded-lg col-span-1 p-5 border shadow-md">
                    <div class="flex justify-center  pb-5 border-b mb-4">
                        <h3 class="font-semibold text-xl text-center text-gray-600">GRAFIK ULASAN</h3>
                    </div>
                        <table class="text-gray-500">
                            <tr class="md:text-lg text-xl">
                                <td>Hari ini</td>
                                <td class="md:px-10 px-16">:</td>
                                <td>5</td>
                            </tr>
                            <tr class="md:text-lg text-xl">
                                <td>Hari ini</td>
                                <td class="md:px-10 px-16">:</td>
                                <td>10</td>
                            </tr>
                            <tr class="md:text-lg text-xl">
                                <td>Hari ini</td>
                                <td class="md:px-10 px-16">:</td>
                                <td>20</td>
                            </tr>
                        </table>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- END SECTION 1 --}} 

{{-- SECTION 2 --}}
<section class="pb-24">
    <h3 class="text-center text-basa font-semibold text-3xl pb-16 pt-16">LAYANAN</h3>
    <div>
        <form class="max-w-xl mx-auto">
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="nama" id="nama" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required />
                    <label for="nama" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="instansi" id="instansi" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required />
                    <label for="instansi" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Instasi/Kelompok Masyrakat</label>
                </div>

            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="alamat" id="alamat" class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required />
                    <label for="alamat" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="no_handphone" id="no_handphone" class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required />
                    <label for="no_handphone" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No. Handphone</label>
                </div>
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <label for="tujuan"  class="block mb-2 text-lg font-medium text-gray-500 dark:text-white">Masukan Tujuan Anda</label>
                <textarea id="tujuan" name="tujuan" rows="4" class="block p-2.5 w-full text-lg text-gray-500 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Apa tujuan anda..."></textarea>
            </div>
            <button type="submit" class="text-white bg-green-700 hover:bg-green-300 focus:ring-4 focus:outline-none focus:ring-green-300 rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 font-semibold">Submit</button>
        </form>
    </div>
</section>
{{-- END SECTION 2 --}}

{{-- SECTION 3 --}}
<section class= "dark:bg-gray-900 mt-8 bg-neutral-50">
    <div class="container mx-auto">
        <h3 class="text-center text-basa font-semibold text-3xl pb-16 pt-16">ULASAN PELAYANAN</h3>
        <div class="max-w-screen mx-auto px-5 grid grid-cols-2 gap-10">
            <div class="cols-span-1">
                <form action="" class="max-w-lg">
                    <div class="relative z-0 mb-5 group">
                        <input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required />
                        <label for="floating_email" class="peer-focus:font-medium absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Masukan nama anda</label>
        
                        <label for="message" class="mt-5 block mb-2 text-lg font-medium text-gray-600 dark:text-white">Ulasan anda</label>
                        <textarea id="message" rows="4" class="block p-2.5 w-full text-lg text-gray-600 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>
                    </div>
                </form>
            </div>
            <div class="col-span-1 p-5 h-[500px] overflow-x-scroll border-l">
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
</section>
{{-- END SECTION 3 --}}
</body>

</html>