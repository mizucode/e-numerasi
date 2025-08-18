<x-layouts.app>
  <x-slot:title>
    Data & Ketidakpastian | E-numerasi
  </x-slot:title>

  <div class="bg-sky-50 min-h-screen">
    <div class="container mx-auto px-6 py-10">

      {{-- HERO / HEADER --}}
      <header class="mb-14 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-sky-600 tracking-tight drop-shadow-sm">
          🎲 Soal dan Pembahasan!
        </h1>
        <p class="mt-4 text-lg text-sky-900/80 max-w-3xl mx-auto leading-relaxed">
          Yuk, jelajah bareng konsep penting statistika—dari data dan cara menyajikannya, sampai peluang
          dan frekuensi harapan—dengan gaya yang asyik, simpel, dan penuh contoh nyata.
        </p>

      </header>

      <main class="space-y-16">

        {{-- A. STATISTIKA --}}
        <section>
          <h2 class="text-3xl font-bold text-sky-700 border-b-4 border-sky-400 pb-2 mb-6 flex items-center gap-3">
            <span class="bg-sky-100 text-sky-600 p-2 rounded-lg shadow-sm">A</span>
            Statistika
          </h2>

          <p class="text-sky-900 text-lg mb-6 leading-relaxed">
            Statistika membantu kita mengumpulkan, menyusun, menampilkan, dan mengolah data agar mudah
            dipahami. Istilah-istilah kunci di bawah ini akan sering kamu temui.
            :contentReference[oaicite:2]{index=2}
          </p>

          {{-- Peta Konsep Utama --}}


          {{-- Latihan Terbimbing (dengan Kunci Tersembunyi) --}}
          <div class="bg-white p-6 rounded-xl shadow-md border border-sky-100 mt-8">
            <h3 class="font-bold text-2xl text-sky-700 mb-4">📝 Latihan Terbimbing</h3>

            {{-- Latihan 1: Market Day --}}
            <article class="space-y-2">
              <h4 class="text-lg font-semibold text-sky-800">(1) Market Day — Banyak Kue Terjual</h4>
              <div class="overflow-x-auto">
                <table class="min-w-[520px] border border-sky-200 text-sm">
                  <thead class="bg-sky-600 text-white">
                    <tr>
                      <th class="px-3 py-2 text-left">Nama Siswa</th>
                      <th class="px-3 py-2 text-left">Banyak Kue</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-sky-100">
                    <tr>
                      <td class="px-3 py-2">Nazwa Conita Anggraeni</td>
                      <td class="px-3 py-2">12</td>
                    </tr>
                    <tr>
                      <td class="px-3 py-2">Kirana Putri Permana</td>
                      <td class="px-3 py-2">7</td>
                    </tr>
                    <tr>
                      <td class="px-3 py-2">Alenna Kimberly Queen</td>
                      <td class="px-3 py-2">8</td>
                    </tr>
                    <tr>
                      <td class="px-3 py-2">Rayyan Putra Suryana</td>
                      <td class="px-3 py-2">11</td>
                    </tr>
                    <tr>
                      <td class="px-3 py-2">Insan Budiman</td>
                      <td class="px-3 py-2">13</td>
                    </tr>
                    <tr>
                      <td class="px-3 py-2">Muhamad Akta Hermansyah</td>
                      <td class="px-3 py-2">9</td>
                    </tr>
                    <tr>
                      <td class="px-3 py-2">Karina Putri Isnaini</td>
                      <td class="px-3 py-2">12</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <ul class="list-disc pl-5 text-sm space-y-1 mt-2">
                <li>Banyak siswa yang menjual &gt; 10 kue ada 4 siswa.</li>
                <li>Banyak siswa yang menjual &lt; 10 kue ada 4 siswa.</li>
                <li>Jumlah kue terjual seluruhnya 70 kue.</li>
                <li>Jumlah kue terjual seluruhnya 72 kue.</li>
              </ul>
              <details class="group rounded-lg border border-sky-200 bg-sky-50/40 p-4">
                <summary class="cursor-pointer font-medium text-sky-700 group-open:text-sky-900">Kunci &
                  Pembahasan</summary>
                <div class="mt-2 text-sm">
                  Total: \(12+7+8+11+13+9+12=72\). <br>
                  &gt;10: {12, 11, 13, 12} → 4 (benar). <br>
                  &lt;10: {7, 8, 9} → 3 (pernyataan 4 salah). <br>
                  Jadi, “72 kue” benar.
                </div>
              </details>
            </article>

            {{-- Latihan 2: Dua Kotak Tiket --}}
            <article class="space-y-2 mt-6">
              <h4 class="text-lg font-semibold text-sky-800">(2) Dua Kotak Tiket</h4>
              <p class="text-sm text-sky-900/90">
                Kotak kecil: 20 tiket (1–20), kotak besar: 100 tiket (1–100). Peluang ambil nomor 17
                lebih besar di kotak mana?
              </p>
              <ol class="list-decimal pl-5 text-sm space-y-1">
                <li>Kotak kecil (20 tiket)</li>
                <li>Kotak besar (100 tiket)</li>
                <li>Keduanya sama</li>
                <li>Tidak bisa ditentukan</li>
              </ol>
              <details class="group rounded-lg border border-sky-200 bg-sky-50/40 p-4">
                <summary class="cursor-pointer font-medium text-sky-700 group-open:text-sky-900">Kunci &
                  Pembahasan</summary>
                <div class="mt-2 text-sm">
                  \(P_{20}=\frac{1}{20}=0{,}05\) dan \(P_{100}=\frac{1}{100}=0{,}01\).
                  Lebih besar di kotak kecil → <strong>Jawaban: (1)</strong>.
                </div>
              </details>
            </article>

            {{-- Latihan 3: Distribusi Nilai --}}
            <article class="space-y-2 mt-6">
              <h4 class="text-lg font-semibold text-sky-800">(3) Distribusi Nilai Kelas VIII-B</h4>
              <div class="overflow-x-auto">
                <table class="min-w-[420px] border border-sky-200 text-sm">
                  <thead class="bg-sky-600 text-white">
                    <tr>
                      <th class="px-3 py-2 text-left">Nilai</th>
                      <th class="px-3 py-2 text-left">Frekuensi</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-sky-100">
                    <tr>
                      <td class="px-3 py-2">60</td>
                      <td class="px-3 py-2">6</td>
                    </tr>
                    <tr>
                      <td class="px-3 py-2">70</td>
                      <td class="px-3 py-2">8</td>
                    </tr>
                    <tr>
                      <td class="px-3 py-2">80</td>
                      <td class="px-3 py-2">9</td>
                    </tr>
                    <tr>
                      <td class="px-3 py-2">90</td>
                      <td class="px-3 py-2">5</td>
                    </tr>
                    <tr>
                      <td class="px-3 py-2">100</td>
                      <td class="px-3 py-2">2</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <ul class="list-disc pl-5 text-sm space-y-1 mt-1">
                <li>Siswa dengan nilai di atas rata-rata ada 24 orang.</li>
                <li>Siswa di bawah rata-rata mengikuti remedial: 14 orang.</li>
                <li>Median dan modus sama, yaitu 80.</li>
              </ul>
              <details class="group rounded-lg border border-sky-200 bg-sky-50/40 p-4">
                <summary class="cursor-pointer font-medium text-sky-700 group-open:text-sky-900">Kunci &
                  Pembahasan</summary>
                <div class="mt-2 text-sm space-y-1">
                  <p>Rata-rata: \( \bar{x}=\dfrac{60\cdot6+70\cdot8+80\cdot9+90\cdot5+100\cdot2}{30}
                    = \dfrac{2290}{30}\approx 76{,}33\).</p>
                  <p>Di atas mean: {80, 90, 100} → \(9+5+2=16\) (pernyataan 24 salah).</p>
                  <p>Di bawah mean: {60, 70} → \(6+8=14\) (benar).</p>
                  <p>Median: data ke-15 & ke-16 jatuh di 80 → median 80. Modus: frekuensi terbesar 9
                    di 80 → modus 80 (benar).</p>
                </div>
              </details>
            </article>

            {{-- Latihan 4: Teka-teki Bilangan --}}
            <article class="space-y-2 mt-6">
              <h4 class="text-lg font-semibold text-sky-800">(4) Teka-teki Bilangan</h4>
              <p class="text-sm text-sky-900/90">“Bilangan &lt; 5000, setiap digit genap, semua digit
                berbeda.” Carilah bilangan terbesar!</p>
              <details class="group rounded-lg border border-sky-200 bg-sky-50/40 p-4">
                <summary class="cursor-pointer font-medium text-sky-700 group-open:text-sky-900">Kunci &
                  Pembahasan</summary>
                <div class="mt-2 text-sm">
                  Digit genap: 0,2,4,6,8. Agar &lt; 5000 → ribuan = 4 (maksimal). Susun sisa digit
                  dari terbesar tanpa mengulang:
                  8,6,2 → <strong>4862</strong> adalah yang terbesar.
                </div>
              </details>
            </article>

            {{-- Latihan 5: Makna “Rata-rata” pada Iklan --}}
            <article class="space-y-2 mt-6">
              <h4 class="text-lg font-semibold text-sky-800">(5) Memaknai “Rata-rata” pada Iklan</h4>
              <p class="text-sm text-sky-900/90">
                Iklan: “Dijual mobil baru & bekas, harga berbeda, <em>rata-rata</em> harga 100 jutaan.”
                Manakah yang pasti benar?
              </p>
              <ol class="list-decimal pl-5 text-sm space-y-1">
                <li>Setidaknya satu mobil harganya 100 jutaan.</li>
                <li>Harga sebagian besar mobil 90–110 juta.</li>
                <li>Beberapa mobil harganya &lt; 100 juta.</li>
                <li>Setengahnya &lt; 100 juta dan setengahnya &gt; 100 juta.</li>
              </ol>
              <details class="group rounded-lg border border-sky-200 bg-sky-50/40 p-4">
                <summary class="cursor-pointer font-medium text-sky-700 group-open:text-sky-900">Kunci &
                  Pembahasan</summary>
                <div class="mt-2 text-sm">
                  Karena “harga berbeda” dan mean ≈ 100 juta, maka harus ada yang di bawah dan di atas
                  100 juta.
                  Yang <em>pasti benar</em>: <strong>(3)</strong>. (Pernyataan lain tidak selalu
                  benar.)
                </div>
              </details>
            </article>
          </div>
        </section>

        {{-- CTA --}}
        <section class="text-center py-10">
          <div class="bg-gradient-to-br from-sky-400 to-sky-600 rounded-2xl p-8 text-white shadow-2xl shadow-sky-200">
            <h2 class="text-3xl font-bold mb-3">Belum paham?</h2>
            <p class="mb-6 max-w-2xl mx-auto">
              Kembali belajar
            </p>
            <a href="{{ route('materi-data-dan-ketidakpastian') }}"
              class="inline-block bg-white text-sky-700 font-bold text-lg py-3 px-8 rounded-xl shadow-md hover:bg-sky-50 transform hover:-translate-y-0.5 transition-all duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-sky-600">
              Pelajari Materi Kembali!
            </a>
          </div>
        </section>

      </main>
    </div>
  </div>
</x-layouts.app>


<script>
  (function () {
    function retypeset() {
      if (window.MathJax && window.MathJax.typeset) {
        window.MathJax.typeset();
      }
    }
    document.addEventListener('DOMContentLoaded', retypeset);
    document.addEventListener('turbo:load', retypeset); // jika pakai Turbo/Hotwire
    document.addEventListener('livewire:load', retypeset); // jika pakai Livewire
    document.addEventListener('alpine:init', retypeset); // jika pakai Alpine
  })();
</script>