<x-layouts.app>
  <x-slot:title> Soal Aljabar </x-slot:title>

  <div class="bg-grid-bw min-h-screen bg-sky-50">
    <div class="container mx-auto px-6 py-10">
      {{-- HEADER --}}
      <header class="mb-14 text-center">
        <h1 class="text-4xl font-extrabold tracking-tight text-sky-700 drop-shadow-sm md:text-5xl">
          Soal Bilangan
        </h1>
        <p class="mt-2 text-sky-600">
          Latihan soal buat mengasah kemampuanmu 🚀
        </p>
      </header>

      <main>
        <div class="mx-auto grid max-w-3xl gap-6 lg:max-w-full">
          <!-- Card Component: Soal 1 -->
          <div class="rounded-2xl border border-violet-200 bg-white shadow-sm">
            <div class="p-6">
              <h3 class="mb-2 text-sm font-semibold text-violet-700">
                Soal Pemahaman
              </h3>
              <p class="text-lg font-medium text-slate-800">
                Pada garis bilangan berikut, bilangan A yang
                mungkin adalah ...
              </p>
              <img src="{{ asset('images/garissoal.png') }}" alt="" />
              <ul class="mt-4 space-y-2">
                <li>
                  <button type="button" class="w-full text-left">
                    <span
                      class="flex items-center justify-between rounded-xl border border-violet-200 bg-violet-50 p-3 shadow-sm transition">
                      <span class="font-medium text-slate-800">0,25</span>
                    </span>
                  </button>
                </li>
                <li>
                  <button type="button" class="w-full text-left">
                    <span
                      class="flex items-center justify-between rounded-xl border border-violet-200 bg-violet-50 p-3 shadow-sm transition">
                      <span class="font-medium text-slate-800">0,2</span>
                    </span>
                  </button>
                </li>
                <li>
                  <button type="button" class="w-full text-left">
                    <span
                      class="flex items-center justify-between rounded-xl border border-violet-200 bg-violet-50 p-3 shadow-sm transition">
                      <span class="font-medium text-slate-800">0,15</span>
                    </span>
                  </button>
                </li>
                <li>
                  <button type="button" class="w-full text-left">
                    <span
                      class="flex items-center justify-between rounded-xl border border-violet-200 bg-violet-50 p-3 shadow-sm transition">
                      <span class="font-medium text-slate-800">0,125</span>
                    </span>
                  </button>
                </li>
              </ul>
              <div class="mt-4 flex items-center justify-between">
                <span class="rounded-full bg-slate-100 px-2.5 py-1 text-sm font-semibold text-slate-600">Pilih
                  jawaban</span>
              </div>
            </div>
          </div>
          <div class="rounded-2xl border border-violet-200 bg-white shadow-sm">
            <div class="p-6">
              <h3 class="mb-2 text-sm font-semibold text-violet-700">
                Soal Pemahaman
              </h3>
              <p class="text-lg font-medium text-slate-800">
                Berilah tanda centang (✓) pada bilangan yang terletak antara 0,07 dan 0,08.
              </p>
              <ul class="mt-4 space-y-2">
                <li>
                  <label
                    class="flex items-center justify-between rounded-xl border border-violet-200 bg-violet-50 p-3 shadow-sm">
                    <input type="checkbox" class="accent-violet-600">
                    <span class="font-medium text-slate-800">0,0075</span>
                  </label>
                </li>
                <li>
                  <label
                    class="flex items-center justify-between rounded-xl border border-violet-200 bg-violet-50 p-3 shadow-sm">
                    <input type="checkbox" class="accent-violet-600">
                    <span class="font-medium text-slate-800">0,0705</span>
                  </label>
                </li>
                <li>
                  <label
                    class="flex items-center justify-between rounded-xl border border-violet-200 bg-violet-50 p-3 shadow-sm">
                    <input type="checkbox" class="accent-violet-600">
                    <span class="font-medium text-slate-800">0,0775</span>
                  </label>
                </li>
                <li>
                  <label
                    class="flex items-center justify-between rounded-xl border border-violet-200 bg-violet-50 p-3 shadow-sm">
                    <input type="checkbox" class="accent-violet-600">
                    <span class="font-medium text-slate-800">0,0801</span>
                  </label>
                </li>
                <li>
                  <label
                    class="flex items-center justify-between rounded-xl border border-violet-200 bg-violet-50 p-3 shadow-sm">
                    <input type="checkbox" class="accent-violet-600">
                    <span class="font-medium text-slate-800">0,75</span>
                  </label>
                </li>
              </ul>
              <div class="mt-4 flex items-center justify-between">
                <span class="rounded-full bg-slate-100 px-2.5 py-1 text-sm font-semibold text-slate-600">
                  Pilih jawaban
                </span>
              </div>
            </div>
          </div>
          <div class="rounded-2xl border border-violet-200 bg-white shadow-sm">
            <div class="p-6">
              <h3 class="mb-2 text-sm font-semibold text-violet-700">
                Soal Penerapan
              </h3>
              <p class="text-lg font-medium text-slate-800">
                Berilah tanda centang (✓) pada pernyataan yang benar.
              </p>
              <ul class="mt-4 space-y-2">
                <li>
                  <label
                    class="flex items-center justify-between rounded-xl border border-violet-200 bg-violet-50 p-3 shadow-sm">
                    <input type="checkbox" class="accent-violet-600">
                    <span class="font-medium text-slate-800">
                      ½ + ¼ &lt; 1 − ⅛
                    </span>
                  </label>
                </li>
                <li>
                  <label
                    class="flex items-center justify-between rounded-xl border border-violet-200 bg-violet-50 p-3 shadow-sm">
                    <input type="checkbox" class="accent-violet-600">
                    <span class="font-medium text-slate-800">
                      25% × 10 &lt; 2,5 × 10
                    </span>
                  </label>
                </li>
                <li>
                  <label
                    class="flex items-center justify-between rounded-xl border border-violet-200 bg-violet-50 p-3 shadow-sm">
                    <input type="checkbox" class="accent-violet-600">
                    <span class="font-medium text-slate-800">
                      (2,5 + 0,5) × (2,5 − 0,5) &gt; ½ × 12
                    </span>
                  </label>
                </li>
                <li>
                  <label
                    class="flex items-center justify-between rounded-xl border border-violet-200 bg-violet-50 p-3 shadow-sm">
                    <input type="checkbox" class="accent-violet-600">
                    <span class="font-medium text-slate-800">
                      (1 − 0,9)² &gt; 0,1 × 0,01
                    </span>
                  </label>
                </li>
              </ul>
              <div class="mt-4 flex items-center justify-between">
                <span class="rounded-full bg-slate-100 px-2.5 py-1 text-sm font-semibold text-slate-600">
                  Pilih jawaban
                </span>
              </div>
            </div>
          </div>
          <div class="rounded-2xl border border-violet-200 bg-white shadow-sm">
            <div class="p-6">
              <h3 class="mb-2 text-sm font-semibold text-violet-700">Soal Penerapan</h3>

              <!-- Kotak narasi soal -->
              <div class="mb-4 rounded-xl border border-slate-300 bg-slate-50 p-4 text-slate-700">
                Pada suatu Tes Matematika terdapat 75 soal. Untuk jawaban yang benar mendapat skor 2,
                jawaban salah mendapat skor −1, sedangkan jika tidak menjawab mendapat skor 0.
                Ani menjawab 50 soal dengan benar dan 10 soal tidak dijawab. Budi menjawab 60 soal dengan benar
                dan 8 soal tidak dijawab. Cici menjawab 55 soal dengan benar dan 2 soal tidak dijawab.
                Deni menjawab 40 soal dengan benar dan 12 soal tidak dijawab.
              </div>

              <p class="text-lg font-medium text-slate-800">
                Jika batas nilai kelulusan adalah 75, berilah tanda centang (✓) pada siswa yang lulus tes.
              </p>

              <ul class="mt-4 space-y-2">
                <li>
                  <label
                    class="flex items-center justify-between rounded-xl border border-violet-200 bg-violet-50 p-3 shadow-sm">
                    <span class="ml-3 font-medium text-slate-800">A. Ani</span>
                  </label>
                </li>
                <li>
                  <label
                    class="flex items-center justify-between rounded-xl border border-violet-200 bg-violet-50 p-3 shadow-sm">
                    <span class="ml-3 font-medium text-slate-800">B. Budi</span>
                  </label>
                </li>
                <li>
                  <label
                    class="flex items-center justify-between rounded-xl border border-violet-200 bg-violet-50 p-3 shadow-sm">
                    <span class="ml-3 font-medium text-slate-800">C. Cici</span>
                  </label>
                </li>
                <li>
                  <label
                    class="flex items-center justify-between rounded-xl border border-violet-200 bg-violet-50 p-3 shadow-sm">
                    <span class="ml-3 font-medium text-slate-800">D. Deni</span>
                  </label>
                </li>
              </ul>

              <div class="mt-4 flex items-center justify-between">
                <span class="rounded-full bg-slate-100 px-2.5 py-1 text-sm font-semibold text-slate-600">
                  Pilih yang lulus (nilai ≥ 75)
                </span>
              </div>
            </div>
          </div>
          <div class="rounded-2xl border border-violet-200 bg-white shadow-sm">
            <div class="p-6">
              <h3 class="mb-2 text-sm font-semibold text-violet-700">
                Soal Penerapan
              </h3>
              <p class="mb-4 text-lg font-medium text-slate-800">
                Hasil pengamatan Candra terhadap penurunan suhu di dalam kulkas setelah pemadaman listrik
                disajikan pada tabel berikut ini.
              </p>

              <!-- Tabel -->
              <div class="mb-4 overflow-x-auto">
                <table class="min-w-full border-collapse text-center">
                  <thead>
                    <tr class="bg-slate-700 text-white">
                      <th class="border border-slate-400 px-4 py-2">Waktu</th>
                      <th class="border border-slate-400 px-4 py-2">06.10</th>
                      <th class="border border-slate-400 px-4 py-2">06.25</th>
                      <th class="border border-slate-400 px-4 py-2">06.40</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="bg-slate-100">
                      <td class="border border-slate-400 px-4 py-2 font-semibold">Suhu</td>
                      <td class="border border-slate-400 px-4 py-2">−13°C</td>
                      <td class="border border-slate-400 px-4 py-2">−10°C</td>
                      <td class="border border-slate-400 px-4 py-2">−7°C</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <p class="text-lg font-medium text-slate-800">
                Pada pukul <span class="font-bold">07.25</span> suhu di dalam kulkas tersebut adalah … °C.
              </p>

              <!-- Jawaban pilihan ganda -->
              <ul class="mt-4 space-y-2">
                <li>
                  <label class="flex items-center rounded-xl border border-violet-200 bg-violet-50 p-3 shadow-sm">
                    <input type="radio" name="q4" class="accent-violet-600">
                    <span class="ml-3 font-medium text-slate-800">5°C</span>
                  </label>
                </li>
                <li>
                  <label class="flex items-center rounded-xl border border-violet-200 bg-violet-50 p-3 shadow-sm">
                    <input type="radio" name="q4" class="accent-violet-600">
                    <span class="ml-3 font-medium text-slate-800">−1°C</span>
                  </label>
                </li>
                <li>
                  <label class="flex items-center rounded-xl border border-violet-200 bg-violet-50 p-3 shadow-sm">
                    <input type="radio" name="q4" class="accent-violet-600">
                    <span class="ml-3 font-medium text-slate-800">0°C</span>
                  </label>
                </li>
                <li>
                  <label class="flex items-center rounded-xl border border-violet-200 bg-violet-50 p-3 shadow-sm">
                    <input type="radio" name="q4" class="accent-violet-600">
                    <span class="ml-3 font-medium text-slate-800">1°C</span>
                  </label>
                </li>
              </ul>

              <div class="mt-4 flex items-center justify-between">
                <span class="rounded-full bg-slate-100 px-2.5 py-1 text-sm font-semibold text-slate-600">
                  Pilih jawaban
                </span>
              </div>
            </div>
          </div>
          <div class="rounded-2xl border border-violet-200 bg-white shadow-sm">
            <div class="p-6">
              <h3 class="mb-2 text-sm font-semibold text-violet-700">
                Soal Penerapan
              </h3>
              <p class="mb-4 text-lg font-medium text-slate-800">
                Suatu rapat dihadiri oleh 30 orang dengan \(0,6\) bagian diantaranya adalah laki-laki.
                Kemudian datanglah 12 orang perempuan. Banyaknya peserta laki-laki menjadi … bagian.
              </p>

              <!-- Pilihan jawaban -->
              <ul class="mt-4 space-y-2">
                <li>
                  <label class="flex items-center rounded-xl border border-violet-200 bg-violet-50 p-3 shadow-sm">
                    <input type="radio" name="q5" class="accent-violet-600">
                    <span class="ml-3 text-2xl font-medium text-slate-800">\(\tfrac{2}{7}\)</span>
                  </label>
                </li>
                <li>
                  <label class="flex items-center rounded-xl border border-violet-200 bg-violet-50 p-3 shadow-sm">
                    <input type="radio" name="q5" class="accent-violet-600">
                    <span class="ml-3 text-2xl font-medium text-slate-800">\(\tfrac{3}{7}\)</span>
                  </label>
                </li>
                <li>
                  <label class="flex items-center rounded-xl border border-violet-200 bg-violet-50 p-3 shadow-sm">
                    <input type="radio" name="q5" class="accent-violet-600">
                    <span class="ml-3 text-2xl font-medium text-slate-800">\(\tfrac{4}{7}\)</span>
                  </label>
                </li>
                <li>
                  <label class="flex items-center rounded-xl border border-violet-200 bg-violet-50 p-3 shadow-sm">
                    <input type="radio" name="q5" class="accent-violet-600">
                    <span class="ml-3 text-2xl font-medium text-slate-800">\(\tfrac{5}{7}\)</span>
                  </label>
                </li>
              </ul>

              <div class="mt-4 flex items-center justify-between">
                <span class="rounded-full bg-slate-100 px-2.5 py-1 text-sm font-semibold text-slate-600">
                  Pilih jawaban
                </span>
              </div>
            </div>
          </div>
          <div class="rounded-2xl border border-violet-200 bg-white shadow-sm">
            <div class="p-6">
              <h3 class="mb-2 text-sm font-semibold text-violet-700">
                Soal Penalaran
              </h3>
              <p class="mb-4 text-lg font-medium text-slate-800">
                Jumlah penduduk di suatu kota adalah 300.000 jiwa. Sebanyak \(\tfrac{2}{3}\) bagiannya adalah orang
                dewasa, dan sisanya anak-anak.
                Sebanyak \(\tfrac{3}{8}\) bagian dari orang dewasa berjenis kelamin laki-laki dan \(\tfrac{9}{16}\)
                bagian dari anak-anak berjenis kelamin perempuan.
              </p>
              <p class="mb-4 text-lg font-medium text-slate-800">
                Beri tanda centang (✓) pada kolom Benar atau Salah untuk setiap pernyataan berikut.
              </p>

              <!-- Tabel Pernyataan -->
              <div class="overflow-x-auto">
                <table class="min-w-full border-collapse text-left text-slate-800">
                  <thead>
                    <tr class="bg-violet-100">
                      <th class="border border-slate-300 px-4 py-2">Pernyataan</th>
                      <th class="border border-slate-300 px-4 py-2 text-center">Benar</th>
                      <th class="border border-slate-300 px-4 py-2 text-center">Salah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="border border-slate-300 px-4 py-2">
                        Perempuan dewasa lebih banyak dari laki-laki dewasa.
                      </td>
                      <td class="border border-slate-300 px-4 py-2 text-center">
                        <input type="checkbox" class="accent-violet-600">
                      </td>
                      <td class="border border-slate-300 px-4 py-2 text-center">
                        <input type="checkbox" class="accent-violet-600">
                      </td>
                    </tr>
                    <tr class="bg-slate-50">
                      <td class="border border-slate-300 px-4 py-2">
                        Banyaknya anak laki-laki di kota tersebut adalah 56.250 orang.
                      </td>
                      <td class="border border-slate-300 px-4 py-2 text-center">
                        <input type="checkbox" class="accent-violet-600">
                      </td>
                      <td class="border border-slate-300 px-4 py-2 text-center">
                        <input type="checkbox" class="accent-violet-600">
                      </td>
                    </tr>
                    <tr>
                      <td class="border border-slate-300 px-4 py-2">
                        Banyaknya laki-laki dewasa kurang dari banyak anak perempuan.
                      </td>
                      <td class="border border-slate-300 px-4 py-2 text-center">
                        <input type="checkbox" class="accent-violet-600">
                      </td>
                      <td class="border border-slate-300 px-4 py-2 text-center">
                        <input type="checkbox" class="accent-violet-600">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="mt-4 flex items-center justify-between">
                <span class="rounded-full bg-slate-100 px-2.5 py-1 text-sm font-semibold text-slate-600">
                  Tandai jawaban
                </span>
              </div>
            </div>
          </div>

        </div>
      </main>
    </div>
  </div>
</x-layouts.app>
