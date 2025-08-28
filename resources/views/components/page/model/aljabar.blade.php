<x-layouts.app>
  <x-slot:title>
    Model Lesh Aljabar | E‑numerasi
  </x-slot:title>

  <div class="min-h-screen bg-sky-50">
    <div class="container mx-auto px-6 py-10">

      <!-- SOAL 1 -->
      <section class="overflow-hidden rounded-2xl border border-sky-100 bg-white shadow-sm" x-data="{ open: true }">
        <header class="flex items-center justify-between gap-4 bg-sky-100/70 px-6 py-4">
          <h2 class="text-2xl font-extrabold text-sky-700 md:text-3xl">Soal 1</h2>
          <button @click="open=!open"
            class="inline-flex items-center gap-2 font-semibold text-sky-700 hover:text-sky-900">
            <span x-text="open ? 'Tutup' : 'Buka'"></span>
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" />
            </svg>
          </button>
        </header>

        <div class="space-y-6 p-6" x-show="open" x-collapse>
          <!-- Tantangan -->
          <div class="rounded-xl border border-sky-100 bg-sky-50/60 p-5">
            <h3 class="text-xl font-bold text-sky-800">Tantangan</h3>
            <p class="text-sky-900/90">
              Seorang arsitek perlu menghitung total biaya untuk membeli ubin. Jika satu ubin harganya Rp 5.000, berapa
              total biaya yang dibutuhkan untuk membuat taman dengan pola ke-10? Untuk membantunya, tentukan dulu berapa
              jumlah ubin pada pola ke-10, lalu tuliskan rumus suku ke-<em>n</em> dari pola ini.
            </p>
          </div>

          <!-- 1. Situasi Nyata -->
          <article class="rounded-xl border border-sky-100 p-5">
            <h4 class="text-lg font-semibold text-sky-700">1. Situasi Nyata (Real-life situations) 🌍</h4>
            <div class="mt-4 space-y-4 rounded-xl border border-sky-200 bg-white p-6 shadow-md">
              <h3 class="text-lg font-bold text-sky-700">Deskripsi</h3>
              <p class="text-sky-900/90">
                Seorang arsitek sedang merancang tata letak ubin berbentuk persegi di sebuah taman.
                Untuk menarik perhatian, ia menata ubin dalam bentuk pola persegi yang terus membesar.
              </p>

              <ul class="list-disc space-y-2 pl-6 text-sky-900/90">
                <li><span class="font-semibold">Pola 1:</span> Terdiri dari 1 ubin.</li>
                <li><span class="font-semibold">Pola 2:</span> Terdiri dari 4 ubin.</li>
                <li><span class="font-semibold">Pola 3:</span> Terdiri dari 9 ubin.</li>
              </ul>

              <div class="mt-4 rounded-lg border border-sky-100 bg-sky-50 p-4">
                <p class="text-sky-800">
                  <span class="font-bold">Tantangan:</span> Jika pola ini dilanjutkan, berapa banyak ubin yang
                  dibutuhkan untuk <span class="font-semibold">pola ke-10</span>?<br />
                  Tuliskan juga <span class="font-semibold">rumus</span> untuk menentukan jumlah ubin pada pola
                  ke-<em>n</em>.
                </p>
              </div>
            </div>

          </article>

          <!-- 2. Representasi Visual -->
          <article class="rounded-xl border border-sky-100 p-5">
            <h4 class="text-lg font-semibold text-sky-700">2. Representasi Visual (Visual Representation) 🖼️</h4>
            <div class="mt-4 space-y-4 rounded-xl border border-emerald-200 bg-white p-6 shadow-md">
              <p class="text-emerald-900/90">
                Pada tahap ini, siswa bisa menggambarkan pola yang dijelaskan dalam situasi nyata.
              </p>

              <ul class="list-disc space-y-2 pl-6 text-emerald-900/90">
                <li><span class="font-semibold">Pola 1:</span> 1 titik <span class="italic">(1 × 1)</span></li>
                <li><span class="font-semibold">Pola 2:</span> 4 titik <span class="italic">(2 × 2)</span></li>
                <li><span class="font-semibold">Pola 3:</span> 9 titik <span class="italic">(3 × 3)</span></li>
                <li><span class="font-semibold">Pola ...</span> dan seterusnya hingga pola ke-10.</li>
              </ul>

              <div class="mt-4 flex flex-wrap items-center gap-4">
                <img src="{{ asset('images/leshaljabar.png') }}" alt="Ilustrasi pola 1 (1x1)"
                  class="rounded border border-gray-200" />

              </div>
            </div>

          </article>

          <!-- 3. Manipulatif -->
          <article class="rounded-xl border border-sky-100 p-5">
            <h4 class="text-lg font-semibold text-sky-700">3. Representasi Manipulatif (Manipulative Models) 🧱</h4>
            <div class="mt-4 space-y-4 rounded-xl border border-purple-200 bg-white p-6 shadow-md">
              <p class="">
                Siswa dapat menggunakan benda konkret untuk memvisualisasikan dan memanipulasi pola.
              </p>

              <ul class="list-disc space-y-3 pl-6">
                <li>
                  <span class="font-bold">Aktivitas:</span> Gunakan
                  <span class="font-semibold">lego, balok, kancing, atau kertas origami</span>
                  untuk menyusun kotak dengan pola
                  <span class="italic">1 × 1, 2 × 2, 3 × 3, hingga 10 × 10</span>.
                </li>
                <li>
                  <span class="font-bold">Kegunaan:</span> Representasi ini membantu siswa untuk merasakan dan melihat
                  langsung
                  hubungan antara nomor pola dan jumlah ubin, yang pada akhirnya mengarah pada penemuan rumus.
                </li>
              </ul>
            </div>

          </article>

          <!-- 4. Verbal -->
          <article class="rounded-xl border border-sky-100 p-5">
            <h4 class="text-lg font-semibold text-sky-700">4. Representasi Verbal (Verbal Representation) 🗣️</h4>
            <div class="mt-4 space-y-4 rounded-xl border border-purple-200 bg-white p-6 shadow-md">
              <p class="">
                Siswa menjelaskan pola yang mereka temukan dengan kata-kata. </p>

              <ul class="list-disc space-y-3 pl-6">
                <li>
                  <span class="font-bold">Penjelasan:</span> Gunakan
                  <span class="font-semibold">Pola ini adalah pola bilangan persegi. Banyaknya ubin pada setiap pola
                    sama dengan nomor urutan pola itu sendiri yang dipangkatkan dua atau dikuadratkan.
                </li>

              </ul>
            </div>

          </article>

          <!-- 5. Simbolik -->
          <article class="space-y-2 rounded-xl border border-sky-100 p-5">
            <h4 class="text-lg font-semibold text-sky-700">5. Representasi Simbolik (Symbolic Representation) 🔢</h4>
            <div class="mt-4 space-y-4 rounded-xl border border-purple-200 bg-white p-6 shadow-md">
              <p class="text-sky-900/90">Pola angka: \(1,\,4,\,9,\,16,\,25,\,36,\,49,\,64,\,81,\,100\)</p>
              <p class="text-sky-900/90">Rumus suku ke-\(n\): \(\displaystyle a_n=n^2\)</p>
              <p class="text-sky-900/90">Pola ke-10: \(a_{10}=10^2=100\)</p>
              <p>Dengan struktur ini, siswa dipandu melalui setiap representasi. Mereka memulai dengan masalah dari
                dunia
                nyata, lalu memvisualisasikannya, memanipulasinya dengan objek, menjelaskannya dengan kata-kata, dan
                akhirnya merumuskannya dalam bentuk simbol matematika. Ini adalah proses translasi yang utuh dan sesuai
                dengan Model Lesh.</p>
            </div>
          </article>
        </div>
      </section>

      <!-- SOAL 2 -->
      <section class="mt-8 overflow-hidden rounded-2xl border border-emerald-100 bg-white shadow-sm"
        x-data="{ open: true }">
        <header class="flex items-center justify-between gap-4 bg-emerald-100/70 px-6 py-4">
          <h2 class="text-2xl font-extrabold text-emerald-700 md:text-3xl">Soal 2</h2>
          <button @click="open=!open"
            class="inline-flex items-center gap-2 font-semibold text-emerald-700 hover:text-emerald-900">
            <span x-text="open ? 'Tutup' : 'Buka'"></span>
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" />
            </svg>
          </button>
        </header>

        <div class="space-y-6 p-6" x-show="open" x-collapse>
          <!-- 1. Dunia Nyata -->
          <article class="rounded-xl border border-emerald-100 p-5">
            <h4 class="text-lg font-semibold text-emerald-700">1. Situasi Dunia Nyata (Real-life situations) 🌍</h4>
            <div class="mt-4 space-y-4 rounded-xl border border-emerald-200 bg-white p-6 shadow-md">
              <h3 class="text-lg font-bold text-emerald-700">Deskripsi</h3>
              <p class="text-emerald-900/90">
                "Seorang petugas kebersihan sedang menumpuk botol minum bekas di gudang.
              </p>

              <ul class="list-disc space-y-2 pl-6 text-emerald-900/90">
                <li>Tumpukan pertama (suku ke-1) berisi <span class="font-semibold">1 botol</span>.</li>
                <li>Tumpukan kedua (suku ke-2) berisi <span class="font-semibold">3 botol</span>.</li>
                <li>Tumpukan ketiga (suku ke-3) berisi <span class="font-semibold">5 botol</span>.</li>
                <li>dst.</li>
              </ul>

              <div class="mt-4 rounded-lg border border-emerald-100 bg-emerald-50 p-4">
                <p class="text-emerald-800">
                  Jika pola tumpukan ini berlanjut, berapa banyak botol pada
                  <span class="font-semibold">tumpukan ke-15</span>?<br />
                  Berapa total botol yang sudah dikumpulkan dari tumpukan pertama hingga tumpukan ke-15?
                </p>
              </div>
            </div>

          </article>

          <!-- 2. Verbal -->
          <article class="rounded-xl border border-emerald-100 p-5">
            <h4 class="text-lg font-semibold text-emerald-700">2. Representasi Verbal 🗣️</h4>
            <p class="mt-4 text-emerald-900/90">Pola ini adalah barisan aritmetika, di mana setiap suku berikutnya
              selalu
              bertambah 2 dari suku sebelumnya. Angka pertama (suku awal) adalah 1 dan selisihnya (beda) adalah 2.</p>
          </article>

          <!-- 3. Simbolik -->
          <article class="space-y-2 rounded-xl border border-emerald-100 p-5">
            <h4 class="text-lg font-semibold text-emerald-700">3. Representasi Simbolik 🔢</h4>
            <p>Siswa menunjukkan rumus yang digunakan dan perhitungannya secara matematis.</p>
            <div class="space-y-6 rounded-xl border border-indigo-200 bg-white p-6 shadow-md">
              <!-- a. Mencari Suku ke-15 -->
              <div>
                <h4 class="mb-2 text-lg font-bold text-indigo-700">a. Mencari Suku ke-15 \((U_{15})\)</h4>
                <ul class="list-disc space-y-2 pl-6 text-indigo-900/90">
                  <li>Rumus suku ke-\(n\) barisan aritmetika: <br>
                    \[
                    U_n = a + (n-1)b
                    \]
                  </li>
                  <li><span class="font-semibold">Substitusi nilai:</span> \(a=1\) (suku pertama), \(b=2\) (beda),
                    \(n=15\)</li>
                  <li>Perhitungan: <br>
                    \[
                    U_{15} = 1 + (15-1)\cdot 2
                    \]
                    \[
                    U_{15} = 1 + 14 \cdot 2
                    \]
                    \[
                    U_{15} = 1 + 28
                    \]
                    \[
                    U_{15} = 29
                    \]
                  </li>
                  <li><span class="font-bold">Kesimpulan:</span> Suku ke-15 adalah <span
                      class="font-semibold">29</span>.</li>
                </ul>
              </div>

              <!-- b. Mencari Jumlah 15 Suku Pertama -->
              <div>
                <h4 class="mb-2 text-lg font-bold text-indigo-700">b. Mencari Jumlah 15 Suku Pertama \((S_{15})\)</h4>
                <ul class="list-disc space-y-2 pl-6 text-indigo-900/90">
                  <li>Rumus jumlah \(n\) suku pertama: <br>
                    \[
                    S_n = \frac{n}{2}(a + U_n)
                    \]
                  </li>
                  <li><span class="font-semibold">Substitusi nilai:</span> \(n=15\), \(a=1\), \(U_{15}=29\)</li>
                  <li>Perhitungan: <br>
                    \[
                    S_{15} = \frac{15}{2}(1+29)
                    \]
                    \[
                    S_{15} = \frac{15}{2}(30)
                    \]
                    \[
                    S_{15} = 15 \times 15 = 225
                    \]
                  </li>
                  <li><span class="font-bold">Kesimpulan:</span> Jumla

          </article>

          <!-- 4. Visual -->
          <article class="rounded-xl border border-emerald-100 p-5">
            <h4 class="text-lg font-semibold text-emerald-700">4. Representasi Visual 🖼️</h4>
            <div class="mt-4 space-y-4 rounded-xl border border-amber-200 bg-white p-6 shadow-md">
              <p class="text-amber-900/90">
                Siswa menggambarkan pola titik atau objek yang mewakili setiap suku.
              </p>
              <div class="space-y-3 rounded-xl border border-sky-200 bg-white p-6 shadow-md">
                <ul class="list-disc space-y-2 pl-6 text-sky-900/90">
                  <li><span class="font-semibold">Suku ke-1:</span> •</li>
                  <li><span class="font-semibold">Suku ke-2:</span> •••</li>
                  <li><span class="font-semibold">Suku ke-3:</span> •••••</li>
                  <li><span class="font-semibold">Suku ke-4:</span> •••••••</li>
                </ul>
              </div>

              <img src="{{ asset('images/lesh2.png') }}" alt="">
            </div>

          </article>

          <!-- 5. Manipulatif -->
          <article class="rounded-xl border border-emerald-100 p-5">
            <h4 class="text-lg font-semibold text-emerald-700">5. Representasi Manipulatif 🧱</h4>
            <div class="mt-4 space-y-4 rounded-xl border border-pink-200 bg-white p-6 shadow-md">
              <p class="text-pink-900/90">
                Siswa menggunakan objek fisik untuk mereplikasi dan memahami pola tersebut.
              </p>

              <ul class="list-disc space-y-3 pl-6 text-pink-900/90">
                <li>
                  Gunakan benda-benda konkret seperti
                  <span class="font-semibold">kancing, manik-manik, atau balok</span>
                  untuk menyusun pola: 1, 3, 5, 7, ...
                </li>
                <li>
                  Gunakan <span class="font-semibold">kertas berpetak atau papan magnetik</span>
                  untuk menggambar dan memvisualisasikan penambahan 2 pada setiap suku.
                </li>
                <li>
                  Mintalah siswa untuk menghitung langsung jumlah balok hingga suku ke-15
                  untuk mendapatkan pemahaman konseptual sebelum menggunakan rumus.
                </li>
              </ul>
            </div>

          </article>
        </div>
      </section>

      <!-- SOAL 3 -->
      <section class="mt-8 overflow-hidden rounded-2xl border border-amber-100 bg-white shadow-sm"
        x-data="{ open: true }">
        <header class="flex items-center justify-between gap-4 bg-amber-100/70 px-6 py-4">
          <h2 class="text-2xl font-extrabold text-amber-700 md:text-3xl">Soal 3</h2>
          <button @click="open=!open"
            class="inline-flex items-center gap-2 font-semibold text-amber-700 hover:text-amber-900">
            <span x-text="open ? 'Tutup' : 'Buka'"></span>
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" />
            </svg>
          </button>
        </header>

        <div class="space-y-6 p-6" x-show="open" x-collapse>
          <!-- 1. Dunia Nyata -->
          <article class="rounded-xl border border-amber-100 p-5">
            <h4 class="text-lg font-semibold text-amber-700">1. Situasi Dunia Nyata 🌍</h4>
            <div class="mt-4 space-y-4 rounded-xl border border-amber-200 bg-white p-6 shadow-md">
              <h3 class="text-lg font-bold text-amber-700">Deskripsi</h3>
              <p class="text-amber-900/90">
                "Seorang siswa sedang membuat rangkaian segitiga berdempetan menggunakan batang korek api.
              </p>

              <ul class="list-disc space-y-2 pl-6 text-amber-900/90">
                <li>
                  <span class="font-semibold">Pola 1</span> (satu segitiga): Membutuhkan
                  <span class="font-bold">3 batang korek api</span>.
                </li>
                <li>
                  <span class="font-semibold">Pola 2</span> (dua segitiga berdempetan): Membutuhkan
                  <span class="font-bold">5 batang korek api</span>.
                </li>
                <li>
                  <span class="font-semibold">Pola 3</span> (tiga segitiga berdempetan): Membutuhkan
                  <span class="font-bold">7 batang korek api</span>.
                </li>
              </ul>

              <div class="mt-4 rounded-lg border border-amber-100 bg-amber-50 p-4">
                <p class="text-amber-800">
                  Jika pola ini terus berlanjut, berapa banyak batang korek api yang dibutuhkan untuk
                  <span class="font-semibold">membuat pola ke-10</span>?
                </p>
              </div>
            </div>

          </article>

          <!-- 2. Visual -->
          <article class="rounded-xl border border-amber-100 p-5">
            <h4 class="text-lg font-semibold text-amber-700">2. Representasi Visual 🖼️</h4>
            <div class="mt-5 space-y-4 rounded-xl border border-orange-200 bg-white p-6 shadow-md">
              <p class="text-orange-900/90">
                Gambarkan pola batang korek api yang berdempetan, menunjukkan bagaimana jumlah batang bertambah.
              </p>

              <ul class="list-disc space-y-2 pl-6 text-orange-900/90">
                <li><span class="font-semibold">Pola 1:</span> (3 korek api)</li>
                <li><span class="font-semibold">Pola 2:</span> (5 korek api)</li>
                <li><span class="font-semibold">Pola 3:</span> (7 korek api)</li>
              </ul>

              <div class="mt-4 flex gap-4">
                <img src="{{ asset('images/lesh3.png') }}" alt="Ilustrasi pola 1 segitiga korek api"
                  class="rounded border border-gray-300" />
              </div>
            </div>

          </article>

          <!-- 3. Manipulatif -->
          <article class="rounded-xl border border-amber-100 p-5">
            <h4 class="text-lg font-semibold text-amber-700">3. Representasi Manipulatif 🧱</h4>
            <div class="mt-4 space-y-4 rounded-xl border border-red-200 bg-white p-6 shadow-md">
              <p class="text-red-900/90">
                Siswa menggunakan objek fisik untuk mereplikasi dan memahami pola tersebut.
              </p>

              <ul class="list-disc space-y-3 pl-6 text-red-900/90">
                <li>
                  Gunakan <span class="font-semibold">batang korek api asli</span> atau lidi untuk menyusun pola
                  segitiga berdempetan.
                </li>
                <li>
                  Minta siswa untuk menyusun satu per satu, sambil menghitung penambahan batang korek api di setiap
                  langkah.
                </li>
                <li>
                  Arahkan siswa untuk menyadari bahwa setelah segitiga pertama (3 batang), setiap penambahan segitiga
                  berikutnya hanya butuh <span class="font-semibold">2 batang</span>.
                </li>
              </ul>
            </div>

          </article>

          <!-- 4. Verbal -->
          <article class="rounded-xl border border-amber-100 p-5">
            <h4 class="text-lg font-semibold text-amber-700">4. Representasi Verbal 🗣️</h4>
            <p class="mt-4 text-amber-900/90">Pola ini adalah barisan aritmetika. Pola pertama dimulai dengan 3 batang
              korek
              api, dan setiap penambahan pola berikutnya hanya membutuhkan tambahan 2 batang korek api. Jadi, suku
              pertama (a) adalah 3, dan bedanya (b) adalah 2."</p>
          </article>

          <!-- 5. Simbolik -->
          <article class="space-y-2 rounded-xl border border-amber-100 p-5">
            <h4 class="text-lg font-semibold text-amber-700">5. Representasi Simbolik 🔢</h4>
            <div class="mt-4 space-y-4 rounded-xl border border-indigo-200 bg-white p-6 shadow-md">
              <p class="text-indigo-900/90">
                Siswa menuangkannya dalam simbol.
              </p>

              <ul class="list-disc space-y-3 pl-6 text-indigo-900/90">
                <li>
                  <span class="font-semibold">Pola Angka:</span> 3, 5, 7, ...
                </li>
                <li>
                  <span class="font-semibold">Rumus Suku ke-n \((U_n)\):</span> <br>
                  \[
                  U_n = a + (n-1)b
                  \]
                  \[
                  U_n = 3 + (n-1)\cdot 2
                  \]
                  \[
                  U_n = 3 + 2n - 2
                  \]
                  \[
                  U_n = 2n + 1
                  \]
                </li>
                <li>
                  <span class="font-semibold">Menghitung Pola ke-10:</span> <br>
                  Gunakan rumus yang sudah ditemukan. <br>
                  \[
                  U_n = 2n + 1
                  \]
                  \[
                  U_{10} = 2(10) + 1
                  \]
                  \[
                  U_{10} = 20 + 1
                  \]
                  \[
                  U_{10} = 21
                  \]
                </li>
              </ul>
            </div>

          </article>
        </div>
      </section>

      <!-- SOAL 4 -->
      <section class="mt-4 overflow-hidden rounded-2xl border border-fuchsia-100 bg-white shadow-sm"
        x-data="{ open: true }">
        <header class="flex items-center justify-between gap-4 bg-fuchsia-100/70 px-6 py-4">
          <h2 class="text-2xl font-extrabold text-fuchsia-700 md:text-3xl">Soal 4</h2>
          <button @click="open=!open"
            class="inline-flex items-center gap-2 font-semibold text-fuchsia-700 hover:text-fuchsia-900">
            <span x-text="open ? 'Tutup' : 'Buka'"></span>
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" />
            </svg>
          </button>
        </header>

        <div class="space-y-6 p-6" x-show="open" x-collapse>
          <!-- Tantangan -->
          <div class="rounded-xl border border-fuchsia-100 bg-fuchsia-50/60 p-5">
            <h3 class="text-xl font-bold text-fuchsia-800">Tantangan</h3>
            <p class="text-fuchsia-900/90">Sekelompok bakteri bereproduksi dengan cara membelah diri. Awalnya ada 2
              bakteri. Setelah 1 jam, setiap bakteri membelah menjadi dua, sehingga jumlahnya menjadi 4. Setelah 2 jam,
              jumlahnya menjadi 8.
              Jika pembelahan ini terus terjadi, berapa banyak bakteri yang akan ada setelah 5 jam? Tuliskan juga rumus
              suku ke-n untuk masalah ini.

            </p>
          </div>

          <!-- 1. Situasi Nyata -->
          <article class="rounded-xl border border-fuchsia-100 p-5">
            <h4 class="text-lg font-semibold text-fuchsia-700">1. Situasi Nyata 🌍</h4>
            <div class="mt-4 space-y-4 rounded-xl border border-fuchsia-200 bg-white p-6 shadow-md">
              <p class="text-fuchsia-900/90">
                Seorang ilmuwan sedang mengamati populasi bakteri di sebuah tabung reaksi.
                Setiap jam, jumlah bakteri di dalam tabung berlipat ganda.
              </p>

              <ul class="list-disc space-y-2 pl-6 text-fuchsia-900/90">
                <li><span class="font-semibold">Waktu 0:</span> Ada <span class="font-bold">2 bakteri</span>.</li>
                <li><span class="font-semibold">Setelah 1 jam:</span> Jumlah bakteri menjadi <span
                    class="font-bold">4</span>.</li>
                <li><span class="font-semibold">Setelah 2 jam:</span> Jumlah bakteri menjadi <span
                    class="font-bold">8</span>.</li>
              </ul>

              <div class="mt-4 rounded-lg border border-fuchsia-100 bg-fuchsia-50 p-4">
                <p class="text-fuchsia-800">
                  <span class="font-bold">Tantangan:</span> Jika pola ini berlanjut, berapa banyak bakteri
                  yang akan ada setelah <span class="font-semibold">5 jam</span>?
                </p>
              </div>
            </div>
          </article>

          <!-- 2. Visual -->
          <article class="rounded-xl border border-fuchsia-100 p-5">
            <h4 class="text-lg font-semibold text-fuchsia-700">2. Representasi Visual 🖼️</h4>
            <div class="mt-4 space-y-4 rounded-xl border border-fuchsia-200 bg-white p-6 shadow-md">
              <p class="text-fuchsia-900/90">
                Siswa dapat menggambar visualisasi dari proses pembelahan.
              </p>

              <ul class="list-disc space-y-2 pl-6 text-fuchsia-900/90">
                <li><span class="font-semibold">Jam ke-0:</span> Dua buah bakteri</li>
                <li><span class="font-semibold">Jam ke-1:</span> Empat buah bakteri</li>
                <li><span class="font-semibold">Jam ke-2:</span> Delapan buah bakteri</li>
                <li><span class="font-semibold">Dan seterusnya...</span></li>
              </ul>
            </div>

          </article>

          <!-- 3. Manipulatif -->
          <article class="rounded-xl border border-fuchsia-100 p-5">
            <h4 class="text-lg font-semibold text-fuchsia-700">3. Representasi Manipulatif 🧱</h4>
            <div class="mt-4 space-y-4 rounded-xl border border-green-200 bg-white p-6 shadow-md">
              <p class="text-green-900/90">
                Siswa menggunakan objek fisik untuk mereplikasi dan memahami pola tersebut.
              </p>

              <ul class="list-disc space-y-3 pl-6 text-green-900/90">
                <li>
                  <span class="font-bold">Aktivitas:</span> Gunakan
                  <span class="font-semibold">koin, kacang-kacangan, atau balok kecil</span>
                  untuk memodelkan proses pembelahan.
                </li>
                <li>
                  <span class="font-bold">Kegunaan:</span> Siswa dapat mengambil 2 koin, lalu menukarnya dengan 4 koin,
                  lalu 8 koin, dan seterusnya. Ini membantu mereka merasakan langsung proses penggandaan
                  (<span class="italic">perkalian dengan 2</span>) yang terjadi.
                </li>
              </ul>
            </div>
          </article>

          <!-- 4. Verbal -->
          <article class="rounded-xl border border-fuchsia-100 p-5">
            <h4 class="text-lg font-semibold text-fuchsia-700">4. Representasi Verbal 🗣️</h4>
            <div class="mt-4 space-y-4 rounded-xl border border-blue-200 bg-white p-6 shadow-md">
              <p class="text-blue-900/90">
                Siswa menjelaskan pola yang ditemukan dengan kata-kata.
              </p>

              <ul class="list-disc pl-6 text-blue-900/90">
                <li>
                  <span class="font-bold">Penjelasan:</span>
                  "Pola ini adalah <span class="font-semibold">barisan geometri</span>.
                  Jumlah bakteri pada setiap jam berikutnya adalah hasil dari perkalian jumlah bakteri
                  di jam sebelumnya dengan angka <span class="font-bold">2</span>.
                  Angka pertama (a) adalah <span class="font-bold">2</span> dan rasio (r) adalah <span
                    class="font-bold">2</span>."
                </li>
              </ul>
            </div>
          </article>

          <!-- 5. Simbolik -->
          <article class="space-y-2 rounded-xl border border-fuchsia-100 p-5">
            <h4 class="text-lg font-semibold text-fuchsia-700">5. Representasi Simbolik 🔢</h4>
            <div class="mt-4 space-y-4 rounded-xl border border-purple-200 bg-white p-6 shadow-md">
              <p class="text-purple-900/90">
                Siswa menerjemahkan pola ke dalam notasi dan rumus matematika.
              </p>

              <ul class="list-disc space-y-3 pl-6 text-purple-900/90">
                <li>
                  <span class="font-semibold">Pola Angka:</span> 2, 4, 8, 16, 32, ...
                </li>
                <li>
                  <span class="font-semibold">Rumus Suku ke-n \((U_n)\):</span>
                  <ul class="list-disc space-y-1 pl-6">
                    <li>Rumus umum deret geometri: \[ U_n = a \cdot r^{\,n-1} \]</li>
                    <li>Substitusi nilai: \(a = 2\) (suku pertama), \(r = 2\) (rasio), dan \(n =\) (jumlah jam + 1)</li>
                    <li>Rumus: \[ U_n = 2 \cdot 2^{\,n-1} = 2^n \]</li>
                  </ul>
                </li>
                <li>
                  <span class="font-semibold">Menghitung Jumlah Bakteri Setelah 5 Jam (Suku ke-6):</span>
                  <ul class="list-disc space-y-1 pl-6">
                    <li>Mengapa suku ke-6? Karena kita mulai dari jam ke-0 (suku ke-1) dan menghitung hingga jam ke-5
                      (suku ke-6).</li>
                    <li>Substitusikan \(n = 6\) ke dalam rumus.</li>
                    <li>\[ U_6 = 2^6 = 64 \]</li>
                  </ul>
                </li>
                <li>
                  <span class="font-bold">Kesimpulan:</span> Jumlah bakteri yang akan ada setelah 5 jam adalah
                  <span class="font-semibold">64 bakteri</span>.
                </li>
              </ul>

              <p class="mt-4 text-purple-800">
                Dengan contoh ini, siswa dapat melihat bagaimana sebuah masalah nyata dapat dipecahkan
                dengan berpindah dari satu representasi ke representasi lain, yang merupakan esensi dari
                <span class="font-bold">Model Translasi Lesh</span>.
              </p>
            </div>

          </article>
        </div>
      </section>

    </div>

  </div>
  </div>
</x-layouts.app>
