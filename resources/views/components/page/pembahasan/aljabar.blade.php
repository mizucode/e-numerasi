<x-layouts.app>
  <x-slot:title>
    Pembahasan Aljabar
  </x-slot:title>

  <div class="bg-sky-50 min-h-screen">
    <div class="container mx-auto px-6 py-10">

      {{-- HEADER --}}
      <header class="mb-12 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-sky-600 tracking-tight">Contoh soal dan Pembahasan Aljabar
        </h1>

      </header>

      <main class="space-y-16">


        {{-- A. Contoh Soal Pemahaman 1 --}}
        <section>
          <h2
            class="text-2xl md:text-3xl font-bold text-sky-700 flex items-center gap-3 border-b-4 border-sky-400 pb-2 mb-6">
            Contoh Soal Pemahaman
          </h2>

          <article x-data="{
    jawaban: null,
    benar: 'B',
    opsi: ['A. 20%','B. 25%','C. 30%','D. 75%']
  }" x-effect="if (jawaban === benar && window.MathJax) { $nextTick(() => MathJax.typeset()); }"
            class="bg-white rounded-2xl border border-sky-100 shadow-md overflow-hidden">
            <div class="p-6">
              <h3 class="text-xl font-bold text-sky-800 mb-3">Perhatikan gambar berikut ini</h3>
              <img src="{{ asset('images/pembahasan1.png') }}" alt="">
              <p class="text-sky-900/90 leading-relaxed mb-4">
                Diskon yang ditawarkan pada iklan tersebut sebesar . . . .
              </p>

              <ul class="grid sm:grid-cols-2 md:grid-cols-4 gap-3 mb-4">
                <template x-for="(ops, i) in opsi" :key="i">
                  <li role="button" tabindex="0" @click="jawaban = ops.charAt(0)"
                    @keydown.enter.space.prevent="jawaban = ops.charAt(0)" class="cursor-pointer bg-sky-50 border border-sky-100 rounded-lg px-3 py-2 ring-offset-2
                 motion-safe:transition motion-safe:duration-200 motion-safe:ease-out
                 hover:shadow-sm focus:shadow-sm
                 motion-safe:hover:-translate-y-0.5 motion-safe:active:translate-y-0
                 motion-safe:hover:scale-[1.02]" :class="{
            'ring-2 ring-sky-400 font-semibold text-sky-700': jawaban === ops.charAt(0),
            'bg-green-50 border-green-400 text-green-800': jawaban === ops.charAt(0) && jawaban === benar,
            'bg-red-50 border-red-400 text-red-800': jawaban === ops.charAt(0) && jawaban !== benar
          }" x-text="ops"></li>
                </template>
              </ul>

              <!-- Jika SALAH: hanya tampilkan pesan singkat, dengan animasi smooth -->
              <div x-cloak x-show="jawaban && jawaban !== benar"
                x-transition:enter="motion-safe:transition motion-safe:duration-300"
                x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="motion-safe:transition motion-safe:duration-200"
                x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-2"
                class="mt-4 p-4 rounded-xl bg-red-50 border-l-4 border-red-500" aria-live="polite">
                <div class="font-semibold text-red-700">Jawaban kamu salahh.</div>
              </div>

              <!-- Jika BENAR: tampilkan pembahasan dengan fade + slide + sedikit scale -->
              <div x-cloak x-show="jawaban === benar"
                x-transition:enter="motion-safe:transition motion-safe:duration-400 motion-safe:ease-out"
                x-transition:enter-start="opacity-0 -translate-y-2 scale-[0.98]"
                x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                x-transition:leave="motion-safe:transition motion-safe:duration-200 motion-safe:ease-in"
                x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                x-transition:leave-end="opacity-0 -translate-y-1 scale-[0.99]"
                class="bg-sky-50 border-l-4 border-sky-400 p-4 rounded-r-xl mt-4" aria-live="polite">
                <div class="font-semibold text-sky-800">Pembahasan</div>
                <div class="mt-1 space-y-1">
                  <p>Persentase diskon</p>
                  <p>
                    \[
                    = \frac{diskon}{harga\ awal} \times 100\%
                    \]
                  </p>
                  <p>
                    \[
                    = \frac{30.000 - 22.500}{30.000} \times 100\%
                    \]
                  </p>
                  <p>
                    \[
                    = \frac{7500}{30.000} \times 100\%
                    \]
                  </p>
                  <p>\[ = 25\% \]</p>
                  <p class="font-bold">Jawaban benar: B</p>
                </div>
              </div>

              <!-- Tombol reset -->
              <div class="mt-4">
                <button type="button" @click="jawaban = null" class="text-sm px-3 py-1.5 rounded-lg border border-sky-200 hover:bg-sky-50 text-sky-700
               motion-safe:transition motion-safe:duration-200">
                  Ulangi
                </button>
              </div>
            </div>
          </article>


        </section>




        {{-- B. Contoh Soal Penerapan --}}


        <section>
          <h2
            class="text-2xl md:text-3xl font-bold text-sky-700 flex items-center gap-3 border-b-4 border-sky-400 pb-2 mb-6">
            Contoh Soal Penerapan
          </h2>
          <article x-data="{
    jawaban: null,
    benar: 'C',
    opsi: ['A. 0,7 m2','B. 0,9 m2','C. 1,4 m2','D. 1,6 m2']
  }" x-effect="if (jawaban === benar && window.MathJax) { $nextTick(() => MathJax.typeset()); }"
            class="bg-white rounded-2xl border border-sky-100 shadow-md overflow-hidden">
            <div class="p-6">
              <h3 class="text-xl font-bold text-sky-800 mb-3">Setelah pintu selesai dibuat, tukang kayu mengecat sisi
                muka dan sisi belakang permukaan pintu. Jika panjang kaca yang digunakan adalah 1,5 m, luas permukaan
                pintu yang perlu dicat adalah…</h3>

              <ul class="grid sm:grid-cols-2 md:grid-cols-4 gap-3 mb-4">
                <template x-for="(ops, i) in opsi" :key="i">
                  <li role="button" tabindex="0" @click="jawaban = ops.charAt(0)"
                    @keydown.enter.space.prevent="jawaban = ops.charAt(0)" class="cursor-pointer bg-sky-50 border border-sky-100 rounded-lg px-3 py-2 ring-offset-2
                 motion-safe:transition motion-safe:duration-200 motion-safe:ease-out
                 hover:shadow-sm focus:shadow-sm
                 motion-safe:hover:-translate-y-0.5 motion-safe:active:translate-y-0
                 motion-safe:hover:scale-[1.02]" :class="{
            'ring-2 ring-sky-400 font-semibold text-sky-700': jawaban === ops.charAt(0),
            'bg-green-50 border-green-400 text-green-800': jawaban === ops.charAt(0) && jawaban === benar,
            'bg-red-50 border-red-400 text-red-800': jawaban === ops.charAt(0) && jawaban !== benar
          }" x-text="ops"></li>
                </template>
              </ul>

              <!-- Jika SALAH: hanya tampilkan pesan singkat, dengan animasi smooth -->
              <div x-cloak x-show="jawaban && jawaban !== benar"
                x-transition:enter="motion-safe:transition motion-safe:duration-300"
                x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="motion-safe:transition motion-safe:duration-200"
                x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-2"
                class="mt-4 p-4 rounded-xl bg-red-50 border-l-4 border-red-500" aria-live="polite">
                <div class="font-semibold text-red-700">Jawaban kamu salahh.</div>
              </div>

              <!-- Jika BENAR: tampilkan pembahasan dengan fade + slide + sedikit scale -->
              <div x-cloak x-show="jawaban === benar"
                x-transition:enter="motion-safe:transition motion-safe:duration-400 motion-safe:ease-out"
                x-transition:enter-start="opacity-0 -translate-y-2 scale-[0.98]"
                x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                x-transition:leave="motion-safe:transition motion-safe:duration-200 motion-safe:ease-in"
                x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                x-transition:leave-end="opacity-0 -translate-y-1 scale-[0.99]"
                class="bg-sky-50 border-l-4 border-sky-400 p-4 rounded-r-xl mt-4" aria-live="polite">
                <div class="font-semibold text-sky-800">Pembahasan</div>
                <div class="mt-1 space-y-1">
                  <img src="{{ asset('images/pembahasan2.png') }}" alt="">
                  <p>Perbandingan panjang dan lebar pintu = perbandingan panjang dan lebar kaca.</p>
                  <p class="text-xs">
                    \[
                    \frac{Panjang\ Pintu}{Lebar\ Pintu} = \frac{Panjang\ Kaca}{Lebar\ Kaca}
                    \]
                  </p>

                  <p class="text-xs">
                    \[
                    \frac{5}{2} = \frac{1,5\,m}{Lebar\ Kaca}
                    \]
                  </p>

                  <p class="text-xs">
                    \( \frac{5}{2} = \frac{1,5\,m}{Lebar\ Kaca} \)
                  </p>

                  <p>Lebar Kaca = 60cm</p>
                  <p>Luas permukaan pintu yang akan dicat adalah :</p>
                  <p>2 × (luas permukaan pintu – luas permukaan kaca)</p>
                  <p>2 × {(200 cm × 80 cm) – (150 cm × 60 cm)}</p>
                  <p>2 × {16.000 cm<sup>2</sup> – 9.000 cm<sup>2</sup>}</p>
                  <p>2 × 7.000 cm<sup>2</sup></p>
                  <p>14.000 cm<sup>2</sup></p>
                  <p>1,4 m<sup>2</sup></p>


                  <p class="font-bold">Jawaban benar: C</p>
                </div>
              </div>

              <!-- Tombol reset -->
              <div class="mt-4">
                <button type="button" @click="jawaban = null" class="text-sm px-3 py-1.5 rounded-lg border border-sky-200 hover:bg-sky-50 text-sky-700
               motion-safe:transition motion-safe:duration-200">
                  Ulangi
                </button>
              </div>
            </div>
          </article>
        </section>


        {{-- C. Contoh Soal Penalaran --}}
        <section>
          <h2
            class="text-2xl md:text-3xl font-bold text-sky-700 flex items-center gap-3 border-b-4 border-sky-400 pb-2 mb-6">
            Contoh Soal Penalaran
          </h2>
          <article x-data="{
    jawaban: null,
    benar: 'B',
    opsi: ['A. Toko Riang','B. Toko Gembira','C. Toko Ceria','D. Toko Bahagia']
  }" x-effect="if (jawaban === benar && window.MathJax) { $nextTick(() => MathJax.typeset()); }"
            class="bg-white rounded-2xl border border-sky-100 shadow-md overflow-hidden">
            <div class="p-6">
              <h3 class="text-xl font-bold text-sky-800 mb-3">Bu Andin memiliki anak kembar. Ia ingin membeli dua baju
                yang sama untuk anak kembarnya. Bu Andin sudah menentukan baju yang ingin ia beli. Harga 1 baju tersebut
                Rp. 125.000,00. Baju tersebut dijual di beberapa toko dengan penawaran diskon yang berbeda-beda</h3>
              <img src="{{ asset('images/pembahasan3.png') }}" alt="">

              <h3 class="text-xl font-bold text-sky-800 mb-3"> Di toko mana Bu Andin sebaiknya membeli baju tersebut
                agar ia mengeluarkan uang seminimal mungkin?</h3>

              <ul class="grid sm:grid-cols-2 md:grid-cols-4 gap-3 mb-4">
                <template x-for="(ops, i) in opsi" :key="i">
                  <li role="button" tabindex="0" @click="jawaban = ops.charAt(0)"
                    @keydown.enter.space.prevent="jawaban = ops.charAt(0)" class="cursor-pointer bg-sky-50 border border-sky-100 rounded-lg px-3 py-2 ring-offset-2
                 motion-safe:transition motion-safe:duration-200 motion-safe:ease-out
                 hover:shadow-sm focus:shadow-sm
                 motion-safe:hover:-translate-y-0.5 motion-safe:active:translate-y-0
                 motion-safe:hover:scale-[1.02]" :class="{
            'ring-2 ring-sky-400 font-semibold text-sky-700': jawaban === ops.charAt(0),
            'bg-green-50 border-green-400 text-green-800': jawaban === ops.charAt(0) && jawaban === benar,
            'bg-red-50 border-red-400 text-red-800': jawaban === ops.charAt(0) && jawaban !== benar
          }" x-text="ops"></li>
                </template>
              </ul>

              <!-- Jika SALAH: hanya tampilkan pesan singkat, dengan animasi smooth -->
              <div x-cloak x-show="jawaban && jawaban !== benar"
                x-transition:enter="motion-safe:transition motion-safe:duration-300"
                x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="motion-safe:transition motion-safe:duration-200"
                x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-2"
                class="mt-4 p-4 rounded-xl bg-red-50 border-l-4 border-red-500" aria-live="polite">
                <div class="font-semibold text-red-700">Jawaban kamu salahh.</div>
              </div>

              <!-- Jika BENAR: tampilkan pembahasan dengan fade + slide + sedikit scale -->
              <div x-cloak x-show="jawaban === benar"
                x-transition:enter="motion-safe:transition motion-safe:duration-400 motion-safe:ease-out"
                x-transition:enter-start="opacity-0 -translate-y-2 scale-[0.98]"
                x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                x-transition:leave="motion-safe:transition motion-safe:duration-200 motion-safe:ease-in"
                x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                x-transition:leave-end="opacity-0 -translate-y-1 scale-[0.99]"
                class="bg-sky-50 border-l-4 border-sky-400 p-4 rounded-r-xl mt-4" aria-live="polite">
                <div class="font-semibold text-sky-800">Pembahasan</div>
                <div class="mt-1 space-y-1">
                  <p>Untuk menentukan harga beli baju yang termurah, kita cukup menganalisis persentase diskon.</p>

                  <div>
                    <p>Toko Riang</p>

                    <p>Beli 1, artinya diskon 0%</p>

                    <p>Gratis 1, artinya diskon 100%</p>

                    <p>Total persentase diskon</p>

                    <p>
                      \[
                      = \frac{0\% + 100\%}{2} = \frac{100\%}{2} = 50\%
                      \]
                    </p>

                  </div>

                  <div>
                    <p>Toko Gembira</p>

                    <p>Diskon 50% + 20%, artinya:</p>

                    <p>Total persentase diskon</p>

                    <p>
                      \[
                      = 50\% + \{20\% \times (100\% - 50\%)\}
                      \]
                    </p>

                    <p>
                      \[
                      = 50\% + \{20\% \times 50\%\}
                      \]
                    </p>

                    <p>
                      \[
                      = 50\% + 10\%
                      \]
                    </p>

                    <p>
                      \[
                      = 60\%
                      \]
                    </p>

                  </div>

                  <div>
                    <p>Toko Ceria</p>
                    <p>Persentase diskon 40%</p>
                  </div>

                  <div>
                    <p>Toko Bahagia</p>

                    <p>Pembelian ke-1: diskon 0%</p>

                    <p>Pembelian ke-2: diskon 90%</p>

                    <p>Total persentase diskon</p>

                    <p>
                      \[
                      = \frac{0\% + 90\%}{2} = \frac{90\%}{2} = 45\%
                      \]
                    </p>

                  </div>


                  <p class="font-bold">
                    Jadi, agar Bu Andin mengeluarkan uang seminimla mungkin,
                    ia sebaiknya membeli baju di toko dengan penawaran diskon terbesar,
                    yaitu di toko Gembira.
                  </p>
                </div>
              </div>

              <!-- Tombol reset -->
              <div class="mt-4">
                <button type="button" @click="jawaban = null" class="text-sm px-3 py-1.5 rounded-lg border border-sky-200 hover:bg-sky-50 text-sky-700
               motion-safe:transition motion-safe:duration-200">
                  Ulangi
                </button>
              </div>
            </div>
          </article>
        </section>



        {{-- CTA --}}
        <section class="text-center py-10">
          <div class="bg-gradient-to-br from-sky-400 to-sky-600 rounded-2xl p-8 text-white shadow-2xl shadow-sky-200">
            <h2 class="text-3xl font-bold mb-3">Udah jago nihh?</h2>
            <p class="mb-6 max-w-2xl mx-auto">Coba taklukin tantangan ini</p>
            <a href="{{ route('materi-aljabar-soal') }}"
              class="inline-block bg-white text-sky-700 font-bold text-lg py-3 px-8 rounded-xl shadow-md hover:bg-sky-50 transform hover:-translate-y-0.5 transition-all duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-sky-600">
              Kerjakan Soal
            </a>
          </div>
        </section>

      </main>
    </div>
  </div>
</x-layouts.app>