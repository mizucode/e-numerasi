<x-layouts.app>
  <x-slot:title> Geometri & Pengukuran</x-slot:title>

  <div class="min-h-screen bg-sky-50">
    <div class="container mx-auto px-6 py-10">
      <header class="mb-14 text-center">
        <h1 class="text-4xl font-extrabold tracking-tight text-sky-600 drop-shadow-sm md:text-5xl">
          📐 Petualangan Seru di Dunia Geometri & Pengukuran!
        </h1>
        <p class="mx-auto mt-4 max-w-3xl text-lg leading-relaxed text-sky-900/80">
          Yuk, kita jelajahi bangun datar, bangun ruang, teorema
          Pythagoras, sampai satuan kuantitas, kecepatan, dan debit
          dengan cara yang asyik dan mudah dimengerti.
        </p>
      </header>

      <main class="space-y-16">
        <!-- A. Bangun Datar -->
        <section>
          <h2 class="mb-6 flex items-center gap-3 border-b-4 border-sky-400 pb-2 text-3xl font-bold text-sky-700">
            <span class="rounded-lg bg-sky-100 p-2 text-sky-600 shadow-sm">A</span>
            Bangun Datar
          </h2>

          <!-- 1. Jenis Bangun Datar -->
          <div class="mb-8 rounded-xl border border-sky-100 bg-white p-6 shadow-md">
            <h3 class="mb-4 text-2xl font-bold text-sky-700">
              1. Jenis Bangun Datar
            </h3>

            <div class="grid gap-6 md:grid-cols-2">
              <!-- a. Segitiga -->
              <div class="rounded-lg border border-sky-100 bg-sky-50 p-4">
                <h4 class="mb-2 text-xl font-semibold text-sky-800">
                  🔺 Segitiga
                </h4>
                <p class="mb-2 text-sky-900/80">
                  Bangun dengan 3 sisi dan 3 sudut. Contoh:
                  segitiga sama sisi, sama kaki, dan
                  sembarang.
                </p>
                <ul class="list-disc pl-6 text-sm text-sky-900/80">
                  <li><strong>Sama sisi</strong>: semua sisi sama panjang.</li>
                  <li><strong>Sama kaki</strong>: dua sisi sama panjang.</li>
                  <li><strong>Sembarang</strong>: semua sisi berbeda.</li>
                </ul>
                <img src="{{ asset('images/macamsegitiga.jpg') }}"
                  alt="Macam-macam segitiga: sama sisi, sama kaki, sembarang" class="mt-4 rounded shadow-md" />
              </div>

              <!-- b. Segi Empat -->
              <div class="rounded-lg border border-sky-100 bg-sky-50 p-4">
                <h4 class="mb-2 text-xl font-semibold text-sky-800">
                  ⬛ Segi Empat
                </h4>
                <p class="mb-2 text-sky-900/80">
                  Bangun dengan 4 sisi dan 4 sudut. Contoh:
                  persegi, persegi panjang, jajargenjang,
                  trapesium, belah ketupat, dan layang-layang.
                </p>
                <ul class="list-disc pl-6 text-sm text-sky-900/80">
                  <li><strong>Persegi</strong>: semua sisi sama, semua sudut siku-siku.</li>
                  <li><strong>Persegi panjang</strong>: sisi berhadapan sama, semua sudut siku-siku.</li>
                  <li><strong>Jajargenjang</strong>: sisi berhadapan sejajar dan sama panjang.</li>
                </ul>
                <img src="{{ asset('images/segiempat.png') }}"
                  alt="Contoh segi empat: persegi, persegi panjang, jajargenjang" class="mt-4 rounded shadow-md" />
              </div>
            </div>
          </div>

          <!-- 2. Keliling & Luas -->
          <div class="mb-8 rounded-xl border border-sky-100 bg-white p-6 shadow-md">
            <h3 class="mb-4 text-2xl font-bold text-sky-700">
              2. Keliling dan Luas Bangun Datar
            </h3>
            <p class="mb-4 text-sky-900/80">
              Keliling adalah jumlah panjang semua sisi, sedangkan
              luas adalah ukuran bidang yang ditempati bangun.
            </p>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-6 lg:grid-cols-3">
              <!-- Persegi -->
              <div class="rounded-lg bg-sky-50 p-3 sm:p-4">
                <div
                  class="mx-auto flex h-full flex-col space-y-4 overflow-hidden rounded-xl bg-white p-4 shadow-lg sm:p-5">
                  <div class="flex items-center justify-center">
                    <img src="{{ asset('images/persegi.png') }}" alt="Ilustrasi persegi"
                      class="mx-auto block h-auto max-w-[125px]" />
                  </div>
                  <div class="space-y-2 text-center">
                    <h2 class="text-xl font-bold text-gray-800 sm:text-2xl">Persegi</h2>
                    <p class="text-sm text-gray-600 sm:text-base">
                      Persegi adalah bangun datar dengan empat sisi sama panjang dan empat sudut siku-siku.
                    </p>

                    <div class="space-y-2 rounded-lg bg-gray-100 p-3 text-left sm:p-4 sm:text-center">
                      <p class="text-sm font-semibold text-gray-700 sm:text-base">Rumus</p>
                      <div class="-mx-1 overflow-x-auto px-1">
                        <p class="text-sm text-gray-700 sm:text-base">
                          <span class="font-semibold">Keliling:</span>
                          <span>\( K = 4s = s+s+s+s \)</span>
                        </p>
                        <p class="text-sm text-gray-700 sm:text-base">
                          <span class="font-semibold">Luas:</span>
                          <span>\( L = s^2 \)</span>
                        </p>
                      </div>
                    </div>

                    <div class="space-y-2 rounded-lg bg-gray-100 p-3 sm:p-4">
                      <p class="text-sm text-gray-700 sm:text-base">
                        <span class="font-semibold">Contoh:</span> sisi \(= 10\,\text{cm}\)
                      </p>
                      <p class="text-sm text-gray-700 sm:text-base">
                        <span class="font-semibold">Keliling:</span> \(4\times10=40\,\text{cm}\)
                      </p>
                      <p class="text-sm text-gray-700 sm:text-base">
                        <span class="font-semibold">Luas:</span> \(10\times10=100\,\text{cm}^2\)
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Persegi Panjang -->
              <div class="rounded-lg bg-sky-50 p-3 sm:p-4">
                <div
                  class="mx-auto flex h-full flex-col space-y-4 overflow-hidden rounded-xl bg-white p-4 shadow-lg sm:p-5">
                  <div class="flex items-center justify-center">
                    <img src="{{ asset('images/persegipanjang.png') }}" alt="Ilustrasi persegi panjang"
                      class="mx-auto block h-auto max-w-[160px]" />
                  </div>
                  <div class="space-y-2 text-center">
                    <h2 class="text-xl font-bold text-gray-800 sm:text-2xl">Persegi Panjang</h2>
                    <p class="text-sm text-gray-600 sm:text-base">
                      Dua pasang sisi sejajar dan sama panjang, empat sudut siku-siku.
                    </p>

                    <div class="space-y-2 rounded-lg bg-gray-100 p-3 text-left sm:p-4 sm:text-center">
                      <p class="text-sm font-semibold text-gray-700 sm:text-base">Rumus</p>
                      <div class="-mx-1 overflow-x-auto px-1">
                        <p class="text-sm text-gray-700 sm:text-base">
                          <span class="font-semibold">Keliling:</span> <span>\( K = 2(p+l) \)</span>
                        </p>
                        <p class="text-sm text-gray-700 sm:text-base">
                          <span class="font-semibold">Luas:</span> <span>\( L = p\cdot l \)</span>
                        </p>
                      </div>
                    </div>

                    <div class="space-y-2 rounded-lg bg-gray-100 p-3 sm:p-4">
                      <p class="text-sm text-gray-700 sm:text-base">
                        <span class="font-semibold">Contoh:</span> \(p=12\,\text{cm},\ l=8\,\text{cm}\)
                      </p>
                      <p class="text-sm text-gray-700 sm:text-base">
                        <span class="font-semibold">Keliling:</span> \(2(12+8)=40\,\text{cm}\)
                      </p>
                      <p class="text-sm text-gray-700 sm:text-base">
                        <span class="font-semibold">Luas:</span> \(12\times8=96\,\text{cm}^2\)
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Jajar Genjang -->
              <div class="rounded-lg bg-sky-50 p-3 sm:p-4">
                <div
                  class="mx-auto flex h-full flex-col space-y-4 overflow-hidden rounded-xl bg-white p-4 shadow-lg sm:p-5">
                  <div class="flex items-center justify-center">
                    <img src="{{ asset('images/jajargenjang.png') }}" alt="Ilustrasi jajargenjang"
                      class="mx-auto block h-auto max-w-[205px]" />
                  </div>
                  <div class="space-y-2 text-center">
                    <h2 class="text-xl font-bold text-gray-800 sm:text-2xl">Jajargenjang</h2>
                    <p class="text-sm text-gray-600 sm:text-base">
                      Dua pasang sisi sejajar dan sama panjang, sudut tidak harus siku-siku.
                    </p>

                    <div class="space-y-2 rounded-lg bg-gray-100 p-3 text-left sm:p-4 sm:text-center">
                      <p class="text-sm font-semibold text-gray-700 sm:text-base">Rumus</p>
                      <div class="-mx-1 overflow-x-auto px-1">
                        <p class="text-sm text-gray-700 sm:text-base"><span class="font-semibold">Keliling:</span>
                          <span>\( K = 2(a+b) \)</span>
                        </p>
                        <p class="text-sm text-gray-700 sm:text-base"><span class="font-semibold">Luas:</span> <span>\(
                            L = a\cdot t \)</span></p>
                      </div>
                    </div>

                    <div class="space-y-2 rounded-lg bg-gray-100 p-3 sm:p-4">
                      <p class="text-sm text-gray-700 sm:text-base">
                        <span class="font-semibold">Contoh:</span> \(a=10\,\text{cm},\ b=8\,\text{cm},\ t=6\,\text{cm}\)
                      </p>
                      <p class="text-sm text-gray-700 sm:text-base"><span class="font-semibold">Keliling:</span>
                        \(2(10+8)=36\,\text{cm}\)</p>
                      <p class="text-sm text-gray-700 sm:text-base"><span class="font-semibold">Luas:</span>
                        \(10\times6=60\,\text{cm}^2\)</p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Belah Ketupat -->
              <div class="rounded-lg bg-sky-50 p-3 sm:p-4">
                <div
                  class="mx-auto flex h-full flex-col space-y-4 overflow-hidden rounded-xl bg-white p-4 shadow-lg sm:p-5">
                  <div class="flex items-center justify-center">
                    <img src="{{ asset('images/belahketupat.png') }}" alt="Ilustrasi belah ketupat"
                      class="mx-auto block h-auto max-w-[100px]" />
                  </div>
                  <div class="space-y-2 text-center">
                    <h2 class="text-xl font-bold text-gray-800 sm:text-2xl">Belah Ketupat</h2>
                    <p class="text-sm text-gray-600 sm:text-base">
                      Empat sisi sama panjang, dua pasang sudut berhadapan sama besar.
                    </p>

                    <div class="space-y-2 rounded-lg bg-gray-100 p-3 text-left sm:p-4 sm:text-center">
                      <p class="text-sm font-semibold text-gray-700 sm:text-base">Rumus</p>
                      <div class="-mx-1 overflow-x-auto px-1">
                        <p class="text-sm text-gray-700 sm:text-base"><span class="font-semibold">Keliling:</span>
                          <span>\( K = 4s \)</span>
                        </p>
                        <p class="text-sm text-gray-700 sm:text-base"><span class="font-semibold">Luas:</span>
                          <span>\( L = \tfrac12 d_1 d_2 \)</span>
                        </p>
                      </div>
                    </div>

                    <div class="space-y-2 rounded-lg bg-gray-100 p-3 sm:p-4">
                      <p class="text-sm text-gray-700 sm:text-base"><span class="font-semibold">Contoh:</span>
                        \(s=10\,\text{cm},\ d_1=16\,\text{cm},\ d_2=12\,\text{cm}\)</p>
                      <p class="text-sm text-gray-700 sm:text-base"><span class="font-semibold">Keliling:</span>
                        \(4\times10=40\,\text{cm}\)</p>
                      <p class="text-sm text-gray-700 sm:text-base"><span class="font-semibold">Luas:</span>
                        \(\tfrac12\times16\times12=96\,\text{cm}^2\)</p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Layang-Layang -->
              <div class="rounded-lg bg-sky-50 p-3 sm:p-4">
                <div
                  class="mx-auto flex h-full flex-col space-y-4 overflow-hidden rounded-xl bg-white p-4 shadow-lg sm:p-5">
                  <div class="flex items-center justify-center">
                    <img src="{{ asset('images/layanglayang.png') }}" alt="Ilustrasi layang-layang"
                      class="mx-auto block h-auto max-w-[120px]" />
                  </div>
                  <div class="space-y-2 text-center">
                    <h2 class="text-xl font-bold text-gray-800 sm:text-2xl">Layang-Layang</h2>
                    <p class="text-sm text-gray-600 sm:text-base">
                      Dua pasang sisi berdekatan sama panjang.
                    </p>

                    <div class="space-y-2 rounded-lg bg-gray-100 p-3 text-left sm:p-4 sm:text-center">
                      <p class="text-sm font-semibold text-gray-700 sm:text-base">Rumus</p>
                      <div class="-mx-1 overflow-x-auto px-1">
                        <p class="text-sm text-gray-700 sm:text-base"><span class="font-semibold">Keliling:</span>
                          <span>\( K = 2(a+b) \)</span>
                        </p>
                        <p class="text-sm text-gray-700 sm:text-base"><span class="font-semibold">Luas:</span>
                          <span>\( L = \tfrac12 d_1 d_2 \)</span>
                        </p>
                      </div>
                    </div>

                    <div class="space-y-2 rounded-lg bg-gray-100 p-3 sm:p-4">
                      <p class="text-sm text-gray-700 sm:text-base">
                        <span class="font-semibold">Contoh:</span> \(a=12\,\text{cm},\ b=8\,\text{cm},\
                        d_1=18\,\text{cm},\ d_2=12\,\text{cm}\)
                      </p>
                      <p class="text-sm text-gray-700 sm:text-base"><span class="font-semibold">Keliling:</span>
                        \(2(12+8)=40\,\text{cm}\)</p>
                      <p class="text-sm text-gray-700 sm:text-base"><span class="font-semibold">Luas:</span>
                        \(\tfrac12\times18\times12=108\,\text{cm}^2\)</p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Trapesium -->
              <div class="rounded-lg bg-sky-50 p-3 sm:p-4">
                <div
                  class="mx-auto flex h-full flex-col space-y-4 overflow-hidden rounded-xl bg-white p-4 shadow-lg sm:p-5">
                  <div class="flex items-center justify-center">
                    <img src="{{ asset('images/trapesium.png') }}" alt="Ilustrasi trapesium"
                      class="mx-auto block h-auto max-w-[255px]" />
                  </div>
                  <div class="space-y-2 text-center">
                    <h2 class="text-xl font-bold text-gray-800 sm:text-2xl">Trapesium</h2>
                    <p class="text-sm text-gray-600 sm:text-base">
                      Empat sisi dengan sepasang sisi sejajar.
                    </p>

                    <div class="space-y-2 rounded-lg bg-gray-100 p-3 text-left sm:p-4 sm:text-center">
                      <p class="text-sm font-semibold text-gray-700 sm:text-base">Rumus</p>
                      <div class="-mx-1 overflow-x-auto px-1">
                        <p class="text-sm text-gray-700 sm:text-base"><span class="font-semibold">Keliling:</span>
                          <span>\( K = s_1 + s_2 + s_3 + s_4 \)</span>
                        </p>
                        <p class="text-sm text-gray-700 sm:text-base"><span class="font-semibold">Luas:</span>
                          <span>\( L = \tfrac12 (a+b)\,t \)</span>
                        </p>
                      </div>
                    </div>

                    <div class="space-y-2 rounded-lg bg-gray-100 p-3 sm:p-4">
                      <p class="text-sm text-gray-700 sm:text-base">
                        <span class="font-semibold">Contoh:</span> \(a=10\,\text{cm},\ b=6\,\text{cm},\
                        t=5\,\text{cm}\)
                      </p>
                      <p class="text-sm text-gray-700 sm:text-base"><span class="font-semibold">Keliling:</span>
                        \(10+6+5+5=26\,\text{cm}\)</p>
                      <p class="text-sm text-gray-700 sm:text-base"><span class="font-semibold">Luas:</span>
                        \(\tfrac12(10+6)\times5=40\,\text{cm}^2\)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- 3. Kesebangunan & Kekongruenan -->
          <div class="mb-8 space-y-5 rounded-2xl border border-sky-200 bg-white p-5 shadow-lg sm:p-6 md:p-8">
            <h3 class="flex items-center gap-2 text-2xl font-extrabold tracking-tight text-sky-700 sm:text-3xl">
              3. Kesebangunan & Kekongruenan
            </h3>

            <p class="text-base leading-relaxed text-sky-900/90 sm:text-lg">
              Dua bangun <span class="font-semibold text-sky-700">sebangun</span> jika bentuknya sama.
              Syaratnya:
            </p>

            <ul class="list-disc space-y-1 pl-5 text-base text-sky-900/90 marker:text-sky-600 sm:pl-6 sm:text-lg">
              <li>Semua pasang sisi bersesuaian sebanding.</li>
              <li>Setiap pasang sudut bersesuaian sama besar.</li>
            </ul>

            <p class="text-base leading-relaxed text-sky-900/90 sm:text-lg">
              Contoh perbandingan pada segitiga sebangun:
            </p>

            <div class="overflow-x-auto">
              <div class="mx-auto w-max rounded-xl border border-sky-100 bg-sky-50/60 px-4 py-3 sm:px-5 sm:py-4">
                \[
                \frac{AD}{AB}=\frac{DE}{BC}=\frac{AE}{AC}
                \quad \text{dan} \quad
                \frac{AD}{DB}=\frac{AE}{BC}.
                \]
              </div>
            </div>

            <figure class="w-full">
              <img src="{{ asset('images/kongruen.png') }}"
                alt="Ilustrasi kesebangunan dan kekongruenan pada segitiga"
                class="mx-auto my-2 w-full max-w-md rounded-xl border border-sky-100 object-contain shadow-sm sm:max-w-lg md:max-w-xl"
                loading="lazy" decoding="async" />
              <figcaption class="mt-2 text-center text-xs text-sky-700/80 sm:text-sm">
                Gambar membantu melihat sisi &amp; sudut yang bersesuaian.
              </figcaption>
            </figure>

            <div class="rounded-r-xl border-l-4 border-sky-400 bg-sky-50 p-3 text-sky-900/90 sm:p-4">
              <p class="text-sm sm:text-base">
                <span class="font-semibold text-sky-700">Tips:</span>
                Cocokkan <span class="underline decoration-sky-300 underline-offset-2">urutan huruf</span>
                (A ↔ D ↔ E, dst.) agar sisi yang dibandingkan benar-benar bersesuaian.
              </p>
            </div>
          </div>

          <!-- 4. Kongruen -->
          <div class="mb-8 space-y-4 rounded-2xl border border-sky-200 bg-white p-5 shadow-lg sm:p-6 md:p-8">
            <h3 class="flex items-center gap-2 text-2xl font-extrabold tracking-tight text-sky-700 sm:text-3xl">
              4. Kongruenan
            </h3>

            <p class="text-base leading-relaxed text-sky-900/90 sm:text-lg">
              Dua bangun <span class="font-semibold text-sky-700">kongruen</span>
              jika memiliki <span class="font-semibold">bentuk</span> dan <span class="font-semibold">ukuran</span>
              yang sama.
            </p>

            <ul class="list-disc space-y-1 pl-5 text-base text-sky-900/90 marker:text-sky-600 sm:pl-6 sm:text-lg">
              <li>Setiap pasang sisi seletak sama panjang.</li>
              <li>Setiap pasang sudut seletak sama besar.</li>
            </ul>

            <div class="rounded-r-xl border-l-4 border-sky-400 bg-sky-50 p-3 text-sky-900/90 sm:p-4">
              <p class="text-sm sm:text-base">
                <span class="font-semibold text-sky-700">Tips:</span>
                Bangun kongruen bisa ditumpuk pas tanpa ada bagian yang menonjol atau kurang.
              </p>
            </div>
          </div>

          <!-- 5. Segitiga Kongruen -->
          <div class="space-y-5 rounded-2xl border border-sky-200 bg-white p-5 shadow-lg sm:p-6 md:p-8">
            <h3 class="flex items-center gap-2 text-2xl font-extrabold tracking-tight text-sky-700 sm:text-3xl">
              5. Segitiga Kongruen
            </h3>

            <p class="text-base leading-relaxed text-sky-900/90 sm:text-lg">
              Dua segitiga <span class="font-semibold text-sky-700">kongruen</span> jika memenuhi salah satu:
            </p>

            <ul class="space-y-3">
              <li class="flex items-start gap-2 rounded-xl border border-sky-100 bg-sky-50 p-3">
                <span class="font-bold text-sky-600">a.</span>
                <span class="text-base text-sky-900/90 sm:text-lg">
                  <span class="font-semibold">(Sisi, Sisi, Sisi)</span> → ketiga sisi bersesuaian sama panjang.
                </span>
              </li>
              <li class="flex items-start gap-2 rounded-xl border border-sky-100 bg-sky-50 p-3">
                <span class="font-bold text-sky-600">b.</span>
                <span class="text-base text-sky-900/90 sm:text-lg">
                  <span class="font-semibold">(Sisi, Sudut, Sisi)</span> → dua sisi bersesuaian sama panjang & sudut
                  apitnya sama.
                </span>
              </li>
              <li class="flex items-start gap-2 rounded-xl border border-sky-100 bg-sky-50 p-3">
                <span class="font-bold text-sky-600">c.</span>
                <span class="text-base text-sky-900/90 sm:text-lg">
                  <span class="font-semibold">(Sudut, Sisi, Sudut)</span> → dua sudut sama besar & sisi apitnya sama
                  panjang.
                </span>
              </li>
            </ul>

            <div class="rounded-r-xl border-l-4 border-sky-400 bg-sky-50 p-3 text-sky-900/90 sm:p-4">
              <p class="text-sm sm:text-base">
                <span class="font-semibold text-sky-700">Tips:</span>
                Gunakan penggaris & busur untuk menguji kesamaan sisi dan sudut.
              </p>
            </div>
          </div>
        </section>

        <!-- B. Teorema Pythagoras -->
        <section class="space-y-5">
          <h2
            class="mb-2 flex items-center gap-3 border-b-4 border-sky-400 pb-2 text-2xl font-extrabold text-sky-700 sm:text-3xl">
            <span class="rounded-lg bg-sky-100 p-2 text-sky-600 shadow-sm">B</span>
            Teorema Pythagoras
          </h2>

          <div class="space-y-5 rounded-2xl border border-sky-200 bg-white p-5 shadow-lg sm:p-6 md:p-8">
            <figure class="w-full">
              <img src="{{ asset('images/teoremaphytagoras.png') }}" alt="Segitiga siku-siku ABC: BC sisi miring"
                class="mx-auto w-full max-w-md rounded-xl border border-sky-100 object-contain shadow-sm sm:max-w-lg md:max-w-xl"
                loading="lazy" decoding="async" />
              <figcaption class="mt-2 text-center text-xs text-sky-700/80 sm:text-sm">
                Segitiga ABC siku-siku di A (BC sisi miring).
              </figcaption>
            </figure>

            <p class="text-base leading-relaxed text-sky-900/90 sm:text-lg">
              Kuadrat sisi miring sama dengan jumlah kuadrat dua sisi lainnya:
            </p>

            <div class="flex justify-center">
              <div
                class="rounded-xl border border-gray-300 bg-gray-200/80 px-4 py-2 text-center shadow-inner sm:px-6 sm:py-3">
                \[ BC^2 = AB^2 + AC^2 \]
              </div>
            </div>
          </div>
        </section>

        <!-- C. Bangun Ruang -->
        <section class="space-y-5">
          <h2
            class="mb-2 flex items-center gap-3 border-b-4 border-sky-400 pb-2 text-2xl font-extrabold text-sky-700 sm:text-3xl">
            <span class="rounded-lg bg-sky-100 p-2 text-sky-600 shadow-sm">C</span>
            Bangun Ruang
          </h2>

          <!-- 1. Bangun Ruang Sisi Datar -->
          <div class="space-y-6 rounded-2xl border border-sky-200 bg-white p-5 shadow-lg sm:p-6 md:p-8">
            <h3 class="text-xl font-extrabold text-sky-700 sm:text-2xl">
              1. Bangun Ruang Sisi Datar
            </h3>

            <p class="text-base leading-relaxed text-sky-900/90 sm:text-lg">
              Bangun ruang sisi datar adalah bangun ruang yang memiliki sisi berbentuk datar.
            </p>

            {{-- Unsur Bangun Ruang --}}
            <div class="space-y-8">
              <!-- Judul & Gambar Utama -->
              <div>
                <h3 class="mb-2 text-lg font-bold text-sky-700 sm:text-xl">
                  a. Unsur Bangun Ruang Sisi Datar
                </h3>
                <p class="mb-3 text-base text-sky-900/90 sm:text-lg">Perhatikan gambar berikut:</p>

                <img src="{{ asset('images/unsurbangunruang.png') }}"
                  alt="Unsur bangun ruang sisi datar: sisi, rusuk, titik sudut" loading="lazy" decoding="async"
                  class="mx-auto mb-3 w-full max-w-lg transform rounded-lg border border-sky-100 object-contain shadow-sm transition duration-300 hover:scale-105" />

                <p class="text-base text-sky-900/90 sm:text-lg">
                  Berikut bagian-bagian ruang sisi datar pada gambar di atas:
                </p>
              </div>

              <!-- Tabel -->
              <div class="overflow-x-auto rounded-xl border border-sky-200 bg-white p-4 shadow-lg sm:p-6">
                <table class="min-w-full divide-y divide-gray-300 border border-gray-300">
                  <thead class="bg-sky-100">
                    <tr>
                      <th scope="col"
                        class="border border-gray-300 px-3 py-2 text-left font-semibold text-sky-700">No.</th>
                      <th scope="col"
                        class="border border-gray-300 px-3 py-2 text-left font-semibold text-sky-700">Bangun</th>
                      <th scope="col"
                        class="border border-gray-300 px-3 py-2 text-center font-semibold text-sky-700">Sisi</th>
                      <th scope="col"
                        class="border border-gray-300 px-3 py-2 text-center font-semibold text-sky-700">Rusuk</th>
                      <th scope="col"
                        class="border border-gray-300 px-3 py-2 text-center font-semibold text-sky-700">Titik Sudut
                      </th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 bg-white">
                    @foreach ([['1.', 'Prisma segitiga', '5', '9', '6'], ['2.', 'Prisma segi empat (balok/kubus)', '6', '12', '8'], ['3.', 'Prisma segi lima', '7', '15', '10'], ['4.', 'Prisma segi-n', 'n + 2', '3n', '2n'], ['5.', 'Limas segitiga', '4', '6', '4'], ['6.', 'Limas segi empat', '5', '8', '5'], ['7.', 'Limas segi lima', '6', '10', '6'], ['8.', 'Limas segi-n', 'n + 1', '2n', 'n + 1']] as $row)
                      <tr class="transition duration-200 hover:bg-sky-50">
                        <td class="border border-gray-300 px-3 py-2 text-center">{{ $row[0] }}</td>
                        <td class="border border-gray-300 px-3 py-2">{{ $row[1] }}</td>
                        <td class="border border-gray-300 px-3 py-2 text-center">{{ $row[2] }}</td>
                        <td class="border border-gray-300 px-3 py-2 text-center">{{ $row[3] }}</td>
                        <td class="border border-gray-300 px-3 py-2 text-center">{{ $row[4] }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>

              <!-- Penjelasan tambahan -->
              <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Kartu 1 -->
                <div
                  class="space-y-2 rounded-xl border border-sky-100 bg-white p-4 shadow-sm transition duration-300 hover:bg-sky-50 hover:shadow-md">
                  <h4 class="font-semibold text-sky-700">1. Diagonal ruang</h4>
                  <p class="text-sm text-sky-900/90 sm:text-base">Garis yang menghubungkan dua titik yang tidak
                    terletak dalam satu bidang.</p>
                  <img src="{{ asset('images/diagonalsisiruang.png') }}"
                    alt="Contoh diagonal ruang pada bangun ruang"
                    class="w-full rounded-lg border border-sky-100 object-contain" />
                  <p class="text-sm text-sky-900/80">Contoh: BH = CE</p>
                </div>

                <!-- Kartu 2 -->
                <div
                  class="space-y-2 rounded-xl border border-sky-100 bg-white p-4 shadow-sm transition duration-300 hover:bg-sky-50 hover:shadow-md">
                  <h4 class="font-semibold text-sky-700">2. Diagonal sisi</h4>
                  <p class="text-sm text-sky-900/90 sm:text-base">Garis yang menghubungkan dua titik berhadapan dalam
                    satu bidang/sisi.</p>
                  <img src="{{ asset('images/diagonalsisibidang.png') }}"
                    alt="Contoh diagonal sisi pada bangun ruang"
                    class="w-full rounded-lg border border-sky-100 object-contain" />
                  <p class="text-sm text-sky-900/80">Contoh: BH = CE</p>
                </div>

                <!-- Kartu 3 -->
                <div
                  class="space-y-2 rounded-xl border border-sky-100 bg-white p-4 shadow-sm transition duration-300 hover:bg-sky-50 hover:shadow-md">
                  <h4 class="font-semibold text-sky-700">3. Bidang diagonal</h4>
                  <p class="text-sm text-sky-900/90 sm:text-base">Bidang yang dibatasi 2 rusuk dan 2 diagonal sisi.</p>
                  <img src="{{ asset('images/bidangdiagonal.png') }}" alt="Contoh bidang diagonal pada bangun ruang"
                    class="w-full rounded-lg border border-sky-100 object-contain" />
                  <p class="text-sm text-sky-900/80">Contoh: BCHE = ADGF</p>
                </div>
              </div>
            </div>

            <!-- Kerangka Bangun Ruang -->
            <div class="space-y-8">
              <div>
                <h3 class="mb-2 text-lg font-bold text-sky-700 sm:text-xl">
                  b. Kerangka Bangun Ruang
                </h3>
                <p class="mb-3 text-base text-sky-900/90 sm:text-lg">
                  Panjang kawat untuk kerangka = jumlah panjang seluruh rusuk.
                </p>
                <div class="rounded-lg border border-sky-100 bg-sky-50 p-3 text-center">
                  \(\text{Kerangka kubus} = 12s \quad\) dan \(\quad \text{Kerangka balok} = 4(p+l+t)\)
                </div>
              </div>
            </div>

            <!-- Jaring-jaring Bangun Ruang -->
            <div class="space-y-8">
              <div>
                <h3 class="mb-2 text-lg font-bold text-sky-700 sm:text-xl">
                  c. Jaring-jaring Bangun Ruang
                </h3>
                <p class="mb-3 text-base text-sky-900/90 sm:text-lg">
                  Jaring-jaring adalah rangkaian bangun datar yang jika dilipat membentuk bangun ruang.
                </p>
                <div class="space-y-4">
                  <div>1) Contoh Jaring-jaring kubus
                    <img src="{{ asset('images/jaringjaringkubus.png') }}" alt="Jaring-jaring kubus"
                      class="mt-2 rounded" />
                  </div>
                  <div>2) Contoh Jaring-jaring balok
                    <img src="{{ asset('images/jaringjaringbalok.png') }}" alt="Jaring-jaring balok"
                      class="mt-2 rounded" />
                  </div>
                  <div>3) Contoh Jaring-jaring limas segi empat
                    <img src="{{ asset('images/jaringjaringbalok.png') }}" alt="Jaring-jaring limas segi empat"
                      class="mt-2 rounded" />
                  </div>
                </div>
              </div>
            </div>

            <!-- Volume & Luas Permukaan -->
            <div class="space-y-8">
              <div>
                <h3 class="mb-2 text-lg font-bold text-sky-700 sm:text-xl">
                  d. Volume dan Luas Permukaan Bangun Ruang
                </h3>
                <div class="overflow-x-auto">
                  <table class="min-w-full divide-y divide-gray-300 border border-gray-300">
                    <thead class="bg-gray-200">
                      <tr>
                        <th class="border border-gray-300 px-4 py-2 text-center font-semibold">No</th>
                        <th class="border border-gray-300 px-4 py-2 text-center font-semibold">Nama Bangun Ruang</th>
                        <th class="border border-gray-300 px-4 py-2 text-center font-semibold">Volume</th>
                        <th class="border border-gray-300 px-4 py-2 text-center font-semibold">Luas Permukaan</th>
                      </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                      <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">1.</td>
                        <td class="border border-gray-300 px-4 py-2">Kubus</td>
                        <td class="border border-gray-300 px-4 py-2">\( V = s^3 \)</td>
                        <td class="border border-gray-300 px-4 py-2">\( L_{\text{permukaan}} = 6s^2 \)</td>
                      </tr>
                      <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">2.</td>
                        <td class="border border-gray-300 px-4 py-2">Balok</td>
                        <td class="border border-gray-300 px-4 py-2">\( V = p \times l \times t \)</td>
                        <td class="border border-gray-300 px-4 py-2">\( L_{\text{permukaan}} = 2[(pl)+(pt)+(lt)] \)
                        </td>
                      </tr>
                      <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">3.</td>
                        <td class="border border-gray-300 px-4 py-2">Prisma</td>
                        <td class="border border-gray-300 px-4 py-2">\( V = L_{\text{alas}}\times t \)</td>
                        <td class="border border-gray-300 px-4 py-2">\( 2(\text{luas alas}) + \text{seluruh luas sisi
                          tegak} \)</td>
                      </tr>
                      <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">4.</td>
                        <td class="border border-gray-300 px-4 py-2">Limas</td>
                        <td class="border border-gray-300 px-4 py-2">\( V = \tfrac13\,L_{\text{alas}}\times t \)</td>
                        <td class="border border-gray-300 px-4 py-2">\( \text{luas alas} + \text{seluruh luas sisi
                          tegak} \)</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <!-- 2. Bangun Ruang Sisi Lengkung -->
          <div class="space-y-5 rounded-2xl border border-sky-200 bg-white p-5 shadow-lg sm:p-6 md:p-8">
            <h3 class="text-xl font-extrabold text-sky-700 sm:text-2xl">
              2. Bangun Ruang Sisi Lengkung
            </h3>
            <p class="text-base leading-relaxed text-sky-900/90 sm:text-lg">
              Bangun ruang yang memiliki sisi melengkung (selimut) atau permukaan bidang.
            </p>

            <div>
              <h4 class="text-lg font-bold text-sky-700 sm:text-xl">a. Unsur bangun ruang sisi lengkung</h4>
              <p class="mt-1">Perhatikan gambar berikut.</p>
              <img src="{{ asset('images/unsurbangunanruangsisi.png') }}" alt="Unsur kerucut, tabung, dan bola"
                class="mt-2 rounded" />
              <p class="mt-2">Berikut bagiannya:</p>

              <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-300 border border-gray-300">
                  <thead>
                    <tr class="bg-gray-200">
                      <th class="border border-gray-300 px-4 py-2 text-center font-semibold">No.</th>
                      <th class="border border-gray-300 px-4 py-2 text-center font-semibold">Bangun</th>
                      <th colspan="3" class="border border-gray-300 px-4 py-2 text-center font-semibold">Banyak
                      </th>
                    </tr>
                    <tr class="bg-gray-200">
                      <th colspan="2" class="border border-gray-300"></th>
                      <th class="border border-gray-300 px-4 py-2 text-center font-semibold">Sisi</th>
                      <th class="border border-gray-300 px-4 py-2 text-center font-semibold">Rusuk</th>
                      <th class="border border-gray-300 px-4 py-2 text-center font-semibold">Titik Sudut</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 bg-white">
                    <tr>
                      <td class="border border-gray-300 px-4 py-2 text-center">1.</td>
                      <td class="border border-gray-300 px-4 py-2">Kerucut</td>
                      <td class="border border-gray-300 px-4 py-2 text-center">3</td>
                      <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                      <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                    </tr>
                    <tr>
                      <td class="border border-gray-300 px-4 py-2 text-center">2.</td>
                      <td class="border border-gray-300 px-4 py-2">Tabung</td>
                      <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                      <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                      <td class="border border-gray-300 px-4 py-2 text-center">-</td>
                    </tr>
                    <tr>
                      <td class="border border-gray-300 px-4 py-2 text-center">3.</td>
                      <td class="border border-gray-300 px-4 py-2">Bola</td>
                      <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                      <td class="border border-gray-300 px-4 py-2 text-center">-</td>
                      <td class="border border-gray-300 px-4 py-2 text-center">-</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div>
              <h3 class="text-xl font-extrabold text-sky-700 sm:text-2xl">Kerucut & Rumus Bangun Ruang Sisi Lengkung
              </h3>

              <!-- a. Gambar & Keterangan Kerucut -->
              <div class="grid items-start gap-6 md:grid-cols-2">
                <div>
                  <p class="mb-3 text-sky-900/90">Perhatikan gambar kerucut berikut.</p>
                  <ol class="list-decimal space-y-1 pl-5 text-sky-900/90">
                    <li>AB = AC = garis pelukis \((s)\)</li>
                    <li>AO = garis tinggi \((t)\)</li>
                    <li>BO = OC = jari-jari alas \((r)\)</li>
                    <li>BC = diameter alas \((2r)\)</li>
                  </ol>
                  <p class="mt-3 text-sm text-sky-700/80">Catatan: \(r\) = jari-jari, \(t\) = tinggi, \(s\) = garis
                    pelukis.</p>
                </div>

                <figure>
                  <img src="{{ asset('images/kerucut.png') }}"
                    alt="Kerucut dengan titik A di puncak, B dan C di tepi alas, O pusat alas; AO tinggi, AB dan AC garis pelukis"
                    class="mx-auto w-full max-w-sm rounded-xl border border-sky-100 object-contain shadow-sm"
                    loading="lazy" decoding="async" />
                  <figcaption class="mt-2 text-center text-xs text-sky-700/80">
                    Sketsa kerucut berlabel: \(AO\) tinggi, \(AB=AC\) garis pelukis, \(BO=OC=r\).
                  </figcaption>
                </figure>
              </div>

              <!-- b. Volume & Luas Permukaan (Accordion opsional) -->
              <details class="group rounded-xl border border-sky-100">
                <summary
                  class="flex cursor-pointer items-center justify-between gap-3 rounded-xl bg-sky-50 px-4 py-3 text-left font-semibold text-sky-800">
                  <span>b. Volume dan Luas Permukaan Bangun Ruang</span>
                  <span class="text-lg leading-none group-open:hidden">＋</span>
                  <span class="hidden text-lg leading-none group-open:inline">−</span>
                </summary>

                <div class="overflow-x-auto p-4">
                  <table class="min-w-full divide-y divide-gray-300 border border-gray-300">
                    <thead class="bg-gray-100">
                      <tr>
                        <th class="border border-gray-300 px-3 py-2 text-center font-semibold">No.</th>
                        <th class="border border-gray-300 px-3 py-2 font-semibold">Nama Bangun Ruang</th>
                        <th class="border border-gray-300 px-3 py-2 text-center font-semibold">Volume</th>
                        <th class="border border-gray-300 px-3 py-2 text-center font-semibold">Luas Permukaan</th>
                      </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                      <tr class="transition hover:bg-sky-50">
                        <td class="border border-gray-300 px-3 py-2 text-center">1.</td>
                        <td class="border border-gray-300 px-3 py-2">Tabung</td>
                        <td class="border border-gray-300 px-3 py-2 text-center">\( V=\pi r^2 t \)</td>
                        <td class="border border-gray-300 px-3 py-2 text-center">\( L_{\text{permukaan}}=2\pi r(r+t) \)
                        </td>
                      </tr>
                      <tr class="transition hover:bg-sky-50">
                        <td class="border border-gray-300 px-3 py-2 text-center">2.</td>
                        <td class="border border-gray-300 px-3 py-2">Kerucut</td>
                        <td class="border border-gray-300 px-3 py-2 text-center">\( V=\tfrac13 \pi r^2 t \)</td>
                        <td class="border border-gray-300 px-3 py-2 text-center">\( L_{\text{permukaan}}=\pi r(r+s) \)
                        </td>
                      </tr>
                      <tr class="transition hover:bg-sky-50">
                        <td class="border border-gray-300 px-3 py-2 text-center">3.</td>
                        <td class="border border-gray-300 px-3 py-2">Bola</td>
                        <td class="border border-gray-300 px-3 py-2 text-center">\( V=\tfrac{4}{3}\pi r^3 \)</td>
                        <td class="border border-gray-300 px-3 py-2 text-center">\( L_{\text{permukaan}}=4\pi r^2 \)
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </details>
            </div>
          </div>

        </section>

        <!-- D. Satuan Kuantitas, Kecepatan, Debit -->
        <section class="space-y-6 rounded-2xl border border-sky-200 bg-white p-5 shadow-lg sm:p-6 md:p-8">
          <h2
            class="mb-2 flex items-center gap-3 border-b-4 border-sky-400 pb-2 text-2xl font-extrabold text-sky-700 sm:text-3xl">
            <span class="rounded-lg bg-sky-100 p-2 text-sky-600 shadow-sm">D</span>
            Satuan Kuantitas, Kecepatan, dan Debit
          </h2>

          <!-- 1. Satuan Kuantitas -->
          <div>
            <h3 class="mb-2 text-lg font-bold text-sky-700 sm:text-xl">1. Satuan Kuantitas</h3>
            <div class="grid gap-x-8 gap-y-1 text-sky-900/90 sm:grid-cols-3">
              <div>1 lusin = 12 buah</div>
              <div>1 gros = 144 buah</div>
              <div>1 rim = 500 lembar</div>
              <div>1 gros = 12 lusin</div>
              <div>1 kodi = 20 lembar</div>
            </div>
          </div>

          <!-- 2. Kecepatan -->
          <div>
            <h3 class="mb-2 text-lg font-bold text-sky-700 sm:text-xl">2. Kecepatan</h3>
            <div class="rounded-xl border border-gray-200 bg-gray-50 px-4 py-3">
              \[
              \begin{aligned}
              \text{kecepatan} &= \frac{\text{jarak}}{\text{waktu}} = \frac{s}{t} \\
              \text{jarak} &= \text{kecepatan} \times \text{waktu} = v \times t \\
              \text{waktu} &= \frac{\text{jarak}}{\text{kecepatan}} = \frac{s}{v}
              \end{aligned}
              \]
            </div>
          </div>

          <!-- 3. Debit -->
          <div>
            <h3 class="mb-2 text-lg font-bold text-sky-700 sm:text-xl">3. Debit</h3>
            <div class="rounded-xl border border-gray-200 bg-gray-50 px-4 py-3">
              \[
              \begin{aligned}
              \text{debit} &= \frac{\text{volume}}{\text{waktu}} = \frac{v}{t} \\
              \text{volume} &= \text{debit} \times \text{waktu} = d \times t \\
              \text{waktu} &= \frac{\text{volume}}{\text{debit}} = \frac{v}{d}
              \end{aligned}
              \]
            </div>
            <p class="mt-2 text-xs text-sky-700/80">
              Catatan: pada bagian ini simbol \(v\) = volume & \(d\) = debit. Sebagian buku menulis \(Q=\dfrac{V}{t}\).
            </p>
          </div>
        </section>
      </main>

      <section class="py-10 text-center">
        <div class="rounded-2xl bg-gradient-to-br from-sky-400 to-sky-600 p-8 text-white shadow-2xl shadow-sky-200">
          <h2 class="mb-3 text-3xl font-bold">Gimana, Seru Kan?</h2>
          <p class="relative mx-auto mb-6 max-w-2xl">
            Sekarang kamu sudah lebih jago soal bilangan! Biar makin
            mantap, coba kerjakan beberapa soal latihan. Klik tombol
            di bawah ini!
          </p>
          <a href="{{ route('materi-geometri-dan-pengukuran-pembahasan') }}"
            class="inline-block transform rounded-xl bg-white px-8 py-3 text-lg font-bold text-sky-700 shadow-md transition-all duration-300 ease-in-out hover:-translate-y-0.5 hover:bg-sky-50 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-sky-600">
            Uji Kehebatanmu! 💪
          </a>
        </div>
      </section>
    </div>
  </div>

  {{-- Pastikan MathJax merender ulang setelah halaman/komponen dimuat --}}
  
</x-layouts.app>
