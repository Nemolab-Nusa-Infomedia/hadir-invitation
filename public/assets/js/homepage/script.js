document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();

      const targetId = this.getAttribute('href').substring(1);
      const targetElement = document.getElementById(targetId);
      const offset = document.querySelector('nav').offsetHeight; // Tinggi dari navbar

      const elementPosition = targetElement.getBoundingClientRect().top;
      const offsetPosition = elementPosition - offset;

      window.scrollBy({
        top: offsetPosition,
        behavior: 'smooth'
      });
    });
  });

function filterSelection(category, element) {
    let items = document.querySelectorAll('.template-item');
    let buttons = document.querySelectorAll('button');

    // Menghapus kelas aktif dari semua tombol
    buttons.forEach(btn => btn.classList.remove('category-active'));
    // Menambahkan kelas aktif ke tombol yang diklik
    element.classList.add('category-active');

    // Loop melalui semua item dan tampilkan atau sembunyikan berdasarkan kategori
    items.forEach(item => {
      if (category === 'all') {
        // Menampilkan kembali semua item
        item.style.display = 'block';
        item.classList.remove('fade-leave', 'fade-leave-active');
        item.classList.add('fade-enter', 'fade-enter-active');
      } else if (item.getAttribute('data-category') === category) {
        // Tampilkan item yang cocok dengan kategori
        item.style.display = 'block';
        item.classList.remove('fade-leave', 'fade-leave-active');
        item.classList.add('fade-enter', 'fade-enter-active');
      } else {
        // Sembunyikan item yang tidak cocok dengan kategori
        item.classList.remove('fade-enter', 'fade-enter-active');
        item.classList.add('fade-leave', 'fade-leave-active');
        setTimeout(() => item.style.display = 'none', 500); // Delay 500ms agar sinkron dengan animasi
      }
    });
  }



