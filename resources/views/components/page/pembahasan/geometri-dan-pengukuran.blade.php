<x-layouts.app>
    <x-slot:title>
        Pembahasan & Soal Geometri & Pengukuran | E‑numerasi
    </x-slot:title>

    <div class="bg-sky-50 min-h-screen">
        <div class="container mx-auto px-6 py-10">
            <header class="mb-14 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-sky-600 tracking-tight drop-shadow-sm">
                    📏 Pembahasan & Latihan Soal Geometri & Pengukuran
                </h1>
                <p class="mt-4 text-lg text-sky-900/80 max-w-3xl mx-auto leading-relaxed">
                    Ayo kita pelajari materi penting di geometri dan pengukuran, lalu uji pemahamanmu lewat soal-soal
                    latihan yang seru.
                </p>
            </header>

            <main class="space-y-16">

                <!-- Pembahasan -->
                <section>
                    <h2 class="text-3xl font-bold text-sky-700 border-b-4 border-sky-400 pb-2 mb-6">Pembahasan Materi
                    </h2>
                    <!-- Soal: Keliling Bangun Bertingkat -->
                    <section class="space-y-6 rounded-2xl border border-sky-200 bg-white p-5 shadow-lg sm:p-6 md:p-8">
                        <h3 class="text-xl font-extrabold text-sky-700 sm:text-2xl">Keliling dari bangun berikut adalah
                            ….</h3>

                        <div class="grid gap-6 md:grid-cols-2">
                            <!-- Gambar -->
                            <figure class="order-2 md:order-1">
                                <img src="{{ asset('images/soal1.png') }}"
                                    alt="Bangun bertingkat berbentuk L: alas 25 cm, sisi kiri naik 12 cm, sisi kanan naik 10 cm"
                                    class="mx-auto w-full max-w-sm rounded-xl border border-sky-100 object-contain shadow-sm" />
                            </figure>

                            <!-- Pilihan Jawaban -->
                            <div class="order-1 md:order-2">
                                <ol class="list-[upper-alpha] space-y-2 pl-6 text-sky-900/90">
                                    <li>47 cm</li>
                                    <li>69 cm</li>
                                    <li class="font-semibold text-sky-700">94 cm</li>
                                    <li>tidak dapat ditentukan</li>
                                </ol>

                                <div
                                    class="mt-4 inline-flex items-center gap-2 rounded-full bg-sky-50 px-3 py-1 text-sm font-semibold text-sky-700">
                                    Kunci: <span class="rounded-full bg-sky-600 px-2 py-0.5 text-white">C</span>
                                </div>
                            </div>
                        </div>

                        <!-- Pembahasan (bisa disembunyikan) -->
                        <details class="group rounded-xl border border-sky-100">
                            <summary
                                class="flex cursor-pointer items-center justify-between gap-3 rounded-xl bg-sky-50 px-4 py-3 text-left font-semibold text-sky-800">
                                Pembahasan
                                <span class="text-lg leading-none group-open:hidden">＋</span>
                                <span class="hidden text-lg leading-none group-open:inline">−</span>
                            </summary>
                            <div class="space-y-3 p-4 text-sky-900/90">
                                <p>Misalkan alas \(25\ \text{cm}\) terbagi menjadi tiga segmen \(a\), \(b\), dan \(c\).
                                    Dari gambar,
                                    sisi miring kanan yang turun-naik diberi \(d\).</p>
                                <div class="rounded-xl border text-xs md:txt-xl border-gray-200 bg-gray-50 px-4 py-3">
                                    \[
                                    a+b+c=25,\qquad d=10
                                    \]
                                    \[
                                    \begin{aligned}
                                    K
                                    &= (a+b+c)+12+12+10+25+d \\
                                    &= 25+12+12+10+25+10 \\
                                    &= 94\ \text{cm}.
                                    \end{aligned}
                                    \]
                                </div>
                                <p class="text-sm text-sky-700/80">Inti ide: jumlahkan semua sisi luar. Segmen
                                    horizontal kecil di bagian atas
                                    jika dijumlahkan sama dengan alas \(a+b+c=25\)</p>
                            </div>
                        </details>
                    </section>

                    {{-- Pastikan MathJax merender rumus --}}
                    <script>
                        document.addEventListener('DOMContentLoaded', () => {
                            if (window.MathJax?.typeset) window.MathJax.typeset();
                        });
                    </script>

                </section>
                <!-- Contoh Soal Penerapan: Kerangka Belah Ketupat & Layang-layang -->
                <section class="space-y-6 rounded-2xl border border-sky-200 bg-white p-5 shadow-lg sm:p-6 md:p-8">
                    <h3 class="text-xl font-extrabold text-sky-700 sm:text-2xl">Contoh Soal Penerapan</h3>

                    <div class="space-y-3 text-sky-900/90">
                        <p>
                            Opik membuat <span class="font-semibold">kerangka belah ketupat</span> dan
                            <span class="font-semibold">layang-layang</span> dari lidi seperti gambar.
                            Diketahui: \(AC=36\text{ cm}\), \(BD=48\text{ cm}\), \(PR=60\text{ cm}\),
                            \(OS=16\text{ cm}\), dan \(OQ=40\text{ cm}\).
                        </p>
                        <p>Jika panjang lidi yang tersedia \(5\text{ m}\), berapa sisa lidi yang tidak terpakai?</p>
                    </div>



                    <details class="group rounded-xl border border-sky-100">
                        <summary
                            class="flex cursor-pointer items-center justify-between gap-3 rounded-xl bg-sky-50 px-4 py-3 text-left font-semibold text-sky-800">
                            Pembahasan
                            <span class="text-lg leading-none group-open:hidden">＋</span>
                            <span class="hidden text-lg leading-none group-open:inline">−</span>
                        </summary>

                        <div class="space-y-5 p-4 text-sky-900/90">
                            <!-- Belah ketupat -->
                            <div class="space-y-2">
                                <h4 class="font-semibold text-sky-700">1) Kerangka belah ketupat</h4>
                                <p>Pada belah ketupat, diagonal saling tegak lurus dan membagi dua sama panjang.</p>
                                <div class="rounded-xl border border-gray-200 bg-gray-50 px-4 py-3">
                                    \[
                                    s=\sqrt{\left(\tfrac{AC}{2}\right)^2+\left(\tfrac{BD}{2}\right)^2}
                                    =\sqrt{18^2+24^2}=\sqrt{900}=30\text{ cm}
                                    \]
                                    \[
                                    K_{\text{belah}}=4s=4\times30=120\text{ cm}
                                    \]
                                </div>
                            </div>

                            <!-- Layang-layang -->
                            <div class="space-y-2">
                                <h4 class="font-semibold text-sky-700">2) Kerangka layang-layang</h4>
                                <p>
                                    Pada layang-layang, diagonal saling tegak lurus dan salah satunya
                                    <em>membagi dua</em> diagonal lainnya. Dari gambar, \(SQ\) membagi \(PR\),
                                    sehingga \(PO=OR=\tfrac{PR}{2}=30\text{ cm}\).
                                </p>
                                <div class="rounded-xl border border-gray-200 bg-gray-50 px-4 py-3">
                                    \[
                                    \begin{aligned}
                                    PQ &= \sqrt{PO^2+OQ^2}=\sqrt{30^2+40^2}=\sqrt{2500}=50\text{ cm},\\
                                    PS &= \sqrt{PO^2+OS^2}=\sqrt{30^2+16^2}=\sqrt{1156}=34\text{ cm}.
                                    \end{aligned}
                                    \]
                                    Karena pasangan sisi layang-layang sama, maka
                                    \(RQ=PQ=50\) dan \(RS=PS=34\).
                                    \[
                                    K_{\text{layang}}=2(PQ+PS)=2(50+34)=168\text{ cm}.
                                    \]
                                </div>
                                <p class="text-xs text-sky-700/80">Cek cepat: gunakan tripel Pythagoras
                                    \(3\!:\!4\!:\!5\) (→ \(30,40,50\)) dan \(15\!:\!8\!:\!17\) (→ \(30,16,34\)).</p>
                            </div>

                            <!-- Total & Sisa -->
                            <div class="space-y-2">
                                <h4 class="font-semibold text-sky-700">3) Total lidi & sisa</h4>
                                <div class="rounded-xl border border-gray-200 bg-gray-50 px-4 py-3">
                                    \[
                                    \text{Total terpakai}=K_{\text{belah}}+K_{\text{layang}}
                                    =120+168=288\text{ cm}.
                                    \]
                                    Stok lidi \(=5\text{ m}=500\text{ cm}\).
                                    \[
                                    \textbf{Sisa}=500-288=\boxed{212\text{ cm}}.
                                    \]
                                </div>
                            </div>
                        </div>
                    </details>

                    <div class="text-right">
                        <span
                            class="inline-flex items-center gap-2 rounded-full bg-emerald-50 px-3 py-1 text-sm font-semibold text-emerald-700">
                            Jawaban: <span class="rounded-full bg-emerald-600 px-2 py-0.5 text-white">212 cm</span>
                        </span>
                    </div>
                </section>

                {{-- Render ulang MathJax bila perlu --}}



            </main>
        </div>
    </div>
</x-layouts.app>