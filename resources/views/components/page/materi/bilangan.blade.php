<x-layouts.app>
  <x-slot:title>
    Bilangan
  </x-slot:title>

  <div class="min-h-screen bg-grid-bw ">
    <div class="container mx-auto px-6 py-10">

      {{-- HERO / HEADER --}}
      <header class="mb-14 text-center">
        <h1 class="text-4xl font-extrabold tracking-tight text-sky-600 drop-shadow-sm md:text-5xl">
          Petualangan Seru di Dunia Bilangan!
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
            <div class="rounded-2xl mt-8 border border-sky-200 bg-sky-50 p-6 shadow-lg">

              <h4 class="mb-8 text-center text-3xl font-bold text-sky-700">
                Sifat operasi penjumlahan pada bilangan bulat! ✨
              </h4>

              <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

                <div x-data="{ flipped: false }"
                  class="relative h-52 w-full [perspective:1000px] transition-transform duration-300 hover:-translate-y-2 hover:scale-105">
                  <div @click="flipped = !flipped"
                    class="absolute h-full w-full cursor-pointer transition-transform duration-700 [transform-style:preserve-3d]"
                    :class="{ '[transform:rotateY(180deg)]': flipped }">
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl bg-sky-500 p-4 text-center shadow-xl [backface-visibility:hidden]">
                      <h5 class="text-2xl font-black text-white">Sifat Tertutup</h5>
                    </div>
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl border-4 border-sky-500 bg-white p-4 text-center shadow-xl [backface-visibility:hidden] [transform:rotateY(180deg)]">
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
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl bg-sky-500 p-4 text-center shadow-xl [backface-visibility:hidden]">
                      <h5 class="text-2xl font-black text-white">Sifat Komutatif</h5>
                    </div>
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl border-4 border-sky-500 bg-white p-4 text-center shadow-xl [backface-visibility:hidden] [transform:rotateY(180deg)]">
                      <span class="block rounded-lg bg-sky-50 p-3 font-mono text-lg text-sky-800">\(a+b=b+a\)</span>
                    </div>
                  </div>
                </div>

                <div x-data="{ flipped: false }"
                  class="relative h-52 w-full [perspective:1000px] transition-transform duration-300 hover:-translate-y-2 hover:scale-105">
                  <div @click="flipped = !flipped"
                    class="absolute h-full w-full cursor-pointer transition-transform duration-700 [transform-style:preserve-3d]"
                    :class="{ '[transform:rotateY(180deg)]': flipped }">
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl bg-sky-500 p-4 text-center shadow-xl [backface-visibility:hidden]">
                      <h5 class="text-2xl font-black text-white">Sifat Asosiatif</h5>
                    </div>
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl border-4 border-sky-500 bg-white p-4 text-center shadow-xl [backface-visibility:hidden] [transform:rotateY(180deg)]">
                      <span
                        class="block rounded-lg bg-sky-50 p-3 font-mono text-lg text-sky-800">\((a+b)+c=a+(b+c)\)</span>
                    </div>
                  </div>
                </div>

                <div x-data="{ flipped: false }"
                  class="relative h-52 w-full [perspective:1000px] transition-transform duration-300 hover:-translate-y-2 hover:scale-105">
                  <div @click="flipped = !flipped"
                    class="absolute h-full w-full cursor-pointer transition-transform duration-700 [transform-style:preserve-3d]"
                    :class="{ '[transform:rotateY(180deg)]': flipped }">
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl bg-sky-500 p-4 text-center shadow-xl [backface-visibility:hidden]">
                      <h5 class="text-2xl font-black text-white">Unsur Identitas</h5>
                    </div>
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl border-4 border-sky-500 bg-white p-4 text-center shadow-xl [backface-visibility:hidden] [transform:rotateY(180deg)]">
                      <div>
                        <p class="mb-2 font-medium text-slate-700">Penjumlahan dengan nol tidak mengubah nilai.</p>
                        <span class="block rounded-lg bg-sky-50 p-3 font-mono text-lg text-sky-800">\(a+0=a\)</span>
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
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl bg-sky-500 p-4 text-center shadow-xl [backface-visibility:hidden]">
                      <h5 class="text-2xl font-black text-white">Sifat Invers</h5>
                    </div>
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl border-4 border-sky-500 bg-white p-4 text-center shadow-xl [backface-visibility:hidden] [transform:rotateY(180deg)]">
                      <span class="block rounded-lg bg-sky-50 p-3 font-mono text-lg text-sky-800">\(a+(-a)=0\)</span>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- Pengurangan -->
            <div x-data="{ open: true }"
              class="rounded-2xl mt-8 border border-sky-200 bg-white p-6 shadow-md transition hover:shadow-lg">
              <div class="flex items-center justify-between cursor-pointer" @click="open = !open">
                <h4 class="w-full mb-8 text-center text-3xl font-bold text-sky-700">
                  Sifat operasi pengurangan pada bilangan bulat! ✨
                </h4>
                <svg :class="{'rotate-180': open}"
                  class="w-6 h-6 text-sky-600 transform transition-transform duration-300" fill="none"
                  stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
              </div>

              <div x-show="open" x-transition class="mt-4 text-sky-900 leading-relaxed space-y-2">

                <div class="mt-6 rounded-r-lg border-l-4 border-sky-400 bg-sky-50 p-4">
                  <p class="text-sky-900"><strong class="font-bold">Info Penting! </strong>Operasi pengurangan pada
                    bilangan bulat memenuhi sifat tertutup. <strong class="font-bold">Artinya </strong>pengurangan dua
                    bilangan
                    bulat akan menghasilkan bilangan bulat juga. </p>
                </div>

              </div>
            </div>


            {{-- Perkalian --}}
            <div class="rounded-2xl mt-8 border border-sky-200 bg-sky-50 p-6 shadow-lg">
              <h4 class="mb-8 text-center text-3xl font-bold text-sky-700">
                Sifat operasi perkalian pada bilangan bulat ✨
              </h4>

              <div class="grid grid-cols-1 gap-8 md:grid-cols-3">

                <div x-data="{ flipped: false }"
                  class="relative h-52 w-full [perspective:1000px] transition-transform duration-300 hover:-translate-y-2 hover:scale-105">
                  <div @click="flipped = !flipped"
                    class="absolute h-full w-full cursor-pointer transition-transform duration-700 [transform-style:preserve-3d]"
                    :class="{ '[transform:rotateY(180deg)]': flipped }">
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl bg-sky-500 p-4 text-center shadow-xl [backface-visibility:hidden]">
                      <h5 class="text-2xl font-black text-white">Tertutup</h5>
                    </div>
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl border-4 border-sky-500 bg-white p-4 text-center shadow-xl [backface-visibility:hidden] [transform:rotateY(180deg)]">
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
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl bg-sky-500 p-4 text-center shadow-xl [backface-visibility:hidden]">
                      <h5 class="text-2xl font-black text-white">Komutatif</h5>
                    </div>
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl border-4 border-sky-500 bg-white p-4 text-center shadow-xl [backface-visibility:hidden] [transform:rotateY(180deg)]">
                      <span class="block rounded-lg bg-sky-50 p-3 font-mono text-lg text-sky-800">\(a \times b =
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
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl bg-sky-500 p-4 text-center shadow-xl [backface-visibility:hidden]">
                      <h5 class="text-2xl font-black text-white">Asosiatif</h5>
                    </div>
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl border-4 border-sky-500 bg-white p-4 text-center shadow-xl [backface-visibility:hidden] [transform:rotateY(180deg)]">
                      <span class="block rounded-lg bg-sky-50 p-3 font-mono text-lg text-sky-800">\((a \times b)
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
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl bg-sky-500 p-4 text-center shadow-xl [backface-visibility:hidden]">
                      <h5 class="text-2xl font-black text-white">Identitas</h5>
                    </div>
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl border-4 border-sky-500 bg-white p-4 text-center shadow-xl [backface-visibility:hidden] [transform:rotateY(180deg)]">
                      <span class="block rounded-lg bg-sky-50 p-3 font-mono text-lg text-sky-800">\(a \times 1 = 1
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
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl bg-sky-500 p-4 text-center shadow-xl [backface-visibility:hidden]">
                      <h5 class="text-2xl font-black text-white">Invers (lawan)</h5>
                    </div>
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl border-4 border-sky-500 bg-white p-4 text-center shadow-xl [backface-visibility:hidden] [transform:rotateY(180deg)]">
                      <span class="block rounded-lg bg-sky-50 p-3 font-mono text-xs text-sky-800">\(a \times
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
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl bg-sky-500 p-4 text-center shadow-xl [backface-visibility:hidden]">
                      <h5 class="text-2xl font-black text-white">Distributif</h5>
                    </div>
                    <div
                      class="absolute flex h-full w-full items-center justify-center rounded-2xl border-4 border-sky-500 bg-white p-4 text-center shadow-xl [backface-visibility:hidden] [transform:rotateY(180deg)]">
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
            class=" mb-8 rounded-xl border-2 border-sky-500 bg-white px-6 py-3 text-lg text-gray-900 font-semibold shadow-md">
            <div class="flex justify-center items-center gap-2 mt-4 text-2xl">
              <span> \(\dfrac{a}{b}\)</span>
              <span> dengan</span>
              <span> \(b \neq 0\)</span>
            </div>

            <div>
              <p class="mt-4">Keterangan:</p>
              <div>
                <p class="flex gap-2 items-center">\( a = \) Pembilang</p>
                <p class="flex gap-2 items-center">\( b = \) Penyebut</p>
              </div>

            </div>
          </div>


          <div class="grid gap-8 md:grid-cols-2">

            <div class="rounded-xl border border-sky-200 bg-gradient-to-br from-white to-sky-50 p-6 shadow-lg">
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
                <div class="bg-sky-50 rounded-lg px-4 py-3 text-sky-900 text-xl mb-6 flex gap-5">
                  Tentukan dua buah pecahan yang senilai dengan <span> \(\tfrac{20}{40}\)
                  </span>
                </div>

                <!-- Penyelesaian -->
                <div class="space-y-4 text-lg text-sky-800">
                  <p class="text-xl">Penyelesaian:</p>

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


            <div class="rounded-xl border border-sky-200 bg-gradient-to-br from-white to-sky-50 bg-white p-6 shadow-md">
              <h3 class="mb-4 flex items-center gap-3 text-3xl font-extrabold text-sky-800">
                Menyederhanakan Pecahan
              </h3>
              <p class=" text-sky-900/90 mb-6  text-lg leading-relaxed">Untuk mendapatkan pecahan sederhan, cara yang
                dapat dilakukan adalah
                membagi pembilang dan penyebut pecahan semula dengan bilangan asli yang sama kecuali 1.</p>
              <div class="rounded-lg bg-sky-50 p-4">
                <p class="font-semibold text-sky-700 mb-4 text-lg">
                  Contoh:
                </p>
                <div class="bg-sky-50 rounded-lg text-sky-900 text-base mb-6">
                  \[
                  \frac{50}{75} = \frac{50 : 5}{75 : 5} = \frac{10}{15}
                  \]
                </div>
                <p class="text-xl text-sky-800">
                  Jadi, salah satu bentuk sederhana dari
                  <span>\(\tfrac{50}{75}\)</span>
                  adalah
                  <span>\(\tfrac{10}{15}\)</span>
                </p>
                <p class="text-xl text-sky-800 mt-4 text-justify">Pecahan paling sederhana dapat diperoleh dengan
                  menggunakan
                  FPB dari pembilang dan penyebut sebagai
                  pembagi. Pada contoh diatas, FPB dari 50 dan 75 adalah 25.</p>


                <!-- Penyelesaian -->
                <div class="space-y-4 mt-4 text-lg text-sky-800">

                  <p>\[
                    \frac{50}{75} = \frac{50 : 25}{75 : 25} = \frac{2}{3}
                    \]
                  </p>


                  <div class="bg-sky-100 rounded-lg px-4 py-3 mt-4 font-semibold">
                    <p class="text-lg text-sky-800 flex gap-5">
                      Jadi, bentuk paling sederhana dari
                      <span>\(\tfrac{50}{75}\)</span>
                      adalah
                      <span>\(\tfrac{2}{3}\)</span>
                    </p>

                  </div>
                </div>


              </div>


            </div>

            <div class="rounded-xl border border-sky-200 bg-gradient-to-br from-white to-sky-50 bg-white p-6 shadow-md">
              <h3 class="mb-4 flex items-center gap-3 text-3xl font-extrabold text-sky-800">
                Bentuk-Bentuk Pecahan </h3>
              <ul class="space-y-3">
                <li
                  class="rounded-lg bg-sky-50 px-4 py-2 text-sky-800 shadow-sm transition duration-200 hover:bg-sky-100 hover:shadow-md hover:-translate-y-0.5">
                  <div class="text-lg text-sky-800 flex gap-5">
                    Pecahan biasa, misalnya:
                    <div> <span>\(\tfrac{1}{2}\)</span>,
                      <span>\(\tfrac{4}{9}\)</span>,
                      <span>\(\tfrac{5}{3}\)</span>
                    </div>
                  </div>
                </li>
                <li
                  class="rounded-lg bg-sky-50 px-4 py-2 text-sky-800 shadow-sm transition duration-200 hover:bg-sky-100 hover:shadow-md hover:-translate-y-0.5">
                  <div class="text-lg text-sky-800 flex gap-5">
                    Pecahan campuran, misalnya:
                    <div><span>\(3\tfrac{1}{2}\)</span>,
                      <span>\(4\tfrac{3}{5}\)</span>,
                      <span>\(1\tfrac{5}{8}\)</span>
                    </div>
                  </div>
                </li>
                <li
                  class="rounded-lg bg-sky-50 px-4 py-2 text-sky-800 shadow-sm transition duration-200 hover:bg-sky-100 hover:shadow-md hover:-translate-y-0.5">
                  Pecahan desimal, misalnya: 0,5; 0,66; 5,48.
                </li>
                <li
                  class="rounded-lg bg-sky-50 px-4 py-2 text-sky-800 shadow-sm transition duration-200 hover:bg-sky-100 hover:shadow-md hover:-translate-y-0.5">
                  Persen, misalnya: 10%, 75%, 100% </li>
              </ul>




            </div>

            <div
              class="rounded-xl border border-sky-200 bg-gradient-to-br from-sky-50 to-sky-100 bg-white p-6 shadow-md">
              <h3 class="mb-4 flex items-center gap-3 text-3xl font-extrabold text-sky-800">
                Operasi Hitung Pecahan </h3>
              <div class="mt-4 py-4 px-2 rounded-md bg-white shadow-md">
                <div class="">
                  <h4 class="mb-4 text-xl font-bold text-sky-600">Penjumlahan dan Pengurangan</h4>
                  <p class="text-xl text-sky-800 mt-4 text-justify">Penjumlahan dan pengurangan pecahan dapat
                    diselesaikan jika penyebut kedua pecahan sama. Jika
                    penyebut kedua pecahan sudah sama, lakukan operasi penjumlahan atau pengurangan pada bilangan.</p>

                  <div class="text-center mt-4  flex justify-center bg-sky-100 border-2 border-sky-300 rounded">
                    <p class="text-2xl text-black font-semibold  py-4">
                      <span>\(\frac{a}{c} + \frac{b}{c} = \frac{a+b}{c}\)</span>
                    </p>
                  </div>
                  <p class="text-xl text-sky-800 mt-4 text-justify">Penjumlahan dan pengurangan Jika penyebut kedua
                    pecahan berbeda, samakan terlebih dahulu dengan cara berikut.</p>


                  <div class="mt-2 px-4 py-4 bg-white border-2 border-sky-300 rounded">
                    <h5 class="mb-4 text-lg font-semibold text-sky-800">Cara 1:</h5>
                    <p class="text-xl text-sky-800">
                      <span>\(\frac{a}{b} + \frac{c}{d} = \frac{ad+bc}{bd}\)</span>
                    </p>
                    <p class="text-lg text-sky-800  mt-4 text-justify italic">Contoh:</p>
                    <p class="text-lg text-sky-800">
                      <span>\(\frac{2}{5} + \frac{3}{4} = \frac{(2 \times 4) + (3 \times 5)}{5 \times 4} = \frac{8 +
                        15}{20} = \frac{23}{20}\)</span>
                    </p>

                  </div>

                  <div class="mt-2 px-4 py-4 bg-white border-2 border-sky-300 rounded">
                    <h5 class="mb-4 text-lg font-semibold ">Cara 2:</h5>
                    <p class="text-xl text-sky-800 mt-4 text-justify">Kedua pecahan diubah sehingga penyebutnya
                      merupakan KPK dari kedua penyebut pecahan tersebut.</p>
                    <p class="text-lg text-sky-800 mt-4">
                      <span>\(\frac{3}{8} + \frac{7}{12} = \ldots\)</span>
                    </p>
                    <p class="text-xl text-sky-800 mt-4 text-justify italic">Penyelesaian:</p>
                    <p class="text-xl text-sky-800  text-justify">KPK dari 8 dan 12 adalah 24, maka:</p>
                    <p class="text-lg text-sky-800 mt-4">
                      <span>\(\frac{3}{8} + \frac{7}{12} = \frac{9}{24} + \frac{14}{24} = \frac{23}{24}\)</span>
                    </p>


                  </div>

                </div>
              </div>


              <div class="mt-4 py-4 px-2 rounded-md bg-white shadow-md">
                <div class="">
                  <h4 class="mb-4 text-xl font-bold text-sky-600">Perkalian dan Pembagian</h4>
                  <p class="text-xl text-sky-800 mt-4 text-justify">Perkalian pecahan ditentukan dengan mengalikan
                    pembilang dengan pembilang dan penyebut dengan penyebut.</p>

                  <div class="text-center mt-4  flex justify-center bg-sky-100 border-2 border-sky-300 rounded">
                    <p class="text-2xl text-black font-semibold  py-4">
                      <span>\[
                        \frac{a}{b} \times \frac{c}{d} = \frac{ac}{bd}
                        \]
                      </span>
                    </p>
                  </div>



                  <div class="mt-2 px-4 py-4 bg-white border-2 border-sky-300 rounded">
                    <h5 class="mb-4 text-lg font-semibold text-sky-800">Contoh:</h5>
                    <p class="text-xl text-sky-800">
                      <span>\[
                        \frac{2}{5} \times \frac{3}{7}
                        = \frac{2 \times 3}{5 \times 7}
                        = \frac{6}{35}
                        \]
                      </span>
                    </p>
                    <p class="text-xl text-sky-800  mt-4 text-justify">Operasi pembagian pecahan diselesaikan
                      dengan mengalikan pecahan yang dibagi dengan kebalikan pecahan pembagi.</p>
                    <p class="text-xl text-sky-800">
                      <span>\[
                        \frac{a}{b} : \frac{c}{d}
                        = \frac{a}{b} \times \frac{d}{c}
                        = \frac{ad}{bc}
                        \]
                      </span>
                    </p>
                    <h5 class="mb-4 text-lg font-semibold text-sky-800">Contoh:</h5>
                    <p class="text-xl text-sky-800">
                      <span>\[
                        \frac{2}{5} : \frac{3}{7}
                        = \frac{2}{5} \times \frac{7}{3}
                        = \frac{14}{15}
                        \]
                      </span>
                    </p>

                  </div>



                </div>
              </div>




            </div>
          </div>
        </section>

        {{-- C. PANGKAT & AKAR --}}
        <section class="py-10 sm:py-12 lg:py-16">
          <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2
              class="mb-6 flex items-center gap-3 border-b-4 border-sky-400 pb-2 text-2xl sm:text-3xl font-bold text-sky-700">
              <span class="rounded-lg bg-sky-100 p-2 text-sky-600 shadow-sm">C</span>
              Bilangan Berpangkat
            </h2>

            <div class="grid grid-cols-1 gap-6 sm:gap-8 md:grid-cols-2">
              <!-- Bilangan Berpangkat -->
              <div class="min-w-0 rounded-xl border border-sky-100 bg-white p-5 sm:p-6 shadow-md">
                <h3 class="mb-4 text-xl sm:text-2xl font-bold text-sky-700">Pengertian</h3>
                <p class="mb-4 text-sky-900/90 text-base sm:text-lg">
                  Jika a sebuah bilangan real dan n merupakan bilangan bulat maka yang
                  disebut a^n (baca: a pangkat n) adalah perkalian bilangan a dengan dirinya sendiri sebanyak n faktor.
                  Dinyatakan dengan:
                </p>

                <div class="flex flex-col gap-4 sm:flex-row sm:items-start sm:gap-5">
                  <!-- Rumus: dibungkus agar tidak melebar keluar layar -->
                  <div class="overflow-x-auto -mx-2 sm:mx-0">
                    <div class="inline-block rounded-md border border-sky-400 bg-white px-3 py-2 sm:px-4 sm:py-3">
                      <p class="text-center text-base sm:text-lg whitespace-nowrap">
                        \( a^n = \underbrace{a \times a \times a \times \ldots \times a}_{\text{sebanyak } n \text{
                        faktor}} \)
                      </p>
                    </div>
                  </div>

                  <!-- Keterangan -->
                  <div class="text-sky-900/90 text-base sm:text-lg">
                    <p class="font-semibold">Keterangan</p>
                    <p>a^n = bilangan berpangkat</p>
                    <p>a = bilangan pokok</p>
                    <p>n = pangkat</p>
                  </div>
                </div>
              </div>

              <!-- Bentuk Akar / Sifat-sifat -->
              <div class="min-w-0 rounded-xl border border-sky-100 bg-white p-5 sm:p-6 shadow-md">
                <h3 class="mb-4 text-xl sm:text-2xl font-bold text-sky-700">Sifat-sifat perpangkatan</h3>
                <ul class="space-y-3 text-base sm:text-lg">
                  <li
                    class="rounded-lg bg-sky-50 px-4 py-2 text-sky-800 shadow-sm transition duration-200 hover:-translate-y-0.5 hover:bg-sky-100 hover:shadow-md">
                    <div class="overflow-x-auto">
                      <div class="min-w-fit whitespace-nowrap">
                        \[ a^m \times a^n = a^{m+n} \]
                      </div>
                    </div>
                  </li>

                  <li
                    class="rounded-lg bg-sky-50 px-4 py-2 text-sky-800 shadow-sm transition duration-200 hover:-translate-y-0.5 hover:bg-sky-100 hover:shadow-md">
                    <div class="overflow-x-auto">
                      <div class="min-w-fit whitespace-nowrap">
                        \[ \frac{a^m}{a^n} = a^{m-n} \]
                      </div>
                    </div>
                  </li>

                  <li
                    class="rounded-lg bg-sky-50 px-4 py-2 text-sky-800 shadow-sm transition duration-200 hover:-translate-y-0.5 hover:bg-sky-100 hover:shadow-md">
                    <div class="overflow-x-auto">
                      <div class="min-w-fit whitespace-nowrap">
                        \[ (a^m)^n = a^{m \times n} \]
                      </div>
                    </div>
                  </li>

                  <li
                    class="rounded-lg bg-sky-50 px-4 py-2 text-sky-800 shadow-sm transition duration-200 hover:-translate-y-0.5 hover:bg-sky-100 hover:shadow-md">
                    <div class="overflow-x-auto">
                      <div class="min-w-fit whitespace-nowrap">
                        untuk \(m\) bilangan ganjil maka \[ (-a)^m = -(a^m) \]
                      </div>
                    </div>
                  </li>

                  <li
                    class="rounded-lg bg-sky-50 px-4 py-2 text-sky-800 shadow-sm transition duration-200 hover:-translate-y-0.5 hover:bg-sky-100 hover:shadow-md">
                    <div class="overflow-x-auto">
                      <div class="min-w-fit whitespace-nowrap">
                        \[ (a \times b)^m = a^m \times b^m \]
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>



        {{-- D. Akar Pangkat Dua dan Akar Pangkat Tiga --}}
        <section>
          <h2 class="mb-6 flex items-center gap-3 border-b-4 border-sky-400 pb-2 text-3xl font-bold text-sky-700">
            <span class="rounded-lg bg-sky-100 p-2 text-sky-600 shadow-sm">D</span>
            Akar Pangkat Dua dan Akar Pangkat Tiga
          </h2>

          <div x-data="{ open: true }"
            class="rounded-2xl border border-sky-200 bg-white p-6 shadow-md transition hover:shadow-lg">
            <!-- Header -->
            <div class="flex items-center justify-between cursor-pointer" @click="open = !open">
              <h3 class="flex items-center gap-3 text-3xl font-bold text-sky-700">
                Akar Pangkat Dua
              </h3>
              <svg :class="{'rotate-180': open}"
                class="w-6 h-6 text-sky-600 transform transition-transform duration-300" fill="none"
                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </div>

            <!-- Content -->
            <div x-show="open" x-transition class="mt-4 text-sky-900 leading-relaxed space-y-2">
              <p class="text-xl text-sky-800">
                Akar pangkat dua adalah kebalikan dari kuadrat, dimana akar pangkat dua merupakan hasil dari kuadrat
                suatu bilangan. Secara umum akar kuadrat dapat dituliskan sebagai berikut.
              </p>
              <div class="mt-4 rounded-xl bg-sky-600 p-4 text-center text-white shadow-lg">
                <p class="flex items-center gap-2 text-xl text-center font-bold justify-center">
                  <span>\(a^2 = b\)</span>
                  <span>sama artinya dengan</span>
                  <span>\(\sqrt{b} = a\)</span>
                </p>

              </div>

              <div class="space-y-4 mt-4 bg-sky-100 px-4 text-xl py-4 rounded shadow  font-bold text-sky-800">
                <p><span class="italic">Contoh:</span></p>

                <p>
                  <span>Tentukan nilai dari</span>
                  <span>\(\sqrt{16}\)</span>
                </p>

                <p><span class="italic">Penyelesaian:</span></p>

                <p>
                  <span>\(\sqrt{16} = 4\)</span>
                  <span class="my-4"><i>karena</i></span>
                  <span>\(4^2 = 4 \times 4\)</span>
                </p>
              </div>


            </div>
          </div>

          <div x-data="{ open: true }"
            class="rounded-2xl mt-8 border border-sky-200 bg-white p-6 shadow-md transition hover:shadow-lg">
            <!-- Header -->
            <div class="flex items-center justify-between cursor-pointer" @click="open = !open">
              <h3 class="flex items-center gap-3 text-3xl font-bold text-sky-700">
                Akar Pangkat Tiga
              </h3>
              <svg :class="{'rotate-180': open}"
                class="w-6 h-6 text-sky-600 transform transition-transform duration-300" fill="none"
                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </div>

            <!-- Content -->
            <div x-show="open" x-transition class="mt-4 text-sky-900 leading-relaxed space-y-2">
              <p class="text-xl text-sky-800">
                Akar pangkat tiga merupakan kebalikan dari pangkat tiga. Akar pangkat tiga dilambangkan dengan ∛. Secara
                umum akar pangkat tiga dapat dituliskan sebagai berikut.
              </p>
              <div class="mt-4 rounded-xl bg-sky-600 p-4 text-center text-white shadow-lg">
                <p class="flex items-center gap-2 text-xl text-center font-bold justify-center">
                  <span>\(a^3 = b\)</span>
                  <span>sama artinya dengan</span>
                  <span>\(\sqrt[3]{b} = a\)</span>
                </p>

              </div>

              <div class="space-y-4 mt-4 bg-sky-100 px-4 text-xl py-4 rounded shadow  font-bold text-sky-800">
                <p><span class="italic">Contoh:</span></p>

                <p>
                  <span>Tentukan nilai dari</span>
                  <span>\(\sqrt[3]{64}\)</span>
                </p>

                <p><span class="italic">Penyelesaian:</span></p>

                <p>
                  <span>\(\sqrt[3]{64} = 4\)</span>
                  <span class="my-4"><i>karena</i></span>
                  <span>\(4^3 = 4 \times 4\times 4\)</span>
                </p>
              </div>


            </div>
          </div>
          <div x-data="{ open: true }"
            class="rounded-2xl mt-8 border border-sky-200 bg-white p-6 shadow-md transition hover:shadow-lg">
            <!-- Header -->
            <div class="flex items-center justify-between cursor-pointer" @click="open = !open">
              <h3 class="flex items-center gap-3 text-3xl font-bold text-sky-700">
                Sifat-sifat akar pangkat </h3>
              <svg :class="{'rotate-180': open}"
                class="w-6 h-6 text-sky-600 transform transition-transform duration-300" fill="none"
                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </div>

            <!-- Content -->
            <div x-show="open" x-transition class="mt-4 text-sky-900 leading-relaxed space-y-2">
              <p class="text-xl text-sky-800">
                Berikut sifat-sifat bentuk akar.
              </p>
              <div class="mt-4 rounded-xl bg-sky-600 p-4 text-center text-white shadow-lg">
                <ul class="space-y-3 text-lg">
                  <li
                    class="rounded-lg bg-sky-50 px-4 py-2 text-sky-800 shadow-sm transition duration-200 hover:bg-sky-100 hover:shadow-md hover:-translate-y-0.5">
                    \[\sqrt{a \times b} = \sqrt{a} \times \sqrt{b}\]
                  </li>

                  <li
                    class="rounded-lg bg-sky-50 px-4 py-2 text-sky-800 shadow-sm transition duration-200 hover:bg-sky-100 hover:shadow-md hover:-translate-y-0.5">
                    \[\sqrt{\tfrac{a}{b}} = \tfrac{\sqrt{a}}{\sqrt{b}}\]
                  </li>

                  <li
                    class="rounded-lg bg-sky-50 px-4 py-2 text-sky-800 shadow-sm transition duration-200 hover:bg-sky-100 hover:shadow-md hover:-translate-y-0.5">
                    \[\sqrt{a} \times \sqrt{a} = a\]
                  </li>

                  <li
                    class="rounded-lg bg-sky-50 px-4 py-2 text-sky-800 shadow-sm transition duration-200 hover:bg-sky-100 hover:shadow-md hover:-translate-y-0.5">
                    \[\sqrt{a} + \sqrt{a} = 2\sqrt{a}\]
                  </li>

                  <li
                    class="rounded-lg bg-sky-50 px-4 py-2 text-sky-800 shadow-sm transition duration-200 hover:bg-sky-100 hover:shadow-md hover:-translate-y-0.5">
                    \[\sqrt{a} \times \sqrt{ab} = \sqrt{a^2 b} = a\sqrt{b}\]
                  </li>
                </ul>


              </div>



            </div>
          </div>
          <div x-data="{ open: true }"
            class="rounded-2xl mt-8 border border-sky-200 bg-white p-6 shadow-md transition hover:shadow-lg">
            <!-- Header -->
            <div class="flex items-center justify-between cursor-pointer" @click="open = !open">
              <h3 class="flex items-center gap-3 text-3xl font-bold text-sky-700">
                Merasionalkan Bentuk Akar</h3>
              <svg :class="{'rotate-180': open}"
                class="w-6 h-6 text-sky-600 transform transition-transform duration-300" fill="none"
                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </div>

            <!-- Content -->
            <div x-show="open" x-transition class="mt-4 text-sky-900 leading-relaxed space-y-2">

              <div class="mt-4 rounded-xl bg-sky-600 p-4 text-center text-white shadow-lg">
                <ul class="space-y-3 text-lg">
                  <li
                    class="rounded-lg bg-sky-50 px-4 py-2 text-sky-800 shadow-sm transition duration-200 hover:bg-sky-100 hover:shadow-md hover:-translate-y-0.5">
                    \[
                    \frac{\sqrt{a}}{\sqrt{b}}
                    = \frac{\sqrt{a}}{\sqrt{b}} \times \frac{\sqrt{b}}{\sqrt{b}}
                    = \frac{\sqrt{ab}}{b}
                    \]
                  </li>

                  <li
                    class="rounded-lg bg-sky-50 text-xs lg:text-xl px-4 py-2 text-sky-800 shadow-sm transition duration-200 hover:bg-sky-100 hover:shadow-md hover:-translate-y-0.5">
                    \[
                    \frac{a}{\sqrt{b}+\sqrt{c}}
                    = \frac{a}{\sqrt{b}+\sqrt{c}} \times \frac{\sqrt{b}-\sqrt{c}}{\sqrt{b}-\sqrt{c}}
                    = \frac{a(\sqrt{b}-\sqrt{c})}{b-c}
                    \]
                  </li>

                  <li
                    class="rounded-lg bg-sky-50 text-xs lg:text-xl px-4 py-2 text-sky-800 shadow-sm transition duration-200 hover:bg-sky-100 hover:shadow-md hover:-translate-y-0.5">
                    \[
                    \frac{a}{\sqrt{b}-\sqrt{c}}
                    = \frac{a}{\sqrt{b}-\sqrt{c}} \times \frac{\sqrt{b}+\sqrt{c}}{\sqrt{b}+\sqrt{c}}
                    = \frac{a(\sqrt{b}+\sqrt{c})}{b-c}
                    \]
                  </li>
                </ul>



              </div>



            </div>
          </div>

        </section>

        {{-- CTA --}}


        {{-- CTA --}}
        <section class="py-12 text-center">
          <div
            class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-sky-400 to-sky-600 p-10 text-white shadow-xl">
            <!-- Dekorasi background -->
            <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_top_left,white,transparent)]"></div>

            <h2 class="relative mb-4 text-3xl md:text-4xl font-extrabold drop-shadow-sm">
              Gimana, Seru Kan?
            </h2>
            <p class="relative mx-auto mb-8 max-w-2xl text-lg leading-relaxed">
              Sekarang kamu sudah lebih jago soal bilangan!
              Biar makin mantap, coba kerjakan beberapa soal latihan.
              Klik tombol di bawah ini!
            </p>
            <a href="{{ route('materi-bilangan-pembahasan') }}"
              class="relative inline-block rounded-xl bg-white px-8 py-3 text-lg font-bold text-sky-700 shadow-md transition-all duration-300 hover:-translate-y-1 hover:bg-sky-50 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-white/70">
              Uji Kehebatanmu! 💪
            </a>
          </div>
        </section>


      </main>
    </div>
  </div>



</x-layouts.app>