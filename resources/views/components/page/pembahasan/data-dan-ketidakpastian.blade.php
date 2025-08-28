<x-layouts.app>
  <x-slot:title>
    Pembahasan Data dan Ketidakpastian
  </x-slot:title>

  <div class="bg-grid-bw min-h-screen">
    <div class="container mx-auto px-6 py-10">

      {{-- HEADER --}}
      <header class="mb-12 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-sky-600 tracking-tight">Pembahasan dan Contoh Soal
          —
          Materi
          Data dan Ketidakpastian</h1>
        <p class="mt-3 text-lg text-sky-900/80 max-w-3xl mx-auto leading-relaxed">
          Kumpulan contoh soal pemahaman, penerapan, dan penalaran lengkap dengan pembahasan.
        </p>
      </header>

      <main class="space-y-16">


        {{-- A. Contoh Soal Pemahaman 1 --}}
        <section>
          <h2
            class="text-2xl md:text-3xl font-bold text-sky-700 flex items-center gap-3 border-b-4 border-sky-400 pb-2 mb-6">
            <span class="bg-sky-100 text-sky-600 px-3 py-1 rounded-lg">A</span>
            Contoh Soal Pemahaman
          </h2>

          <article class="bg-white rounded-2xl border border-sky-100 shadow-md overflow-hidden">
            <div class="p-6">
              <h3 class="text-xl font-bold text-sky-800 mb-3">
                1. Nazril menanyakan warna kesukaan kepada teman-temannya.
              </h3>

              <p class="text-sky-900/90 leading-relaxed text-lg mb-4">
                Dia kemudian mencatat di buku tulisnya sebagai berikut:
              </p>

              <ul class="list-disc list-inside text-sky-900/90 leading-relaxed mb-4">
                <li>Zafran – hijau</li>
                <li>Eza – biru</li>
                <li>Kimmy – cokelat</li>
                <li>Alena – merah</li>
                <li>Raihan – hijau</li>
                <li>Nada – biru</li>
                <li>Rasyid – biru</li>
                <li>Amar – kuning</li>
                <li>Rayan – kuning</li>
                <li>Tristan – hijau</li>
                <li>Yuki – merah</li>
                <li>Diya – merah</li>
                <li>Akta – cokelat</li>
                <li>Nazwa – biru</li>
                <li>Keneth – merah</li>
                <li>Vender – kuning</li>
              </ul>

              <p class="text-sky-900/90 leading-relaxed text-lg mb-4">
                Nazril kemudian membuat tabel frekuensi yang menunjukkan hasil pengumpulan data mengenai warna kesukaan
                teman-temannya.
                Isilah titik-titik pada tabel berikut ini.
              </p>

              <!-- Tabel Awal -->
              <div class="overflow-x-auto mb-6">
                <table class="min-w-full border border-sky-200 text-center text-lg">
                  <thead class="bg-sky-50">
                    <tr>
                      <th class="border border-sky-200 px-4 py-2">Warna Kesukaan</th>
                      <th class="border border-sky-200 px-4 py-2">Banyak Anak yang Menyukainya</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="border border-sky-200 px-4 py-2">Hijau</td>
                      <td class="border border-sky-200 px-4 py-2">3</td>
                    </tr>
                    <tr>
                      <td class="border border-sky-200 px-4 py-2">Biru</td>
                      <td class="border border-sky-200 px-4 py-2">…</td>
                    </tr>
                    <tr>
                      <td class="border border-sky-200 px-4 py-2">Cokelat</td>
                      <td class="border border-sky-200 px-4 py-2">…</td>
                    </tr>
                    <tr>
                      <td class="border border-sky-200 px-4 py-2">Merah</td>
                      <td class="border border-sky-200 px-4 py-2">…</td>
                    </tr>
                    <tr>
                      <td class="border border-sky-200 px-4 py-2">Kuning</td>
                      <td class="border border-sky-200 px-4 py-2">…</td>
                    </tr>
                    <tr class="font-bold bg-sky-50">
                      <td class="border border-sky-200 px-4 py-2">Jumlah</td>
                      <td class="border border-sky-200 px-4 py-2">16</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <!-- Pembahasan -->
              <div class="bg-sky-50 border-l-4 border-sky-400 p-4 rounded-r-xl text-lg">
                <div class="font-semibold text-sky-800 mb-2">Pembahasan:</div>
                <p class="text-sky-900/90 mb-2">Berdasarkan data di soal, kita bisa menghitung jumlah anak yang menyukai
                  warna kesukaannya sebagai berikut:</p>

                <ol class="list-decimal list-inside space-y-1 text-sky-900/90">
                  <li>Anak yang menyukai warna hijau adalah Zafran, Raihan, dan Tristan sehingga banyak anak yang
                    menyukai warna hijau ada 3 orang.</li>
                  <li>Anak yang menyukai warna biru adalah Eza, Nada, Rasyid, dan Nazwa sehingga banyak anak yang
                    menyukai warna biru ada 4 orang.</li>
                  <li>Anak yang menyukai warna cokelat adalah Kimmy dan Akta sehingga banyak anak yang menyukai warna
                    cokelat ada 2 orang.</li>
                  <li>Anak yang menyukai warna merah adalah Alena, Yuki, Diya, dan Keneth sehingga banyak anak yang
                    menyukai warna merah ada 4 orang.</li>
                  <li>Anak yang menyukai warna kuning adalah Amar, Rayan, dan Vender sehingga banyak anak yang menyukai
                    warna kuning ada 3 orang.</li>
                  <li>Jumlah seluruh teman yang didata oleh Nazril adalah 3 + 4 + 2 + 4 + 3 = 16 orang.</li>
                </ol>

                <p class="mt-3 text-sky-900/90">Jadi, jawaban yang benar adalah sebagai berikut:</p>

                <!-- Tabel Hasil Akhir -->
                <div class="overflow-x-auto mt-4">
                  <table class="min-w-full border border-sky-200 text-center text-lg">
                    <thead class="bg-sky-50">
                      <tr>
                        <th class="border border-sky-200 px-4 py-2">Warna Kesukaan</th>
                        <th class="border border-sky-200 px-4 py-2">Banyak Anak yang Menyukainya</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="border border-sky-200 px-4 py-2">Hijau</td>
                        <td class="border border-sky-200 px-4 py-2">3</td>
                      </tr>
                      <tr>
                        <td class="border border-sky-200 px-4 py-2">Biru</td>
                        <td class="border border-sky-200 px-4 py-2">4</td>
                      </tr>
                      <tr>
                        <td class="border border-sky-200 px-4 py-2">Cokelat</td>
                        <td class="border border-sky-200 px-4 py-2">2</td>
                      </tr>
                      <tr>
                        <td class="border border-sky-200 px-4 py-2">Merah</td>
                        <td class="border border-sky-200 px-4 py-2">4</td>
                      </tr>
                      <tr>
                        <td class="border border-sky-200 px-4 py-2">Kuning</td>
                        <td class="border border-sky-200 px-4 py-2">3</td>
                      </tr>
                      <tr class="font-bold bg-sky-50">
                        <td class="border border-sky-200 px-4 py-2">Jumlah</td>
                        <td class="border border-sky-200 px-4 py-2">16</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </article>


          <article class="bg-white rounded-2xl mt-8 border border-sky-100 shadow-md overflow-hidden">
            <div class="p-6">
              <h3 class="text-xl font-bold text-sky-800 mb-3">
                2. Diagram batang di bawah ini menunjukkan usia dari 4 orang.
              </h3>

              <div class="flex justify-center my-4">
                <img src="{{ asset('images/diagram-usia.png') }}" alt="Diagram Usia" class="rounded-lg border">
              </div>

              <p class="text-sky-900/90 leading-relaxed text-lg mb-4">
                Berdasarkan diagram batang di atas, berilah tanda centang (✓) pada kolom Benar atau Salah berdasarkan
                pernyataan berikut ini.
              </p>

              <!-- Tabel Pernyataan (kosong seperti soal) -->
              <div class="overflow-x-auto mb-6">
                <table class="min-w-full border border-sky-200 text-center text-lg">
                  <thead class="bg-sky-50">
                    <tr>
                      <th class="border border-sky-200 px-4 py-2">Pernyataan</th>
                      <th class="border border-sky-200 px-4 py-2">Benar</th>
                      <th class="border border-sky-200 px-4 py-2">Salah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="border border-sky-200 px-4 py-2 text-left">Selisih usia Bunga dan Syela adalah 15 tahun
                      </td>
                      <td class="border border-sky-200 px-4 py-2"></td>
                      <td class="border border-sky-200 px-4 py-2"></td>
                    </tr>
                    <tr>
                      <td class="border border-sky-200 px-4 py-2 text-left">Usia Nadif yang paling tua di antara yang
                        lainnya.</td>
                      <td class="border border-sky-200 px-4 py-2"></td>
                      <td class="border border-sky-200 px-4 py-2"></td>
                    </tr>
                    <tr>
                      <td class="border border-sky-200 px-4 py-2 text-left">Usia Fazri adalah yang termuda di antara
                        yang lainnya.</td>
                      <td class="border border-sky-200 px-4 py-2"></td>
                      <td class="border border-sky-200 px-4 py-2"></td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <!-- Pembahasan -->
              <div class="bg-sky-50 border-l-4 border-sky-400 p-4 rounded-r-xl text-lg mb-6">
                <div class="font-semibold text-sky-800 mb-2">Pembahasan:</div>
                <p class="text-sky-900/90">Dari diagram batang pada soal, data yang dapat dibaca adalah sebagai berikut:
                </p>
                <ul class="list-disc list-inside space-y-1 text-sky-900/90 mt-2">
                  <li>Usia Fazri adalah 15 tahun.</li>
                  <li>Usia Bunga adalah 20 tahun.</li>
                  <li>Usia Nadif adalah 25 tahun.</li>
                  <li>Usia Syela adalah 10 tahun.</li>
                </ul>

                <ul class="list-disc list-inside space-y-3 text-sky-900/90 mt-4">
                  <li>Selisih usia Bunga dan Syela adalah 20 - 10 = 10 tahun. Jadi, pernyataan selisih usia Bunga dan
                    Syela adalah 15 tahun, <span class="font-semibold">pernyataan salah</span>.</li>
                  <li>Usia paling tua ditunjukkan oleh diagram batang yang paling tinggi, yaitu Nadif dengan usia 25
                    tahun. Jadi, pernyataan usia Nadif paling tua, <span class="font-semibold">pernyataan benar</span>.
                  </li>
                  <li>Usia paling muda ditunjukkan oleh diagram batang yang paling pendek, yaitu Syela dengan usia 10
                    tahun. Jadi, pernyataan usia Fazri adalah yang termuda, <span class="font-semibold">pernyataan
                      salah</span>.</li>
                </ul>
              </div>

              <!-- Tabel Jawaban Akhir -->
              <p class="text-sky-900/90 text-lg mb-3">Jawaban yang benar adalah sebagai berikut:</p>
              <div class="overflow-x-auto">
                <table class="min-w-full border border-sky-200 text-center text-lg">
                  <thead class="bg-sky-50">
                    <tr>
                      <th class="border border-sky-200 px-4 py-2">Pernyataan</th>
                      <th class="border border-sky-200 px-4 py-2">Benar</th>
                      <th class="border border-sky-200 px-4 py-2">Salah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="border border-sky-200 px-4 py-2 text-left">Selisih usia Bunga dan Syela adalah 15 tahun
                      </td>
                      <td class="border border-sky-200 px-4 py-2"></td>
                      <td class="border border-sky-200 px-4 py-2">✓</td>
                    </tr>
                    <tr>
                      <td class="border border-sky-200 px-4 py-2 text-left">Usia Nadif yang paling tua di antara yang
                        lainnya.</td>
                      <td class="border border-sky-200 px-4 py-2">✓</td>
                      <td class="border border-sky-200 px-4 py-2"></td>
                    </tr>
                    <tr>
                      <td class="border border-sky-200 px-4 py-2 text-left">Usia Fazri adalah yang termuda di antara
                        yang lainnya.</td>
                      <td class="border border-sky-200 px-4 py-2"></td>
                      <td class="border border-sky-200 px-4 py-2">✓</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </article>


        </section>

        {{-- B. Contoh Soal Penerapan --}}
        <section>
          <h2
            class="text-2xl md:text-3xl font-bold text-sky-700 flex items-center gap-3 border-b-4 border-sky-400 pb-2 mb-6">
            <span class="bg-sky-100 text-sky-600 px-3 py-1 rounded-lg">B</span>
            Contoh Soal Penerapan
          </h2>

          <article class="bg-white rounded-2xl border border-sky-100 shadow-md overflow-hidden">
            <div class="p-6">
              <h3 class="text-xl font-bold  text-sky-800 mb-3">
                1. Jumlah siswa kelas <span class="italic">VIII A</span> ada 30 orang. Kemungkinan seorang siswa yang
                dipilih secara acak berusia di bawah 13 tahun adalah \( \frac{1}{5} \).
              </h3>

              <p class="text-sky-900/90 leading-relaxed text-lg mb-3">
                Berilah tanda centang (√) untuk pernyataan yang benar.
              </p>

              <!-- Daftar Pernyataan (kosong seperti soal) -->
              <ul class="space-y-2 text-lg mb-6">
                <li class="flex items-start gap-3">
                  <span class="mt-1 inline-block h-5 w-5 rounded border border-sky-300"></span>
                  <span>Banyaknya siswa yang berusia di bawah 13 tahun ada 5 orang.</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="mt-1 inline-block h-5 w-5 rounded border border-sky-300"></span>
                  <span>Banyaknya siswa yang berusia di bawah 13 tahun ada 6 orang.</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="mt-1 inline-block h-5 w-5 rounded border border-sky-300"></span>
                  <span>Banyaknya siswa yang <u>bukan</u> berusia di bawah 13 tahun ada 24 orang.</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="mt-1 inline-block h-5 w-5 rounded border border-sky-300"></span>
                  <span>Banyaknya siswa yang <u>bukan</u> berusia di bawah 13 tahun ada 25 orang.</span>
                </li>
              </ul>

              <!-- Pembahasan -->
              <div class="bg-sky-50 border-l-4 border-sky-400 p-4 rounded-r-xl text-lg mb-4">
                <div class="font-semibold text-sky-800 mb-2">Pembahasan:</div>
                <p class="text-sky-900/90">Jumlah seluruh siswa kelas \( VIII \) = 30 orang.</p>
                <p class="text-sky-900/90">Kemungkinan siswa berusia di bawah 13 tahun = \( \frac{1}{5} \).</p>
                <p class="text-sky-900/90">Banyaknya siswa berusia di bawah 13 tahun adalah \( \frac{1}{5} \times 30 = 6
                  \) orang.</p>
                <p class="text-sky-900/90">Kemungkinan siswa yang <u>bukan</u> berusia di bawah 13 tahun adalah \(
                  \frac{5}{5} - \frac{1}{5} = \frac{4}{5} \).</p>
                <p class="text-sky-900/90">Banyaknya siswa yang <u>bukan</u> berusia di bawah 13 tahun adalah \(
                  \frac{4}{5} \times 30 = 24 \) orang.</p>
                <p class="text-sky-900/90 mt-2">Jawaban yang benar adalah sebagai berikut.</p>
              </div>

              <!-- Daftar Pernyataan dengan Jawaban -->
              <ul class="space-y-2 text-lg">
                <li class="flex items-start gap-3">
                  <span
                    class="mt-1 inline-flex h-5 w-5 items-center justify-center rounded border border-sky-300"></span>
                  <span>Banyaknya siswa yang berusia di bawah 13 tahun ada 5 orang.</span>
                </li>
                <li class="flex items-start gap-3">
                  <span
                    class="mt-1 inline-flex h-5 w-5 items-center justify-center rounded border border-sky-300 bg-green-100">✓</span>
                  <span>Banyaknya siswa yang berusia di bawah 13 tahun ada 6 orang.</span>
                </li>
                <li class="flex items-start gap-3">
                  <span
                    class="mt-1 inline-flex h-5 w-5 items-center justify-center rounded border border-sky-300 bg-green-100">✓</span>
                  <span>Banyaknya siswa yang <u>bukan</u> berusia di bawah 13 tahun ada 24 orang.</span>
                </li>
                <li class="flex items-start gap-3">
                  <span
                    class="mt-1 inline-flex h-5 w-5 items-center justify-center rounded border border-sky-300"></span>
                  <span>Banyaknya siswa yang <u>bukan</u> berusia di bawah 13 tahun ada 25 orang.</span>
                </li>
              </ul>
            </div>
          </article>

          <article class="bg-white mt-8 rounded-2xl border border-sky-100 shadow-md overflow-hidden">
            <div class="p-6">
              <h3 class="text-xl font-bold text-sky-800 mb-3">
                2. Dari 3.000 lampu pijar, diambil 100 lampu pijar secara acak dan diuji.
              </h3>
              <p class="text-sky-900/90 leading-relaxed text-lg mb-4">
                Ternyata dari 100 lampu pijar yang diuji ada 5 lampu pijar yang rusak. Banyaknya lampu pijar yang rusak
                dari seluruh lampu pijar yang ada adalah sekitar….
              </p>

              <!-- Pilihan Jawaban -->
              <ul class="space-y-2 text-lg mb-6">
                <li>A. 60</li>
                <li class="font-semibold text-sky-700">B. 150 <span class="text-green-600 font-bold">✓ Jawaban
                    Benar</span></li>
                <li>C. 300</li>
                <li>D. 600</li>
              </ul>

              <!-- Pembahasan -->
              <div class="bg-sky-50 border-l-4 border-sky-400 p-4 rounded-r-xl text-lg">
                <div class="font-semibold text-sky-800 mb-2">Pembahasan:</div>
                <p class="text-sky-900/90">Jumlah seluruh lampu pijar = 3.000 lampu.</p>
                <p class="text-sky-900/90">Dari 100 lampu pijar yang diuji, 5 lampu rusak.</p>

                <p class="text-sky-900/90 mt-3">
                  \( P(A) = \dfrac{n(A)}{n(S)} \times \text{jumlah total} \)
                </p>

                <p class="text-sky-900/90 mt-2">
                  \( = \dfrac{5}{100} \times 3000 = 150 \)
                </p>

                <p class="text-sky-900/90 mt-3">
                  Jadi, banyaknya lampu pijar yang rusak dari keseluruhan lampu pijar yang ada adalah sekitar <span
                    class="font-semibold">150 lampu pijar</span>.
                </p>

                <p class="mt-4 font-bold text-sky-700">Jawaban: B</p>
              </div>
            </div>
          </article>


        </section>


        {{-- C. Contoh Soal Penalaran --}}
        <section>
          <h2
            class="text-2xl md:text-3xl font-bold text-sky-700 flex items-center gap-3 border-b-4 border-sky-400 pb-2 mb-6">
            <span class="bg-sky-100 text-sky-600 px-3 py-1 rounded-lg">C</span>
            Contoh Soal Penalaran
          </h2>
          <article class="bg-white rounded-2xl border border-sky-100 shadow-md overflow-hidden">
            <div class="p-6">
              <h3 class="text-xl font-bold text-sky-800 mb-4">Contoh Soal Penalaran</h3>

              <p class="text-sky-900/90 leading-relaxed text-lg">
                Nazril berencana untuk memesan 24 edisi majalah. Dia membaca iklan dua majalah berikut. Satuan mata uang
                yang digunakan adalah rupiah.
              </p>

              <!-- Dua Iklan Majalah -->
              <div class="mt-6 grid gap-6 md:grid-cols-2">
                <div class="rounded-2xl border-2 border-green-400 p-6">
                  <h4 class="text-center text-lg font-semibold">Majalah</h4>
                  <h5 class="text-center text-xl font-bold">Gaya Hidup Remaja</h5>
                  <div class="mt-4 space-y-1 text-center">
                    <p>24 Edisi</p>
                    <p class="font-medium">Empat Edisi Pertama GRATIS</p>
                    <p>Sisanya bayar @Rp. 15.000,00</p>
                  </div>
                </div>

                <div class="rounded-2xl border-2 border-green-400 p-6">
                  <h4 class="text-center text-lg font-semibold">Majalah</h4>
                  <h5 class="text-center text-xl font-bold">Seputar Remaja</h5>
                  <div class="mt-4 space-y-1 text-center">
                    <p>24 Edisi</p>
                    <p class="font-medium">Enam Edisi Pertama GRATIS</p>
                    <p>Sisanya bayar @Rp. 15.500,00</p>
                  </div>
                </div>
              </div>

              <p class="text-sky-900/90 leading-relaxed text-lg mt-6">
                Berdasarkan kedua iklan di atas, akhirnya Nazril memutuskan untuk berlangganan <span
                  class="font-semibold">Majalah Gaya Hidup Remaja</span> karena dia melihat harga per edisinya murah
                dibandingkan <span class="font-semibold">Majalah Seputar Remaja</span>. Setujukah kamu dengan pilihan
                Nazril? Berikan alasannya.
              </p>

              <!-- Pembahasan -->
              <div class="bg-sky-50 border-l-4 border-sky-400 p-4 rounded-r-xl text-lg mt-6">
                <div class="font-semibold text-sky-800 mb-2">Pembahasan :</div>
                <p class="text-sky-900/90">Kita hitung uang yang harus dibayarkan oleh Nazril untuk masing-masing
                  majalah
                  berdasarkan informasi dari iklan tersebut.</p>

                <ul class="list-disc list-inside space-y-2 mt-3 text-sky-900/90">
                  <li>
                    <span class="font-medium">Jika Nazril berlangganan Majalah Gaya Hidup Remaja</span>, uang yang harus
                    dibayarkan adalah sebagai berikut.<br>
                    Dari 24 edisi, 4 edisi pertama gratis sehingga Nazril hanya membayar 20 edisi selanjutnya (24 − 4 =
                    20).<br>
                    Jadi, uang yang harus dibayarkan adalah 20 × Rp. 15.000,00 = <span class="font-semibold">Rp.
                      300.000,00</span>.
                  </li>

                  <li>
                    <span class="font-medium">Jika Nazril berlangganan Majalah Seputar Remaja</span>, uang yang harus
                    dibayarkan adalah sebagai berikut.<br>
                    Dari 24 edisi, 6 edisi pertama gratis sehingga Nazril hanya membayar 18 edisi selanjutnya (24 − 6 =
                    18).<br>
                    Jadi, uang yang harus dibayarkan adalah 18 × Rp. 15.500,00 = <span class="font-semibold">Rp.
                      279.000,00</span>.
                  </li>

                  <li>
                    <span class="font-medium">Selisih</span> uang yang harus dibayarkan adalah 300.000 − 279.000 = <span
                      class="font-semibold">21.000</span>.<br>
                    Berdasarkan perhitungan di atas, <span class="font-semibold">tidak setuju</span> dengan pilihan
                    Nazril
                    karena seharusnya dia memilih berlangganan <span class="font-semibold">Majalah Seputar Remaja</span>
                    yang lebih murah <span class="font-semibold">Rp. 21.000</span> dibandingkan Majalah Gaya Hidup
                    Remaja.
                  </li>
                </ul>
              </div>
            </div>
          </article>
        </section>



        {{-- D. LATIHAN SOAL --}}


        {{-- CTA --}}
        <section class="text-center py-10">
          <div class="bg-gradient-to-br from-sky-400 to-sky-600 rounded-2xl p-8 text-white shadow-2xl shadow-sky-200">
            <h2 class="text-3xl font-bold mb-3">Sudah paham?</h2>
            <p class="mb-6 max-w-2xl mx-auto">Yuk coba soal berikut.</p>
            <a href="{{ route('materi-data-dan-ketidakpastian-soal') }}"
              class="inline-block bg-white text-sky-700 font-bold text-lg py-3 px-8 rounded-xl shadow-md hover:bg-sky-50 transform hover:-translate-y-0.5 transition-all duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-sky-600">
              Coba Soal
            </a>
          </div>
        </section>

      </main>
    </div>
  </div>
</x-layouts.app>