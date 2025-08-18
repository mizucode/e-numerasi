<x-layouts.app>
  <x-slot:title>
    Model Bilangan
  </x-slot:title>

  <div class="bg-white/90">
    <div class="container mx-auto px-6 py-12">
      <header class="mb-12 text-center">
        <h1 class="text-5xl font-extrabold text-sky-700 tracking-tight">Model Translasi: Bilangan</h1>
        <p class="mt-4 text-lg text-gray-600">Model Translasi Bilangan.</p>
      </header>

      <main class="space-y-16">

        <!-- TRANSLASI BILANGAN -->
        <section id="translasi-bilangan">
          <div class="flex items-center gap-3 mb-3">
            <span class="text-2xl">🧩</span>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Metode Translasi — Semua Jenis Bilangan</h2>
          </div>
          <p class="text-gray-600 mb-4">
            Kita belajar menerjemahkan cerita menjadi model matematika (translasi), lalu menghitung nilainya.
            Soal ini mencakup <em>bilangan bulat</em>, <em>pecahan</em>, <em>pangkat</em>, dan <em>akar</em>.
          </p>

          <div class="grid md:grid-cols-2 gap-6">
            <!-- Soal -->
            <div class="bg-white p-6 rounded-xl border border-sky-100 shadow-sm">
              <h3 class="text-lg font-semibold text-sky-800">Soal</h3>
              <p class="mt-2 text-gray-700">
                Rafa bermain gim <em>Number Run</em>. Skor awal Rafa adalah <strong>15</strong>.
              </p>
              <ul class="mt-2 text-gray-700 list-disc list-inside">
                <li>Kehilangan <strong>8</strong> poin.</li>
                <li>Mendapat hadiah <strong>\(\tfrac{3}{4}\)</strong> dari <strong>20</strong> poin.</li>
                <li>Menyalakan <strong>Power-Up 3</strong> yang memberi <strong>\(2^3\)</strong> poin.</li>
                <li>Di akhir, dipotong biaya <strong>\(\sqrt{36}\)</strong> poin.</li>
              </ul>
              <p class="mt-3 text-gray-700">
                Tulis <strong>model matematika</strong> (ekspresi) dari cerita di atas, lalu hitung
                <strong>skor akhir</strong> Rafa.
              </p>

              <!-- Ringkas Hafalan -->
              <div class="mt-4 p-3 rounded-lg bg-sky-50 border border-sky-100">
                <p class="font-semibold text-sky-900">📝 Ringkas Hafalan Translasi</p>
                <ul class="mt-1 text-sm text-gray-700 list-disc list-inside">
                  <li><em>dari</em> → perkalian (contoh: \(\tfrac{3}{4}\) dari 20 = \(\tfrac{3}{4}\times 20\))</li>
                  <li><em>kehilangan / dipotong</em> → pengurangan</li>
                  <li>Kerjakan urutan operasi: pangkat/akar → kali/bagi → tambah/kurang</li>
                </ul>
              </div>
            </div>

            <!-- Pembahasan (toggle) -->
            <div class="bg-white p-6 rounded-xl border border-emerald-100 shadow-sm">
              <h3 class="text-lg font-semibold text-emerald-800">Pembahasan</h3>

              <details class="mt-2 group">
                <summary class="cursor-pointer text-gray-700 hover:text-emerald-700 transition">
                  Tampilkan langkah translasi & perhitungan
                </summary>

                <div class="mt-3 space-y-3 text-gray-800">
                  <!-- Translasi -->
                  <div class="p-3 rounded-lg bg-emerald-50">
                    <p class="font-medium text-emerald-900">1) Terjemahkan kalimat → simbol</p>
                    <ul class="mt-1 text-sm list-disc list-inside text-gray-700">
                      <li>Skor awal \(= 15\)</li>
                      <li>Kehilangan \(8\) → \(-8\)</li>
                      <li>\(\tfrac{3}{4}\) dari 20 → \(\tfrac{3}{4}\times 20\)</li>
                      <li>Power-Up 3 → \(2^3\)</li>
                      <li>Biaya \(\sqrt{36}\) → \(-\sqrt{36}\)</li>
                    </ul>
                    <p class="mt-2 text-sm">Model matematika:</p>
                    <div class="mt-1 px-3 py-2 rounded bg-white border font-mono">
                      \( \;15 - 8 + \tfrac{3}{4}\times 20 + 2^3 - \sqrt{36}\; \)
                    </div>
                  </div>

                  <!-- Hitung -->
                  <div class="p-3 rounded-lg bg-emerald-50">
                    <p class="font-medium text-emerald-900">2) Hitung dengan urutan operasi</p>
                    <ul class="mt-1 text-sm list-disc list-inside text-gray-700">
                      <li>\(\tfrac{3}{4}\times 20 = 15\)</li>
                      <li>\(2^3 = 8\)</li>
                      <li>\(\sqrt{36} = 6\)</li>
                    </ul>
                    <p class="mt-2 text-sm">Substitusi:</p>
                    <div class="mt-1 px-3 py-2 rounded bg-white border font-mono">
                      \( 15 - 8 + 15 + 8 - 6 \)
                    </div>
                    <p class="mt-2 text-sm">Hitung berurutan: \(15-8=7\), \(7+15=22\), \(22+8=30\), \(30-6=24\).</p>
                    <p class="mt-1 font-semibold text-emerald-700">Jawaban: \(\boxed{24}\)</p>
                  </div>
                </div>
              </details>
            </div>
          </div>
        </section>

      </main>
    </div>
  </div>

</x-layouts.app>