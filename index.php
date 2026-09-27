<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SamVPN — VPN Amerika, Harga Warkop</title>
    <meta name="description" content="VPN Amerika buat streaming, gaming, sama buka situs yang diblokir. Mulai Rp2.000 doang." />

    <!-- Pastikan output.css dari Tailwind CLI sudah terhubung -->
    <link href="/asset/css/output.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>
  <body class="bg-sam-cream text-sam-dark antialiased font-sans selection:bg-sam-teal selection:text-white">
    <!-- HEADER (Sticky & Blurred) -->
    <header class="py-4 sticky top-0 bg-sam-cream/90 backdrop-blur-md z-50 border-b border-sam-dark/10">
      <div class="max-w-md md:max-w-3xl lg:max-w-5xl mx-auto px-5 flex justify-between items-center w-full relative">
        
        <!-- Logo Kiri -->
        <div class="font-extrabold text-2xl tracking-tight text-sam-dark">Sam<span class="text-sam-teal">VPN</span></div>
        
        <!-- Navigasi Desktop (Disembunyikan di HP, Muncul di layar menengah/md ke atas) -->
        <div class="hidden md:flex items-center gap-4">
          <a href="/tutorial" class="text-sam-dark py-2.5 px-3 text-sm font-bold transition-all duration-300 hover:text-sam-orange hover:-translate-y-0.5 hover:scale-105 active:scale-95">
            Tutorial Pasang
          </a>
          <a href="#paket" class="bg-sam-dark text-white py-2.5 px-5 rounded-full text-sm font-bold hover:bg-black transition-transform active:scale-95 shadow-sm"> 
            Pilih Paket 
          </a>
        </div>

        <!-- Tombol Hamburger Mobile (Hanya muncul di HP) -->
        <button id="mobile-menu-btn" class="md:hidden text-sam-dark text-2xl p-2 focus:outline-none transition-transform active:scale-90">
          <!-- Menggunakan ikon FontAwesome fa-bars -->
          <i class="fa-solid fa-bars" id="menu-icon"></i>
        </button>

      </div>

      <!-- Menu Dropdown Mobile (Muncul saat tombol burger diklik) -->
      <div id="mobile-menu" class="hidden absolute top-full left-0 w-full bg-white border-b border-sam-dark/10 shadow-xl md:hidden origin-top transition-all">
        <div class="flex flex-col px-5 py-6 gap-4">
          <a href="/tutorial" class="text-sam-dark py-2 text-lg font-bold border-b border-gray-100 hover:text-sam-orange transition-colors">
            Tutorial Pasang
          </a>
          <a href="#paket" class="bg-sam-dark text-white py-3.5 px-5 rounded-xl text-center text-base font-bold hover:bg-black active:scale-95 transition-transform shadow-sm"> 
            Pilih Paket 
          </a>
        </div>
      </div>
    </header>

    <main class="max-w-md md:max-w-3xl lg:max-w-5xl mx-auto px-5 pb-10">
      <!-- HERO SECTION -->
      <section class="py-12 md:py-20 text-center md:text-left flex flex-col md:flex-row items-center gap-8 md:gap-16">
        <div class="flex-1">
          <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold tracking-tight leading-[1.1] mb-6 text-sam-dark">
            VPN Amerika,<br />
            harga
            <span class="relative inline-block px-1">
              <span class="relative z-10 text-sam-dark">warkop.</span>
              <span class="absolute bottom-2 left-0 w-full h-[45%] bg-sam-teal/40 -z-10 -rotate-2"></span>
            </span>
          </h1>
          <p class="text-base md:text-lg text-sam-gray mb-8 leading-relaxed max-w-lg mx-auto md:mx-0">Buka Netflix US, main PUBG ping rendah, sama akses situs yang diblokir. Semua bisa dari HP kamu, gak perlu ribet.</p>
          <div class="max-w-xs mx-auto md:mx-0">
            <a href="#paket" class="block w-full">
              <!-- Tambahan: hover:shadow-[0_6px_0_#0F766E] untuk mengubah bayangan jadi cyan gelap -->
              <!-- Tambahan: active:shadow-[0_2px_0_#0F766E] agar saat diklik dalam keadaan hover, bayangannya tetap cyan -->
              <button
                type="button"
                class="group relative z-0 w-full overflow-hidden rounded-2xl shadow-[0_6px_0_#C2410C] hover:shadow-[0_6px_0_#0F766E] transition-all duration-500 active:translate-y-[4px] active:shadow-[0_2px_0_#0F766E] hover:border-sam-orange"
              >
                <!-- LAYER 1: Background Oranye Dasar -->
                <div class="absolute inset-0 -z-20 bg-sam-orange"></div>

                <!-- LAYER 2: Efek Sapuan Cyan -->
                <div class="absolute inset-0 -z-10 -translate-x-full bg-sam-teal transition-transform duration-500 ease-in-out group-hover:translate-x-0  "></div>
                
                <!-- LAYER 3: Teks dan Ikon -->
                <div class="relative z-10 flex w-full items-center justify-center gap-3 px-6 py-4 text-lg font-extrabold text-white">
                  <span>Mulai dari Rp2.000</span>
                  
                  <i class="fa-solid fa-arrow-right text-xl transition-transform duration-500 ease-in-out group-hover:translate-x-2"></i>
                </div>
              </button>
            </a>
          
            <p class="mt-4 text-center text-xs font-medium text-sam-gray/80">
              Gak perlu daftar akun. Scan QR, langsung nyambung.
            </p>
          </div>
        </div>
      </section>

      <!-- TRUST BAR -->
      <div class="grid grid-cols-2 md:grid-cols-4 gap-3 bg-white/60 border border-sam-dark/5 p-4 rounded-2xl mb-16 shadow-sm">
        <div class="flex flex-col items-center justify-center p-3 text-center">
          <span class="text-2xl mb-1">⚡</span>
          <span class="font-bold text-sam-dark text-sm">Super Cepat</span>
        </div>
        <div class="flex flex-col items-center justify-center p-3 text-center">
          <span class="text-2xl mb-1">🔒</span>
          <span class="font-bold text-sam-dark text-sm">Privasi Aman</span>
        </div>
        <div class="flex flex-col items-center justify-center p-3 text-center">
          <span class="text-2xl mb-1">🇺🇸</span>
          <span class="font-bold text-sam-dark text-sm">IP Amerika</span>
        </div>
        <div class="flex flex-col items-center justify-center p-3 text-center">
          <span class="text-2xl mb-1">💳</span>
          <span class="font-bold text-sam-dark text-sm">Bayar QRIS</span>
        </div>
      </div>

      <!-- PAKET HARGA -->
      <section id="paket" class="pt-8 mb-16 scroll-mt-24">
        <div class="text-center md:text-left mb-8">
          <h2 class="text-2xl md:text-4xl font-extrabold tracking-tight mb-2">Pilih paketmu</h2>
          <p class="text-sam-gray text-sm md:text-base">Bayar pakai QRIS. Bisa GoPay, OVO, DANA, m-banking.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
          <!-- Paket Kilat -->
          <a href="/checkout/index.html" class="group bg-white border border-sam-dark/10 rounded-2xl p-5 flex justify-between items-center hover:border-sam-teal hover:shadow-md transition-all active:scale-[0.98]">
            <div>
              <h3 class="font-bold text-lg text-sam-dark mb-0.5">Kilat</h3>
              <p class="text-xs text-sam-gray font-medium">1 jam · kuota 2 GB</p>
            </div>
            <div class="text-right">
              <b class="text-xl text-sam-teal font-extrabold block">Rp2.000</b>
              <small class="text-[10px] text-sam-gray font-bold uppercase tracking-wider">coba dulu</small>
            </div>
          </a>

          <!-- Paket Harian -->
          <a href="#" class="group bg-white border border-sam-dark/10 rounded-2xl p-5 flex justify-between items-center hover:border-sam-teal hover:shadow-md transition-all active:scale-[0.98]">
            <div>
              <h3 class="font-bold text-lg text-sam-dark mb-0.5">Harian</h3>
              <p class="text-xs text-sam-gray font-medium">24 jam · kuota 10 GB</p>
            </div>
            <div class="text-right">
              <b class="text-xl text-sam-teal font-extrabold block">Rp5.000</b>
              <small class="text-[10px] text-sam-gray font-bold uppercase tracking-wider">buat sehari</small>
            </div>
          </a>

          <!-- Paket Mingguan -->
          <a href="/checkout/index.html" class="group bg-white border border-sam-dark/10 rounded-2xl p-5 flex justify-between items-center hover:border-sam-teal hover:shadow-md transition-all active:scale-[0.98]">
            <div>
              <h3 class="font-bold text-lg text-sam-dark mb-0.5">Mingguan</h3>
              <p class="text-xs text-sam-gray font-medium">7 hari · kuota 50 GB</p>
            </div>
            <div class="text-right">
              <b class="text-xl text-sam-teal font-extrabold block">Rp20.000</b>
              <small class="text-[10px] text-sam-gray font-bold uppercase tracking-wider">seminggu</small>
            </div>
          </a>

          <!-- Paket Bulanan (Populer) - Dibuat paling menonjol -->
          <a
            href="/checkout/index.html"
            class="relative bg-[#FFF9F5] border-2 border-sam-orange rounded-2xl p-6 flex flex-col justify-center hover:shadow-lg transition-all active:scale-[0.98] md:col-span-2 lg:col-span-1 order-first lg:order-none shadow-sm"
          >
            <span class="absolute -top-3 right-5 bg-sam-orange text-white text-[10px] font-black uppercase tracking-wider px-3 py-1 rounded-full shadow-sm">Paling Laku</span>
            <div class="flex justify-between items-center mb-1">
              <h3 class="font-extrabold text-xl text-sam-dark">Bulanan</h3>
              <span class="bg-red-100 text-red-600 text-[10px] font-extrabold px-2 py-0.5 rounded uppercase">Hemat 67%</span>
            </div>
            <p class="text-sm text-sam-gray font-medium mb-4">30 hari · kuota 200 GB</p>
            <div class="flex justify-between items-end border-t border-sam-orange/20 pt-4">
              <small class="text-xs text-sam-orange font-bold uppercase tracking-wider">Paling Worth It</small>
              <b class="text-3xl text-sam-orange font-black">Rp50<span class="text-xl">.000</span></b>
            </div>
          </a>

          <!-- Paket Bulanan Pro -->
          <a href="/checkout/index.html" class="group bg-white border border-sam-dark/10 rounded-2xl p-5 flex justify-between items-center hover:border-sam-teal hover:shadow-md transition-all active:scale-[0.98]">
            <div>
              <h3 class="font-bold text-lg text-sam-dark mb-0.5">Bulanan Pro</h3>
              <p class="text-xs text-sam-gray font-medium">30 hari · kuota 500 GB</p>
            </div>
            <div class="text-right">
              <b class="text-xl text-sam-teal font-extrabold block">Rp75.000</b>
              <small class="text-[10px] text-sam-gray font-bold uppercase tracking-wider">buat streaming</small>
            </div>
          </a>
        </div>
      </section>

      <!-- CARA SETUP -->
      <section class="mb-16">
        <div class="text-center md:text-left mb-8">
          <h2 class="text-2xl md:text-4xl font-extrabold tracking-tight mb-2">Cara pakainya gampang</h2>
          <p class="text-sam-gray text-sm md:text-base">Gak sampai 1 menit. Serius, gak pake setting DNS ribet.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
          <div class="flex gap-5 bg-white p-5 rounded-2xl border border-sam-dark/5 shadow-sm">
            <div class="flex-shrink-0 w-12 h-12 bg-sam-teal/10 text-sam-teal rounded-full flex items-center justify-center font-black text-xl">1</div>
            <div>
              <h4 class="font-bold text-lg mb-1">Download WireGuard</h4>
              <p class="text-sm text-sam-gray leading-relaxed">Gratis di Play Store atau App Store. Ringan, aman, dan gak bikin HP lemot.</p>
            </div>
          </div>

          <div class="flex gap-5 bg-white p-5 rounded-2xl border border-sam-dark/5 shadow-sm">
            <div class="flex-shrink-0 w-12 h-12 bg-sam-teal/10 text-sam-teal rounded-full flex items-center justify-center font-black text-xl">2</div>
            <div>
              <h4 class="font-bold text-lg mb-1">Scan QR dari kami</h4>
              <p class="text-sm text-sam-gray leading-relaxed">Setelah bayar, kamu dapat QR code via WhatsApp. Tinggal buka WireGuard lalu scan.</p>
            </div>
          </div>

          <div class="flex gap-5 bg-white p-5 rounded-2xl border border-sam-dark/5 shadow-sm">
            <div class="flex-shrink-0 w-12 h-12 bg-sam-teal/10 text-sam-teal rounded-full flex items-center justify-center font-black text-xl">3</div>
            <div>
              <h4 class="font-bold text-lg mb-1">Tap "Connect"</h4>
              <p class="text-sm text-sam-gray leading-relaxed">Selesai! VPN langsung nyala. Bisa dimatiin-nyalain gampang dari notifikasi HP kamu.</p>
            </div>
          </div>

          <div class="flex gap-5 bg-white p-5 rounded-2xl border border-sam-dark/5 shadow-sm">
            <div class="flex-shrink-0 w-12 h-12 bg-sam-teal/10 text-sam-teal rounded-full flex items-center justify-center font-black text-xl">4</div>
            <div>
              <h4 class="font-bold text-lg mb-1">Butuh bantuan?</h4>
              <p class="text-sm text-sam-gray leading-relaxed">Chat aja di WhatsApp. Dijawab sama manusia langsung, bukan pakai balasan bot.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- FAQ -->
      <section class="mb-16 max-w-3xl mx-auto">
        <div class="text-center mb-8">
          <h2 class="text-2xl md:text-4xl font-extrabold tracking-tight mb-2">Sering ditanya</h2>
          <p class="text-sam-gray text-sm md:text-base">Kalau masih bingung, baca ini dulu atau chat langsung aja.</p>
        </div>

        <div class="flex flex-col gap-3">
          <!-- Details 1 -->
          <details class="group bg-white border border-sam-dark/10 rounded-2xl [&_summary::-webkit-details-marker]:hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-5 text-sm md:text-base select-none">
              Netflix US bisa dibuka?
              <span class="transition-transform duration-300 group-open:-rotate-180 text-sam-teal text-xl">+</span>
            </summary>
            <div class="px-5 pb-5 pt-0 text-sam-gray text-sm leading-relaxed">
              Bisa. Kami pakai tambahan Cloudflare WARP biar IP-nya bersih dan gak ke-detect Netflix. Kalau sewaktu-waktu kena blokir, tinggal chat kami, kami ganti konfigurasi baru.
            </div>
          </details>

          <!-- Details 2 -->
          <details class="group bg-white border border-sam-dark/10 rounded-2xl [&_summary::-webkit-details-marker]:hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-5 text-sm md:text-base select-none">
              Legal gak sih pakai VPN?
              <span class="transition-transform duration-300 group-open:-rotate-180 text-sam-teal text-xl">+</span>
            </summary>
            <div class="px-5 pb-5 pt-0 text-sam-gray text-sm leading-relaxed">Di Indonesia, VPN itu legal selama gak dipakai buat hal ilegal kayak judi online atau kejahatan siber. Yang gak boleh itu aktivitasnya, bukan aplikasinya.</div>
          </details>

          <!-- Details 3 -->
          <details class="group bg-white border border-sam-dark/10 rounded-2xl [&_summary::-webkit-details-marker]:hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-5 text-sm md:text-base select-none">
              Kalau kuota habis sebelum waktunya?
              <span class="transition-transform duration-300 group-open:-rotate-180 text-sam-teal text-xl">+</span>
            </summary>
            <div class="px-5 pb-5 pt-0 text-sam-gray text-sm leading-relaxed">
              Koneksi otomatis berhenti. Kamu bisa beli paket top-up atau paket baru kapan aja. Gak ada refund buat sisa waktu, tapi kami kasih notif kalau kuota udah 80%.
            </div>
          </details>

          <!-- Details 4 -->
          <details class="group bg-white border border-sam-dark/10 rounded-2xl [&_summary::-webkit-details-marker]:hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-5 text-sm md:text-base select-none">
              Bisa dipakai berapa device?
              <span class="transition-transform duration-300 group-open:-rotate-180 text-sam-teal text-xl">+</span>
            </summary>
            <div class="px-5 pb-5 pt-0 text-sam-gray text-sm leading-relaxed">Satu paket buat satu device. Kalau butuh buat HP + laptop sekaligus, tinggal beli 2 paket atau chat kami buat penawaran paket bundle.</div>
          </details>

          <!-- Details 5 -->
          <details class="group bg-white border border-sam-dark/10 rounded-2xl [&_summary::-webkit-details-marker]:hidden">
            <summary class="flex justify-between items-center font-bold cursor-pointer list-none p-5 text-sm md:text-base select-none">
              Bayarnya gimana?
              <span class="transition-transform duration-300 group-open:-rotate-180 text-sam-teal text-xl">+</span>
            </summary>
            <div class="px-5 pb-5 pt-0 text-sam-gray text-sm leading-relaxed">Cuma QRIS. Bisa scan pakai GoPay, OVO, DANA, ShopeePay, atau m-banking apa aja. Gak perlu transfer manual masukin nomor rekening.</div>
          </details>
        </div>
      </section>

      <!-- CTA BAWAH -->
      <div class="bg-sam-dark text-white rounded-3xl p-8 md:p-12 text-center my-10 relative overflow-hidden shadow-xl">
        <!-- Ornamen background -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-sam-teal/20 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>

        <div class="relative z-10">
          <h3 class="text-2xl md:text-3xl font-extrabold mb-3">Coba dulu Rp2.000</h3>
          <p class="text-sm md:text-base text-gray-400 mb-8 max-w-md mx-auto">Kalau gak cocok, gak ada yang maksa buat lanjut berlangganan bulanan.</p>
          <a href="#paket" class="inline-block bg-white text-sam-dark px-8 py-3.5 rounded-full font-extrabold hover:bg-sam-cream transition-colors active:scale-95 shadow-lg"> Ambil Paket Kilat </a>
        </div>
      </div>

      <!-- FOOTER -->
      <footer class="pt-8 pb-10 text-center text-sm text-sam-gray border-t border-sam-dark/10 flex flex-col md:flex-row justify-between items-center gap-4">
        <p class="font-medium">© 2026 SamVPN · Dibuat di Indonesia 🇮🇩</p>
        <div class="flex gap-4 md:gap-6 font-semibold">
          <a href="#" class="hover:text-sam-dark transition-colors">Blog</a>
          <a href="#" class="hover:text-sam-dark transition-colors">Syarat</a>
          <a href="#" class="hover:text-sam-dark transition-colors">Privasi</a>
          <a href="#" class="hover:text-sam-dark transition-colors">Kontak</a>
        </div>
      </footer>
    </main>

    <!-- FLOATING WA BUTTON -->
    <a
      href="https://wa.me/628123456789?text=Halo%20SamVPN%2C%20saya%20mau%20tanya"
      class="fixed bottom-6 right-6 w-14 h-14 bg-[#25D366] hover:bg-[#1ebd5a] rounded-full flex items-center justify-center shadow-lg hover:-translate-y-1 active:scale-95 transition-all z-[100]"
      target="_blank"
      rel="noopener"
      aria-label="Chat WhatsApp"
    >
      <svg class="w-7 h-7 fill-white" viewBox="0 0 24 24">
        <path
          d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.25-1.38a9.88 9.88 0 0 0 4.79 1.22h.01c5.46 0 9.91-4.45 9.91-9.91S17.5 2 12.04 2m0 18.13h-.01a8.2 8.2 0 0 1-4.18-1.15l-.3-.18-3.12.82.83-3.04-.2-.31a8.2 8.2 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.25-8.24 2.2 0 4.27.86 5.83 2.42a8.2 8.2 0 0 1 2.41 5.83c0 4.54-3.7 8.23-8.25 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81-.23-.08-.39-.12-.56.13-.16.25-.64.81-.78.97-.14.17-.29.19-.54.06-.25-.12-1.05-.39-2-1.23-.74-.66-1.24-1.47-1.38-1.72-.14-.25-.02-.39.11-.51.11-.11.25-.29.37-.43.12-.14.16-.25.25-.41.08-.17.04-.31-.02-.43-.06-.12-.56-1.34-.76-1.84-.2-.48-.4-.42-.56-.42-.14 0-.31-.02-.47-.02s-.43.06-.66.31c-.23.25-.86.85-.86 2.07 0 1.22.89 2.4 1.01 2.56.12.17 1.75 2.67 4.23 3.74.59.26 1.05.41 1.41.52.59.19 1.13.16 1.56.1.47-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.14-1.18-.06-.11-.22-.17-.47-.29"
        />
      </svg>
    </a>
  </body>
</html>

<script>
      document.addEventListener('DOMContentLoaded', () => {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const icon = document.getElementById('menu-icon');

        btn.addEventListener('click', () => {
          // Toggle memunculkan/menyembunyikan menu
          menu.classList.toggle('hidden');
          
          // Ganti ikon burger (fa-bars) menjadi silang (fa-xmark) saat terbuka
          if (menu.classList.contains('hidden')) {
            icon.classList.remove('fa-xmark');
            icon.classList.add('fa-bars');
          } else {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-xmark');
          }
        });
      });
    </script>
