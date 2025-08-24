<x-layouts.app>
  <x-slot:title>
    Soal Aljabar | E-numerasi
  </x-slot:title>

  <div class="bg-sky-50 min-h-screen">
    <div class="container mx-auto px-6 py-10">

      {{-- HEADER --}}
      <header class="mb-14 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-sky-700 tracking-tight drop-shadow-sm">
          Soal Aljabar
        </h1>
        <p class="text-sky-600 mt-2">Latihan soal interaktif buat mengasah kemampuanmu 🚀</p>
      </header>

      <main class="space-y-16">

        {{-- A. Contoh Soal Pemahaman --}}
        <section>
          <h2
            class="text-2xl md:text-3xl font-bold text-sky-700 flex items-center gap-3 border-b-4 border-sky-400 pb-2 mb-6">
            Soal Pemahaman
          </h2>

          <div class="bg-white rounded-xl shadow p-6 space-y-6">
            <p class="text-gray-700 leading-relaxed">
              Ukuran gir sepeda motor biasa dinyatakan sebagai banyaknya gigi pada gir. Beberapa jenis sepeda motor
              memiliki ukuran gir sebagai berikut.
            </p>

            <div class="overflow-x-auto">
              <table
                class="table-auto w-full border-collapse overflow-hidden rounded-lg shadow text-center text-gray-700">
                <thead>
                  <tr class="bg-sky-100 text-sky-800">
                    <th class="border border-gray-300 px-4 py-2">Sepeda Motor</th>
                    <th class="border border-gray-300 px-4 py-2">Gir Depan</th>
                    <th class="border border-gray-300 px-4 py-2">Gir Belakang</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="hover:bg-sky-50">
                    <td class="border border-gray-300 px-4 py-2">A</td>
                    <td class="border border-gray-300 px-4 py-2">13</td>
                    <td class="border border-gray-300 px-4 py-2">43</td>
                  </tr>
                  <tr class="hover:bg-sky-50">
                    <td class="border border-gray-300 px-4 py-2">B</td>
                    <td class="border border-gray-300 px-4 py-2">14</td>
                    <td class="border border-gray-300 px-4 py-2">35</td>
                  </tr>
                  <tr class="hover:bg-sky-50">
                    <td class="border border-gray-300 px-4 py-2">C</td>
                    <td class="border border-gray-300 px-4 py-2">14</td>
                    <td class="border border-gray-300 px-4 py-2">42</td>
                  </tr>
                  <tr class="hover:bg-sky-50">
                    <td class="border border-gray-300 px-4 py-2">D</td>
                    <td class="border border-gray-300 px-4 py-2">15</td>
                    <td class="border border-gray-300 px-4 py-2">40</td>
                  </tr>
                  <tr class="hover:bg-sky-50">
                    <td class="border border-gray-300 px-4 py-2">E</td>
                    <td class="border border-gray-300 px-4 py-2">15</td>
                    <td class="border border-gray-300 px-4 py-2">45</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <p class="text-gray-700">Sepeda motor yang memiliki rasio gir yang sama dengan informasi tersebut adalah
              sepeda motor ….. dan …..</p>
          </div>
        </section>

        {{-- SECTION: Drag & Drop --}}
        <section class="max-w-4xl mx-auto p-6 bg-white rounded-2xl shadow space-y-6">
          <h2 class="text-2xl md:text-3xl font-bold text-sky-700 border-b-4 border-sky-400 pb-2 mb-6">
            Soal Penerapan
          </h2>
          <h2 class="text-xl md:text-2xl font-bold text-sky-700">SMP Utama berwisata (Total 444 orang)</h2>
          <p class="text-gray-700">• Setiap <b>bus</b> menampung <b>54</b> orang. • Setiap <b>mobil van</b> menampung
            <b>15</b> orang. • Jumlah mobil van <b>dua lebih banyak</b> dari bus.
          </p>
          <p class="text-sky-600 font-medium">Seret dan jatuhkan angka ke kotak hijau yang sesuai.</p>

          <div class="grid md:grid-cols-2 gap-6">
            <!-- Target -->
            <div class="rounded-2xl border-2 border-sky-200 bg-sky-50 p-5 space-y-4 shadow-inner">
              <div>
                <p class="text-sm text-gray-600 mb-1">Banyaknya Bus</p>
                <div
                  class="target h-12 rounded-lg border-2 border-dashed border-slate-400 flex items-center px-3 bg-white"
                  data-key="bus"></div>
              </div>
              <div>
                <p class="text-sm text-gray-600 mb-1">Banyaknya <i>mobil van</i></p>
                <div
                  class="target h-12 rounded-lg border-2 border-dashed border-slate-400 flex items-center px-3 bg-white"
                  data-key="van"></div>
              </div>
              <div>
                <p class="text-sm text-gray-600 mb-1">Banyaknya siswa & guru yang menaiki bus</p>
                <div
                  class="target h-12 rounded-lg border-2 border-dashed border-slate-400 flex items-center px-3 bg-white"
                  data-key="bus_people"></div>
              </div>
              <div>
                <p class="text-sm text-gray-600 mb-1">Banyaknya siswa & guru yang menaiki mobil van</p>
                <div
                  class="target h-12 rounded-lg border-2 border-dashed border-slate-400 flex items-center px-3 bg-white"
                  data-key="van_people"></div>
              </div>
            </div>

            <!-- Bank -->
            <div class="rounded-2xl border-2 border-sky-200 bg-sky-50 p-5 shadow-inner">
              <p class="text-sm text-gray-600 mb-2">Seret angka berikut:</p>
              <div id="bank" class="flex flex-wrap gap-3">
                <button id="chip-4"
                  class="chip px-4 py-2 rounded-full border border-gray-300 bg-white shadow-sm hover:bg-sky-100 active:scale-95 transition"
                  draggable="true" data-value="4">4</button>
                <button id="chip-6"
                  class="chip px-4 py-2 rounded-full border border-gray-300 bg-white shadow-sm hover:bg-sky-100 active:scale-95 transition"
                  draggable="true" data-value="6">6</button>
                <button id="chip-8"
                  class="chip px-4 py-2 rounded-full border border-gray-300 bg-white shadow-sm hover:bg-sky-100 active:scale-95 transition"
                  draggable="true" data-value="8">8</button>
                <button id="chip-120"
                  class="chip px-4 py-2 rounded-full border border-gray-300 bg-white shadow-sm hover:bg-sky-100 active:scale-95 transition"
                  draggable="true" data-value="120">120</button>
                <button id="chip-256"
                  class="chip px-4 py-2 rounded-full border border-gray-300 bg-white shadow-sm hover:bg-sky-100 active:scale-95 transition"
                  draggable="true" data-value="256">256</button>
                <button id="chip-324"
                  class="chip px-4 py-2 rounded-full border border-gray-300 bg-white shadow-sm hover:bg-sky-100 active:scale-95 transition"
                  draggable="true" data-value="324">324</button>
              </div>
              <p class="text-xs text-gray-500 mt-2">Tip: Kamu juga bisa seret chip dari kotak hijau kembali ke bank.</p>
            </div>
          </div>

          <!-- Kontrol -->
          <div class="flex flex-wrap items-center gap-3">
            <button id="checkBtn" class="px-4 py-2 rounded-lg bg-sky-600 text-white hover:bg-sky-700 shadow">Cek
              Jawaban</button>
            <button id="resetBtn" class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 shadow">Reset</button>
            <button id="showSolutionBtn"
              class="px-4 py-2 rounded-lg bg-emerald-600 text-white hover:bg-emerald-700 shadow">Tampilkan
              Solusi</button>
          </div>

          <!-- Feedback -->
          <div id="feedback" class="text-sm mt-2"></div>

          <!-- Penjelasan -->
          <details class="mt-4 bg-gray-50 rounded-lg p-3 shadow-sm">
            <summary class="cursor-pointer font-medium text-sky-700">Rumus & Perhitungan</summary>
            <div class="prose max-w-none mt-2 text-gray-700">
              <p>Misal bus = <b>b</b>, van = <b>v</b>, dengan <b>v = b + 2</b>.</p>
              <p>Jumlah orang: <b>54b + 15v = 444</b> → <b>54b + 15(b+2) = 444</b> → <b>69b + 30 = 444</b> → <b>b =
                  6</b>, <b>v = 8</b>.</p>
              <p>Penumpang bus: <b>54 × 6 = 324</b>. Penumpang van: <b>15 × 8 = 120</b>.</p>
            </div>
          </details>
        </section>

        {{-- Soal Penalaran --}}
        <section>
          <h2 class="text-2xl md:text-3xl font-bold text-sky-700 border-b-4 border-sky-400 pb-2 mb-6">
            Soal Penalaran
          </h2>

          <div class="bg-white rounded-xl shadow p-6 space-y-4 text-gray-700">
            <p>
              Pembangunan suatu ruko direncanakan selesai dalam 3 minggu jika dikerjakan oleh 10 orang. Namun, setelah
              dikerjakan selama 1 minggu, pekerjaan dihentikan selama 4 hari karena alasan teknis. Jika pembangunan ruko
              tersebut ingin diselesaikan sesuai target waktu semula, berapa orang pekerja lagi yang perlu ditambahkan?
            </p>
            <div class="space-y-1">
              <p>A. 3 orang</p>
              <p>B. 4 orang</p>
              <p>C. 5 orang</p>
              <p>D. 6 orang</p>
            </div>
          </div>
        </section>

        {{-- CTA --}}
        <section class="text-center py-10">
          <div class="bg-gradient-to-br from-sky-400 to-sky-600 rounded-2xl p-8 text-white shadow-2xl shadow-sky-200">
            <h2 class="text-3xl font-bold mb-3">Belum paham?</h2>
            <p class="mb-6 max-w-2xl mx-auto">Coba pelajari materi kembali</p>
            <a href="{{ route('materi-aljabar') }}"
              class="inline-block bg-white text-sky-700 font-bold text-lg py-3 px-8 rounded-xl shadow-md hover:bg-sky-50 transform hover:-translate-y-0.5 transition">
              Kembali ke materi
            </a>
          </div>
        </section>

      </main>
    </div>
  </div>
</x-layouts.app>