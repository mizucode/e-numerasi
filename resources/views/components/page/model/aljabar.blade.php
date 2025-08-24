<x-layouts.app>
  <x-slot:title>
    Model Lesh Aljabar | E‑numerasi
  </x-slot:title>

  <div class="bg-sky-50 min-h-screen">
    <div class="container mx-auto px-6 py-10">

      <!-- SOAL 1 -->
      <section class="rounded-2xl bg-white shadow-sm border border-sky-100 overflow-hidden" x-data="{open:true}">
        <header class="flex items-center justify-between gap-4 bg-sky-100/70 px-6 py-4">
          <h2 class="text-2xl md:text-3xl font-extrabold text-sky-700">Soal 1 — Pola Persegi</h2>
          <button @click="open=!open"
            class="inline-flex items-center gap-2 text-sky-700 hover:text-sky-900 font-semibold">
            <span x-text="open ? 'Tutup' : 'Buka'"></span>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" />
            </svg>
          </button>
        </header>

        <div class="p-6 space-y-6" x-show="open" x-collapse>
          <!-- Tantangan -->
          <div class="rounded-xl border border-sky-100 p-5 bg-sky-50/60">
            <h3 class="text-xl font-bold text-sky-800">Tantangan</h3>
            <p class="text-sky-900/90">
              Seorang arsitek perlu menghitung total biaya untuk membeli ubin. Jika satu ubin harganya Rp 5.000, berapa
              total biaya yang dibutuhkan untuk membuat taman dengan pola ke-10? Untuk membantunya, tentukan dulu berapa
              jumlah ubin pada pola ke-10, lalu tuliskan rumus suku ke-<em>n</em> dari pola ini.
            </p>
          </div>

          <!-- 1. Situasi Nyata -->
          <article class="rounded-xl border border-sky-100 p-5">
            <h4 class="font-semibold text-sky-700 text-lg">1. Situasi Nyata (Real-life situations) 🌍</h4>
            <p class="text-sky-900/90">
              Seorang arsitek sedang merancang tata letak ubin berbentuk persegi di sebuah taman. Pola 1: 1 ubin; Pola
              2: 4 ubin; Pola 3: 9 ubin. Jika pola dilanjutkan, berapa banyak ubin pada pola ke-10? Tuliskan juga rumus
              jumlah ubin pada pola ke-<em>n</em>.
            </p>
          </article>

          <!-- 2. Representasi Visual -->
          <article class="rounded-xl border border-sky-100 p-5">
            <h4 class="font-semibold text-sky-700 text-lg">2. Representasi Visual (Visual Representation) 🖼️</h4>
            <p class="text-sky-900/90">Pola 1: 1 titik •, Pola 2: 4 titik •• ••, Pola 3: 9 titik, … hingga pola ke-10.
            </p>
          </article>

          <!-- 3. Manipulatif -->
          <article class="rounded-xl border border-sky-100 p-5">
            <h4 class="font-semibold text-sky-700 text-lg">3. Representasi Manipulatif (Manipulative Models) 🧱</h4>
            <p class="text-sky-900/90">Gunakan lego/kertas origami untuk menyusun kotak berukuran
              \(1\times1,\,2\times2,\,3\times3,\dots\).</p>
          </article>

          <!-- 4. Verbal -->
          <article class="rounded-xl border border-sky-100 p-5">
            <h4 class="font-semibold text-sky-700 text-lg">4. Representasi Verbal (Verbal Representation) 🗣️</h4>
            <p class="text-sky-900/90">“Pola ini adalah pola bilangan persegi; banyak ubin sama dengan kuadrat nomor
              polanya.”</p>
          </article>

          <!-- 5. Simbolik -->
          <article class="rounded-xl border border-sky-100 p-5 space-y-2">
            <h4 class="font-semibold text-sky-700 text-lg">5. Representasi Simbolik (Symbolic Representation) 🔢</h4>
            <p class="text-sky-900/90">Pola angka: \(1,\,4,\,9,\,16,\,25,\,36,\,49,\,64,\,81,\,100\)</p>
            <p class="text-sky-900/90">Rumus suku ke-\(n\): \(\displaystyle a_n=n^2\)</p>
            <p class="text-sky-900/90">Pola ke-10: \(a_{10}=10^2=100\)</p>
            <p class="text-sky-900/90">Biaya total: \(100\times 5{,}000=\) Rp 500.000</p>
          </article>
        </div>
      </section>

      <!-- SOAL 2 -->
      <section class="rounded-2xl bg-white shadow-sm border border-emerald-100 overflow-hidden" x-data="{open:true}">
        <header class="flex items-center justify-between gap-4 bg-emerald-100/70 px-6 py-4">
          <h2 class="text-2xl md:text-3xl font-extrabold text-emerald-700">Soal 2 — Barisan Aritmetika (1,3,5,…)</h2>
          <button @click="open=!open"
            class="inline-flex items-center gap-2 text-emerald-700 hover:text-emerald-900 font-semibold">
            <span x-text="open ? 'Tutup' : 'Buka'"></span>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" />
            </svg>
          </button>
        </header>

        <div class="p-6 space-y-6" x-show="open" x-collapse>
          <!-- 1. Dunia Nyata -->
          <article class="rounded-xl border border-emerald-100 p-5">
            <h4 class="font-semibold text-emerald-700 text-lg">1. Situasi Dunia Nyata (Real-life situations) 🌍</h4>
            <p class="text-emerald-900/90">
              Petugas menumpuk botol: suku ke-1 = 1 botol, suku ke-2 = 3, suku ke-3 = 5, dst. Tanyakan botol pada suku
              ke-15 dan jumlah total botol dari suku ke-1 s.d. ke-15.
            </p>
          </article>

          <!-- 2. Verbal -->
          <article class="rounded-xl border border-emerald-100 p-5">
            <h4 class="font-semibold text-emerald-700 text-lg">2. Representasi Verbal 🗣️</h4>
            <p class="text-emerald-900/90">Barisan aritmetika dengan \(a=1\) dan \(d=2\).</p>
          </article>

          <!-- 3. Simbolik -->
          <article class="rounded-xl border border-emerald-100 p-5 space-y-2">
            <h4 class="font-semibold text-emerald-700 text-lg">3. Representasi Simbolik 🔢</h4>
            <p class="text-emerald-900/90">Rumus suku ke-\(n\): \(\displaystyle a_n=a+(n-1)d\)</p>
            <p class="text-emerald-900/90">Dengan \(a=1, d=2\), suku ke-15: \(\;a_{15}=1+(15-1)\cdot2=29\)</p>
            <p class="text-emerald-900/90">Rumus jumlah \(n\) suku pertama: \(\displaystyle
              S_n=\frac{n}{2}\bigl(2a+(n-1)d\bigr)\)</p>
            <p class="text-emerald-900/90">Jumlah 15 suku: \(\;S_{15}=\frac{15}{2}(2\cdot1+14\cdot2)=225\)</p>
          </article>

          <!-- 4. Visual -->
          <article class="rounded-xl border border-emerald-100 p-5">
            <h4 class="font-semibold text-emerald-700 text-lg">4. Representasi Visual 🖼️</h4>
            <p class="text-emerald-900/90">Suku ke-1: • &nbsp; | &nbsp; Suku ke-2: ••• &nbsp; | &nbsp; Suku ke-3: •••••
              &nbsp; | &nbsp; Suku ke-4: •••••••</p>
          </article>

          <!-- 5. Manipulatif -->
          <article class="rounded-xl border border-emerald-100 p-5">
            <h4 class="font-semibold text-emerald-700 text-lg">5. Representasi Manipulatif 🧱</h4>
            <p class="text-emerald-900/90">Gunakan kancing/manik-manik untuk menyusun pola \(1,3,5,7,\dots\). Hitung
              langsung hingga suku ke-15 sebelum memakai rumus.</p>
          </article>
        </div>
      </section>

      <!-- SOAL 3 -->
      <section class="rounded-2xl bg-white shadow-sm border border-amber-100 overflow-hidden" x-data="{open:true}">
        <header class="flex items-center justify-between gap-4 bg-amber-100/70 px-6 py-4">
          <h2 class="text-2xl md:text-3xl font-extrabold text-amber-700">Soal 3 — Korek Api Segitiga Berdempetan</h2>
          <button @click="open=!open"
            class="inline-flex items-center gap-2 text-amber-700 hover:text-amber-900 font-semibold">
            <span x-text="open ? 'Tutup' : 'Buka'"></span>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" />
            </svg>
          </button>
        </header>

        <div class="p-6 space-y-6" x-show="open" x-collapse>
          <!-- 1. Dunia Nyata -->
          <article class="rounded-xl border border-amber-100 p-5">
            <h4 class="font-semibold text-amber-700 text-lg">1. Situasi Dunia Nyata 🌍</h4>
            <p class="text-amber-900/90">Pola 1: 3 korek; Pola 2: 5 korek; Pola 3: 7 korek. Hitung kebutuhan korek untuk
              pola ke-10.</p>
          </article>

          <!-- 2. Visual -->
          <article class="rounded-xl border border-amber-100 p-5">
            <h4 class="font-semibold text-amber-700 text-lg">2. Representasi Visual 🖼️</h4>
            <p class="text-amber-900/90">Gambarkan segitiga berdempetan; setelah segitiga pertama (3 batang), tiap
              segitiga tambahan menambah 2 batang.</p>
          </article>

          <!-- 3. Manipulatif -->
          <article class="rounded-xl border border-amber-100 p-5">
            <h4 class="font-semibold text-amber-700 text-lg">3. Representasi Manipulatif 🧱</h4>
            <p class="text-amber-900/90">Gunakan korek/lidi untuk menyusun pola dan amati pertambahan 2 batang tiap
              langkah.</p>
          </article>

          <!-- 4. Verbal -->
          <article class="rounded-xl border border-amber-100 p-5">
            <h4 class="font-semibold text-amber-700 text-lg">4. Representasi Verbal 🗣️</h4>
            <p class="text-amber-900/90">Barisan aritmetika dengan \(a=3\) dan \(d=2\).</p>
          </article>

          <!-- 5. Simbolik -->
          <article class="rounded-xl border border-amber-100 p-5 space-y-2">
            <h4 class="font-semibold text-amber-700 text-lg">5. Representasi Simbolik 🔢</h4>
            <p class="text-amber-900/90">Pola angka: \(3,\,5,\,7,\,\dots\)</p>
            <p class="text-amber-900/90">Rumus suku ke-\(n\): \(\displaystyle a_n=a+(n-1)d=3+(n-1)\cdot2\)</p>
            <p class="text-amber-900/90">Pola ke-10: \(\;a_{10}=3+9\cdot2=21\)</p>
          </article>
        </div>
      </section>

      <!-- SOAL 4 -->
      <section class="rounded-2xl bg-white shadow-sm border border-fuchsia-100 overflow-hidden" x-data="{open:true}">
        <header class="flex items-center justify-between gap-4 bg-fuchsia-100/70 px-6 py-4">
          <h2 class="text-2xl md:text-3xl font-extrabold text-fuchsia-700">Soal 4 — Pembelahan Bakteri (Geometri)</h2>
          <button @click="open=!open"
            class="inline-flex items-center gap-2 text-fuchsia-700 hover:text-fuchsia-900 font-semibold">
            <span x-text="open ? 'Tutup' : 'Buka'"></span>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" />
            </svg>
          </button>
        </header>

        <div class="p-6 space-y-6" x-show="open" x-collapse>
          <!-- Tantangan -->
          <div class="rounded-xl border border-fuchsia-100 p-5 bg-fuchsia-50/60">
            <h3 class="text-xl font-bold text-fuchsia-800">Tantangan</h3>
            <p class="text-fuchsia-900/90">
              Awal 2 bakteri, tiap jam berlipat ganda. Berapa banyak bakteri setelah 5 jam? Tuliskan juga rumus suku
              ke-<em>n</em>.
            </p>
          </div>

          <!-- 1. Situasi Nyata -->
          <article class="rounded-xl border border-fuchsia-100 p-5">
            <h4 class="font-semibold text-fuchsia-700 text-lg">1. Situasi Nyata 🌍</h4>
            <p class="text-fuchsia-900/90">Waktu 0: 2; jam ke-1: 4; jam ke-2: 8; dan seterusnya.</p>
          </article>

          <!-- 2. Visual -->
          <article class="rounded-xl border border-fuchsia-100 p-5">
            <h4 class="font-semibold text-fuchsia-700 text-lg">2. Representasi Visual 🖼️</h4>
            <p class="text-fuchsia-900/90">Gambar sketsa jumlah bakteri di jam ke-0,1,2,…</p>
          </article>

          <!-- 3. Manipulatif -->
          <article class="rounded-xl border border-fuchsia-100 p-5">
            <h4 class="font-semibold text-fuchsia-700 text-lg">3. Representasi Manipulatif 🧱</h4>
            <p class="text-fuchsia-900/90">Gunakan koin/kacang untuk memodelkan penggandaan setiap jam.</p>
          </article>

          <!-- 4. Verbal -->
          <article class="rounded-xl border border-fuchsia-100 p-5">
            <h4 class="font-semibold text-fuchsia-700 text-lg">4. Representasi Verbal 🗣️</h4>
            <p class="text-fuchsia-900/90">Barisan geometri dengan \(a=2\) dan rasio \(r=2\).</p>
          </article>

          <!-- 5. Simbolik -->
          <article class="rounded-xl border border-fuchsia-100 p-5 space-y-2">
            <h4 class="font-semibold text-fuchsia-700 text-lg">5. Representasi Simbolik 🔢</h4>
            <p class="text-fuchsia-900/90">Pola angka: \(2,\,4,\,8,\,16,\,32,\dots\)</p>
            <p class="text-fuchsia-900/90">Rumus suku ke-\(n\) (mulai dari jam ke-0 sebagai suku ke-1): \(\displaystyle
              a_n=2\cdot 2^{\,n-1}=2^{\,n}\)</p>
            <p class="text-fuchsia-900/90">Setelah 5 jam \((n=6)\): \(a_6=2\cdot 2^{5}=64\) bakteri.</p>
          </article>
        </div>
      </section>

    </div>

  </div>
  </div>
</x-layouts.app>