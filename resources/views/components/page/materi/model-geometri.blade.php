<x-layouts.app>
  <x-slot:title>
    Model Geometri
  </x-slot:title>

  <div class="bg-gradient-to-b from-sky-50 to-white">
    <div class="container mx-auto px-4 md:px-6 py-10 md:py-14">
      <!-- HERO -->
      <header class="mb-10 md:mb-14 text-center">
        <div
          class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-sky-100 text-sky-700 text-sm font-semibold">
          ✨ Belajar Asyik Bareng Geometri
        </div>
        <h1 class="mt-3 text-4xl md:text-5xl font-extrabold text-sky-700 tracking-tight">
          Model Translasi: Geometri
        </h1>

      </header>

      <main class="space-y-14 md:space-y-16">
        <!-- POLA BARISAN BILANGAN -->
        <!-- GEOMETRI & PENGUKURAN -->
        <section id="geometri-pengukuran">
          <div class="flex items-center gap-3 mb-3">
            <span class="text-2xl">📏</span>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Geometri & Pengukuran</h2>
          </div>
          <p class="text-gray-600 mb-6">
            Di bagian ini kita membahas <em>satuan & konversi</em>, <em>bangun datar</em>, <em>bangun ruang</em>,
            <em>sudut & Pythagoras</em>, serta <em>skala</em>. Tiap topik dilengkapi ringkasan rumus dan contoh.
          </p>

          <!-- 1) SATUAN & KONVERSI -->
          <div class="bg-white p-6 rounded-xl border border-sky-100 shadow-sm mb-8">
            <div class="flex items-center gap-2 mb-2">
              <span class="text-xl">🧭</span>
              <h3 class="text-xl font-semibold text-sky-800">Satuan & Konversi</h3>
            </div>
            <div class="grid md:grid-cols-3 gap-4 text-sm text-gray-700">
              <div class="bg-sky-50 p-4 rounded-lg">
                <p class="font-semibold text-sky-900">Panjang</p>
                <p class="mt-1">km • hm • dam • <strong>m</strong> • dm • cm • mm</p>
                <p class="mt-1 text-gray-600">Turun 1 langkah ×10 • Naik 1 langkah ÷10</p>
                <details class="mt-2">
                  <summary class="cursor-pointer text-sky-700">Contoh</summary>
                  <p class="mt-1">2,5 m = 250 cm (turun 2 langkah: ×100)</p>
                </details>
              </div>
              <div class="bg-emerald-50 p-4 rounded-lg">
                <p class="font-semibold text-emerald-900">Luas</p>
                <p class="mt-1">km² • hm² • dam² • <strong>m²</strong> • dm² • cm² • mm²</p>
                <p class="mt-1 text-gray-600">Turun 1 langkah ×100 • Naik 1 langkah ÷100</p>
                <details class="mt-2">
                  <summary class="cursor-pointer text-emerald-700">Contoh</summary>
                  <p class="mt-1">3,5 m² = 35.000 cm² (turun 2 langkah: ×10.000)</p>
                </details>
              </div>
              <div class="bg-indigo-50 p-4 rounded-lg">
                <p class="font-semibold text-indigo-900">Volume & Liter</p>
                <p class="mt-1">m³ (turun 1 langkah ×1.000) • 1 L = 1 dm³ = 1.000 cm³</p>
                <details class="mt-2">
                  <summary class="cursor-pointer text-indigo-700">Contoh</summary>
                  <p class="mt-1">2,5 L = 2.500 cm³</p>
                </details>
              </div>
            </div>
            <div class="mt-4 p-3 rounded-lg bg-sky-50 border border-sky-100 text-sm">
              <p class="font-semibold text-sky-900">📝 Ringkas Hafalan:</p>
              <p>Naik satuan → bagi; Turun satuan → kali. Luas ×100 per langkah, Volume ×1.000 per langkah.</p>
            </div>
          </div>

          <!-- 2) BANGUN DATAR -->
          <div class="bg-white p-6 rounded-xl border border-emerald-100 shadow-sm mb-8">
            <div class="flex items-center gap-2 mb-2">
              <span class="text-xl">📐</span>
              <h3 class="text-xl font-semibold text-emerald-800">Bangun Datar (Keliling & Luas)</h3>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 text-gray-800">
              <!-- Persegi -->
              <div class="bg-emerald-50 p-4 rounded-lg">
                <p class="font-semibold">Persegi</p>
                <p class="text-sm">K = \(4s\) • L = \(s^2\)</p>
                <details class="mt-2 text-sm">
                  <summary class="cursor-pointer text-emerald-700">Contoh</summary>
                  <p>s=7 cm → K=28 cm, L=49 cm²</p>
                </details>
              </div>
              <!-- Persegi Panjang -->
              <div class="bg-emerald-50 p-4 rounded-lg">
                <p class="font-semibold">Persegi Panjang</p>
                <p class="text-sm">K = \(2(p+l)\) • L = \(p\times l\)</p>
                <details class="mt-2 text-sm">
                  <summary class="cursor-pointer text-emerald-700">Contoh</summary>
                  <p>p=12, l=8 → K=40, L=96 cm²</p>
                </details>
              </div>
              <!-- Segitiga -->
              <div class="bg-emerald-50 p-4 rounded-lg">
                <p class="font-semibold">Segitiga</p>
                <p class="text-sm">K = \(a+b+c\) • L = \(\tfrac12 a \times t\)</p>
                <details class="mt-2 text-sm">
                  <summary class="cursor-pointer text-emerald-700">Contoh</summary>
                  <p>a=10, t=6 → L=30 cm²</p>
                </details>
              </div>
              <!-- Jajar Genjang -->
              <div class="bg-emerald-50 p-4 rounded-lg">
                <p class="font-semibold">Jajar Genjang</p>
                <p class="text-sm">K = \(2(a+b)\) • L = \(a \times t\)</p>
              </div>
              <!-- Trapesium -->
              <div class="bg-emerald-50 p-4 rounded-lg">
                <p class="font-semibold">Trapesium</p>
                <p class="text-sm">K = jumlah sisi • L = \(\tfrac12 (a+b)\times t\)</p>
              </div>
              <!-- Lingkaran -->
              <div class="bg-emerald-50 p-4 rounded-lg">
                <p class="font-semibold">Lingkaran</p>
                <p class="text-sm">K = \(2\pi r=\pi d\) • L = \(\pi r^2\)</p>
                <details class="mt-2 text-sm">
                  <summary class="cursor-pointer text-emerald-700">Contoh (π=22/7)</summary>
                  <p>r=7 → K=44 cm, L=154 cm²</p>
                </details>
              </div>
            </div>
            <div class="mt-4 p-3 rounded-lg bg-emerald-50 border border-emerald-100 text-sm">
              <p class="font-semibold text-emerald-900">🎯 Tips:</p>
              <p>Untuk segitiga & jajar genjang, <em>tinggi</em> harus tegak lurus <em>alas</em>. Untuk lingkaran, pilih
                π=22/7 (jika kelipatan 7) atau π≈3,14.</p>
            </div>
          </div>

          <!-- 3) BANGUN RUANG -->
          <div class="bg-white p-6 rounded-xl border border-indigo-100 shadow-sm mb-8">
            <div class="flex items-center gap-2 mb-2">
              <span class="text-xl">🧊</span>
              <h3 class="text-xl font-semibold text-indigo-800">Bangun Ruang (Luas Permukaan & Volume)</h3>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 text-gray-800">
              <!-- Kubus -->
              <div class="bg-indigo-50 p-4 rounded-lg text-sm">
                <p class="font-semibold">Kubus</p>
                <p>LP = \(6s^2\) • V = \(s^3\)</p>
              </div>
              <!-- Balok -->
              <div class="bg-indigo-50 p-4 rounded-lg text-sm">
                <p class="font-semibold">Balok</p>
                <p>LP = \(2(pl+pt+lt)\) • V = \(p\times l\times t\)</p>
              </div>
              <!-- Tabung -->
              <div class="bg-indigo-50 p-4 rounded-lg text-sm">
                <p class="font-semibold">Tabung</p>
                <p>LP = \(2\pi r(r+t)\) • V = \(\pi r^2 t\)</p>
                <details class="mt-2">
                  <summary class="cursor-pointer text-indigo-700">Contoh (r=7, t=10)</summary>
                  <p>V = 1540 cm³ • LP = 748 cm² (π=22/7)</p>
                </details>
              </div>
              <!-- Kerucut -->
              <div class="bg-indigo-50 p-4 rounded-lg text-sm">
                <p class="font-semibold">Kerucut</p>
                <p>LP = \(\pi r(r+s)\) • V = \(\tfrac{1}{3}\pi r^2 t\)</p>
                <p class="text-gray-600 mt-1">s = garis pelukis</p>
              </div>
              <!-- Bola -->
              <div class="bg-indigo-50 p-4 rounded-lg text-sm">
                <p class="font-semibold">Bola</p>
                <p>LP = \(4\pi r^2\) • V = \(\tfrac{4}{3}\pi r^3\)</p>
              </div>
              <!-- Limas -->
              <div class="bg-indigo-50 p-4 rounded-lg text-sm">
                <p class="font-semibold">Limas</p>
                <p>V = \(\tfrac{1}{3} \times L_{\text{alas}} \times t\)</p>
                <p class="text-gray-600 mt-1">LP = L alas + jumlah L segitiga sisi tegak</p>
              </div>
            </div>
            <div class="mt-4 p-3 rounded-lg bg-indigo-50 border border-indigo-100 text-sm">
              <p class="font-semibold text-indigo-900">📝 Ringkas Hafalan:</p>
              <p>Tabung & Kerucut pakai \(r\) & \(t\); Bola pakai \(r\) saja. Ingat faktor \(\tfrac{1}{3}\) pada volume
                kerucut & limas.</p>
            </div>
          </div>

          <!-- 4) SUDUT, SEGITIGA, & PYTHAGORAS -->
          <div class="bg-white p-6 rounded-xl border border-fuchsia-100 shadow-sm mb-8">
            <div class="flex items-center gap-2 mb-2">
              <span class="text-xl">⏱️</span>
              <h3 class="text-xl font-semibold text-fuchsia-800">Sudut & Teorema Pythagoras</h3>
            </div>
            <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-800">
              <div class="bg-fuchsia-50 p-4 rounded-lg">
                <p class="font-semibold">Jenis Sudut</p>
                <ul class="mt-1 list-disc list-inside">
                  <li>Lancip &lt; 90° • Siku-siku = 90° • Tumpul 90°–180°</li>
                </ul>
                <p class="mt-2 font-semibold">Jumlah Sudut</p>
                <p>Segitiga: 180° • Segiempat: 360°</p>
                <details class="mt-2">
                  <summary class="cursor-pointer text-fuchsia-700">Contoh</summary>
                  <p>Segitiga dengan dua sudut 35° & 65° → sudut ketiga = 80°</p>
                </details>
              </div>
              <div class="bg-fuchsia-50 p-4 rounded-lg">
                <p class="font-semibold">Pythagoras (Segitiga Siku-siku)</p>
                <p>\(a^2+b^2=c^2\) (c = sisi miring)</p>
                <details class="mt-2">
                  <summary class="cursor-pointer text-fuchsia-700">Contoh</summary>
                  <p>a=6, b=8 → \(c=\sqrt{6^2+8^2}=\sqrt{36+64}=10\)</p>
                </details>
                <p class="mt-2 text-gray-600">Trio populer: (3,4,5), (5,12,13), (8,15,17)</p>
              </div>
            </div>
          </div>

          <!-- 5) SKALA (PETA & MODEL) -->
          <div class="bg-white p-6 rounded-xl border border-amber-100 shadow-sm mb-8">
            <div class="flex items-center gap-2 mb-2">
              <span class="text-xl">🗺️</span>
              <h3 class="text-xl font-semibold text-amber-800">Skala</h3>
            </div>
            <p class="text-gray-700 text-sm">Skala = perbandingan jarak pada gambar : jarak sebenarnya.</p>
            <div class="mt-3 grid md:grid-cols-2 gap-4 text-sm">
              <div class="bg-amber-50 p-4 rounded-lg">
                <p class="font-semibold text-amber-900">Rumus</p>
                <p>Jarak sebenarnya = jarak peta × penyebut skala</p>
                <p class="mt-1 text-gray-600">Ubah satuan ke cm atau m sebelum menghitung.</p>
              </div>
              <div class="bg-amber-50 p-4 rounded-lg">
                <p class="font-semibold text-amber-900">Contoh</p>
                <p>Skala 1:50.000, jarak peta 3,2 cm → 3,2 × 50.000 = 160.000 cm = 1,6 km</p>
              </div>
            </div>
          </div>

          <!-- LATIHAN MINI -->
          <div class="bg-white p-6 rounded-xl border border-sky-100 shadow-sm">
            <div class="flex items-center gap-2 mb-2">
              <span class="text-xl">📝</span>
              <h3 class="text-xl font-semibold text-sky-800">Latihan Mini (Coba Sendiri)</h3>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 text-sm">
              <!-- Latihan 1 -->
              <div class="bg-sky-50 p-4 rounded-lg">
                <p class="font-semibold">Luas Lingkaran</p>
                <p>Hitung luas jika r = 14 cm (pakai π=22/7).</p>
                <details class="mt-2">
                  <summary class="cursor-pointer text-sky-700">Pembahasan</summary>
                  <p>\(L=\pi r^2= \frac{22}{7}\times14^2= \frac{22}{7}\times196=616\text{ cm}^2\)</p>
                </details>
              </div>
              <!-- Latihan 2 -->
              <div class="bg-sky-50 p-4 rounded-lg">
                <p class="font-semibold">Volume Balok</p>
                <p>p=10 cm, l=6 cm, t=12 cm. Cari V & LP.</p>
                <details class="mt-2">
                  <summary class="cursor-pointer text-sky-700">Pembahasan</summary>
                  <p>V=10×6×12=720 cm³ • LP=2(10×6+10×12+6×12)=2(60+120+72)=504 cm²</p>
                </details>
              </div>
              <!-- Latihan 3 -->
              <div class="bg-sky-50 p-4 rounded-lg">
                <p class="font-semibold">Konversi Luas</p>
                <p>0,18 m² = … cm² ?</p>
                <details class="mt-2">
                  <summary class="cursor-pointer text-sky-700">Pembahasan</summary>
                  <p>m² → cm² (turun 2 langkah) ×10.000 → 0,18×10.000 = 1.800 cm²</p>
                </details>
              </div>
            </div>

            <div class="mt-4 p-3 rounded-lg bg-sky-50 border border-sky-100">
              <p class="font-semibold text-sky-900">🎯 Ringkas Hafalan Akhir:</p>
              <ul class="mt-1 list-disc list-inside text-gray-700">
                <li>Keliling & luas: hafalkan pola umum (persegi, segitiga, lingkaran).</li>
                <li>Ruang: ingat faktor \(\tfrac{1}{3}\) (limas/kerucut) & bentuk khusus (bola).</li>
                <li>Konversi: panjang ×10, luas ×100, volume ×1.000 per langkah.</li>
                <li>Pythagoras: \(a^2+b^2=c^2\) (khusus segitiga siku-siku).</li>
                <li>Skala: gambar × penyebut skala → jarak sebenarnya.</li>
              </ul>
            </div>
          </div>
        </section>

      </main>
    </div>
  </div>
</x-layouts.app>