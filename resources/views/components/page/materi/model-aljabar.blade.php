<x-layouts.app>
  <x-slot:title>
    Model Aljabar
  </x-slot:title>

  <div class="bg-gradient-to-b from-sky-50 to-white">
    <div class="container mx-auto px-4 md:px-6 py-10 md:py-14">
      <!-- HERO -->
      <header class="mb-10 md:mb-14 text-center">
        <div
          class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-sky-100 text-sky-700 text-sm font-semibold">
          Model Alajabar
        </div>
        <h1 class="mt-3 text-4xl md:text-5xl font-extrabold text-sky-700 tracking-tight">
          Model Translasi Aljabar
        </h1>

      </header>

      <main class="space-y-14 md:space-y-16">
        <!-- TRANSLASI: ALJABAR -->
        <section id="translasi-aljabar">
          <div class="flex items-center gap-3 mb-3">
            <span class="text-2xl">🧠</span>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Metode Translasi — Aljabar</h2>
          </div>
          <p class="text-gray-600 mb-6">
            Translasi = menerjemahkan cerita menjadi model aljabar (ekspresi, persamaan, pertidaksamaan, sistem
            persamaan).
            Ikuti urutan: <strong>Identifikasi besaran → Tetapkan variabel → Terjemahkan kata kunci → Bentuk model →
              Selesaikan → Tafsirkan</strong>.
          </p>

          <!-- HAFALAN KUNCI -->
          <div class="mb-6 p-4 rounded-xl bg-white border border-sky-100 text-sm">
            <p class="font-semibold text-sky-900">📝 Ringkas Hafalan Kunci Translasi</p>
            <div class="grid md:grid-cols-2 gap-3 mt-2 text-gray-700">
              <ul class="list-disc list-inside">
                <li><em>jumlah</em>, “lebih dari” → penjumlahan (contoh: “7 lebih dari \(x\)” = \(x+7\))</li>
                <li><em>selisih</em>, “kurang dari” → pengurangan (hati-hati urutan: “7 kurang dari \(x\)” = \(x-7\))
                </li>
                <li><em>kali</em>, “sebagian dari” → perkalian (setengah \(=\frac{1}{2}\), seperempat \(=\frac{1}{4}\))
                </li>
              </ul>
              <ul class="list-disc list-inside">
                <li><em>paling banyak</em> → \(\le\) • <em>paling sedikit</em> → \(\ge\)</li>
                <li>Urutan operasi: pangkat/akar → kali/bagi → tambah/kurang</li>
                <li>Tentukan satuan yang konsisten (Rp, cm, km, dst.)</li>
              </ul>
            </div>
          </div>

          <div class="grid lg:grid-cols-2 gap-6">
            <!-- A. EKSPRESI ALJABAR -->
            <div class="bg-white p-6 rounded-xl border border-sky-100 shadow-sm">
              <h3 class="text-xl font-semibold text-sky-800">A. Menyusun Ekspresi</h3>
              <p class="mt-1 text-gray-700">
                <strong>Soal:</strong> “Sebuah bilangan \(x\) dikurangi 7, hasilnya dibagi 3, lalu ditambah setengah
                dari \(x\).”
              </p>
              <div class="mt-3 p-3 rounded-lg bg-sky-50 text-sm">
                <p class="font-medium text-sky-900">Translasi → Ekspresi</p>
                <p>\(\displaystyle \frac{x-7}{3} + \frac{1}{2}x\)</p>
              </div>
              <details class="mt-3">
                <summary class="cursor-pointer text-sm text-gray-600">Catatan</summary>
                <p class="mt-1 text-sm text-gray-700">Tanda kurung penting agar urutan operasi benar.</p>
              </details>
            </div>

            <!-- B. PLSV -->
            <div class="bg-white p-6 rounded-xl border border-emerald-100 shadow-sm">
              <h3 class="text-xl font-semibold text-emerald-800">B. Persamaan Linier Satu Variabel (PLSV)</h3>
              <p class="mt-1 text-gray-700">
                <strong>Soal:</strong> Harga <em>3 buku</em> dan <em>1 pulpen</em> Rp49.000. Harga 1 pulpen Rp4.000.
                Berapa harga 1 buku?
              </p>
              <div class="mt-3 p-3 rounded-lg bg-emerald-50 text-sm">
                <p class="font-medium text-emerald-900">Translasi</p>
                <p>Misal harga buku \(= b\). Model: \(3b + 4{,}000 = 49{,}000\).</p>
                <p class="mt-1 font-medium text-emerald-900">Penyelesaian</p>
                <p>\(3b = 45{,}000 \Rightarrow b = 15{,}000\).</p>
                <p class="mt-1"><strong>Jawaban:</strong> Rp15.000 per buku.</p>
              </div>
            </div>

            <!-- C. PTLSV -->
            <div class="bg-white p-6 rounded-xl border border-amber-100 shadow-sm">
              <h3 class="text-xl font-semibold text-amber-800">C. Pertidaksamaan Linier Satu Variabel (PtLSV)</h3>
              <p class="mt-1 text-gray-700">
                <strong>Soal:</strong> Dana Riko Rp20.000. Ia membeli 5 pensil (masing-masing \(x\) rupiah) dan 1
                penghapus Rp3.000.
                Pengeluaran <em>paling banyak</em> Rp20.000. Berapa <em>harga maksimum</em> satu pensil?
              </p>
              <div class="mt-3 p-3 rounded-lg bg-amber-50 text-sm">
                <p class="font-medium text-amber-900">Translasi</p>
                <p>Model: \(5x + 3{,}000 \le 20{,}000\).</p>
                <p class="mt-1 font-medium text-amber-900">Penyelesaian</p>
                <p>\(5x \le 17{,}000 \Rightarrow x \le 3{,}400\).</p>
                <p class="mt-1"><strong>Jawaban:</strong> harga pensil ≤ Rp3.400.</p>
              </div>
            </div>

            <!-- D. SPLDV -->
            <div class="bg-white p-6 rounded-xl border border-fuchsia-100 shadow-sm">
              <h3 class="text-xl font-semibold text-fuchsia-800">D. Sistem Persamaan Linier Dua Variabel (SPLDV)</h3>
              <p class="mt-1 text-gray-700">
                <strong>Soal:</strong> Jumlah tiket yang terjual 10 lembar (dewasa & anak). Harga tiket dewasa Rp9.000,
                anak Rp5.000.
                Total pemasukan Rp74.000. Berapa tiket dewasa & anak?
              </p>
              <div class="mt-3 p-3 rounded-lg bg-fuchsia-50 text-sm">
                <p class="font-medium text-fuchsia-900">Translasi</p>
                <p>Misal dewasa \(d\), anak \(a\). Model: \(\begin{cases} d+a=10\\ 9{,}000d+5{,}000a=74{,}000
                  \end{cases}\)</p>
                <p class="mt-1 font-medium text-fuchsia-900">Penyelesaian (eliminasi)</p>
                <p>Substitusi \(a=10-d\) → \(9d+5(10-d)=74\) (ribuan) → \(4d=24 \Rightarrow d=6, a=4\).</p>
                <p class="mt-1"><strong>Jawaban:</strong> 6 tiket dewasa & 4 tiket anak.</p>
              </div>
            </div>

            <!-- E. FUNGSI LINIER (Pemodelan) -->
            <div class="bg-white p-6 rounded-xl border border-indigo-100 shadow-sm">
              <h3 class="text-xl font-semibold text-indigo-800">E. Fungsi Linier dari Cerita</h3>
              <p class="mt-1 text-gray-700">
                <strong>Soal:</strong> Ongkos taksi terdiri dari biaya awal Rp7.000 dan Rp2.500 per km.
                1) Nyatakan fungsi biaya \(f(x)\) (dalam rupiah) terhadap jarak \(x\) km.
                2) Hitung biaya untuk 8 km.
                3) Jika bayar Rp32.000, berapa jaraknya?
              </p>
              <div class="mt-3 p-3 rounded-lg bg-indigo-50 text-sm">
                <p class="font-medium text-indigo-900">Translasi</p>
                <p>\(f(x)=7{,}000+2{,}500x\).</p>
                <p class="mt-1 font-medium text-indigo-900">Perhitungan</p>
                <p>2) \(f(8)=7{,}000+2{,}500\cdot 8=7{,}000+20{,}000=27{,}000\).</p>
                <p>3) \(32{,}000=7{,}000+2{,}500x \Rightarrow x=\frac{25{,}000}{2{,}500}=10\) km.</p>
              </div>
            </div>

            <!-- F. BARISAN ARITMETIKA DARI KONTEKS -->
            <div class="bg-white p-6 rounded-xl border border-rose-100 shadow-sm">
              <h3 class="text-xl font-semibold text-rose-800">F. Barisan Aritmetika dari Cerita</h3>
              <p class="mt-1 text-gray-700">
                <strong>Soal:</strong> Tabungan awal Dila Rp20.000. Tiap minggu bertambah tetap Rp5.000.
                1) Tulis rumus suku ke-\(n\) tabungan. 2) Berapa tabungan minggu ke-12?
                3) Berapa total tabungan selama 12 minggu?
              </p>
              <div class="mt-3 p-3 rounded-lg bg-rose-50 text-sm">
                <p class="font-medium text-rose-900">Translasi</p>
                <p>Aritmetika: \(a=20{,}000,\, b=5{,}000\). \(U_n=a+(n-1)b\), \(S_n=\frac{n}{2}(2a+(n-1)b)\).</p>
                <p class="mt-1 font-medium text-rose-900">Perhitungan</p>
                <p>2) \(U_{12}=20{,}000+11\cdot 5{,}000=75{,}000\).</p>
                <p>3) \(S_{12}=\frac{12}{2}\big(40{,}000+11\cdot 5{,}000\big)=6\times 95{,}000=570{,}000\).</p>
              </div>
            </div>
          </div>

          <!-- LATIHAN MINI -->
          <div class="mt-6 bg-white p-6 rounded-xl border border-sky-100 shadow-sm">
            <div class="flex items-center gap-2 mb-2">
              <span class="text-xl">📝</span>
              <h3 class="text-xl font-semibold text-sky-800">Latihan Mini (Coba Sendiri)</h3>
            </div>
            <div class="grid md:grid-cols-2 gap-6 text-sm">
              <!-- Latihan 1 -->
              <div class="bg-sky-50 p-4 rounded-lg">
                <p class="font-semibold">1) PLSV</p>
                <p>“Tiga kali sebuah bilangan dikurangi 5 sama dengan 28.” Tentukan bilangannya.</p>
                <details class="mt-2">
                  <summary class="cursor-pointer text-sky-700">Pembahasan</summary>
                  <p>Model: \(3x-5=28 \Rightarrow 3x=33 \Rightarrow x=11\).</p>
                </details>
              </div>
              <!-- Latihan 2 -->
              <div class="bg-sky-50 p-4 rounded-lg">
                <p class="font-semibold">2) PtLSV</p>
                <p>Budi ingin membeli \(x\) roti @Rp4.000 dan 1 susu Rp6.000. Uangnya Rp30.000. Maksimal berapa roti?
                </p>
                <details class="mt-2">
                  <summary class="cursor-pointer text-sky-700">Pembahasan</summary>
                  <p>Model: \(4{,}000x+6{,}000\le 30{,}000 \Rightarrow 4{,}000x\le 24{,}000 \Rightarrow x\le 6\).</p>
                </details>
              </div>
            </div>

            <div class="mt-4 p-3 rounded-lg bg-sky-50 border border-sky-100">
              <p class="font-semibold text-sky-900">🎯 Ringkas Hafalan Akhir:</p>
              <ul class="mt-1 list-disc list-inside text-gray-700">
                <li>Tetapkan variabel, tulis kalimat kunci → simbol, lalu bentuk model.</li>
                <li>PLSV: satu variabel; PtLSV: gunakan tanda ≤/≥ sesuai “paling banyak/paling sedikit”.</li>
                <li>SPLDV: dua variabel + dua persamaan (substitusi/eliminasi).</li>
                <li>Fungsi linier: bentuk \(f(x)=mx+c\) dari cerita (biaya tetap + biaya per unit).</li>
              </ul>
            </div>
          </div>
        </section>

      </main>
    </div>
  </div>
</x-layouts.app>