<x-layouts.app>
  <x-slot:title>
    Model Data & Ketidakpastian
  </x-slot:title>

  <div class="bg-sky-50 min-h-screen">
    <div class="container mx-auto px-6 py-10">

      {{-- HERO / HEADER --}}
      <header class="mb-14 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-sky-600 tracking-tight drop-shadow-sm">
          Model Data dan Ketidakpastian
        </h1>
        <p class="mt-4 text-lg text-sky-900/80 max-w-3xl mx-auto leading-relaxed">
          Model Translasi Lesh Data dan Ketidakpastian
        </p>

      </header>

      <main class="space-y-16">

        <!-- TRANSLASI: OLAH DATA & KETIDAKPASTIAN -->
        <section id="translasi-data-ketidakpastian">
          <div class="flex items-center gap-3 mb-3">
            <span class="text-2xl">📊</span>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Metode Translasi — Olah Data & Ketidakpastian</h2>
          </div>
          <p class="text-gray-600 mb-6">
            Kita belajar menerjemahkan (men-<em>translasi</em>) cerita/masalah menjadi model statistik dan peluang,
            lalu menghitung <em>ukuran pemusatan</em> (rata-rata, median, modus), <em>penyebaran</em> (jangkauan),
            serta <em>peluang</em> kejadian.
          </p>

          <div class="grid lg:grid-cols-2 gap-6">
            <!-- OLAH DATA -->
            <div class="bg-white p-6 rounded-xl border border-sky-100 shadow-sm">
              <h3 class="text-xl font-semibold text-sky-800">A. Olah Data (Statistika Dasar)</h3>
              <p class="mt-1 text-gray-700">
                <strong>Soal:</strong> Nilai ulangan Matematika 12 siswa:
              </p>

              <!-- Tabel Data -->
              <div class="overflow-x-auto mt-3">
                <table class="min-w-full text-sm text-left border border-gray-200 rounded-lg">
                  <thead class="bg-sky-50 text-sky-900">
                    <tr>
                      <th class="px-3 py-2">Data</th>
                      <th class="px-3 py-2">Nilai</th>
                    </tr>
                  </thead>
                  <tbody class="text-gray-700">
                    <tr>
                      <td class="px-3 py-1">Daftar</td>
                      <td class="px-3 py-1">70, 80, 75, 90, 75, 85, 80, 75, 60, 85, 80, 90</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <p class="mt-3 text-gray-700">
                <strong>Tugas:</strong> (1) Buat <em>model translasi</em> (apa yang diminta & simbol/rumusnya),
                (2) hitung <em>rata-rata</em> \((\bar{x})\), <em>median</em>, <em>modus</em>, dan <em>jangkauan</em>
                \((\text{range})\),
                (3) jelaskan <em>artinya</em>.
              </p>

              <!-- Hafalan -->
              <div class="mt-3 p-3 rounded-lg bg-sky-50 border border-sky-100 text-sm">
                <p class="font-semibold text-sky-900">📝 Ringkas Hafalan Olah Data</p>
                <ul class="mt-1 list-disc list-inside text-gray-700">
                  <li>Rata-rata: \(\displaystyle \bar{x}=\frac{\sum x_i}{n}\)</li>
                  <li>Median: nilai tengah (urutkan data; genap → rata-rata 2 tengah)</li>
                  <li>Modus: nilai yang paling sering muncul</li>
                  <li>Jangkauan: \(\text{maks} - \text{min}\)</li>
                </ul>
              </div>

              <!-- Pembahasan toggle -->
              <details class="mt-4 group">
                <summary class="cursor-pointer text-gray-700 hover:text-emerald-700 transition">
                  Tampilkan Pembahasan Langkah Translasi & Perhitungan
                </summary>

                <div class="mt-3 space-y-3 text-gray-800">
                  <!-- Translasi -->
                  <div class="p-3 rounded-lg bg-emerald-50">
                    <p class="font-medium text-emerald-900">1) Translasi</p>
                    <ul class="mt-1 list-disc list-inside text-sm text-gray-700">
                      <li>Diminta: \(\bar{x}\), median, modus, jangkauan.</li>
                      <li>Simbol: \(\bar{x}=\frac{\sum x_i}{n}\); median → dua nilai tengah; modus → frekuensi
                        tertinggi; jangkauan → max−min.</li>
                    </ul>
                  </div>

                  <!-- Hitung -->
                  <div class="p-3 rounded-lg bg-emerald-50 text-sm">
                    <p class="font-medium text-emerald-900">2) Hitung</p>
                    <p class="mt-1"><strong>a) Urutkan:</strong> 60, 70, 75, 75, 75, 80, 80, 80, 85, 85, 90, 90</p>
                    <p class="mt-1"><strong>b) Rata-rata</strong> \(\bar{x}=\frac{945}{12}=78{,}75\)</p>
                    <p class="mt-1"><strong>c) Median</strong> = rata-rata data ke-6 & ke-7 = \(\frac{80+80}{2}=80\)</p>
                    <p class="mt-1"><strong>d) Modus</strong> = 75 dan 80 (keduanya muncul 3 kali)</p>
                    <p class="mt-1"><strong>e) Jangkauan</strong> = 90 − 60 = 30</p>
                  </div>

                  <!-- Makna -->
                  <div class="p-3 rounded-lg bg-emerald-50 text-sm">
                    <p class="font-medium text-emerald-900">3) Makna</p>
                    <p>Kebanyakan nilai berada sekitar 80 (median 80), rata-rata 78,75; data cukup menyebar (jangkauan
                      30).</p>
                  </div>
                </div>
              </details>
            </div>

            <!-- KETIDAKPASTIAN / PELUANG -->
            <div class="bg-white p-6 rounded-xl border border-amber-100 shadow-sm">
              <h3 class="text-xl font-semibold text-amber-800">B. Ketidakpastian (Peluang Dasar)</h3>
              <p class="mt-1 text-gray-700">
                <strong>Soal:</strong> Sebuah kantong berisi kelereng <strong>5 merah</strong>, <strong>3 biru</strong>,
                dan
                <strong>2 hijau</strong>. Ambil 1 kelereng secara acak.
              </p>
              <ol class="mt-2 list-decimal list-inside text-gray-700">
                <li>Nyatakan <em>model translasi</em> peluang (ruang sampel & kejadian).</li>
                <li>Hitung \(P(\text{merah})\) dan \(P(\text{tidak merah})\).</li>
                <li>Jika <em>dikembalikan</em> lalu ambil lagi, hitung \(P(\text{merah lalu biru})\).</li>
                <li>Jika <em>tanpa pengembalian</em>, hitung \(P(\text{merah lalu biru})\).</li>
              </ol>

              <!-- Hafalan -->
              <div class="mt-3 p-3 rounded-lg bg-amber-50 border border-amber-100 text-sm">
                <p class="font-semibold text-amber-900">📝 Ringkas Hafalan Peluang</p>
                <ul class="mt-1 list-disc list-inside text-gray-700">
                  <li>\(P(A)=\dfrac{\text{banyak kejadian yang diinginkan}}{\text{banyak semua kejadian}}\)</li>
                  <li>Komplemen: \(P(\overline{A})=1-P(A)\)</li>
                  <li>Dengan pengembalian → kejadian <em>independen</em>; tanpa pengembalian → <em>bergantung</em></li>
                </ul>
              </div>

              <!-- Pembahasan toggle -->
              <details class="mt-4 group">
                <summary class="cursor-pointer text-gray-700 hover:text-amber-700 transition">
                  Tampilkan Pembahasan Langkah Translasi & Perhitungan
                </summary>

                <div class="mt-3 space-y-3 text-gray-800 text-sm">
                  <!-- Translasi -->
                  <div class="p-3 rounded-lg bg-amber-50">
                    <p class="font-medium text-amber-900">1) Translasi</p>
                    <p>Ruang sampel berukuran \(10\) (5M, 3B, 2H). Kejadian “merah” punya 5 hasil, “biru” 3, “hijau” 2.
                    </p>
                  </div>

                  <!-- Hitung -->
                  <div class="p-3 rounded-lg bg-amber-50">
                    <p class="font-medium text-amber-900">2) Hitung</p>
                    <ul class="mt-1 list-disc list-inside text-gray-700">
                      <li>\(P(\text{merah})=\frac{5}{10}=\frac{1}{2}\)</li>
                      <li>\(P(\text{tidak merah})=1-\frac{1}{2}=\frac{1}{2}\)</li>
                      <li><em>Dengan pengembalian:</em> \(P(\text{merah lalu
                        biru})=\frac{5}{10}\times\frac{3}{10}=\frac{3}{20}\)</li>
                      <li><em>Tanpa pengembalian:</em> \(P(\text{merah lalu
                        biru})=\frac{5}{10}\times\frac{3}{9}=\frac{1}{6}\)</li>
                    </ul>
                  </div>

                  <!-- Makna -->
                  <div class="p-3 rounded-lg bg-amber-50">
                    <p class="font-medium text-amber-900">3) Makna</p>
                    <p>Mengambil merah cukup mungkin (50%). Peluang berubah saat tanpa pengembalian karena total
                      kelereng berkurang.</p>
                  </div>
                </div>
              </details>
            </div>
          </div>

          <!-- LATIHAN MINI -->
          <div class="mt-6 bg-white p-6 rounded-xl border border-sky-100 shadow-sm">
            <div class="flex items-center gap-2 mb-2">
              <span class="text-xl">📝</span>
              <h3 class="text-xl font-semibold text-sky-800">Latihan Mini (Coba Sendiri)</h3>
            </div>

            <div class="grid md:grid-cols-2 gap-6 text-sm">
              <!-- Latihan 1: Olah Data -->
              <div class="bg-sky-50 p-4 rounded-lg">
                <p class="font-semibold">1) Olah Data</p>
                <p>Data tinggi (cm): 150, 152, 154, 154, 156, 156, 156, 160</p>
                <p class="mt-1">Tentukan median & modus.</p>
                <details class="mt-2">
                  <summary class="cursor-pointer text-sky-700">Pembahasan</summary>
                  <p class="mt-1">Urut sudah; n=8 → median = rata-rata data ke-4 & ke-5 = (154+156)/2 =
                    <strong>155</strong>.</p>
                  <p>Modus = nilai paling sering = <strong>156</strong>.</p>
                </details>
              </div>

              <!-- Latihan 2: Peluang -->
              <div class="bg-sky-50 p-4 rounded-lg">
                <p class="font-semibold">2) Peluang Dadu</p>
                <p>Sebuah dadu bersisi 6. Peluang muncul bilangan &gt; 4?</p>
                <details class="mt-2">
                  <summary class="cursor-pointer text-sky-700">Pembahasan</summary>
                  <p class="mt-1">Hasil &gt;4 = {5,6} → 2 dari 6 → \( \frac{2}{6}=\frac{1}{3} \).</p>
                </details>
              </div>
            </div>

            <!-- Hafalan akhir -->
            <div class="mt-4 p-3 rounded-lg bg-sky-50 border border-sky-100">
              <p class="font-semibold text-sky-900">🎯 Ringkas Hafalan Akhir:</p>
              <ul class="mt-1 list-disc list-inside text-gray-700">
                <li>\(\bar{x}=\frac{\sum x_i}{n}\), median = nilai tengah, modus = terbanyak, jangkauan = max−min.</li>
                <li>Peluang = kejadian diinginkan / semua kejadian; komplemen \(=1-P(A)\).</li>
                <li>Dengan pengembalian → peluang tetap; tanpa pengembalian → peluang berubah.</li>
              </ul>
            </div>
          </div>
        </section>

      </main>
    </div>
  </div>
</x-layouts.app>