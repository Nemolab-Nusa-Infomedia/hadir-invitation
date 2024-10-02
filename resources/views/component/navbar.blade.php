<!-- NAVBAR -->
<nav x-data="{ open: false }" class="fixed top-0 left-0 w-full h-20 shadow-md bg-white z-50">
    <div class="hidden lg:w-4/5 lg:mx-auto lg:h-20 lg:flex lg:justify-between lg:items-center">
      <img src="{{ asset('assets/img/hugo-logo.png') }}" alt="" width="80">
      <ul class="lg:flex lg:gap-6 lg:items-center lg:font-semibold">
        <li class="lg:p-3 active-menu"><a href="#home">Home</a></li>
        <li class="lg:p-3"><a href="#keunggulan">Keunggulan</a></li>
        <li class="lg:p-3"><a href="#bantuan">Bantuan</a></li>
        <li class="lg:p-3"><a href="#tamplate">Preview</a></li>
      </ul>
    </div>

    <!-- Mobile Navbar -->
    <div class="flex items-center w-4/5 mx-auto h-20 justify-between lg:hidden">
      <img src="{{ asset('assets/img/hugo-logo.png') }}" alt="" width="80">
      <button @click="open = ! open" class="text-4xl" type="button"><i class="fa-solid fa-bars"></i></button>
    </div>
    <div x-show="open" class="fixed w-full bg-white top-0 p-3">
      <div class="flex justify-between">
        <img src="{{ asset('assets/img/hugo-logo.png') }}" alt="" width="80">
        <button @click="open = ! open"><i class="fa-solid fa-xmark"></i></button>
      </div>
      <ul class="mt-6">
        <li class="mb-3"><a href="#home">Home</a></li>
        <li class="mb-3"><a href="#keunggulan">Keunggulan</a></li>
        <li class="mb-3"><a href="#bantuan">Bantuan</a></li>
        <li class="mb-3"><a href="#tamplate">Preview</a></li>
      </ul>
    </div>
  </nav>