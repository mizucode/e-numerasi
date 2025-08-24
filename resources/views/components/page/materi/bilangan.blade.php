<x-layouts.app>
  <x-slot:title>
    Bilangan
  </x-slot:title>

  <div class="min-h-screen bg-sky-50">
    <div class="container mx-auto px-6 py-10">

      {{-- HERO / HEADER --}}
      <header class="mb-14 text-center">
        <h1 class="text-4xl font-extrabold tracking-tight text-sky-600 drop-shadow-sm md:text-5xl">
          🚀 Petualangan Seru di Dunia Bilangan!
        </h1>
        <p class="mx-auto mt-4 max-w-3xl text-lg leading-relaxed text-sky-900/80">
          Yuk, jelajah bareng semua jenis bilangan — dari bulat, pecahan, sampai pangkat & akar —
          dengan cara yang asyik, simpel, dan penuh contoh.
        </p>
      </header>

      <main class="space-y-16">



        {{-- A. BILANGAN BULAT --}}
        <section>
          <h2 class="mb-6 flex items-center gap-3 border-b-4 border-sky-400 pb-2 text-3xl font-bold text-sky-700">
            <span class="rounded-lg bg-sky-100 p-2 text-sky-600 shadow-sm">A</span>
            Bilangan Bulat
          </h2>

          <p class="mb-6 text-lg leading-relaxed text-sky-900">
            Himpunan bilangan bulat terdiri atas himpunan bilangan negatif, nol, dan himpunan bilangan positif.
          </p>

          {{-- Definisi / Keluarga Bilangan Bulat --}}
          <div class="mb-8 rounded-xl bg-sky-600 p-4 text-center text-white shadow-lg">
            <p class="mb-1 text-sm font-semibold opacity-90">KELUARGA BILANGAN BULAT</p>
            <code class="font-mono text-xl tracking-wider">β = { ..., -3, -2, -1, 0, 1, 2, 3, ... }</code>
          </div>

          {{-- Aturan Operasi Hitung --}}
          <div x-data="{ open: true }"
            class="rounded-2xl border border-sky-200 bg-white p-6 shadow-md transition hover:shadow-lg">
            <!-- Header -->
            <div class="flex items-center justify-between cursor-pointer" @click="open = !open">
              <h3 class="flex items-center gap-3 text-3xl font-bold text-sky-700">
                Operasi hitung bilangan bulat
              </h3>
              <svg :class="{'rotate-180': open}"
                class="w-6 h-6 text-sky-600 transform transition-transform duration-300" fill="none"
                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </div>

            <!-- Content -->
            <div x-show="open" x-transition class="mt-4 text-sky-900 leading-relaxed space-y-2">
              <p>
                Operasi hitung bilangan pada dasarnya dibedakan menjadi empat jenis operasi hitung dasar. Keempat
                operasi
                hitung itu adalah penjumlahan, pengurangan, pembagian, dan perkalian. Saat menyelesaikan perhitungan
                yang
                menggunakan banyak operasi hitung sekaligus, kita perlu mengetahui urutan operasi hitung yang
                didahulukan.
                Secara umum berikut urutan operasi hitung matematika.
              </p>
              <ul class="space-y-3">
                <li class="flex items-center gap-3 p-2 rounded-lg bg-sky-50 hover:bg-sky-100 transition">
                  <span
                    class="flex h-6 w-6 items-center justify-center rounded-full bg-sky-200 text-sky-700 text-sm font-bold">1</span>
                  <span class="text-sky-800 font-medium">tanda kurung</span>
                </li>
                <li class="flex items-center gap-3 p-2 rounded-lg bg-sky-50 hover:bg-sky-100 transition">
                  <span
                    class="flex h-6 w-6 items-center justify-center rounded-full bg-sky-200 text-sky-700 text-sm font-bold">2</span>
                  <span class="text-sky-800 font-medium">perkalian dan pembagian</span>
                </li>
                <li class="flex items-center gap-3 p-2 rounded-lg bg-sky-50 hover:bg-sky-100 transition">
                  <span
                    class="flex h-6 w-6 items-center justify-center rounded-full bg-sky-200 text-sky-700 text-sm font-bold">3</span>
                  <span class="text-sky-800 font-medium">penjumlahan dan pengurangan</span>
                </li>
              </ul>

            </div>
          </div>


          {{-- Sifat-sifat Operasi --}}
          <div class="mt-8 rounded-xl border border-sky-100 bg-white p-6 shadow-md">
            <h3 class="mb-4 flex items-center gap-3 text-3xl font-bold text-sky-700">Sifat-Sifat Operasi Hitung Bilangan
              Bulat</h3>

            {{-- Penjumlahan --}}
            <div class="rounded-2xl mt-8 border border-amber-200 bg-amber-50 p-6 shadow-lg">

              <h4 class="mb-8 text-center text-3xl font-bold text-amber-700">
                Sifat operasi penjumlahan pada bilangan bulat! ✨
              </h4>

              <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

                <div x-data="{ flipped: false }"
                  class="relative h-52 w-full [perspective:1000px] transition-transform duration-300 hover:-translate-y-2 hover:scale-105">
                  <div @click="flipped = !flipped"
                    class="absolute h-full w-full cursor-pointer transition-transform duration-700 [transform-style:preserve-3d]"
                    :class="{ '[transform:rotateY(180deg)]': flipped }">
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl bg-blue-500 p-4 text-center shadow-xl [backface-visibility:hidden]">
                      <h5 class="text-2xl font-black text-white">Sifat Tertutup</h5>
                    </div>
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl border-4 border-blue-500 bg-white p-4 text-center shadow-xl [backface-visibility:hidden] [transform:rotateY(180deg)]">
                      <p class="text-base font-medium text-slate-700">
                        Jika dua bilangan bulat dijumlahkan, hasilnya tetap bilangan bulat.
                      </p>
                    </div>
                  </div>
                </div>

                <div x-data="{ flipped: false }"
                  class="relative h-52 w-full [perspective:1000px] transition-transform duration-300 hover:-translate-y-2 hover:scale-105">
                  <div @click="flipped = !flipped"
                    class="absolute h-full w-full cursor-pointer transition-transform duration-700 [transform-style:preserve-3d]"
                    :class="{ '[transform:rotateY(180deg)]': flipped }">
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl bg-emerald-500 p-4 text-center shadow-xl [backface-visibility:hidden]">
                      <h5 class="text-2xl font-black text-white">Sifat Komutatif</h5>
                    </div>
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl border-4 border-emerald-500 bg-white p-4 text-center shadow-xl [backface-visibility:hidden] [transform:rotateY(180deg)]">
                      <span
                        class="block rounded-lg bg-emerald-50 p-3 font-mono text-lg text-emerald-800">\(a+b=b+a\)</span>
                    </div>
                  </div>
                </div>

                <div x-data="{ flipped: false }"
                  class="relative h-52 w-full [perspective:1000px] transition-transform duration-300 hover:-translate-y-2 hover:scale-105">
                  <div @click="flipped = !flipped"
                    class="absolute h-full w-full cursor-pointer transition-transform duration-700 [transform-style:preserve-3d]"
                    :class="{ '[transform:rotateY(180deg)]': flipped }">
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl bg-amber-500 p-4 text-center shadow-xl [backface-visibility:hidden]">
                      <h5 class="text-2xl font-black text-white">Sifat Asosiatif</h5>
                    </div>
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl border-4 border-amber-500 bg-white p-4 text-center shadow-xl [backface-visibility:hidden] [transform:rotateY(180deg)]">
                      <span
                        class="block rounded-lg bg-amber-50 p-3 font-mono text-lg text-amber-800">\((a+b)+c=a+(b+c)\)</span>
                    </div>
                  </div>
                </div>

                <div x-data="{ flipped: false }"
                  class="relative h-52 w-full [perspective:1000px] transition-transform duration-300 hover:-translate-y-2 hover:scale-105">
                  <div @click="flipped = !flipped"
                    class="absolute h-full w-full cursor-pointer transition-transform duration-700 [transform-style:preserve-3d]"
                    :class="{ '[transform:rotateY(180deg)]': flipped }">
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl bg-rose-500 p-4 text-center shadow-xl [backface-visibility:hidden]">
                      <h5 class="text-2xl font-black text-white">Unsur Identitas</h5>
                    </div>
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl border-4 border-rose-500 bg-white p-4 text-center shadow-xl [backface-visibility:hidden] [transform:rotateY(180deg)]">
                      <div>
                        <p class="mb-2 font-medium text-slate-700">Penjumlahan dengan nol tidak mengubah nilai.</p>
                        <span class="block rounded-lg bg-rose-50 p-3 font-mono text-lg text-rose-800">\(a+0=a\)</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div x-data="{ flipped: false }"
                  class="relative h-52 w-full [perspective:1000px] transition-transform duration-300 hover:-translate-y-2 hover:scale-105">
                  <div @click="flipped = !flipped"
                    class="absolute h-full w-full cursor-pointer transition-transform duration-700 [transform-style:preserve-3d]"
                    :class="{ '[transform:rotateY(180deg)]': flipped }">
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl bg-violet-500 p-4 text-center shadow-xl [backface-visibility:hidden]">
                      <h5 class="text-2xl font-black text-white">Sifat Invers</h5>
                    </div>
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl border-4 border-violet-500 bg-white p-4 text-center shadow-xl [backface-visibility:hidden] [transform:rotateY(180deg)]">
                      <span
                        class="block rounded-lg bg-violet-50 p-3 font-mono text-lg text-violet-800">\(a+(-a)=0\)</span>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- Pengurangan -->
            <div x-data="{ open: true }"
              class="rounded-2xl mt-8 border border-sky-200 bg-white p-6 shadow-md transition hover:shadow-lg">
              <div class="flex items-center justify-between cursor-pointer" @click="open = !open">
                <h4 class="w-full mb-8 text-center text-3xl font-bold text-amber-700">
                  Sifat operasi pengurangan pada bilangan bulat! ✨
                </h4>
                <svg :class="{'rotate-180': open}"
                  class="w-6 h-6 text-sky-600 transform transition-transform duration-300" fill="none"
                  stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
              </div>

              <div x-show="open" x-transition class="mt-4 text-sky-900 leading-relaxed space-y-2">

                <div class="mt-6 rounded-r-lg border-l-4 border-rose-400 bg-rose-50 p-4">
                  <p class="text-rose-900"><strong class="font-bold">Info Penting! </strong>Operasi pengurangan pada
                    bilangan bulat memenuhi sifat tertutup. <strong class="font-bold">Artinya </strong>pengurangan dua
                    bilangan
                    bulat akan menghasilkan bilangan bulat juga. </p>
                </div>

              </div>
            </div>


            {{-- Perkalian --}}
            <div class="rounded-2xl mt-8 border border-amber-200 bg-amber-50 p-6 shadow-lg">
              <h4 class="mb-8 text-center text-3xl font-bold text-amber-700">
                Sifat operasi perkalian pada bilangan bulat ✨
              </h4>

              <div class="grid grid-cols-1 gap-8 md:grid-cols-3">

                <div x-data="{ flipped: false }"
                  class="relative h-52 w-full [perspective:1000px] transition-transform duration-300 hover:-translate-y-2 hover:scale-105">
                  <div @click="flipped = !flipped"
                    class="absolute h-full w-full cursor-pointer transition-transform duration-700 [transform-style:preserve-3d]"
                    :class="{ '[transform:rotateY(180deg)]': flipped }">
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl bg-blue-500 p-4 text-center shadow-xl [backface-visibility:hidden]">
                      <h5 class="text-2xl font-black text-white">Tertutup</h5>
                    </div>
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl border-4 border-blue-500 bg-white p-4 text-center shadow-xl [backface-visibility:hidden] [transform:rotateY(180deg)]">
                      <p class="text-base font-medium text-slate-700">
                        Jika dua bilangan bulat dijumlahkan, hasilnya merupakan bilangan bulat juga.
                      </p>
                    </div>
                  </div>
                </div>

                <div x-data="{ flipped: false }"
                  class="relative h-52 w-full [perspective:1000px] transition-transform duration-300 hover:-translate-y-2 hover:scale-105">
                  <div @click="flipped = !flipped"
                    class="absolute h-full w-full cursor-pointer transition-transform duration-700 [transform-style:preserve-3d]"
                    :class="{ '[transform:rotateY(180deg)]': flipped }">
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl bg-emerald-500 p-4 text-center shadow-xl [backface-visibility:hidden]">
                      <h5 class="text-2xl font-black text-white">Komutatif</h5>
                    </div>
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl border-4 border-emerald-500 bg-white p-4 text-center shadow-xl [backface-visibility:hidden] [transform:rotateY(180deg)]">
                      <span class="block rounded-lg bg-emerald-50 p-3 font-mono text-lg text-emerald-800">\(a \times b =
                        b \times a\)</span>
                    </div>
                  </div>
                </div>

                <div x-data="{ flipped: false }"
                  class="relative h-52 w-full [perspective:1000px] transition-transform duration-300 hover:-translate-y-2 hover:scale-105">
                  <div @click="flipped = !flipped"
                    class="absolute h-full w-full cursor-pointer transition-transform duration-700 [transform-style:preserve-3d]"
                    :class="{ '[transform:rotateY(180deg)]': flipped }">
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl bg-amber-500 p-4 text-center shadow-xl [backface-visibility:hidden]">
                      <h5 class="text-2xl font-black text-white">Asosiatif</h5>
                    </div>
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl border-4 border-amber-500 bg-white p-4 text-center shadow-xl [backface-visibility:hidden] [transform:rotateY(180deg)]">
                      <span class="block rounded-lg bg-amber-50 p-3 font-mono text-lg text-amber-800">\((a \times b)
                        \times c = a \times (b \times c)\)</span>
                    </div>
                  </div>
                </div>

                <div x-data="{ flipped: false }"
                  class="relative h-52 w-full [perspective:1000px] transition-transform duration-300 hover:-translate-y-2 hover:scale-105">
                  <div @click="flipped = !flipped"
                    class="absolute h-full w-full cursor-pointer transition-transform duration-700 [transform-style:preserve-3d]"
                    :class="{ '[transform:rotateY(180deg)]': flipped }">
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl bg-rose-500 p-4 text-center shadow-xl [backface-visibility:hidden]">
                      <h5 class="text-2xl font-black text-white">Identitas</h5>
                    </div>
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl border-4 border-rose-500 bg-white p-4 text-center shadow-xl [backface-visibility:hidden] [transform:rotateY(180deg)]">
                      <span class="block rounded-lg bg-rose-50 p-3 font-mono text-lg text-rose-800">\(a \times 1 = 1
                        \times a = a\)</span>
                    </div>
                  </div>
                </div>

                <div x-data="{ flipped: false }"
                  class="relative h-52 w-full [perspective:1000px] transition-transform duration-300 hover:-translate-y-2 hover:scale-105">
                  <div @click="flipped = !flipped"
                    class="absolute h-full w-full cursor-pointer transition-transform duration-700 [transform-style:preserve-3d]"
                    :class="{ '[transform:rotateY(180deg)]': flipped }">
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl bg-violet-500 p-4 text-center shadow-xl [backface-visibility:hidden]">
                      <h5 class="text-2xl font-black text-white">Invers (lawan)</h5>
                    </div>
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl border-4 border-violet-500 bg-white p-4 text-center shadow-xl [backface-visibility:hidden] [transform:rotateY(180deg)]">
                      <span class="block rounded-lg bg-violet-50 p-3 font-mono text-xs text-violet-800">\(a \times
                        \frac{1}{a} = \frac{1}{a} \times a = 1 \quad (a \neq 0)\)</span>
                    </div>
                  </div>
                </div>

                <div x-data="{ flipped: false }"
                  class="relative h-52 w-full [perspective:1000px] transition-transform duration-300 hover:-translate-y-2 hover:scale-105">
                  <div @click="flipped = !flipped"
                    class="absolute h-full w-full cursor-pointer transition-transform duration-700 [transform-style:preserve-3d]"
                    :class="{ '[transform:rotateY(180deg)]': flipped }">
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl bg-cyan-500 p-4 text-center shadow-xl [backface-visibility:hidden]">
                      <h5 class="text-2xl font-black text-white">Distributif</h5>
                    </div>
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl border-4 border-cyan-500 bg-white p-4 text-center shadow-xl [backface-visibility:hidden] [transform:rotateY(180deg)]">
                      <div class="space-y-1 font-mono text-xs font-medium text-slate-700">
                        <p>\((a+b)\times c = (a\times c) + (b\times c)\)</p>
                        <p>\(c\times (a+b) = (c\times a) + (c\times b)\)</p>
                        <p>\((a-b)\times c = (a\times c) - (b\times c)\)</p>
                        <p>\(c\times (a-b) = (c\times a) - (c\times b)\)</p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            {{-- Catatan Pengurangan --}}

          </div>
        </section>

        {{-- B. BILANGAN PECAHAN --}}
        <section>
          <h2 class="mb-6 flex items-center gap-3 border-b-4 border-sky-400 pb-2 text-3xl font-bold text-sky-700">
            <span class="rounded-lg bg-sky-100 p-2 text-sky-600 shadow-sm">B</span>
            Bilangan Pecahan
          </h2>

          <p class="mb-6 text-lg leading-relaxed text-sky-900">
            Pecahan digunakan untuk menyatakan bagian dari keseluruhan. Pecahan ditulis sebagai berikut.



          </p>

          <div
            class=" mb-8 rounded-xl border-2 border-green-500 bg-white px-6 py-3 text-lg text-gray-900 font-semibold shadow-md">
            <div class="flex justify-center items-center gap-2 mt-4 text-2xl">
              <span> \(\dfrac{a}{b}\)</span>
              <span> dengan</span>
              <span> \(b \neq 0\)</span>
            </div>

            <div>
              <p>
                Keterangan:
              </p>
              <div>
                <p class="flex gap-2 items-center">\( a = \) Bilangan</p>
                <p class="flex gap-2 items-center">\( b = \) Penyebut</p>
              </div>

            </div>
          </div>


          <div class="grid gap-8 md:grid-cols-2">

            <div class="rounded-2xl border border-sky-200 bg-gradient-to-br from-white to-sky-50 p-6 shadow-lg">
              <!-- Judul -->
              <h3 class="mb-4 flex items-center gap-3 text-3xl font-extrabold text-sky-800">
                Pecahan Senilai
              </h3>

              <!-- Deskripsi -->
              <p class="mb-6 text-sky-900/80 text-lg leading-relaxed">
                Pecahan senilai dapat diperoleh dengan mengalikan atau membagi pembilang
                dan penyebut dengan bilangan yang sama kecuali 1.
              </p>

              <!-- Box Contoh -->
              <div class="rounded-xl bg-white p-6 border border-sky-100 shadow-inner">
                <p class="font-semibold text-sky-700 mb-4 text-lg">
                  Contoh:
                </p>
                <div class="bg-sky-50 rounded-lg px-4 py-3 text-sky-900 text-base mb-6">
                  Tentukan dua buah pecahan yang senilai dengan
                  \(\tfrac{20}{40}\)
                </div>

                <!-- Penyelesaian -->
                <div class="space-y-4 text-lg text-sky-800">
                  <p><i>Penyelesaian:</i></p>

                  <p>\[ 
                    \frac{20}{40} = \frac{20 \times 2}{40 \times 2} = \frac{40}{80}
                    \]</p>

                  <p>\[
                    \frac{20}{40} = \frac{20 : 2}{40 : 2} = \frac{10}{20}
                    \]</p>

                  <div class="bg-sky-100 rounded-lg px-4 py-3 font-semibold">
                    \[
                    \text{Jadi, } \frac{20}{40} = \frac{40}{80} = \frac{10}{20}
                    \]
                  </div>
                </div>
              </div>
            </div>


            <div class="rounded-xl border border-sky-100 bg-white p-6 shadow-md">
              <h3 class="mb-4 flex items-center gap-3 text-2xl font-bold text-sky-700">🧩 Menyederhanakan
                Pecahan</h3>
              <p class="mb-4 text-sky-900/90">Biar angkanya nggak kegedean, sederhanakan pecahan dengan
                membagi pembilang dan penyebut oleh FPB (Faktor Persekutuan Terbesar).</p>
              <div class="rounded-lg bg-emerald-50 p-4">
                <p class="font-semibold text-emerald-800">Contoh: Sederhanakan <code class="bg-white px-1">12/18</code>
                </p>
                <p class="mt-2 text-sm text-emerald-900/80">FPB dari 12 dan 18 adalah
                  <strong>6</strong>.
                </p>
                <p class="mt-2">👉 Bagi dengan 6: <code class="bg-white px-1 font-mono">(12 ÷ 6) /
                    (18 ÷ 6) = 2/3</code></p>
                <p class="mt-3 font-semibold text-emerald-800">Jadi, bentuk paling simpel dari <code
                    class="bg-emerald-100 px-1">12/18</code> adalah <code class="bg-emerald-100 px-1">2/3</code>.
                  Keren!</p>
              </div>
            </div>


          </div>

          {{-- Operasi Pecahan --}}
          <div class="mt-8 rounded-xl border border-sky-100 bg-white p-6 shadow-md">
            <h3 class="mb-6 text-center text-2xl font-bold text-sky-700">🧠 Cara Berhitung dengan Pecahan
            </h3>
            <div class="grid gap-8 lg:grid-cols-2">
              {{-- Penjumlahan & Pengurangan --}}
              <div class="rounded-lg border border-sky-100 bg-sky-50 p-6">
                <h4 class="mb-4 text-center text-xl font-bold text-sky-800">Penjumlahan (+) &
                  Pengurangan (−)</h4>
                <div class="mb-4 rounded-r-lg border-l-4 border-rose-500 bg-rose-100 p-3">
                  <p class="font-semibold text-rose-800">Kunci Utama: Penyebutnya HARUS sama!</p>
                  <p class="text-sm text-rose-900/80">Kalau beda, samakan dulu pakai KPK.</p>
                </div>
                <p class="mt-2 font-semibold text-sky-900">Contoh: <code class="bg-white px-1">1/4 +
                    2/3</code></p>
                <p class="text-sm text-sky-900/80">KPK dari 4 dan 3 adalah 12.</p>
                <code class="mt-2 block rounded border border-sky-100 bg-white p-2 text-center font-mono">3/12
                  + 8/12 = 11/12</code>
              </div>

              {{-- Perkalian & Pembagian --}}
              <div class="rounded-lg border border-sky-100 bg-sky-50 p-6">
                <h4 class="mb-4 text-center text-xl font-bold text-sky-800">Perkalian (×) & Pembagian
                  (÷)</h4>
                <div class="mb-4 rounded-r-lg border-l-4 border-emerald-500 bg-emerald-100 p-3">
                  <p class="font-semibold text-emerald-800">Lebih gampang!</p>
                  <p class="text-sm text-emerald-900/80">Nggak perlu samakan penyebut.</p>
                </div>
                <p class="mt-4 font-semibold text-sky-900">Perkalian: atas × atas, bawah × bawah.</p>
                <code class="mt-1 block rounded border border-sky-100 bg-white p-2 text-center font-mono">2/3
                  × 4/5 = 8/15</code>

                <p class="mt-4 font-semibold text-sky-900">Pembagian: pecahan kedua dibalik (balikan),
                  lalu dikali.</p>
                <code class="mt-1 block rounded border border-sky-100 bg-white p-2 text-center font-mono">2/3
                  ÷ 4/5 = 2/3 × 5/4 = 10/12 = 5/6</code>
              </div>
            </div>
          </div>
        </section>

        {{-- C. PANGKAT & AKAR --}}
        <section>
          <h2 class="mb-6 flex items-center gap-3 border-b-4 border-sky-400 pb-2 text-3xl font-bold text-sky-700">
            <span class="rounded-lg bg-sky-100 p-2 text-sky-600 shadow-sm">C</span>
            Pangkat & Akar
          </h2>

          <p class="mb-8 text-lg leading-relaxed text-sky-900">
            Ini adalah "kekuatan super" dalam matematika yang bisa bikin angka jadi besar (pangkat) atau
            kembali ke bentuk dasarnya (akar).
          </p>

          <div class="grid gap-8 md:grid-cols-2">
            {{-- Bilangan Berpangkat --}}
            <div class="rounded-xl border border-sky-100 bg-white p-6 shadow-md">
              <h3 class="mb-4 text-2xl font-bold text-violet-700">Pangkat: Perkalian Berulang</h3>
              <p class="mb-4 text-sky-900/90">Daripada nulis <code class="bg-sky-100 px-1">5 × 5 × 5 ×
                  5</code>, mending disingkat jadi <code class="bg-sky-100 px-1">5⁴</code>. Lebih
                simpel!</p>
              <div class="rounded-lg bg-violet-50 p-4 text-center font-mono">
                <span class="text-5xl font-bold text-violet-700">a</span><sup
                  class="text-3xl font-bold text-violet-500">n</sup>
                <p class="mt-2 text-sm text-violet-800">Artinya: <span class="font-bold">a</span>
                  dikalikan dengan dirinya sendiri sebanyak <span class="font-bold">n</span> kali.
                </p>
              </div>
            </div>

            {{-- Bentuk Akar --}}
            <div class="rounded-xl border border-sky-100 bg-white p-6 shadow-md">
              <h3 class="mb-4 text-2xl font-bold text-emerald-700">Akar: Kebalikan dari Pangkat</h3>
              <p class="mb-4 text-sky-900/90">Kalau pangkat bikin angka jadi besar, akar itu mencari
                "asal" dari angka tersebut.</p>
              <div class="rounded-lg bg-emerald-50 p-4">
                <p class="mb-2">🔹 <strong>Akar Pangkat Dua (√)</strong>: Mencari angka yang kalau
                  dikuadratkan hasilnya pas. <br>
                  Contoh: <code class="bg-white px-1">√25 = 5</code>, karena <code class="bg-white px-1">5 × 5 =
                    25</code>.</p>
                <p>🔹 <strong>Akar Pangkat Tiga (∛)</strong>: Mencari angka yang kalau dipangkat tiga
                  hasilnya pas. <br>
                  Contoh: <code class="bg-white px-1">∛27 = 3</code>, karena <code class="bg-white px-1">3 × 3 × 3 =
                    27</code>.</p>
              </div>
            </div>
          </div>

          {{-- Merasionalkan Penyebut --}}
          <div class="mt-8 rounded-xl border border-sky-100 bg-white p-6 shadow-md">
            <h3 class="mb-4 text-2xl font-bold text-sky-700">💡 Tips Jagoan: Merasionalkan Penyebut</h3>
            <p class="mb-4 text-sky-900/90">Dalam matematika, penyebut bentuk akar itu kurang rapi. Yuk,
              ubah jadi bilangan rasional! Namanya merasionalkan.</p>
            <div class="space-y-4">
              <div>
                <h4 class="font-semibold text-sky-800">Tipe 1: <code class="bg-sky-100 px-1">a /
                    √b</code></h4>
                <p class="text-sm text-sky-900/80">Kalikan atas dan bawah dengan akar yang sama.</p>
                <p class="mt-2">Contoh: <code class="bg-sky-100 px-1 font-mono">6/√3 = (6/√3) ×
                    (√3/√3) = 6√3 / 3 = 2√3</code></p>
              </div>
              <div class="border-t border-sky-100 pt-4">
                <h4 class="font-semibold text-sky-800">Tipe 2: <code class="bg-sky-100 px-1">c / (a +
                    √b)</code></h4>
                <p class="text-sm text-sky-900/80">Kalikan dengan pasangan sekawan: kalau penyebutnya
                  <code class="bg-sky-100 px-1">(+)</code>, sekawannya <code class="bg-sky-100 px-1">(−)</code>, dan
                  sebaliknya.
                </p>
                <p class="mt-2">Contoh: <code class="bg-sky-100 px-1 font-mono">8 / (3 + √5)</code>
                </p>
                <code class="mt-2 block rounded border border-sky-100 bg-sky-50 p-2 font-mono text-sm">8/(3+√5)
                  × (3−√5)/(3−√5) = 8(3−√5) / (9−5) = 8(3−√5) / 4 = 2(3−√5) = 6 − 2√5</code>
              </div>
            </div>
          </div>
        </section>

        {{-- CTA --}}
        <section class="py-10 text-center">
          <div class="rounded-2xl bg-gradient-to-br from-sky-400 to-sky-600 p-8 text-white shadow-2xl shadow-sky-200">
            <h2 class="mb-3 text-3xl font-bold">Gimana, Seru Kan?</h2>
            <p class="mx-auto/ relative mb-6 max-w-2xl">
              Sekarang kamu sudah lebih jago soal bilangan! Biar makin mantap, coba kerjakan beberapa soal
              latihan. Klik tombol di bawah ini!
            </p>
            <a href="{{ route('materi-bilangan-pembahasan') }}"
              class="inline-block transform rounded-xl bg-white px-8 py-3 text-lg font-bold text-sky-700 shadow-md transition-all duration-300 ease-in-out hover:-translate-y-0.5 hover:bg-sky-50 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-sky-600">
              Uji Kehebatanmu! 💪
            </a>
          </div>
        </section>

      </main>
    </div>
  </div>



</x-layouts.app>