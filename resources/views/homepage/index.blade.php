@extends('component.layout')

@section('content')
    <!-- section 1 -->
    <section id="home" class="hero bg-light text-dark py-5">
        <div class="container">
            <div class="row align-items-center gap-4 gap-md-0">
                <!-- Image Section -->
                <div class="col-lg-6">
                    <img src="{{ asset('assets/img/homepage-image/hero-section.png') }}" class="img-fluid" alt="Hero Image">
                </div>
                <!-- Text Section -->
                <div class="col-lg-6 p-3 p-md-5">
                    <h3 class="fw-bold">Rayakan Momen Spesial dengan Undangan Digital yang Berkesan.</h3>
                    <p class="py-3">Kirim kabar gembira lebih mudah dengan undangan digital yang dapat disesuaikan untuk acara apapun—cepat, praktis, dan ramah lingkungan.</p>
                    <a href="https://wa.me/6285183038794?text=Halo%20Hugo%20Studio,%20Saya%20ingin%20memesan%20undangan%20online.%20Mohon%20informasi%20lebih%20lanjut%20mengenai%20proses%20pemesanan%20dan%20harga.%20Terima%20kasih!" target="_blank" class="btn btn-pink btn-sm py-2"><i class="fa-solid fa-cart-plus"></i> Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </section>
  <!-- end section 1 -->

  <!-- section 2     -->
  <div class="container-fluid features-section">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-md-3 col-sm-6 feature-box d-flex flex-column">
                <i class="fa-solid fa-palette"></i>
                <h5 class="feature-title">Desain Mudah</h5>
                <p class="feature-description">Sesuaikan desain undangan dengan tema acara Anda dengan cepat dan mudah.</p>
            </div>
            <div class="col-md-3 col-sm-6 feature-box d-flex flex-column">
                <i class='bx bx-planet'></i>
                <h5 class="feature-title">Akses Tanpa Batas</h5>
                <p class="feature-description">Tamu dapat mengakses undangan dari perangkat apa pun, kapan saja.</p>
            </div>
            <div class="col-md-3 col-sm-6 feature-box d-flex flex-column">
                <i class='bx bx-cog'></i>
                <h5 class="feature-title">Pengelolaan Mudah</h5>
                <p class="feature-description">Kelola semua undangan dan konfirmasi kehadiran dalam satu platform yang efisien.</p>
            </div>
            <div class="col-md-3 col-sm-6 feature-box d-flex flex-column">
                <i class='bx bxs-file-archive'></i>
                <h5 class="feature-title">Pembaruan Instan</h5>
                <p class="feature-description">Update undangan secara langsung dan beri tahu semua tamu tanpa perlu mencetak ulang.</p>
            </div>
        </div>
    </div>
</div>

  <!-- end section 2 -->


<!-- section 3 -->
<div id="keunggulan" class="container my-5">
    <div class="row align-items-center">
        <div class="col-12 col-md-6 text-start mb-4">
            <h3 class="fw-bold">Keunggulan Undangan Digital untuk Acara Anda</h3>
            <p class="py-3">Undangan digital memungkinkan Anda menyesuaikan desain dengan tema acara secara fleksibel dan mudah melakukan perubahan. Edit elemen desain dan kirim pembaruan instan, memastikan semua tamu mendapatkan informasi terbaru tanpa perlu mencetak ulang.</p>
            <a href="#template" class="btn btn-pink btn-sm py-2"><i class='bx bx-search-alt'></i> Lihat Tamplate</a>
        </div>

        <div class="row col-12 col-md-6 g-3 mx-auto">
            <div class="col-md-6">
                <div class="info-box">
                    <i class='bx bx-history' ></i>
                    <h5>Hemat Waktu</h5>
                    <p>Undangan digital memungkinkan Anda mengirimkan undangan ke banyak tamu dalam hitungan detik. Tidak perlu repot dengan pengiriman fisik.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-box">
                    <i class='bx bx-money'></i>
                    <h5>Biaya Terjangkau</h5>
                    <p>Kurangi biaya pengiriman dan cetak dengan undangan digital. Pilihan hemat untuk acara besar tanpa mengorbankan kualitas.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-box">
                    <i class='bx bx-hard-hat'></i>
                    <h5>Pengelolaan Sederhana</h5>
                    <p>Kelola daftar tamu, konfirmasi kehadiran, dan kirim pengingat secara otomatis. Semua dalam satu platform yang mudah digunakan.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-box">
                    <i class='bx bx-leaf' ></i>
                    <h5>Ramah Lingkungan</h5>
                    <p>Kurangi penggunaan kertas dan dampak lingkungan dengan memilih undangan digital. Solusi cerdas untuk acara yang lebih hijau.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section 3 -->

 <!-- section 4 -->
 <div id="bantuan" class="text-center py-5 custom-bg-section-4">
    <div class="container mx-auto">
        <h2 class="fw-bold">Langkah Mudah Memesan Undangan</h2>
        <p class="mb-5">Ikuti Langkah Mudah Untuk Mendapatkan Undangan Impian Anda.</p>
        <div class="row align-items-center mx-auto">
            <!-- Left Steps Section -->
            <div class="col-md-4 text-start">
              <div class="step-box d-flex justify-content-center align-items-center mb-4">
                <div class="icon-box">
                  <i class='bx bx-user-plus'></i>
                </div>
                <div class="step-text">
                  <h5 class="fw-bold">Buat Akun</h5>
                  <p>Anda dapat membuat akun pribadi atau akun perusahaan.</p>
                </div>
              </div>
              <div class="step-box d-flex justify-content-center align-items-center mb-4">
                <div class="icon-box">
                  <i class='bx bx-calendar-event'></i>
                </div>
                <div class="step-text">
                  <h5 class="fw-bold">Temukan Acaranya</h5>
                  <p>Cari acara yang ingin Anda buat undangannya.</p>
                </div>
              </div>
              <div class="step-box d-flex justify-content-center align-items-center mb-4">
                <div class="icon-box">
                  <i class='bx bx-list-ul'></i>
                </div>
                <div class="step-text">
                  <h5 class="fw-bold">Pilih template desain</h5>
                  <p>Pilih dari berbagai template yang tersedia.</p>
                </div>
              </div>
            </div>

            <!-- Center Image Section -->
            <div class="col-md-4 text-center center-image-section">
              <img src="{{ asset('assets/img/homepage-image/mockup.png') }}" alt="Phone" class="phone-img">
            </div>

            <!-- Right Steps Section -->
            <div class="col-md-4 text-start">
              <div class="step-box d-flex justify-content-center align-items-center mb-4">
                <div class="icon-box">
                  <i class='bx bx-edit-alt'></i>
                </div>
                <div class="step-text">
                  <h5 class="fw-bold">Sesuaikan teks</h5>
                  <p>Edit teks sesuai kebutuhan Anda.</p>
                </div>
              </div>
              <div class="step-box d-flex justify-content-center align-items-center mb-4">
                <div class="icon-box">
                  <i class='bx bx-credit-card'></i>
                </div>
                <div class="step-text">
                  <h5 class="fw-bold">Bayar online</h5>
                  <p>Lakukan pembayaran secara online untuk memproses pesanan.</p>
                </div>
              </div>
              <div class="step-box d-flex justify-content-center align-items-center mb-4">
                <div class="icon-box">
                  <i class='bx bx-envelope'></i>
                </div>
                <div class="step-text">
                  <h5 class="fw-bold">Undangan Anda sudah Tayang!</h5>
                  <p>Undangan siap untuk dibagikan.</p>
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>
 <!-- end section 4 -->

    <div class="container my-5">
        <div class="section-title">
            <h2 class="fw-bold">Semua Paket, Semua Fitur: Pilih Sesuai Kebutuhan Anda!</h2>
            <p>Mudah Dan Terjangkau: Pelayanan Ramah, Respon Cepat, Dan Desain Undangan Tanpa Repot!</p>
        </div>

        <div class="row g-4">
            <!-- Paket Cuma-Cuma -->
            <div class="col-lg-3 col-md-6">
                <div class="package-card">
                    <h5>Paket Cuma-Cuma (Gratis)</h5>
                    <p class="border-bottom">Gratis, tapi tetap keren!</p>
                    <ul>
                        <li><i class="bi bi-geo-alt"></i> Tersedia Peta Lokasi (Maps)</li>
                        <li><i class="bi bi-clock"></i> Hitungan Mundur</li>
                        <li><i class="bi bi-droplet"></i> Watermark/Logo</li>
                        <li><i class="bi bi-x-circle"></i> Tidak Ada Backsound</li>
                        <li><i class="bi bi-x-circle"></i> Tidak Ada Foto</li>
                        <li><i class="bi bi-calendar"></i> Masa Aktif 3 Hari</li>
                    </ul>
                    <a href="https://wa.me/6285183038794?text=Halo%20Hugo%20Studio,%20Saya%20ingin%20memesan%20undangan%20online,%20saya%20memilih%20paket%20cuma-cuma.%20Mohon%20informasi%20lebih%20lanjut%20mengenai%20proses%20pemesanan%20dan%20harga.%20Terimakasih!" target="_blank" class="btn btn-package">Pilih Paket</a>
                </div>
            </div>

            <!-- Paket Santai -->
            <div class="col-lg-3 col-md-6">
                <div class="package-card">
                    <h5>Paket Santai (Rp 34.900)</h5>
                    <p class="border-bottom">Santai, tapi tetap berkesan!</p>
                    <ul>
                        <li><i class="bi bi-geo-alt"></i> Tamu Undangan</li>
                        <li><i class="bi bi-geo-alt"></i> Tersedia Peta Lokasi (Maps)</li>
                        <li><i class="bi bi-clock"></i> Hitungan Mundur</li>
                        <li><i class="bi bi-music-note"></i> 2 Pilihan Musik</li>
                        <li><i class="bi bi-images"></i> Galeri Foto (Maksimal 5)</li>
                        <li><i class="bi bi-palette"></i> Akses Seluruh Tema</li>
                        <li><i class="bi bi-chat-square-dots"></i> Konfirmasi Kehadiran/Kotak Ucapan</li>
                        <li><i class="bi bi-calendar"></i> Masa Aktif 7 Hari</li>
                    </ul>
                    <a href="https://wa.me/6285183038794?text=Halo%20Hugo%20Studio,%20Saya%20ingin%20memesan%20undangan%20online,%20saya%20memilih%20paket%20Santai.%20Mohon%20informasi%20lebih%20lanjut%20mengenai%20proses%20pemesanan%20dan%20harga.%20Terimakasih!" target="_blank" class="btn btn-package">Pilih Paket</a>
                </div>
            </div>

            <!-- Paket Kece -->
            <div class="col-lg-3 col-md-6">
                <div class="package-card">
                    <h5>Paket Kece (Rp 69.000)</h5>
                    <p class="border-bottom">Kece maksimal, acara makin spesial!</p>
                    <ul>
                        <li><i class="bi bi-geo-alt"></i> Tamu Undangan</li>
                        <li><i class="bi bi-geo-alt"></i> Tersedia Peta Lokasi (Maps)</li>
                        <li><i class="bi bi-clock"></i> Hitungan Mundur</li>
                        <li><i class="bi bi-music-note"></i> 5 Pilihan Musik</li>
                        <li><i class="bi bi-images"></i> Galeri Foto (Maksimal 10)</li>
                        <li><i class="bi bi-palette"></i> Akses Seluruh Tema</li>
                        <li><i class="bi bi-wallet2"></i> 2 Rekening Hadiah</li>
                        <li><i class="bi bi-chat-square-dots"></i> Konfirmasi Kehadiran/Kotak Ucapan</li>
                        <li><i class="bi bi-calendar"></i> Masa Aktif 15 Hari</li>
                    </ul>
                    <a href="https://wa.me/6285183038794?text=Halo%20Hugo%20Studio,%20Saya%20ingin%20memesan%20undangan%20online,%20saya%20memilih%20paket%20Kece.%20Mohon%20informasi%20lebih%20lanjut%20mengenai%20proses%20pemesanan%20dan%20harga.%20Terimakasih!" target="_blank" class="btn btn-package">Pilih Paket</a>
                </div>
            </div>

            <!-- Paket OOTD -->
            <div class="col-lg-3 col-md-6">
                <div class="package-card">
                    <h5>Paket OOTD (Mulai dari Rp 74.000)</h5>
                    <p class="border-bottom">Paket Spesial yang Memukau!</p>
                    <ul>
                        <li><i class="bi bi-geo-alt"></i> Semua Fitur Pada Paket Kece</li>
                        <li><i class="bi bi-star"></i> Bebas Costum</li>
                        <li><i class="bi bi-fonts"></i> Costum Font</li>
                        <li><i class="bi bi-music-note"></i> Costum Musik</li>
                        <li><i class="bi bi-images"></i> Galeri Foto (Maksimal 20)</li>
                        <li><i class="bi bi-palette"></i> Costum Design</li>
                        <li><i class="bi bi-wallet2"></i> 6 Rekening Hadiah</li>
                        <li><i class="bi bi-qr-code"></i> Tersedia QR Code</li>
                        <li><i class="bi bi-chat-square-dots"></i> Konfirmasi Kehadiran Tamu</li>
                        <li><i class="bi bi-reply"></i> Balas Ucapan Di Undangan</li>
                        <li><i class="bi bi-calendar"></i> Masa Aktif 1 Bulan</li>
                    </ul>
                    <a href="https://wa.me/6285183038794?text=Halo%20Hugo%20Studio,%20Saya%20ingin%20memesan%20undangan%20online,%20saya%20memilih%20paket%20OOTD.%20Mohon%20informasi%20lebih%20lanjut%20mengenai%20proses%20pemesanan%20dan%20harga.%20Terimakasih!" target="_blank" class="btn btn-package">Pilih Paket</a>
                </div>
            </div>
        </div>
    </div>

 <!-- section 5 -->
 <div id="template" class="container my-5 pb-5">
    <h2 class="text-center">Temukan Inspirasi dari Beragam Template Kami</h2>
    <p class="text-center">Lihat preview template kami dan temukan desain yang paling cocok untuk kebutuhan Anda.</p>

    <!-- Category Buttons -->
    <div class="text-center title-kategori-tamplate mb-3">
        <button id="all-btn" class="btn btn-pink">Semua</button>
        <button id="pernikahan-btn" class="btn">Pernikahan</button>
        <button id="khitan-btn" class="btn">Khitan</button>
        <button id="natal-btn" class="btn">Natal</button>
    </div>


    <!-- Template Cards -->
    <div class="row col-12 col-md-12 mx-auto">
        {{-- 1 --}}
        <div class="template-card col-6 col-md-3 mb-3" data-category="pernikahan">
            <div class="card border-0">
                <div class="card-body p-0">
                    <img src="{{ asset('assets/img/mockup-undangan/frame1.png') }}" class="mb-2" width="100%" alt="">
                    <span class="fw-bold">Bahtera Bahagia</span>
                    <div class="mt-3 d-flex flex-column flex-sm-row justify-content-between">
                        <a href="https://nemolab-nusa-infomedia.github.io/template-invitation/view/undangan-v5/index.html" target="_blank" class="btn btn-pink btn-sm mb-2 mb-sm-0">Lihat Demo</a>
                        <a href="https://wa.me/6285183038794?text=Halo%20Hugo%20Studio,%20Saya%20ingin%20memesan%20undangan%20online.%20Mohon%20informasi%20lebih%20lanjut%20mengenai%20proses%20pemesanan%20dan%20harga.%20Terima%20kasih!" target="_blank" class="btn btn-pink btn-sm">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- 2 --}}
        <div class="template-card col-6 col-md-3 mb-3" data-category="pernikahan">
            <div class="card border-0">
                <div class="card-body p-0">
                    <img src="{{ asset('assets/img/mockup-undangan/frame2.png') }}" class="mb-2" width="100%" alt="">
                    <span class="fw-bold">Sasmitaning Asmara</span>
                    <div class="mt-3 d-flex flex-column flex-sm-row justify-content-between">
                        <a href="https://nemolab-nusa-infomedia.github.io/template-invitation/view/undangan-v1/index.html" target="_blank" class="btn btn-pink btn-sm mb-2 mb-sm-0">Lihat Demo</a>
                        <a href="https://wa.me/6285183038794?text=Halo%20Hugo%20Studio,%20Saya%20ingin%20memesan%20undangan%20online.%20Mohon%20informasi%20lebih%20lanjut%20mengenai%20proses%20pemesanan%20dan%20harga.%20Terima%20kasih!" target="_blank" class="btn btn-pink btn-sm">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- 3 --}}
        <div class="template-card col-6 col-md-3 mb-3" data-category="pernikahan">
            <div class="card border-0">
                <div class="card-body p-0">
                    <img src="{{ asset('assets/img/mockup-undangan/frame3.png') }}" class="mb-2" width="100%" alt="">
                    <span class="fw-bold">Forever Yours</span>
                    <div class="mt-3 d-flex flex-column flex-sm-row justify-content-between">
                        <a href="https://nemolab-nusa-infomedia.github.io/template-invitation/view/undangan-v4/index.html" target="_blank" class="btn btn-pink btn-sm mb-2 mb-sm-0">Lihat Demo</a>
                        <a href="https://wa.me/6285183038794?text=Halo%20Hugo%20Studio,%20Saya%20ingin%20memesan%20undangan%20online.%20Mohon%20informasi%20lebih%20lanjut%20mengenai%20proses%20pemesanan%20dan%20harga.%20Terima%20kasih!" target="_blank" class="btn btn-pink btn-sm">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- 4 --}}
        <div class="template-card col-6 col-md-3 mb-3" data-category="khitan">
            <div class="card border-0">
                <div class="card-body p-0">
                    <img src="{{ asset('assets/img/mockup-undangan/frame4.png') }}" class="mb-2" width="100%" alt="">
                    <span class="fw-bold">Tradisi Bahagia</span>
                    <div class="mt-3 d-flex flex-column flex-sm-row justify-content-between">
                        <a href="https://nemolab-nusa-infomedia.github.io/template-invitation/view/undangan-v3/index.html" target="_blank" class="btn btn-pink btn-sm mb-2 mb-sm-0">Lihat Demo</a>
                        <a href="https://wa.me/6285183038794?text=Halo%20Hugo%20Studio,%20Saya%20ingin%20memesan%20undangan%20online.%20Mohon%20informasi%20lebih%20lanjut%20mengenai%20proses%20pemesanan%20dan%20harga.%20Terima%20kasih!" target="_blank" class="btn btn-pink btn-sm">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- 5 --}}
        <div class="template-card col-6 col-md-3 mb-3" data-category="pernikahan">
            <div class="card border-0">
                <div class="card-body p-0">
                    <img src="{{ asset('assets/img/mockup-undangan/frame5.png') }}" class="mb-2" width="100%" alt="">
                    <span class="fw-bold">Luminous Love</span>
                    <div class="mt-3 d-flex flex-column flex-sm-row justify-content-between">
                        <a href="https://nemolab-nusa-infomedia.github.io/template-invitation/view/undangan-v2/index.html" target="_blank" class="btn btn-pink btn-sm mb-2 mb-sm-0">Lihat Demo</a>
                        <a href="https://wa.me/6285183038794?text=Halo%20Hugo%20Studio,%20Saya%20ingin%20memesan%20undangan%20online.%20Mohon%20informasi%20lebih%20lanjut%20mengenai%20proses%20pemesanan%20dan%20harga.%20Terima%20kasih!" target="_blank" class="btn btn-pink btn-sm">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- 6 --}}
        <div class="template-card col-6 col-md-3 mb-3" data-category="pernikahan">
            <div class="card border-0">
                <div class="card-body p-0">
                    <img src="{{ asset('assets/img/mockup-undangan/frame6.png') }}" class="mb-2" width="100%" alt="">
                    <span class="fw-bold">Harmoni Cinta</span>
                    <div class="mt-3 d-flex flex-column flex-sm-row justify-content-between">
                        <a href="https://nemolab-nusa-infomedia.github.io/template-invitation/view/undangan-v6/index.html" target="_blank" class="btn btn-pink btn-sm mb-2 mb-sm-0">Lihat Demo</a>
                        <a href="https://wa.me/6285183038794?text=Halo%20Hugo%20Studio,%20Saya%20ingin%20memesan%20undangan%20online.%20Mohon%20informasi%20lebih%20lanjut%20mengenai%20proses%20pemesanan%20dan%20harga.%20Terima%20kasih!" target="_blank" class="btn btn-pink btn-sm">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- 7 --}}
        <div class="template-card col-6 col-md-3 mb-3" data-category="pernikahan">
            <div class="card border-0">
                <div class="card-body p-0">
                    <img src="{{ asset('assets/img/mockup-undangan/frame7.png') }}" class="mb-2" width="100%" alt="">
                    <span class="fw-bold">Cahaya Cinta</span>
                    <div class="mt-3 d-flex flex-column flex-sm-row justify-content-between">
                        <a href="https://nemolab-nusa-infomedia.github.io/template-invitation/view/undangan-v7/index.html" target="_blank" class="btn btn-pink btn-sm mb-2 mb-sm-0">Lihat Demo</a>
                        <a href="https://wa.me/6285183038794?text=Halo%20Hugo%20Studio,%20Saya%20ingin%20memesan%20undangan%20online.%20Mohon%20informasi%20lebih%20lanjut%20mengenai%20proses%20pemesanan%20dan%20harga.%20Terima%20kasih!" target="_blank" class="btn btn-pink btn-sm">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- 8 --}}
        <div class="template-card col-6 col-md-3 mb-3" data-category="natal">
            <div class="card border-0">
                <div class="card-body p-0">
                    <img src="{{ asset('assets/img/mockup-undangan/frame8.png') }}" class="mb-2" width="100%" alt="">
                    <span class="fw-bold">Christmast Party</span>
                    <div class="mt-3 d-flex flex-column flex-sm-row justify-content-between">
                        <a href="https://nemolab-nusa-infomedia.github.io/template-invitation/view/undangan-v8/index.html" target="_blank" class="btn btn-pink btn-sm mb-2 mb-sm-0">Lihat Demo</a>
                        <a href="https://wa.me/6285183038794?text=Halo%20Hugo%20Studio,%20Saya%20ingin%20memesan%20undangan%20online.%20Mohon%20informasi%20lebih%20lanjut%20mengenai%20proses%20pemesanan%20dan%20harga.%20Terima%20kasih!" target="_blank" class="btn btn-pink btn-sm">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- 10 --}}
        <div class="template-card col-6 col-md-3 mb-3" data-category="natal">
            <div class="card border-0">
                <div class="card-body p-0">
                    <img src="{{ asset('assets/img/mockup-undangan/frame10.png') }}" class="mb-2" width="100%" alt="">
                    <span class="fw-bold">Beautiful Christmast</span>
                    <div class="mt-3 d-flex flex-column flex-sm-row justify-content-between">
                        <a href="https://nemolab-nusa-infomedia.github.io/template-invitation/view/undangan-v10/index.html" target="_blank" class="btn btn-pink btn-sm mb-2 mb-sm-0">Lihat Demo</a>
                        <a href="https://wa.me/6285183038794?text=Halo%20Hugo%20Studio,%20Saya%20ingin%20memesan%20undangan%20online.%20Mohon%20informasi%20lebih%20lanjut%20mengenai%20proses%20pemesanan%20dan%20harga.%20Terima%20kasih!" target="_blank" class="btn btn-pink btn-sm">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- 13 --}}
        <div class="template-card col-6 col-md-3 mb-3" data-category="khitan">
            <div class="card border-0">
                <div class="card-body p-0">
                    <img src="{{ asset('assets/img/mockup-undangan/frame12.png') }}" class="mb-2" width="100%" alt="">
                    <span class="fw-bold">Jagoanku Khitanan</span>
                    <div class="mt-3 d-flex flex-column flex-sm-row justify-content-between">
                        <a href="https://nemolab-nusa-infomedia.github.io/template-invitation/view/undangan-v12/index.html" target="_blank" class="btn btn-pink btn-sm mb-2 mb-sm-0">Lihat Demo</a>
                        <a href="https://wa.me/6285183038794?text=Halo%20Hugo%20Studio,%20Saya%20ingin%20memesan%20undangan%20online.%20Mohon%20informasi%20lebih%20lanjut%20mengenai%20proses%20pemesanan%20dan%20harga.%20Terima%20kasih!" target="_blank" class="btn btn-pink btn-sm">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- end section 5 -->
@endsection
