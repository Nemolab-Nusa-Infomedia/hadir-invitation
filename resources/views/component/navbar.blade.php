<!-- NAVBAR -->
    <nav x-data="{ open: false }" class="w-full h-20 shadow-md ">
        <div class="hidden lg:w-4/5 lg:mx-auto lg:h-20 lg:flex lg:justify-between lg:items-center">
            <img src="{{ asset('assets/img/hugo-logo.png') }}" alt="" srcset="" width="80">
            <ul class="lg:flex lg:gap-6 lg:items-center lg:font-semibold">
                <li class="lg:p-3 active-menu"><a href="{{ route('home') }}">Home</a></li>
                <li class="lg:p-3"><a href="#">Keunggulan</a></li>
                <li class="lg:p-3"><a href="#">Bantuan</a></li>
                <li class="lg:p-3"><a href="#">Preview</a></li>
                {{-- <li class="bg-coklat lg:px-4 lg:py-2 lg:text-white lg:rounded-full"><a href="">Masuk</a></li>
                <li class="bg-white border-coklat lg:px-4 lg:py-2 text-coklat lg:rounded-full"><a href="">Buat Akun</a></li> --}}
            </ul>
        </div>
        <!-- Mobile -->
        <div class="flex items-center w-4/5 mx-auto h-20 justify-between lg:hidden">
            <img src="{{ asset('assets/img/hugo-logo.png') }}" alt="" srcset="" width="80">
            <button @click="open = ! open" class="text-4xl" type="button"><i class="fa-solid fa-bars"></i></button>
        </div>
        <div x-show="open" class="fixed w-full bg-white top-0 p-3">
            <div class="flex justify-between">
                <img src="{{ asset('assets/img/hugo-logo.png') }}" alt="" srcset="" width="80">
                <button @click="open = ! open"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <ul class="mt-6">
                <li class="mb-3"><a href="{{ route('home') }}">Home</a></li>
                <li class="mb-3"><a href="#">Keunggulan</a></li>
                <li class="mb-3"><a href="#">Bantuan</a></li>
                <li class="mb-3"><a href="#">Preview</a></li>
                {{-- <div class="flex gap-3 items-center">
                    <li class="bg-coklat px-3 py-1 text-white rounded-full"><a href="">Masuk</a></li>
                    <li class="bg-white px-3 py-1 border-coklat text-coklat rounded-full"><a href="">Buat Akun</a></li>
                </div> --}}
            </ul>
        </div>
    </nav>
    <!-- END NAVBAR -->