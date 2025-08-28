<x-layouts.app>
  <x-slot:title> Soal Data dan Ketidakpastian </x-slot:title>

  <div class="bg-grid-bw min-h-screen bg-sky-50">
    <div class="container mx-auto px-6 py-10">
      {{-- HEADER --}}
      <header class="mb-14 text-center">
        <h1 class="text-4xl font-extrabold tracking-tight text-sky-700 drop-shadow-sm md:text-5xl">
          Latihan Soal Data dan Ketidakpastian
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

              <p class="text-lg font-medium text-slate-800 mb-4">
                1. Pada acara <span class="font-semibold">“Market Day”</span>, Nazwa dan teman-teman sekelasnya menjual
                kue. Banyak kue yang terjual ditunjukkan pada tabel di bawah ini.
              </p>

              <!-- Tabel data -->
              <div class="overflow-x-auto mb-4">
                <table class="w-full border border-violet-200 text-slate-800 text-sm">
                  <thead class="bg-violet-50">
                    <tr>
                      <th class="border border-violet-200 px-3 py-2 text-left">Nama Siswa</th>
                      <th class="border border-violet-200 px-3 py-2 text-center">Banyak kue yang terjual</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="border border-violet-200 px-3 py-2">Nazwa Conita Anggraeni</td>
                      <td class="border border-violet-200 px-3 py-2 text-center">12</td>
                    </tr>
                    <tr class="bg-slate-50">
                      <td class="border border-violet-200 px-3 py-2">Kirana Putri Permana</td>
                      <td class="border border-violet-200 px-3 py-2 text-center">7</td>
                    </tr>
                    <tr>
                      <td class="border border-violet-200 px-3 py-2">Alenna Kimberly Queen</td>
                      <td class="border border-violet-200 px-3 py-2 text-center">8</td>
                    </tr>
                    <tr class="bg-slate-50">
                      <td class="border border-violet-200 px-3 py-2">Rayyan Putra Suryana</td>
                      <td class="border border-violet-200 px-3 py-2 text-center">11</td>
                    </tr>
                    <tr>
                      <td class="border border-violet-200 px-3 py-2">Insan Budiman</td>
                      <td class="border border-violet-200 px-3 py-2 text-center">13</td>
                    </tr>
                    <tr class="bg-slate-50">
                      <td class="border border-violet-200 px-3 py-2">Muhamad Akta Hermansyah</td>
                      <td class="border border-violet-200 px-3 py-2 text-center">9</td>
                    </tr>
                    <tr>
                      <td class="border border-violet-200 px-3 py-2">Karina Putri Isnaini</td>
                      <td class="border border-violet-200 px-3 py-2 text-center">12</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <p class="text-slate-800 mb-3">
                Berilah tanda centang (✔) pada kotak untuk pernyataan yang benar.
              </p>

              <!-- Daftar pernyataan -->
              <ul class="space-y-3">
                <li>
                  <label class="flex items-center gap-2">
                    <input type="checkbox" class="accent-violet-600">
                    <span class="text-slate-800">Banyak siswa yang menjual kue lebih dari 10 ada 4 orang siswa.</span>
                  </label>
                </li>
                <li>
                  <label class="flex items-center gap-2">
                    <input type="checkbox" class="accent-violet-600">
                    <span class="text-slate-800">Banyak siswa yang menjual kue kurang dari 10 ada 4 orang siswa.</span>
                  </label>
                </li>
                <li>
                  <label class="flex items-center gap-2">
                    <input type="checkbox" class="accent-violet-600">
                    <span class="text-slate-800">Jumlah kue yang terjual seluruhnya adalah 70 kue.</span>
                  </label>
                </li>
                <li>
                  <label class="flex items-center gap-2">
                    <input type="checkbox" class="accent-violet-600">
                    <span class="text-slate-800">Jumlah kue yang terjual seluruhnya adalah 72 kue.</span>
                  </label>
                </li>
              </ul>
            </div>
          </div>



          <div class="rounded-2xl border border-violet-200 bg-white shadow-sm">
            <div class="p-6">
              <h3 class="mb-2 text-sm font-semibold text-violet-700">
                Soal Pemahaman
              </h3>
              <p class="mb-4 text-lg font-medium text-slate-800">
                Pasangkan jenis limas pada kotak sebelah kiri dengan banyak rusuknya pada kotak sebelah kanan.
              </p>

              <div class="grid grid-cols-2 gap-6">
                <!-- Kolom kiri -->
                <div class="space-y-3">
                  <div class="rounded-xl border border-violet-200 bg-violet-50 p-3 font-medium text-slate-800">
                    Prisma Segitiga
                  </div>
                  <div class="rounded-xl border border-violet-200 bg-violet-50 p-3 font-medium text-slate-800">
                    Prisma Segiempat
                  </div>
                  <div class="rounded-xl border border-violet-200 bg-violet-50 p-3 font-medium text-slate-800">
                    Prisma Segilima
                  </div>
                  <div class="rounded-xl border border-violet-200 bg-violet-50 p-3 font-medium text-slate-800">
                    Prisma Segienam
                  </div>
                </div>

                <!-- Kolom kanan -->
                <div class="space-y-3">
                  <div class="rounded-xl border border-violet-200 bg-white p-3 font-medium text-slate-800 shadow-sm">
                    18
                  </div>
                  <div class="rounded-xl border border-violet-200 bg-white p-3 font-medium text-slate-800 shadow-sm">
                    15
                  </div>
                  <div class="rounded-xl border border-violet-200 bg-white p-3 font-medium text-slate-800 shadow-sm">
                    9
                  </div>
                  <div class="rounded-xl border border-violet-200 bg-white p-3 font-medium text-slate-800 shadow-sm">
                    10
                  </div>
                  <div class="rounded-xl border border-violet-200 bg-white p-3 font-medium text-slate-800 shadow-sm">
                    12
                  </div>
                </div>
              </div>

              <div class="mt-4 flex items-center justify-between">
                <span class="rounded-full bg-slate-100 px-2.5 py-1 text-sm font-semibold text-slate-600">
                  Hubungkan pasangan
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
                1. Wadah A diisi air sampai penuh. Air tersebut lalu dituangkan ke wadah B dan wadah C seperti pada
                gambar. Jika ketinggian air pada wadah B dan wadah C sama, maka <span class="italic">t</span> adalah ...
                cm.
              </p>
              <img src="{{ asset('images/wadah.png') }}" alt="Soal Wadah A, B, C" class="mx-auto my-4">
            </div>
          </div>

          <div class="rounded-2xl border border-violet-200 bg-white shadow-sm">
            <div class="p-6">
              <h3 class="mb-2 text-sm font-semibold text-violet-700">
                Soal Penerapan
              </h3>

              <p class="mb-4 text-lg font-medium text-slate-800">
                2. Ayah mempunyai kawat sepanjang 50 m. Kawat tersebut akan digunakan untuk memagari kebunnya. Kebun
                pertama berbentuk persegi panjang dengan ukuran 3 m × 4 m dan kebun kedua berbentuk belah ketupat dengan
                panjang diagonal 6 m dan 8 m.
                Berikan tanda centang (✔) pada pernyataan yang benar.
              </p>

              <ul class="space-y-3">
                <li>
                  <label class="flex items-center gap-2">
                    <input type="checkbox" class="accent-violet-600">
                    <span class="text-slate-800">Keliling kebun pertama lebih kecil dari kebun kedua.</span>
                  </label>
                </li>
                <li>
                  <label class="flex items-center gap-2">
                    <input type="checkbox" class="accent-violet-600">
                    <span class="text-slate-800">Jika ayah menggunakan kawat untuk memagari kebun pertama terlebih
                      dahulu, maka kawat tersisa 26 m.</span>
                  </label>
                </li>
                <li>
                  <label class="flex items-center gap-2">
                    <input type="checkbox" class="accent-violet-600">
                    <span class="text-slate-800">Jika ayah menggunakan kawat untuk memagari kebun kedua terlebih dahulu,
                      maka kawat tersisa 28 m.</span>
                  </label>
                </li>
                <li>
                  <label class="flex items-center gap-2">
                    <input type="checkbox" class="accent-violet-600">
                    <span class="text-slate-800">Kawat yang tersedia cukup untuk memagari kedua kebun.</span>
                  </label>
                </li>
              </ul>
            </div>
          </div>

          <div class="rounded-2xl border border-violet-200 bg-white shadow-sm">
            <div class="p-6">
              <h3 class="mb-2 text-sm font-semibold text-violet-700">
                Soal Penalaran
              </h3>

              <!-- Soal 1 -->
              <p class="mb-3 text-lg font-medium text-slate-800">
                1. Perhatikan denah toko pakaian berikut ini.
              </p>
              <img src="{{ asset('images/denah.png') }}" alt="Denah toko pakaian" class="mx-auto my-4">
              <p class="mb-6 text-slate-800">
                Toko pakaian berukuran 9 m × 5 m. Semua bagian atau area berupa persegi, kecuali bagian kasir.
                Berapakah luas area kasir?
              </p>

              <!-- Soal 2 -->
              <p class="mb-3 text-lg font-medium text-slate-800">
                2. Sebuah kerucut dan limas segiempat akan dipotong melalui titik puncaknya.
                “Hasil potongan kedua bangun ruang tersebut jika dilihat dari samping akan berbentuk segitiga sama
                kaki”.
                Setujukah kamu dengan pernyataan tersebut? Jelaskan jawabanmu.
              </p>
            </div>
          </div>

        </div>
      </main>
    </div>
  </div>
</x-layouts.app>