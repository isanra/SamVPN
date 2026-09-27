<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cara Pasang SamVPN</title>
  
  <link href="./asset/css/output.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <!-- CSS tambahan kecil untuk menyembunyikan scrollbar di HP agar terlihat bersih -->
  <style>
    .hide-scrollbar::-webkit-scrollbar { display: none; }
    .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
  </style>
</head>
<body class="bg-sam-cream text-sam-dark antialiased font-sans selection:bg-sam-teal selection:text-white relative">

  <!-- HEADER UTAMA -->
  <header class="py-4 sticky top-0 bg-sam-cream/90 backdrop-blur-md z-50 border-b border-sam-dark/10">
    <div class="max-w-md md:max-w-3xl lg:max-w-5xl mx-auto px-5 flex items-center justify-between w-full">
      <div class="flex items-center gap-4">
        <a href="/index.php" class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-sm border border-sam-dark/10 hover:bg-gray-50 active:scale-95 transition-all text-sam-dark">
          <!-- Menggunakan FontAwesome class fa-arrow-left -->
          <i class="fa-solid fa-arrow-left text-lg"></i>
        </a>
        <div class="font-extrabold text-xl tracking-tight text-sam-dark">Tutorial Pemasangan</div>
      </div>
    </div>
  </header>

  <!-- NAVIGASI MOBILE (Sticky Glassmorphism) - Hanya muncul di HP/Tablet -->
  <!-- NAVIGASI MOBILE (Floating Glassmorphism Pill) - Hanya muncul di HP/Tablet -->
  <!-- Tambahan: mx-4 (margin kiri-kanan), mt-4 (margin atas), rounded-2xl, dan overflow-hidden -->
  <nav class="lg:hidden sticky top-[90px] z-40 mx-4 mt-4 bg-sam-cream/60 backdrop-blur-md border border-sam-dark/10 shadow-xl rounded-full overflow-hidden">
    
    <!-- Container scroll tanpa padding di luar agar terpotong sempurna oleh overflow-hidden -->
    <div id="mobile-nav-container" class="flex overflow-x-auto hide-scrollbar scroll-smooth">
      
      <!-- Item navigasi mobile -->
      <a href="#step-1" class="mobile-step-link flex-shrink-0 px-5 py-3.5 text-sm transition-all border-b-[3px] text-sam-orange font-extrabold border-sam-orange">
        1. Download App
      </a>
      <a href="#step-2" class="mobile-step-link flex-shrink-0 px-5 py-3.5 text-sm transition-all border-b-[3px] text-sam-gray font-semibold border-transparent">
        2. Scan QR
      </a>
      <a href="#step-3" class="mobile-step-link flex-shrink-0 px-5 py-3.5 text-sm transition-all border-b-[3px] text-sam-gray font-semibold border-transparent">
        3. Nyalakan VPN
      </a>
      <a href="#step-4" class="mobile-step-link flex-shrink-0 px-5 py-3.5 text-sm transition-all border-b-[3px] text-sam-gray font-semibold border-transparent">
        4. Selesai
      </a>
      
    </div>
  </nav>

  <!-- KONTEN UTAMA (2 Kolom di Desktop) -->
  <main class="max-w-md md:max-w-3xl lg:max-w-5xl mx-auto px-5 pt-8 pb-24 grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12">
    
    <!-- KOLOM KIRI: Navigasi Desktop (Sticky) -->
    <aside class="hidden lg:block lg:col-span-4">
      <div class="sticky top-28 bg-white border-2 border-sam-dark/10 rounded-3xl p-6 shadow-sm">
        <h3 class="font-bold text-lg mb-6 tracking-tight">Daftar Langkah</h3>
        
        <!-- Garis Vertikal Timeline -->
        <ul class="flex flex-col gap-6 relative before:absolute before:left-[15px] before:top-2 before:bottom-2 before:w-[2px] before:bg-sam-dark/5">
          
          <li>
            <a href="#step-1" class="relative z-10 flex items-center gap-4 group">
              <div class="desktop-step-dot w-8 h-8 rounded-full bg-sam-orange text-white flex items-center justify-center text-sm font-bold ring-[6px] ring-white shadow-sm transition-colors">1</div>
              <span class="desktop-step-link text-sam-orange font-bold transition-colors group-hover:text-sam-orange">Download Aplikasi</span>
            </a>
          </li>
          <li>
            <a href="#step-2" class="relative z-10 flex items-center gap-4 group">
              <div class="desktop-step-dot w-8 h-8 rounded-full bg-gray-100 text-sam-gray flex items-center justify-center text-sm font-bold ring-[6px] ring-white shadow-sm transition-colors group-hover:bg-gray-200">2</div>
              <span class="desktop-step-link text-sam-gray font-medium transition-colors group-hover:text-sam-dark">Scan QR Config</span>
            </a>
          </li>
          <li>
            <a href="#step-3" class="relative z-10 flex items-center gap-4 group">
              <div class="desktop-step-dot w-8 h-8 rounded-full bg-gray-100 text-sam-gray flex items-center justify-center text-sm font-bold ring-[6px] ring-white shadow-sm transition-colors group-hover:bg-gray-200">3</div>
              <span class="desktop-step-link text-sam-gray font-medium transition-colors group-hover:text-sam-dark">Nyalakan VPN</span>
            </a>
          </li>
          <li>
            <a href="#step-4" class="relative z-10 flex items-center gap-4 group">
              <div class="desktop-step-dot w-8 h-8 rounded-full bg-gray-100 text-sam-gray flex items-center justify-center text-sm font-bold ring-[6px] ring-white shadow-sm transition-colors group-hover:bg-gray-200">4</div>
              <span class="desktop-step-link text-sam-gray font-medium transition-colors group-hover:text-sam-dark">Siap Berselancar</span>
            </a>
          </li>

        </ul>
      </div>
    </aside>

    <!-- KOLOM KANAN: Isi Artikel/Langkah-langkah -->
    <div class="lg:col-span-8 flex flex-col gap-16 md:gap-24">
      
      <!-- STEP 1 -->
      <section id="step-1" class="step-section scroll-mt-36 lg:scroll-mt-28">
        <span class="inline-block bg-sam-teal/10 text-sam-teal font-extrabold text-sm px-3 py-1 rounded-full mb-3">Langkah 1</span>
        <h2 class="text-3xl lg:text-4xl font-extrabold tracking-tight mb-4 text-sam-dark">Download Aplikasi WireGuard</h2>
        <p class="text-sam-gray leading-relaxed mb-6">
          SamVPN menggunakan protokol WireGuard yang sangat ringan, aman, dan tidak bikin baterai HP boros. Langkah pertama, kamu harus mengunduh aplikasi resminya (gratis) di toko aplikasi bawaan HP-mu.
        </p>
        <div class="grid grid-cols-2 gap-4">
          <a href="#" class="bg-sam-dark text-white p-4 rounded-2xl flex flex-col items-center justify-center hover:bg-black transition-colors shadow-md">
            <span class="text-2xl mb-1">📱</span>
            <span class="font-bold text-sm">App Store</span>
            <span class="text-[10px] text-gray-400">Untuk iPhone/iPad</span>
          </a>
          <a href="#" class="bg-sam-dark text-white p-4 rounded-2xl flex flex-col items-center justify-center hover:bg-black transition-colors shadow-md">
            <span class="text-2xl mb-1">🤖</span>
            <span class="font-bold text-sm">Play Store</span>
            <span class="text-[10px] text-gray-400">Untuk Android</span>
          </a>
        </div>
      </section>

      <!-- STEP 2 -->
      <section id="step-2" class="step-section scroll-mt-36 lg:scroll-mt-28">
        <span class="inline-block bg-sam-teal/10 text-sam-teal font-extrabold text-sm px-3 py-1 rounded-full mb-3">Langkah 2</span>
        <h2 class="text-3xl lg:text-4xl font-extrabold tracking-tight mb-4 text-sam-dark">Scan QR / Masukkan Config</h2>
        <p class="text-sam-gray leading-relaxed mb-6">
          Setelah pembayaran paket sukses, kami akan mengirimkan sebuah gambar QR Code ke nomor WhatsApp-mu. Buka aplikasi WireGuard yang baru di-download tadi, lalu ikuti cara ini:
        </p>
        <ul class="flex flex-col gap-3 mb-6">
          <li class="flex items-start gap-3 bg-white p-4 rounded-xl border border-sam-dark/10 shadow-sm">
            <b class="text-sam-teal">1.</b> Buka aplikasi WireGuard, tekan ikon <b class="text-sam-dark">(+)</b> warna biru di pojok.
          </li>
          <li class="flex items-start gap-3 bg-white p-4 rounded-xl border border-sam-dark/10 shadow-sm">
            <b class="text-sam-teal">2.</b> Pilih menu <b class="text-sam-dark">"Scan from QR code"</b>.
          </li>
          <li class="flex items-start gap-3 bg-white p-4 rounded-xl border border-sam-dark/10 shadow-sm">
            <b class="text-sam-teal">3.</b> Arahkan kamera HP ke gambar QR yang kami kirim.
          </li>
          <li class="flex items-start gap-3 bg-white p-4 rounded-xl border border-sam-dark/10 shadow-sm">
            <b class="text-sam-teal">4.</b> Beri nama koneksi tersebut (misal: "SamVPN"), lalu klik <b class="text-sam-dark">Save</b>.
          </li>
        </ul>
        <div class="bg-sam-orange/10 border border-sam-orange/20 rounded-xl p-4 flex gap-3">
          <span class="text-xl">💡</span>
          <p class="text-sm text-sam-orange-dark font-medium leading-relaxed">
            Kalau kamu buka WhatsApp di HP yang sama dan nggak bisa scan layar sendiri, kami juga mengirimkan file berektensi <code>.conf</code>. Kamu cukup pilih opsi "Create from file or archive" di WireGuard.
          </p>
        </div>
      </section>

      <!-- STEP 3 -->
      <section id="step-3" class="step-section scroll-mt-36 lg:scroll-mt-28">
        <span class="inline-block bg-sam-teal/10 text-sam-teal font-extrabold text-sm px-3 py-1 rounded-full mb-3">Langkah 3</span>
        <h2 class="text-3xl lg:text-4xl font-extrabold tracking-tight mb-4 text-sam-dark">Nyalakan VPN (Connect)</h2>
        <p class="text-sam-gray leading-relaxed mb-6">
          Profil SamVPN sekarang sudah ada di dalam aplikasi WireGuard kamu. Untuk menyalakannya, kamu tinggal menekan tombol "sakelar" (toggle) di sebelah nama profilnya.
        </p>
        <!-- Simulasi Tombol Toggle -->
        <div class="bg-white border-2 border-sam-dark/10 rounded-2xl p-6 flex justify-between items-center max-w-sm shadow-sm">
          <div>
            <h4 class="font-bold text-lg">SamVPN</h4>
            <p class="text-xs text-green-600 font-bold">Terhubung</p>
          </div>
          <!-- Toggle hijau -->
          <div class="w-12 h-7 bg-sam-teal rounded-full relative shadow-inner">
            <div class="w-5 h-5 bg-white rounded-full absolute top-1 right-1 shadow-sm"></div>
          </div>
        </div>
        <p class="text-sm text-sam-gray mt-4">
          Jika saat pertama kali diklik muncul notifikasi "Connection Request" dari sistem HP-mu, klik <b>OK / Allow</b> agar HP-mu mengizinkan koneksi VPN.
        </p>
      </section>

      <!-- STEP 4 -->
      <section id="step-4" class="step-section scroll-mt-36 lg:scroll-mt-28">
        <span class="inline-block bg-sam-teal/10 text-sam-teal font-extrabold text-sm px-3 py-1 rounded-full mb-3">Langkah 4</span>
        <h2 class="text-3xl lg:text-4xl font-extrabold tracking-tight mb-4 text-sam-dark">Siap Berselancar!</h2>
        <p class="text-sam-gray leading-relaxed mb-6">
          Selamat! Akan muncul logo "Kunci" atau tulisan "VPN" di baris sinyal/baterai atas layar HP-mu. Itu tandanya kamu sudah berhasil masuk ke jaringan Amerika.
        </p>
        <div class="bg-sam-dark text-white rounded-2xl p-6 md:p-8 shadow-xl">
          <h4 class="font-bold text-xl mb-2">Sekarang kamu bisa:</h4>
          <ul class="flex flex-col gap-2 text-gray-300 font-medium list-disc pl-5">
            <li>Buka film/series Netflix yang khusus regional USA.</li>
            <li>Main game server Global dengan rute koneksi langsung.</li>
            <li>Buka Reddit, Vimeo, dan situs web lain tanpa terblokir.</li>
          </ul>
        </div>
      </section>

    </div>
  </main>

  <!-- JAVASCRIPT: Scroll Spy Logic -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const sections = document.querySelectorAll('.step-section');
      
      // Ambil elemen Mobile Nav
      const mobileNavContainer = document.getElementById('mobile-nav-container');
      const mobileLinks = document.querySelectorAll('.mobile-step-link');
      
      // Ambil elemen Desktop Nav
      const desktopLinks = document.querySelectorAll('.desktop-step-link');
      const desktopDots = document.querySelectorAll('.desktop-step-dot');

      const observerOptions = {
        // Memicu perubahan saat elemen menyentuh sedikit di atas tengah layar
        rootMargin: '-20% 0px -60% 0px',
        threshold: 0
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const currentId = entry.target.getAttribute('id');
            
            // 1. UPDATE NAVIGASI MOBILE
            mobileLinks.forEach(link => {
              const href = link.getAttribute('href');
              if (href === `#${currentId}`) {
                // Aktif
                link.classList.add('text-sam-orange', 'font-extrabold', 'border-sam-orange');
                link.classList.remove('text-sam-gray', 'font-semibold', 'border-transparent');
                
                // Animasi geser (scroll otomatis) agar menu yang aktif pindah ke tengah layar HP
                link.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
              } else {
                // Tidak Aktif
                link.classList.remove('text-sam-orange', 'font-extrabold', 'border-sam-orange');
                link.classList.add('text-sam-gray', 'font-semibold', 'border-transparent');
              }
            });

            // 2. UPDATE NAVIGASI DESKTOP
            desktopLinks.forEach((link, index) => {
              const href = link.getAttribute('href');
              const dot = desktopDots[index];
              
              if (href === `#${currentId}`) {
                // Aktif
                link.classList.add('text-sam-orange', 'font-bold');
                link.classList.remove('text-sam-gray', 'font-medium');
                
                dot.classList.add('bg-sam-orange', 'text-white');
                dot.classList.remove('bg-gray-100', 'text-sam-gray');
              } else {
                // Tidak Aktif
                link.classList.remove('text-sam-orange', 'font-bold');
                link.classList.add('text-sam-gray', 'font-medium');
                
                dot.classList.remove('bg-sam-orange', 'text-white');
                dot.classList.add('bg-gray-100', 'text-sam-gray');
              }
            });
          }
        });
      }, observerOptions);

      // Mulai pantau semua seksi langkah-langkah
      sections.forEach(section => observer.observe(section));
    });
  </script>

</body>
</html>