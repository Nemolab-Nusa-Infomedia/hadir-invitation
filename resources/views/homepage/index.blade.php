@extends('component.layout')

@section('content')
    <!-- SECTION 1 -->
        <div class="flex-col w-4/5 mx-auto flex lg:flex-row lg:items-center mb-16">
            <div class="w-full lg:w-1/2">
                <img src="{{ asset('assets/img/Frame 100.png') }}" class="w-full" alt="">
            </div>
            <div class="w-full lg:w-1/2">
                <div class="w-full pt-6 lg:w-11/12 xl:w-4/5 lg:ms-auto">
                    <h3 class="font-semibold text-2xl lg:text-4xl mb-6">Rayakan Momen Spesial dengan Undangan Digital yang Berkesan.</h3>
                    <p class="text-base mb-6">Kirim kabar gembira lebih mudah dengan undangan digital yang dapat disesuaikan untuk acara apapun—cepat, praktis, dan ramah lingkungan.</p>
                    <div class="grid grid-cols-2">
                        <div class="flex gap-3">
                            <button class="bg-coklat text-xs w-11/12 xl:w-4/5 lg:text-base py-2 rounded-lg text-white"><a href=""><i class="fa-solid fa-cart-shopping"></i> Pesan Sekarang</a></button>
                        </div>
                        <div class="flex gap-3">
                            <button class="border-coklat text-xs w-11/12 xl:w-4/5 lg:text-base py-2 rounded-lg text-coklat"><a href=""><i class="fa-solid fa-cart-shopping"></i> Lihat Tema</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION 1 -->

        <!-- SECTION 2 -->
        <div class="w-full bg-semu-kuning">
            <div class="w-4/5 mx-auto py-8 grid md:grid-cols-2 lg:grid-cols-4 text-center text-coklat lg:content-center lg:items-center lg:h-44">
                <div class="w-4/5 mx-auto mb-8 lg:mb-0">
                    <p class="font-semibold">Desain Mudah</p>
                    <span class="text-sm">Sesuaikan desain undangan dengan tema acara Anda dengan cepat dan mudah.</span>
                </div>
                <div class="w-4/5 mx-auto mb-8 lg:mb-0">
                    <p class="font-semibold">Akses Tanpa Batas</p>
                    <span class="text-sm">Tamu dapat mengakses undangan dari perangkat apa pun, kapan saja.</span>
                </div>
                <div class="w-4/5 mx-auto mb-8 lg:mb-0">
                    <p class="font-semibold">Pengelolaan Mudah</p>
                    <span class="text-sm">Kelola semua undangan dan konfirmasi kehadiran dalam satu platform yang efisien.</span>
                </div>
                <div class="w-4/5 mx-auto mb-8 lg:mb-0">
                    <p class="font-semibold">Pembaruan Instan</p>
                    <span class="text-sm">Update undangan secara langsung dan beri tahu semua tamu tanpa perlu mencetak ulang.</span>
                </div>
            </div>
        </div>
        <!-- END SECTION 2 -->

        <!-- SECTION 3 -->
        <div class="w-full mb-8">
            <div class="w-11/12 mx-auto">
                <div class="flex flex-col xl:flex-row lg:py-24">
                    <div class="w-full xl:w-1/2 pt-20 mb-16">
                        <div class="w-4/5 mr-auto">
                            <h3 class="font-semibold text-3xl mb-6">Keunggulan Undangan Digital untuk Acara Anda</h3>
                            <span class="text-sm">Undangan digital memungkinkan Anda menyesuaikan desain dengan tema acara secara fleksibel dan mudah melakukan perubahan. Edit elemen desain dan kirim pembaruan instan, memastikan semua tamu mendapatkan informasi terbaru tanpa perlu mencetak ulang.</span>
                            <button class="bg-coklat block mt-6 py-2 px-3 rounded-lg text-white"><a href=""><i class="fa-solid fa-cart-shopping"></i> Pesan Sekarang</a></button>
                        </div>
                    </div>
                    <div class="w-full xl:w-1/2 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 lg:grid-rows-2 gap-y-4">
                        <div class="w-72 h-72 mx-auto bg-kuning-gold text-white p-6 rounded-3xl">
                            <i class="fa-solid fa-clock-rotate-left text-4xl mb-3 xl:mb-2"></i>
                            <p class="text-sm mb-4 xl:mb-3 font-semibold">Hemat Waktu</p>
                            <span class="text-sm">Undangan digital memungkinkan Anda mengirimkan undangan ke banyak tamu dalam hitungan detik. Tidak perlu repot dengan pengiriman fisik.</span>
                        </div>
                        <div class="w-72 h-72 mx-auto bg-hitam-muda text-white p-6 rounded-3xl">
                            <i class="fa-solid fa-money-bill-wave text-4xl mb-3 xl:mb-2"></i>
                            <p class="text-sm mb-4 xl:mb-3 font-semibold">Biaya Terjangkau</p>
                            <span class="text-sm">Kurangi biaya pengiriman dan cetak dengan undangan digital. Pilihan hemat untuk acara besar tanpa mengorbankan kualitas.</span>
                        </div>
                        <div class="w-72 h-72 mx-auto bg-hitam-muda text-white p-6 rounded-3xl">
                            <i class="fa-solid fa-screwdriver-wrench text-4xl mb-3 xl:mb-2"></i>
                            <p class="text-sm mb-4 xl:mb-3 font-semibold">Pengelolaan Sederhana</p>
                            <span class="text-sm">Kelola daftar tamu, konfirmasi kehadiran, dan kirim pengingat secara otomatis. Semua dalam satu platform yang mudah digunakan.</span>
                        </div>
                        <div class="w-72 h-72 mx-auto bg-hitam-muda text-white p-6 rounded-3xl">
                            <i class="fa-solid fa-leaf text-4xl mb-3 xl:mb-2"></i>
                            <p class="text-sm mb-4 xl:mb-3 font-semibold">Ramah Lingkungan</p>
                            <span class="text-sm">Kurangi penggunaan kertas dan dampak lingkungan dengan memilih undangan digital. Solusi cerdas untuk acara yang lebih hijau.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION 3 -->

        <!-- SECTION 4 -->
         <div class="w-full bg-semu-kuning-v2 py-12">
            <h3 class="text-center font-bold text-2xl mb-2">Langkah Mudah Memesan Undangan</h3>
            <p class="text-center font-medium text-base mb-8">Ikuti langkah mudah untuk mendapatkan undangan impian Anda.</p>
            <div class="w-full lg:w-4/5 lg:mx-auto flex flex-col lg:flex-row lg:gap-10">
                <div class="w-11/12 mx-auto lg:w-1/3">
                    <ul>
                        <li class="flex gap-3 mb-3 py-5 border-b-coklat items-center">
                            <div class="w-11 h-9 lg:w-16 lg:h-12 flex items-center justify-center rounded-full bg-coklat text-white"><i class="fa-solid fa-1"></i></div>
                            <div class="flex flex-col">
                                <p class="font-semibold">Buat Akun</p>
                                <p class="font-normal">Anda dapat membuat akun pribadi atau akun perusahaan</p>
                            </div>
                        </li>
                        <li class="flex gap-3 mb-3 py-5 border-b-coklat items-center">
                            <div class="w-11 h-9 lg:w-16 lg:h-12 flex items-center justify-center rounded-full border-coklat text-coklat"><i class="fa-solid fa-2"></i></div>
                            <div class="flex flex-col">
                                <p class="font-semibold">Buat Akun</p>
                                <p class="font-normal">Anda dapat membuat akun pribadi atau akun perusahaan</p>
                            </div>
                        </li>
                        <li class="flex gap-3 mb-3 py-5 border-b-coklat items-center">
                            <div class="w-11 h-9 lg:w-16 lg:h-12 flex items-center justify-center rounded-full border-coklat text-coklat"><i class="fa-solid fa-3"></i></div>
                            <div class="flex flex-col">
                                <p class="font-semibold">Buat Akun</p>
                                <p class="font-normal">Anda dapat membuat akun pribadi atau akun perusahaan</p>
                            </div>
                        </li>
                        <li class="flex gap-3 mb-3 py-5 border-b-coklat items-center">
                            <div class="w-11 h-9 lg:w-16 lg:h-12 flex items-center justify-center rounded-full border-coklat text-coklat"><i class="fa-solid fa-4"></i></div>
                            <div class="flex flex-col">
                                <p class="font-semibold">Buat Akun</p>
                                <p class="font-normal">Anda dapat membuat akun pribadi atau akun perusahaan</p>
                            </div>
                        </li>
                        <li class="flex gap-3 mb-3 py-5 border-b-coklat items-center">
                            <div class="w-11 h-9 lg:w-16 lg:h-12 flex items-center justify-center rounded-full border-coklat text-coklat"><i class="fa-solid fa-5"></i></div>
                            <div class="flex flex-col">
                                <p class="font-semibold">Buat Akun</p>
                                <p class="font-normal">Anda dapat membuat akun pribadi atau akun perusahaan</p>
                            </div>
                        </li>
                        <li class="flex gap-3 mb-3 py-5 border-b-coklat items-center">
                            <div class="w-11 h-9 lg:w-16 lg:h-12 flex items-center justify-center rounded-full border-coklat text-coklat"><i class="fa-solid fa-6"></i></div>
                            <div class="flex flex-col">
                                <p class="font-semibold">Buat Akun</p>
                                <p class="font-normal">Anda dapat membuat akun pribadi atau akun perusahaan</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="w-full lg:w-2/3 p-5 xl:pt-5 xl:pb-5 xl:pl-5 lg:mx-auto">
                    <div class="h-screen bg-slate-100 rounded-2xl ms-auto"></div>
                </div>
            </div>
         </div>
        <!-- END SECTION 4 -->

        <!-- SECTION 5 -->
        <div class="w-full">
            <div class="w-4/5 mx-auto text-center my-24 lg:py-24">
                <h3 class="font-semibold text-2xl mb-3">Temukan Inspirasi dari Beragam Template Kami</h3>
                <p>Lihat preview template kami dan temukan desain yang paling cocok untuk kebutuhan Anda.</p>
                <div class="mt-10 flex gap-3 justify-center">
                    <span class="active-menu pb-2 px-3">Pernikahan</span>
                    <span class="pb-2 px-3">Kedukaan</span>
                    <span class="pb-2 px-3">Acara Lainnya</span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-12">
                    <div class="sm:w-56  lg:w-64 xl:w-72 mx-auto m-5">
                        <img src="{{ asset('assets/img/Frame 31.png') }}" class="mb-4" alt="">
                    </div>
                    <div class="sm:w-56  lg:w-64 xl:w-72 mx-auto m-5">
                        <img src="{{ asset('assets/img/Frame 31.png') }}" class="mb-4" alt="">
                    </div>
                    <div class="sm:w-56  lg:w-64 xl:w-72 mx-auto m-5">
                        <img src="{{ asset('assets/img/Frame 31.png') }}" class="mb-4" alt="">
                    </div>
                    <div class="sm:w-56  lg:w-64 xl:w-72 mx-auto m-5">
                        <img src="{{ asset('assets/img/Frame 31.png') }}" class="mb-4" alt="">
                    </div>
                    <div class="sm:w-56  lg:w-64 xl:w-72 mx-auto m-5">
                        <img src="{{ asset('assets/img/Frame 31.png') }}" class="mb-4" alt="">
                    </div>
                    <div class="sm:w-56  lg:w-64 xl:w-72 mx-auto m-5">
                        <img src="{{ asset('assets/img/Frame 31.png') }}" class="mb-4" alt="">
                    </div>
                </div>
                <button class="bg-coklat px-5 py-3 text-white font-medium rounded-xl"><a href="">Mulai Pemesanan Undangan</a></button>
            </div>
        </div>
        <!-- END SECTION 5 -->
@endsection