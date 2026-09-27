<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pembayaran — SamVPN</title>

    <link href="/asset/css/output.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>
  <body class="bg-sam-cream text-sam-dark antialiased font-sans selection:bg-sam-teal selection:text-white">
    <!-- HEADER -->
    <header class="py-4 sticky top-0 bg-sam-cream/90 backdrop-blur-md z-50 border-b border-sam-dark/10">
      <div class="max-w-md md:max-w-3xl lg:max-w-5xl mx-auto px-5 flex items-center justify-between w-full">
        <div class="flex items-center gap-4">
          <a href="/index.php" class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-sm border border-sam-dark/10 hover:bg-gray-50 active:scale-95 transition-all text-sam-dark">
            <!-- Menggunakan FontAwesome class fa-arrow-left -->
            <i class="fa-solid fa-arrow-left text-lg"></i>
          </a>
          <div class="font-extrabold text-xl tracking-tight text-sam-dark">Pembayaran</div>
        </div>
        <!-- Logo hanya muncul di layar agak besar agar tidak sesak di HP -->
        <div class="hidden md:block font-extrabold text-xl tracking-tight text-sam-dark">Sam<span class="text-sam-teal">VPN</span></div>
      </div>
    </header>

    <main class="max-w-md md:max-w-3xl lg:max-w-5xl mx-auto px-5 pt-8 pb-16">
      <div class="mb-8">
        <h1 class="text-3xl font-extrabold tracking-tight mb-2">Selesaikan Pesananmu</h1>
        <p class="text-sam-gray">Pilih metode pembayaran Tripay dan masukkan nomor WhatsApp-mu.</p>
      </div>

      <!-- FORM UTAMA -->
      <form action="#" method="POST" class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        <!-- KOLOM KIRI: Input & Metode Pembayaran (Porsi lebih lebar di desktop) -->
        <div class="lg:col-span-7 xl:col-span-8 flex flex-col gap-8">
          <!-- 1. INPUT NOMOR WA -->
          <section>
            <h2 class="font-bold text-lg mb-3 flex items-center gap-2">
              <span class="w-7 h-7 bg-sam-teal/10 text-sam-teal rounded-full flex items-center justify-center text-sm font-black">1</span>
              Nomor WhatsApp Kamu
            </h2>
            <div class="bg-white border border-sam-dark/10 rounded-2xl p-5 md:p-6 shadow-sm">
              <p class="text-sm text-sam-gray mb-4">Kami akan mengirimkan file konfigurasi dan panduan ke nomor ini setelah pembayaran berhasil.</p>
              <div class="relative max-w-md">
                <span class="absolute left-4 top-1/2 -translate-y-1/2 font-bold text-sam-dark">+62</span>
                <input
                  type="tel"
                  name="whatsapp_number"
                  placeholder="81234567890"
                  class="w-full bg-gray-50 border-2 border-sam-dark/10 rounded-xl py-3 pl-14 pr-4 font-bold text-sam-dark focus:border-sam-teal focus:bg-white focus:outline-none transition-colors"
                  required
                />
              </div>
            </div>
          </section>

          <!-- 2. PILIH METODE PEMBAYARAN (Tripay) -->
          <section>
            <h2 class="font-bold text-lg mb-3 flex items-center gap-2">
              <span class="w-7 h-7 bg-sam-teal/10 text-sam-teal rounded-full flex items-center justify-center text-sm font-black">2</span>
              Pilih Pembayaran
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4">
              <!-- Opsi QRIS -->
              <label class="relative cursor-pointer">
                <input type="radio" name="payment_method" value="QRIS" class="peer sr-only" required checked />
                <div
                  class="bg-white border-2 border-sam-dark/10 rounded-xl p-4 md:p-5 text-center hover:border-sam-teal peer-checked:border-sam-orange peer-checked:bg-sam-orange/5 transition-all h-full flex flex-col justify-center min-h-[100px]"
                >
                  <span class="block font-extrabold text-sam-dark mb-1">QRIS</span>
                  <span class="text-xs text-sam-gray font-medium">Semua E-Wallet</span>
                  <div class="absolute top-2 right-2 w-5 h-5 bg-sam-orange rounded-full text-white text-xs flex items-center justify-center opacity-0 peer-checked:opacity-100 transition-opacity shadow-sm">✓</div>
                </div>
              </label>

              <!-- Opsi Virtual Account BCA -->
              <label class="relative cursor-pointer">
                <input type="radio" name="payment_method" value="BCAVA" class="peer sr-only" />
                <div
                  class="bg-white border-2 border-sam-dark/10 rounded-xl p-4 md:p-5 text-center hover:border-sam-teal peer-checked:border-sam-orange peer-checked:bg-sam-orange/5 transition-all h-full flex flex-col justify-center min-h-[100px]"
                >
                  <span class="block font-extrabold text-sam-dark mb-1">BCA VA</span>
                  <span class="text-xs text-sam-gray font-medium">Virtual Account</span>
                  <div class="absolute top-2 right-2 w-5 h-5 bg-sam-orange rounded-full text-white text-xs flex items-center justify-center opacity-0 peer-checked:opacity-100 transition-opacity shadow-sm">✓</div>
                </div>
              </label>

              <!-- Opsi Alfamart -->
              <label class="relative cursor-pointer">
                <input type="radio" name="payment_method" value="ALFAMART" class="peer sr-only" />
                <div
                  class="bg-white border-2 border-sam-dark/10 rounded-xl p-4 md:p-5 text-center hover:border-sam-teal peer-checked:border-sam-orange peer-checked:bg-sam-orange/5 transition-all h-full flex flex-col justify-center min-h-[100px]"
                >
                  <span class="block font-extrabold text-sam-dark mb-1">Alfamart</span>
                  <span class="text-xs text-sam-gray font-medium">Bayar di Kasir</span>
                  <div class="absolute top-2 right-2 w-5 h-5 bg-sam-orange rounded-full text-white text-xs flex items-center justify-center opacity-0 peer-checked:opacity-100 transition-opacity shadow-sm">✓</div>
                </div>
              </label>

              <!-- Opsi E-Wallet -->
              <label class="relative cursor-pointer">
                <input type="radio" name="payment_method" value="SHOPEEPAY" class="peer sr-only" />
                <div
                  class="bg-white border-2 border-sam-dark/10 rounded-xl p-4 md:p-5 text-center hover:border-sam-teal peer-checked:border-sam-orange peer-checked:bg-sam-orange/5 transition-all h-full flex flex-col justify-center min-h-[100px]"
                >
                  <span class="block font-extrabold text-sam-dark mb-1">OVO / Dana</span>
                  <span class="text-xs text-sam-gray font-medium">Aplikasi Langsung</span>
                  <div class="absolute top-2 right-2 w-5 h-5 bg-sam-orange rounded-full text-white text-xs flex items-center justify-center opacity-0 peer-checked:opacity-100 transition-opacity shadow-sm">✓</div>
                </div>
              </label>
            </div>
          </section>
        </div>

        <!-- KOLOM KANAN: Ringkasan Pesanan (Tetap di posisinya saat di-scroll kalau di desktop) -->
        <div class="lg:col-span-5 xl:col-span-4 lg:sticky lg:top-24 mt-4 lg:mt-0">
          <div class="bg-white border-2 border-sam-dark/10 rounded-2xl p-5 md:p-6 shadow-sm">
            <h2 class="font-bold text-lg mb-4 border-b border-sam-dark/10 pb-3">Ringkasan Pesanan</h2>

            <div class="flex justify-between items-start mb-2">
              <div>
                <h3 class="font-extrabold text-xl text-sam-dark">Paket Bulanan</h3>
                <p class="text-sm text-sam-gray font-medium">Masa aktif 30 hari</p>
              </div>
              <b class="text-lg text-sam-dark">Rp50.000</b>
            </div>

            <div class="flex justify-between items-center mb-6">
              <span class="text-sm text-sam-gray font-medium">Biaya Admin (Tripay)</span>
              <span class="text-sm font-bold text-sam-dark">Rp1.000</span>
            </div>

            <div class="flex justify-between items-center border-t border-sam-dark/10 pt-4 mb-6">
              <span class="text-base font-bold text-sam-gray">Total Bayar</span>
              <b class="text-3xl text-sam-orange font-black">Rp51.000</b>
            </div>

            <!-- TOMBOL SUBMIT -->
            <button
              type="submit"
              class="w-full bg-sam-orange text-white text-center py-4 rounded-xl font-bold text-lg shadow-[0_6px_0_#C2410C] hover:brightness-110 active:translate-y-[4px] active:shadow-[0_2px_0_#C2410C] transition-all mb-4"
            >
              Lanjut Bayar
            </button>

            <div class="flex items-center justify-center gap-2 text-xs text-sam-gray font-medium">
              <span>🔒 Pembayaran aman otomatis oleh</span>
              <strong class="text-sam-dark">Tripay</strong>
            </div>
          </div>
        </div>
      </form>
    </main>
  </body>
</html>
