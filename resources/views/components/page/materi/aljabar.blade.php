<x-layouts.app>
    <x-slot:title>Aljabar </x-slot:title>

    <div class="bg-grid-700 ">
        <div class="container mx-auto px-4 py-10 md:px-6 md:py-14">
            <header class="mb-10 text-center md:mb-14">
                <div
                    class="inline-flex items-center gap-2 rounded-full bg-sky-100 px-3 py-1 text-sm font-semibold text-sky-700">
                    ✨ Belajar Asyik Bareng Aljabar
                </div>
                <h1 class="mt-3 text-4xl font-extrabold tracking-tight text-white md:text-5xl">
                    Materi : Aljabar
                </h1>
                <p class="mt-3 text-base text-gray-100 md:mt-4 md:text-lg">
                    Penjelasan singkat, langkah jelas, contoh, dan latihan mini.
                    Yuk, pelan‑pelan tapi pasti!
                </p>
            </header>

            <main class="space-y-14 md:space-y-16">
                <section id="pola-bilangan" class="rounded-2xl bg-white p-4 md:p-6">
                    <div class="container mx-auto px-4 max-w-7xl">
                        <!-- Header Section -->
                        <div class="text-center mb-10">
                            <div class="inline-flex items-center justify-center mb-4">
                                <div class="w-3 h-3 rounded-full bg-sky-500 mr-2"></div>
                                <div class="w-5 h-5 rounded-full bg-sky-500 mr-2"></div>
                                <div class="w-7 h-7 rounded-full bg-sky-500"></div>
                            </div>
                            <h2 class="text-3xl md:text-4xl font-bold text-sky-800 mb-3">
                                Pola Barisan Bilangan
                            </h2>
                            <p class="text-sky-600 max-w-2xl mx-auto">
                                Eksplorasi berbagai pola bilangan matematika
                                yang menarik dan rumus-rumusnya
                            </p>
                        </div>

                        <!-- Grid of Cards -->
                        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                            <!-- Card 1: Pola Bilangan Persegi Panjang -->
                            <article
                                class="group relative overflow-hidden rounded-2xl bg-white shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                                <div
                                    class="absolute inset-0 bg-gradient-to-br from-red-50 to-red-100 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-0">
                                </div>
                                <div class="relative z-10">
                                    <div
                                        class="flex w-full items-center justify-between p-5 transition-colors group-hover:bg-red-500/5">
                                        <h3
                                            class="text-lg font-semibold text-sky-800 group-hover:text-red-700 transition-colors">
                                            Pola Bilangan Persegi Panjang
                                        </h3>
                                    </div>
                                    <div class="px-5 pb-5 pt-2">
                                        <div
                                            class="overflow-hidden rounded-xl border border-red-200 bg-gradient-to-b from-white to-red-50/50 p-2 mb-3">
                                            <img class="h-auto w-full object-contain" loading="lazy" src="{{
    asset(
        'images/polapersegipanjang.png'
    )
                                                }}" alt="Ilustrasi Pola Bilangan Persegi Panjang" />
                                        </div>
                                        <p class="text-gray-600 bg-red-50/30 rounded-lg p-3 border border-red-100">
                                            Pola bilangan persegi panjang adalah
                                            \(n(n+1)\)
                                        </p>
                                    </div>
                                </div>
                            </article>

                            <!-- Card 2: Pola Bilangan Persegi -->
                            <article
                                class="group relative overflow-hidden rounded-2xl bg-white shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                                <div
                                    class="absolute inset-0 bg-gradient-to-br from-emerald-50 to-emerald-100 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-0">
                                </div>
                                <div class="relative z-10">
                                    <div
                                        class="flex w-full items-center justify-between p-5 transition-colors group-hover:bg-emerald-500/5">
                                        <h3
                                            class="text-lg font-semibold text-sky-800 group-hover:text-emerald-700 transition-colors">
                                            Pola Bilangan Persegi
                                        </h3>
                                    </div>
                                    <div class="px-5 pb-5 pt-2">
                                        <div
                                            class="overflow-hidden rounded-xl border border-emerald-200 bg-gradient-to-b from-white to-emerald-50/50 p-2 mb-3">
                                            <img class="h-auto w-full object-contain" loading="lazy" src="{{
    asset(
        'images/polapersegi.png'
    )
                                                }}" alt="Ilustrasi Pola Bilangan Persegi" />
                                        </div>
                                        <p
                                            class="text-gray-600 bg-emerald-50/30 rounded-lg p-3 border border-emerald-100">
                                            Pola bilangan persegi adalah \(n^2\)
                                        </p>
                                    </div>
                                </div>
                            </article>

                            <!-- Card 3: Pola Bilangan Segitiga -->
                            <article
                                class="group relative overflow-hidden rounded-2xl bg-white shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                                <div
                                    class="absolute inset-0 bg-gradient-to-br from-amber-50 to-amber-100 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-0">
                                </div>
                                <div class="relative z-10">
                                    <div
                                        class="flex w-full items-center justify-between p-5 transition-colors group-hover:bg-amber-500/5">
                                        <h3
                                            class="text-lg font-semibold text-sky-800 group-hover:text-amber-700 transition-colors">
                                            Pola Bilangan Segitiga
                                        </h3>
                                    </div>
                                    <div class="px-5 pb-5 pt-2">
                                        <div
                                            class="overflow-hidden rounded-xl border border-amber-200 bg-gradient-to-b from-white to-amber-50/50 p-2 mb-3">
                                            <img class="h-auto w-full object-contain" loading="lazy" src="{{
    asset(
        'images/polasegitiga.png'
    )
                                                }}" alt="Ilustrasi Pola Bilangan Segitiga" />
                                        </div>
                                        <p class="text-gray-600 bg-amber-50/30 rounded-lg p-3 border border-amber-100">
                                            Pola bilangan segitiga adalah
                                            \(\tfrac{n(n+1)}{2}\)
                                        </p>
                                    </div>
                                </div>
                            </article>

                            <!-- Card 4: Pola Bilangan Pascal -->
                            <article
                                class="group relative overflow-hidden rounded-2xl bg-white shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                                <div
                                    class="absolute inset-0 bg-gradient-to-br from-fuchsia-50 to-fuchsia-100 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-0">
                                </div>
                                <div class="relative z-10">
                                    <div
                                        class="flex w-full items-center justify-between p-5 transition-colors group-hover:bg-fuchsia-500/5">
                                        <h3
                                            class="text-lg font-semibold text-sky-800 group-hover:text-fuchsia-700 transition-colors">
                                            Pola Bilangan Pascal
                                        </h3>
                                    </div>
                                    <div class="px-5 pb-5 pt-2">
                                        <div class="bg-fuchsia-50/30 rounded-lg p-4 border border-fuchsia-100">
                                            <p class="text-gray-600">
                                                Pola bilangan segitiga Pascal
                                                dapat digunakan untuk menentukan
                                                koefisien pada suku banyak
                                                \((a+b)^n\) dengan \(n \in
                                                \mathbb{N}\).
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <!-- Card 5: Pola Bilangan Ganjil -->
                            <article
                                class="group relative overflow-hidden rounded-2xl bg-white shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                                <div
                                    class="absolute inset-0 bg-gradient-to-br from-rose-50 to-rose-100 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-0">
                                </div>
                                <div class="relative z-10">
                                    <div
                                        class="flex w-full items-center justify-between p-5 transition-colors group-hover:bg-rose-500/5">
                                        <h3
                                            class="text-lg font-semibold text-sky-800 group-hover:text-rose-700 transition-colors">
                                            Pola Bilangan Ganjil
                                        </h3>
                                    </div>
                                    <div class="px-5 pb-5 pt-2">
                                        <div
                                            class="overflow-hidden rounded-xl border border-rose-200 bg-gradient-to-b from-white to-rose-50/50 p-2 mb-3">
                                            <img class="h-auto w-full object-contain" loading="lazy" src="{{
    asset(
        'images/polaganjil.png'
    )
                                                }}" alt="Ilustrasi Pola Bilangan Ganjil" />
                                        </div>
                                        <p class="text-gray-600 bg-rose-50/30 rounded-lg p-3 border border-rose-100">
                                            Pola bilangan ganjil adalah
                                            \(2n-1\).
                                        </p>
                                    </div>
                                </div>
                            </article>

                            <!-- Card 6: Pola Bilangan Genap -->
                            <article
                                class="group relative overflow-hidden rounded-2xl bg-white shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                                <div
                                    class="absolute inset-0 bg-gradient-to-br from-indigo-50 to-indigo-100 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-0">
                                </div>
                                <div class="relative z-10">
                                    <div
                                        class="flex w-full items-center justify-between p-5 transition-colors group-hover:bg-indigo-500/5">
                                        <h3
                                            class="text-lg font-semibold text-sky-800 group-hover:text-indigo-700 transition-colors">
                                            Pola Bilangan Genap
                                        </h3>
                                    </div>
                                    <div class="px-5 pb-5 pt-2">
                                        <div
                                            class="overflow-hidden rounded-xl border border-indigo-200 bg-gradient-to-b from-white to-indigo-50/50 p-2 mb-3">
                                            <img class="h-auto w-full object-contain" loading="lazy" src="{{
    asset(
        'images/polagenap.png'
    )
                                                }}" alt="Ilustrasi Pola Bilangan Genap" />
                                        </div>
                                        <p
                                            class="text-gray-600 bg-indigo-50/30 rounded-lg p-3 border border-indigo-100">
                                            Pola bilangan genap adalah \(2n\).
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </section>

                <section id="barisan-deret" class="rounded-2xl bg-white p-4 md:p-6">
                    <!-- Header Section -->
                    <div class="text-center mb-10">
                        <div class="inline-flex items-center justify-center mb-4">
                            <div class="w-3 h-3 rounded-full bg-sky-500 mr-2"></div>
                            <div class="w-5 h-5 rounded-full bg-sky-500 mr-2"></div>
                            <div class="w-7 h-7 rounded-full bg-sky-500"></div>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold text-sky-800 mb-3">
                            Barisan dan Deret
                        </h2>
                    </div>

                    <div class="grid gap-6 lg:grid-cols-2">
                        <article
                            class="group overflow-hidden rounded-2xl border border-emerald-100 bg-white shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg focus-within:shadow-lg">
                            <div
                                class="flex w-full items-center justify-between gap-3 bg-emerald-50/70 px-5 py-4 text-left">
                                <h3 class="text-xl font-semibold text-emerald-800">
                                    Barisan Aritmatika
                                </h3>
                            </div>
                            <div class="prose max-w-none space-y-3 px-5 pb-5 pt-3">
                                <p>
                                    Setiap suku berurutan pada barisan
                                    aritmetika memiliki beda yang tetap. Bentuk
                                    umum barisan aritmetika adalah sebagai
                                    berikut.
                                </p>
                                <div
                                    class="not-prose inline-block rounded-lg border border-gray-200 bg-gray-50 px-4 py-2">
                                    \( a,\; a+b,\; a+2b,\; a+3b,\; \ldots \)
                                </div>

                                <p>
                                    Suku ke-n barisan aritmetika adalah sebagai
                                    berikut.
                                </p>
                                <div
                                    class="not-prose inline-block rounded-lg border border-gray-200 bg-gray-50 px-4 py-2">
                                    \( U_n = a + (n-1)b \)
                                </div>

                                <div>
                                    <p>
                                        <strong>Keterangan:</strong><br />
                                        a = suku pertama <br />
                                        b = beda
                                    </p>
                                </div>
                                <p>
                                    <strong>Contoh:</strong><br />
                                    Tentukan suku ke-20 dari barisan 4, 7, 10,
                                    13, 16, 19, ...
                                </p>
                                <p>
                                    <strong>Penyelesaian:</strong><br />
                                    Perhatikan pola berikut.
                                </p>
                                <img class="not-prose h-auto w-full rounded-lg border border-emerald-100"
                                    src="{{ asset('images/contohderet.png') }}" alt="" />
                                <p>
                                    Setiap suku berikutnya diperoleh dengan menambah 3 pada suku sebelumnya
                                    &rarr; \( b = 3 \).
                                </p>

                                $$ \begin{aligned} \text{Suku ke-20} = U_{20} &=
                                4 + (20 - 1) \times 3 \\ &= 4 + 19 \times 3 \\
                                &= 4 + 57 \\ &= 61 \end{aligned} $$
                            </div>
                        </article>

                        <article
                            class="group overflow-hidden rounded-2xl border border-emerald-100 bg-white shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg focus-within:shadow-lg">
                            <div
                                class="flex w-full items-center justify-between gap-3 bg-emerald-50/70 px-5 py-4 text-left">
                                <h3 class="text-xl font-semibold text-emerald-800">
                                    Deret Aritmatika
                                </h3>
                            </div>
                            <div class="prose max-w-none space-y-3 px-5 pb-5 pt-3">
                                <p>
                                    Bentuk umum deret aritmetika adalah sebagai
                                    berikut.
                                </p>
                                <img class="not-prose h-auto w-full rounded-lg border border-emerald-100" src="{{
    asset('images/deretartimatika.png')
                                    }}" alt="" />
                                <p>
                                    Jumlah n suku pertama dari deret aritmetika
                                    adalah sebagai berikut.
                                </p>
                                <img class="not-prose h-auto w-full rounded-lg border border-emerald-100"
                                    src="{{ asset('images/deret2.png') }}" alt="" />
                                <p>
                                    <strong>Contoh:</strong><br />
                                    Diketahui deret 4+7+10+13+16+19+... <br />
                                    Tentukan jumlah 20 suku pertama deret
                                    tersebut.
                                </p>
                                <p><strong>Penyelesaian:</strong></p>
                                <p>Jumlah 20 suku pertama</p>
                                <div class="text-sm">
                                    $$ \begin{aligned} S_{20} &= \tfrac{1}{2} \times 20 (4 + U_{20})
                                    \\ &= 10 (4 + 61) \\ &= 650 \end{aligned} $$
                                    </divc>
                                </div>
                        </article>

                        <article
                            class="group overflow-hidden rounded-2xl border border-emerald-100 bg-white shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg focus-within:shadow-lg">
                            <div
                                class="flex w-full items-center justify-between gap-3 bg-emerald-50/70 px-5 py-4 text-left">
                                <h3 class="text-xl font-semibold text-emerald-800">
                                    Deret Aritmatika Bertingkat
                                </h3>
                            </div>
                            <div class="space-y-4 px-5 pb-5 pt-3">
                                <p class="text-gray-600">
                                    Bentuk umum deret aritmetika bertingkat
                                    adalah sebagai berikut.
                                </p>
                                <img class="h-auto w-full rounded-lg border border-emerald-100" src="{{
    asset('images/aritmatingkat.png')
                                    }}" alt="" />
                                <p class="text-gray-600">
                                    Jumlah n suku pertama dari deret aritmetika
                                    adalah sebagai berikut.
                                </p>
                                <img class="h-auto w-full rounded-lg border border-emerald-100"
                                    src="{{ asset('images/deret2.png') }}" alt="" />
                                <div class="flex flex-col gap-4 md:flex-row">
                                    <div class="space-y-1">
                                        <p><strong>Catatan:</strong></p>
                                        <p>
                                            Barisan tingkat 2 hanya menggunakan
                                            rumus sampai c.
                                        </p>
                                        <p>
                                            Barisan tingkat 3 menggunakan rumus
                                            sampai d.
                                        </p>
                                        <p><strong>Contoh:</strong></p>
                                        <p>
                                            Tentukan suku ke-20 dari barisan 4,
                                            7, 12, 19, 28, 39, ...
                                        </p>
                                    </div>
                                    <div>
                                        <img class="max-w-full rounded-lg border border-emerald-100" src="{{
    asset('images/tingkat2.png')
                                            }}" alt="" />
                                    </div>
                                </div>
                                <div class="prose max-w-none">
                                    <h2 class="mb-2">Penyelesaian:</h2>
                                    <p>Perhatikan pola bilangan berikut.</p>
                                    $$ \begin{aligned} a &\leftarrow\;
                                    4,\,7,\,12,\,19,\,28,\,39,\ldots\\[2pt] b
                                    &\leftarrow\; 3\quad 5\quad 7\quad 9\quad
                                    11\\[2pt] c &\leftarrow\; 2\quad 2\quad
                                    2\quad 2 \end{aligned} $$
                                    <p>
                                        Perhatikan bahwa selisih yang sama
                                        diperoleh pada tingkat 2, berarti:
                                    </p>
                                    <span class="text-sm"> $$ U_n \;=\; a \;+\; b\,(n-1) \;+\;
                                        \frac{c}{2!}\,(n-1)(n-2)$$</span>
                                    <p>Maka untuk \( n = 20 \)</p>

                                    $$ \begin{aligned} U_{20} &= 4 + 3(19) +
                                    \frac{2}{2\times 1}(19)(18)\\ &= 4 + 57 +
                                    342\\ &= \boxed{403} \end{aligned} $$
                                </div>
                            </div>
                        </article>

                        <article
                            class="group overflow-hidden rounded-2xl border border-emerald-100 bg-white shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg focus-within:shadow-lg">
                            <div
                                class="flex w-full items-center justify-between gap-3 bg-emerald-50/70 px-5 py-4 text-left">
                                <h3 class="text-xl font-semibold text-emerald-800">
                                    Barisan Geometri
                                </h3>
                            </div>
                            <div class="space-y-3 px-5 pb-5 pt-3">
                                <p class="text-gray-600">
                                    Setiap suku berurutan pada barisan geometri
                                    mempunyai rasio yang tetap. Bentuk umum
                                    barisan geometri adalah sebagai berikut.
                                </p>
                                <img class="h-auto w-full rounded-lg border border-emerald-100" src="{{
    asset('images/barisangeometri.png')
                                    }}" alt="" />
                                <p class="text-gray-600">
                                    Suku ke-n dari barisan geometri adalah
                                    sebagai berikut:
                                </p>
                                <img class="h-auto w-full rounded-lg border border-emerald-100" src="{{
    asset('images/barisangeometri2.png')
                                    }}" alt="" />
                                <div class="prose max-w-none space-y-6">
                                    <p><strong>Keterangan:</strong></p>

                                    <p>
                                        <strong>Contoh:</strong><br />
                                        Tentukan suku ke-10 dari barisan 3, 6,
                                        12, 24, 48, …
                                    </p>
                                    <p>
                                        <strong>Penyelesaian:</strong><br />
                                        Perhatikan bahwa suku berikutnya
                                        diperoleh dengan mengalikan suku
                                        sebelumnya dengan 2, berarti r = 2
                                    </p>
                                    <p><strong>Suku ke-10</strong></p>
                                    $$ \begin{aligned} U_{10} &= 3 \times
                                    2^{(10-1)} \\[6pt] &= 3 \times 2^9 \\[6pt]
                                    &= 1536 \end{aligned} $$
                                </div>
                            </div>
                        </article>

                        <article
                            class="group overflow-hidden rounded-2xl border border-emerald-100 bg-white shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg focus-within:shadow-lg">
                            <div
                                class="flex w-full items-center justify-between gap-3 bg-emerald-50/70 px-5 py-4 text-left">
                                <h3 class="text-xl font-semibold text-emerald-800">
                                    Deret Geometri
                                </h3>
                            </div>
                            <div class="space-y-3 px-5 pb-5 pt-3">
                                <p class="text-gray-600">
                                    Bentuk umum deret geometri adalah sebagai
                                    berikut.
                                </p>
                                <img class="h-auto w-full rounded-lg border border-emerald-100" src="{{
    asset('images/deretgeometri.png')
                                    }}" alt="" />
                                <p class="text-gray-600">
                                    Jumlah n suku pertama dari deret geometri
                                    adalah sebagai berikut.
                                </p>
                                <img class="h-auto w-full rounded-lg border border-emerald-100" src="{{
    asset('images/deretgeometri2.png')
                                    }}" alt="" />
                                <div class="prose max-w-none">
                                    <p>
                                        <strong>Contoh:</strong><br />
                                        Tentukan jumlah 8 suku pertama \( 3 + 6 + 12 + 24 + 48 + \ldots \).
                                    </p>

                                    <p><strong>Penyelesaian:</strong></p>
                                    <p>Jumlah 8 suku pertama</p>
                                    $$ \begin{aligned} S_8 &= \frac{a \left(r^n
                                    - 1\right)}{r - 1} \\[6pt] &= \frac{3
                                    \left(2^8 - 1\right)}{2 - 1} \\[6pt] &= 3
                                    \times 255 \\[6pt] &= 765 \end{aligned} $$
                                </div>
                            </div>
                        </article>
                    </div>
                </section>

                <section id="aritmetika-sosial" class="rounded-2xl bg-white p-4 md:p-6">
                    <div class="mx-auto max-w-7xl">
                        <!-- Header -->
                        <div class="text-center mb-10">
                            <div class="inline-flex items-center justify-center mb-4">
                                <div class="w-3 h-3 rounded-full bg-sky-500 mr-2"></div>
                                <div class="w-5 h-5 rounded-full bg-sky-500 mr-2"></div>
                                <div class="w-7 h-7 rounded-full bg-sky-500"></div>
                            </div>
                            <h2 class="text-3xl md:text-4xl font-bold text-sky-800 mb-3">
                                Aritmatika Sosial </h2>
                        </div>

                        <!-- Grid Cards -->
                        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                            <!-- Pengenalan -->
                            <article
                                class="group overflow-hidden rounded-2xl border border-sky-100 bg-white shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg focus-within:shadow-lg">
                                <div
                                    class="flex w-full items-center justify-between gap-3 bg-sky-50/70 px-5 py-4 text-left">
                                    <h3 class="font-semibold text-sky-800">
                                        Pengenalan
                                    </h3>
                                </div>
                                <div class="space-y-3 px-5 pb-5 pt-3 text-sm leading-relaxed text-gray-700">
                                    <p>
                                        Aritmetika sosial mempelajari tentang
                                        operasi hitung suatu bilangan yang
                                        berkaitan dengan kehidupan sehari-hari.
                                        Kegiatan jual beli atau perdagangan
                                        sering dijumpai dalam kehidupan
                                        sehari-hari.
                                    </p>
                                    <p>
                                        Dalam perdagangan terdapat penjual dan
                                        pembeli. Jika ingin memperoleh barang
                                        yang diinginkan maka harus melakukan
                                        pertukaran untuk mendapatkannya.
                                        Contohnya, penjual menyerahkan barang
                                        kepada pembeli sebagai gantinya pembeli
                                        menyerahkan uang sebagai pengganti
                                        barang kepada penjual. Dalam aritmetika
                                        sosial akan dijumpai beberapa hal
                                        berikut.
                                    </p>
                                </div>
                            </article>

                            <!-- Untung & Rugi -->
                            <article
                                class="group overflow-hidden rounded-2xl border border-sky-100 bg-white shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg focus-within:shadow-lg">
                                <div
                                    class="flex w-full items-center justify-between gap-3 bg-sky-50/70 px-5 py-4 text-left">
                                    <h3 class="font-semibold text-sky-800">
                                        Untung & Rugi
                                    </h3>
                                </div>
                                <div class="space-y-3 px-5 pb-5 pt-3 text-sm leading-relaxed text-gray-700">
                                    <p>
                                        Untung adalah selisih yang didapat
                                        antara harga penjualan suatu barang
                                        dengan harga pembeliannya dengan syarat
                                        nilai harga jual beli lebih tinggi dari
                                        harga pembelian.
                                    </p>
                                    <img class="rounded-lg border" src="{{ asset('images/untung.png') }}"
                                        alt="Untung" />
                                    <p>
                                        Rugi adalah selisih yang didapat antara
                                        harga penjualan suatu barang dengan
                                        harga pembelian dengan syarat nilai
                                        harga jual lebih rendah dari harga
                                        pembelian.
                                    </p>
                                    <img class="rounded-lg border" src="{{ asset('images/rugi.png') }}" alt="Rugi" />
                                </div>
                            </article>

                            <!-- Bruto, Netto, Tara -->
                            <article
                                class="group overflow-hidden rounded-2xl border border-sky-100 bg-white shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg focus-within:shadow-lg">
                                <div
                                    class="flex w-full items-center justify-between gap-3 bg-sky-50/70 px-5 py-4 text-left">
                                    <h3 class="font-semibold text-sky-800">
                                        Bruto, Netto, Tara
                                    </h3>
                                </div>
                                <div class="space-y-3 px-5 pb-5 pt-3 text-sm leading-relaxed text-gray-700">
                                    <p>
                                        Bruto adalah berat benda ditambah dengan
                                        berat kemasan. Netto adalah berat
                                        bersih, yaitu berat bendanya saja.
                                        Sedangkan tara adalah selisih bruto dan
                                        netto.
                                    </p>
                                    <p>
                                        Bruto, netto, dan tara dapat dirumuskan
                                        sebagai berikut.
                                    </p>
                                    <img class="rounded-lg border" src="{{ asset('images/bruto.png') }}"
                                        alt="Bruto Netto Tara" />
                                </div>
                            </article>

                            <!-- Diskon -->
                            <article
                                class="group overflow-hidden rounded-2xl border border-sky-100 bg-white shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg focus-within:shadow-lg">
                                <div
                                    class="flex w-full items-center justify-between gap-3 bg-sky-50/70 px-5 py-4 text-left">
                                    <h3 class="font-semibold text-sky-800">
                                        Diskon
                                    </h3>
                                </div>
                                <div
                                    class="prose max-w-none space-y-3 px-5 pb-5 pt-3 text-sm leading-relaxed text-gray-700">
                                    <p>
                                        Dalam kehidupan sehari-hari, istilah
                                        diskon sering dijumpai dalam bidang jual
                                        beli. Diskon adalah besaran potongan
                                        harga yang diberikan untuk suatu barang
                                        tertentu. Biasanya dalam persen.
                                    </p>
                                    <p><strong>Contoh:</strong></p>
                                    <p>
                                        Suatu barang dengan harga Rp100.000,00
                                        jika diberikan diskon 20%, harganya akan
                                        menjadi:
                                    </p>
                                    $$ \begin{aligned} \text{Harga} &= 100.000 -
                                    20\% \times (100.000) \\[6pt] &= 100.000 -
                                    20.000 \\[6pt] &= 80.000 \end{aligned} $$
                                    <p>
                                        Jadi, harga barang tersebut setelah
                                        diskon adalah Rp 80.000.
                                    </p>
                                </div>
                            </article>

                            <!-- Bunga -->
                            <article
                                class="group overflow-hidden rounded-2xl border border-sky-100 bg-white shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg focus-within:shadow-lg">
                                <div
                                    class="flex w-full items-center justify-between gap-3 bg-sky-50/70 px-5 py-4 text-left">
                                    <h3 class="font-semibold text-sky-800">
                                        Bunga
                                    </h3>
                                </div>
                                <div
                                    class="prose max-w-none space-y-3 px-5 pb-5 pt-3 text-sm leading-relaxed text-gray-700">
                                    <p>
                                        Bunga tabungan dihitung berdasarkan
                                        persen nilai dan periode tertentu. Ada
                                        dua jenis bunga: tunggal (hanya modal)
                                        dan majemuk (modal + bunga).
                                    </p>
                                    <p>Rumus besar bunga 1 tahun:</p>
                                    <img class="not-prose rounded-lg border" src="{{ asset('images/bunga.png') }}"
                                        alt="Bunga" />
                                    <p><strong>Contoh:</strong></p>
                                    <p>
                                        Uang sebesar Rp 300.000,00 ditabung di
                                        bank dengan bunga tunggal 15% pertahun.
                                        Tentukan besar bunga tabungan setelah 1
                                        tahun.
                                    </p>
                                    <p><strong>Penyelesaian:</strong></p>
                                    <p>
                                        Besar bunga 1 tahun = besar persentase
                                        bunga × modal
                                    </p>
                                    $$ \begin{aligned} &= 15\% \times
                                    \text{Rp}\,300.000 \\[6pt] &= \frac{15}{100}
                                    \times \text{Rp}\,300.000 \\[6pt] &=
                                    \text{Rp}\,45.000 \end{aligned} $$
                                </div>
                            </article>
                        </div>
                    </div>
                </section>

                <section id="plsav" class="rounded-2xl bg-white p-4 md:p-6">
                    <div class="text-center mb-10">
                        <div class="inline-flex items-center justify-center mb-4">
                            <div class="w-3 h-3 rounded-full bg-sky-500 mr-2"></div>
                            <div class="w-5 h-5 rounded-full bg-sky-500 mr-2"></div>
                            <div class="w-7 h-7 rounded-full bg-sky-500"></div>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold text-sky-800 mb-3">
                            Persamaan dan Pertidaksamaan Linier Satu
                            Variabel </h2>
                    </div>

                    <div class="space-y-6">
                        <article
                            class="group overflow-hidden rounded-2xl border border-sky-100 bg-white shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg focus-within:shadow-lg">
                            <div
                                class="flex w-full items-center justify-between gap-3 bg-sky-50/70 px-5 py-4 text-left">
                                <h3 class="font-semibold text-sky-800">
                                    Persamaan Linier Satu Variabel
                                </h3>
                            </div>
                            <div class="space-y-3 px-5 pb-5 pt-3">
                                <p class="text-sm text-gray-700">
                                    Aturan dalam menyelesaikan persamaan linier
                                    satu variabel adalah sebagai berikut.
                                </p>
                                <ul class="ms-5 list-disc space-y-1 text-sm text-gray-700">
                                    <li>
                                        Menambah atau mengurangi kedua ruas
                                        dengan bilangan yang sama.
                                    </li>
                                    <li>
                                        Membagi atau mengalikan kedua ruas
                                        dengan bilangan yang sama (bukan nol).
                                    </li>
                                </ul>
                                <div class="prose max-w-none">
                                    <p>
                                        <strong>Contoh:</strong><br />
                                        Tentukan penyelesaian dari 2n + 8 = 30
                                    </p>
                                    <img src="{{ asset('images/penyelesaian.png')}}" alt="" />
                                </div>
                            </div>
                        </article>

                        <article
                            class="group overflow-hidden rounded-2xl border border-sky-100 bg-white shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg focus-within:shadow-lg">
                            <div
                                class="flex w-full items-center justify-between gap-3 bg-sky-50/70 px-5 py-4 text-left">
                                <h3 class="font-semibold text-sky-800">
                                    Pertidaksamaan Linier Satu Variabel
                                </h3>
                            </div>
                            <div class="space-y-3 px-5 pb-5 pt-3">
                                <p class="text-sm text-gray-700">
                                    Aturan dalam menyelesaikan pertidaksamaan
                                    linier satu variabel adalah sebagai berikut.
                                </p>
                                <ul class="ms-5 list-disc space-y-1 text-sm text-gray-700">
                                    <li>
                                        Menambah atau mengurangi kedua ruas
                                        dengan bilangan yang sama
                                    </li>
                                    <li>
                                        Membagi atau mengalikan kedua ruas
                                        dengan bilangan yang sama (bukan nol).
                                    </li>
                                </ul>
                                <p class="text-sm text-gray-700">
                                    Jika membagi atau mengalikan kedua ruas
                                    dengan bilangan negatif, tanda ketidaksamaan
                                    berubah arah. Jika membagi atau mengalikan
                                    dengan bilangan positif, tanda ketidaksamaan
                                    tetap.
                                </p>
                                <img src="{{ asset('images/penyelesaian2.png') }}" alt="">



                            </div>
                        </article>
                    </div>
                </section>
                <section id="spldv" class="rounded-2xl bg-white p-4 md:p-8">
                    <!-- Header Section -->
                    <header class="mb-10 text-center md:mb-14">
                        <div class="mb-4 inline-flex items-center gap-3">

                        </div>
                        <h2 class="text-3xl font-extrabold tracking-tight text-sky-800 md:text-4xl">
                            Sistem Persamaan Linear Dua Variabel
                        </h2>
                        <p class="mt-3 mx-auto max-w-2xl text-base text-gray-600 md:text-lg">
                            Pelajari cara menyelesaikan masalah dengan dua variabel menggunakan berbagai metode, mulai
                            dari substitusi hingga grafik.
                        </p>
                    </header>

                    <main class="space-y-12">
                        <!-- Definisi Dasar -->
                        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                            <article class="rounded-2xl border border-sky-200 bg-white p-6">
                                <h3 class="text-lg font-bold text-sky-900">
                                    Pengertian PLDV
                                </h3>
                                <p class="mt-2 text-gray-600">
                                    Persamaan Linear Dua Variabel (PLDV) adalah persamaan yang memiliki dua variabel
                                    (misalnya x dan y) dengan pangkat tertinggi dari masing-masing variabel adalah satu.
                                </p>
                                <div class="mt-4 rounded-lg border border-sky-100 bg-sky-50 p-4">
                                    <p class="text-sm font-medium text-gray-700">Bentuk Umum:</p>
                                    <div class="mt-2 text-center text-lg font-mono text-sky-900">
                                        $$ ax + by = c $$
                                    </div>
                                </div>
                            </article>

                            <article class="rounded-2xl border border-sky-200 bg-white p-6">
                                <h3 class="text-lg font-bold text-sky-900">
                                    Pengertian SPLDV
                                </h3>
                                <p class="mt-2 text-gray-600">
                                    Sistem Persamaan Linear Dua Variabel (SPLDV) terdiri dari dua PLDV yang saling
                                    berhubungan dan memiliki satu solusi unik (titik potong).
                                </p>
                                <div class="mt-4 rounded-lg border border-sky-100 bg-sky-50 p-4">
                                    <p class="text-sm font-medium text-gray-700">Bentuk Umum:</p>
                                    <div class="mt-2 text-center text-lg font-mono text-sky-900">
                                        $$ \begin{cases} ax + by = c \\ px + qy = r \end{cases} $$
                                    </div>
                                    <div class="mt-3 text-xs text-gray-500">
                                        <p><span class="font-semibold">x, y</span> → variabel</p>
                                        <p><span class="font-semibold">a, b, p, q</span> → koefisien</p>
                                        <p><span class="font-semibold">c, r</span> → konstanta</p>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- Metode Penyelesaian -->
                        <div>
                            <h3 class="text-2xl font-bold text-sky-800 text-center mb-8">
                                Metode Penyelesaian SPLDV
                            </h3>
                            <div class="grid grid-cols-1 gap-8 xl:grid-cols-2">

                                <!-- Metode Substitusi -->
                                <article
                                    class="flex flex-col overflow-hidden rounded-2xl border border-sky-200 bg-white shadow-sm">
                                    <div class="bg-sky-100/60 p-5">
                                        <h4 class="text-xl font-semibold text-sky-900">Metode Substitusi</h4>
                                        <p class="mt-1 text-sm text-sky-700">Mengganti satu variabel dengan nilai dari
                                            persamaan lain.</p>
                                    </div>
                                    <div class="prose max-w-none p-5 text-gray-700">
                                        <p class="font-bold">Contoh:</p>
                                        <p>Tentukan himpunan penyelesaian dari sistem persamaan \(x + 2y = 8\) dan \(2x
                                            - y = 6\).</p>

                                        <div
                                            class="not-prose mt-4 rounded-xl border border-gray-200 bg-gray-50/80 p-4 space-y-3">
                                            <p class="font-semibold text-gray-800">Langkah 1: Ubah salah satu persamaan
                                            </p>
                                            <p>Dari \(x + 2y = 8\), kita bisa mendapatkan bentuk \(x\).</p>
                                            $$ x = 8 - 2y $$
                                            <p class="font-semibold text-gray-800">Langkah 2: Substitusikan ke persamaan
                                                kedua</p>
                                            <p>Ganti nilai \(x\) pada persamaan \(2x - y = 6\).</p>
                                            $$ \begin{aligned} 2(8 - 2y) - y &= 6 \\ 16 - 4y - y &= 6 \\ 16 - 5y &= 6 \\
                                            -5y &= 6 - 16 \\ -5y &= -10 \\ y &= 2 \end{aligned} $$
                                            <p class="font-semibold text-gray-800">Langkah 3: Cari nilai variabel kedua
                                            </p>
                                            <p>Masukkan \(y=2\) ke dalam \(x = 8 - 2y\).</p>
                                            $$ \begin{aligned} x &= 8 - 2(2) \\ x &= 8 - 4 \\ x &= 4 \end{aligned} $$
                                            <p class="font-bold text-sky-800">Jadi, himpunan penyelesaiannya adalah
                                                \(\{4, 2\}\).</p>
                                        </div>
                                    </div>
                                </article>

                                <!-- Metode Eliminasi -->
                                <article
                                    class="flex flex-col overflow-hidden rounded-2xl border border-sky-200 bg-white shadow-sm">
                                    <div class="bg-sky-100/60 p-5">
                                        <h4 class="text-xl font-semibold text-sky-900">Metode Eliminasi</h4>
                                        <p class="mt-1 text-sm text-sky-700">Menghilangkan salah satu variabel dengan
                                            menyamakan koefisiennya.</p>
                                    </div>
                                    <div class="prose max-w-none p-5 text-gray-700">
                                        <p class="font-bold">Contoh:</p>
                                        <p>Tentukan himpunan penyelesaian dari sistem persamaan \(x + 2y = 8\) dan \(2x
                                            - y = 6\).</p>

                                        <div
                                            class="not-prose mt-4 rounded-xl border border-gray-200 bg-gray-50/80 p-4 space-y-3">
                                            <p class="font-semibold text-gray-800">Langkah 1: Eliminasi variabel \(x\)
                                            </p>
                                            <p>Samakan koefisien \(x\) dengan mengalikan persamaan.</p>
                                            <span class="text-xs"> $$ \begin{alignedat}{2}
                                                x + 2y &= 8 &\quad |\times 2| \quad &\implies \quad 2x + 4y = 16 \\
                                                2x - y &= 6 &\quad |\times 1| \quad &\implies \quad 2x - y = 6
                                                \end{alignedat} $$</span>
                                            <p>Kurangkan kedua persamaan tersebut.</p>
                                            $$ \begin{array}{rcr}
                                            2x + 4y & = & 16 \\
                                            2x - y & = & 6 \\
                                            \hline - \\
                                            5y & = & 10 \\
                                            y & = & 2
                                            \end{array} $$
                                            <p class="font-semibold text-gray-800">Langkah 2: Eliminasi variabel \(y\)
                                            </p>
                                            <p>(Atau bisa juga substitusi \(y=2\) ke salah satu persamaan awal untuk
                                                menemukan \(x=4\)).</p>
                                            <p class="font-bold text-sky-800">Jadi, himpunan penyelesaiannya adalah
                                                \(\{4, 2\}\).</p>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            <!-- Metode Grafik -->
                            <div class="mt-8">
                                <article class="overflow-hidden rounded-2xl border border-sky-200 bg-white shadow-sm">
                                    <div class="bg-sky-100/60 p-5">
                                        <h4 class="text-xl font-semibold text-sky-900">Metode Grafik</h4>
                                        <p class="mt-1 text-sm text-sky-700">Mencari titik potong dari dua garis
                                            persamaan pada koordinat Kartesius.</p>
                                    </div>
                                    <div class="p-5 grid grid-cols-1 gap-6 md:grid-cols-2">
                                        <div class="prose max-w-none text-gray-700">
                                            <p class="font-bold">Langkah-langkah:</p>
                                            <p>Tentukan titik potong sumbu-x (saat \(y=0\)) dan sumbu-y (saat \(x=0\))
                                                untuk setiap persamaan.</p>

                                            <div
                                                class="not-prose mt-4 rounded-xl border border-gray-200 bg-gray-50/80 p-4 space-y-3">
                                                <p class="font-semibold text-gray-800">a. Garis \(x + 2y = 8\)</p>
                                                <p>Jika \(y=0\), maka \(x=8\). Titik potong: \((8,0)\).</p>
                                                <p>Jika \(x=0\), maka \(y=4\). Titik potong: \((0,4)\).</p>

                                                <p class="mt-4 font-semibold text-gray-800">b. Garis \(2x - y = 6\)</p>
                                                <p>Jika \(y=0\), maka \(x=3\). Titik potong: \((3,0)\).</p>
                                                <p>Jika \(x=0\), maka \(y=-6\). Titik potong: \((0,-6)\).</p>
                                            </div>
                                        </div>
                                        <div class="space-y-3">
                                            <p class="font-semibold text-gray-800">Hasil Grafik:</p>
                                            <p class="text-sm text-gray-600">Gambar kedua garis. Titik potong kedua
                                                garis tersebut adalah solusinya.</p>
                                            <img class="h-auto w-full rounded-lg border-2 border-sky-100 mt-2"
                                                src="{{ asset('images/grafiknya.png') }}" alt="Grafik SPLDV" />
                                            <p class="text-center font-bold text-sky-800">Titik potong berada di \((4,
                                                2)\).</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                    </main>
                </section>


                <section id="fungsi-relasi" class="rounded-2xl bg-white p-4 md:p-6">
                    <!-- Header -->
                    <div class="mb-10 text-center md:mb-12">
                        <div class="mb-4 inline-flex items-center justify-center">
                            <div class="mr-2 h-3 w-3 rounded-full bg-sky-500"></div>
                            <div class="mr-2 h-5 w-5 rounded-full bg-sky-500"></div>
                            <div class="h-7 w-7 rounded-full bg-sky-500"></div>
                        </div>
                        <h2 class="text-3xl font-bold text-sky-800 md:text-4xl">
                            Relasi dan Fungsi
                        </h2>
                    </div>

                    <!-- Grid Cards -->
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                        <!-- Card: Relasi -->
                        <article
                            class="group overflow-hidden rounded-2xl border border-sky-100 bg-white shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg">
                            <div
                                class="flex w-full items-center justify-between gap-3 bg-sky-50/70 px-5 py-4 text-left">
                                <h3 class="font-semibold text-sky-800">Relasi</h3>
                            </div>
                            <div class="space-y-3 px-5 pb-5 pt-3">
                                <p class="text-sm text-gray-700">
                                    Relasi adalah hubungan antara anggota suatu himpunan dengan anggota himpunan lain.
                                    Relasi dari himpunan A ke himpunan B adalah menghubungkan anggota-anggota himpunan A
                                    dengan anggota-anggota himpunan B.
                                </p>
                                <img class="rounded-lg border" src="{{ asset('images/relasi.png') }}"
                                    alt="Diagram Panah Relasi" />
                                <p class="text-sm font-medium text-gray-800">
                                    Relasi dapat disajikan dalam tiga cara:
                                </p>
                                <ul class="ms-5 list-disc space-y-1 text-sm text-gray-700">
                                    <li>Diagram panah</li>
                                    <li>Koordinat Cartesius</li>
                                    <li>Himpunan pasangan berurutan</li>
                                </ul>
                            </div>
                        </article>

                        <!-- Card: Fungsi -->
                        <article
                            class="group overflow-hidden rounded-2xl border border-sky-100 bg-white shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg">
                            <div
                                class="flex w-full items-center justify-between gap-3 bg-sky-50/70 px-5 py-4 text-left">
                                <h3 class="font-semibold text-sky-800">Fungsi (Pemetaan)</h3>
                            </div>
                            <div class="space-y-3 px-5 pb-5 pt-3">
                                <p class="text-sm text-gray-700">
                                    Fungsi adalah relasi khusus yang memasangkan tiap anggota himpunan A dengan
                                    <strong>tepat satu</strong> anggota himpunan B.
                                </p>
                                <img class="rounded-lg border" src="{{ asset('images/fungsi.png') }}"
                                    alt="Diagram Panah Fungsi" />
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>\(A = \{a, b, c\}\) disebut <strong>daerah asal (domain)</strong>.</li>
                                    <li>\(B = \{x, y, z\}\) disebut <strong>daerah kawan (kodomain)</strong>.</li>
                                </ul>
                                <div class="rounded-lg border border-sky-100 bg-sky-50 p-3">
                                    <p class="text-sm text-gray-700">
                                        Jika banyak anggota himpunan A adalah \(n(A)=p\) dan himpunan B adalah
                                        \(n(B)=q\), maka banyaknya fungsi yang mungkin dari A ke B adalah:
                                    </p>
                                    <div class="py-2 text-center text-lg font-mono text-sky-900">
                                        $$ [n(B)]^{n(A)} = q^p $$
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Card: Nilai Fungsi -->
                        <article
                            class="group overflow-hidden rounded-2xl border border-sky-100 bg-white shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg">
                            <div
                                class="flex w-full items-center justify-between gap-3 bg-sky-50/70 px-5 py-4 text-left">
                                <h3 class="font-semibold text-sky-800">Nilai Fungsi</h3>
                            </div>
                            <div class="space-y-3 px-5 pb-5 pt-3">
                                <p class="text-sm text-gray-700">
                                    Nilai fungsi dari suatu domain disebut juga <strong>daerah hasil (range)</strong>.
                                    Jika diketahui fungsi \(f\), maka nilai fungsi untuk setiap \(x\) dinyatakan dalam
                                    notasi berikut:
                                </p>
                                <div class="rounded-lg border border-sky-100 bg-sky-50 p-4">
                                    <div class="text-center text-xl font-mono text-sky-900">
                                        $$ y = f(x) $$
                                    </div>
                                </div>
                                <p class="text-sm text-gray-700">Di mana \(y\) adalah nilai fungsi (output) untuk input
                                    \(x\).</p>
                            </div>
                        </article>

                        <!-- Card: Grafik Fungsi -->
                        <article
                            class="group overflow-hidden rounded-2xl border border-sky-100 bg-white shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg">
                            <div
                                class="flex w-full items-center justify-between gap-3 bg-sky-50/70 px-5 py-4 text-left">
                                <h3 class="font-semibold text-sky-800">Grafik Fungsi</h3>
                            </div>
                            <div class="space-y-3 px-5 pb-5 pt-3">
                                <p class="text-sm font-medium text-gray-800">
                                    Langkah-langkah membuat grafik fungsi:
                                </p>
                                <ul class="ms-5 list-decimal space-y-1 text-sm text-gray-700">
                                    <li>Tentukan beberapa anggota daerah asal (domain), misalnya beberapa bilangan bulat
                                        di sekitar nol.</li>
                                    <li>Hitung nilai fungsi \(y = f(x)\) untuk setiap \(x\) yang dipilih.</li>
                                    <li>Buat pasangan koordinat \((x, y)\) dari hasil perhitungan.</li>
                                    <li>Plot semua titik koordinat pada bidang Kartesius dan hubungkan titik-titik
                                        tersebut untuk membentuk grafik.</li>
                                </ul>
                            </div>
                        </article>

                        <!-- Card: Korespondensi Satu-Satu -->
                        <article
                            class="group overflow-hidden rounded-2xl border border-sky-100 bg-white shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg">
                            <div
                                class="flex w-full items-center justify-between gap-3 bg-sky-50/70 px-5 py-4 text-left">
                                <h3 class="font-semibold text-sky-800">Korespondensi Satu-Satu</h3>
                            </div>
                            <div class="space-y-3 px-5 pb-5 pt-3">
                                <p class="text-sm text-gray-700">
                                    Sebuah fungsi disebut korespondensi satu-satu jika setiap anggota A berpasangan
                                    dengan <strong>tepat satu</strong> anggota B, dan sebaliknya. Syaratnya: \(n(A) =
                                    n(B)\).
                                </p>
                                <img class="rounded-lg border" src="{{ asset('images/korespondensi.png') }}"
                                    alt="Diagram Korespondensi Satu-Satu" />
                                <div class="rounded-lg border border-sky-100 bg-sky-50 p-3">
                                    <p class="text-sm text-gray-700">
                                        Jika \(n(A) = n(B) = n\), maka banyaknya korespondensi satu-satu yang mungkin
                                        adalah:
                                    </p>
                                    <div class="py-2 text-center font-mono text-gray-700">
                                        $$ n! = n \times (n-1) \times \cdots \times 2 \times 1 $$
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>

                <section class="py-10 text-center">
                    <div class="rounded-2xl bg-gradient-to-br from-sky-400 to-sky-600 p-8 text-white shadow-2xl ">
                        <h2 class="mb-3 text-3xl font-bold">Gimana, Seru Kan?</h2>
                        <p class="mx-auto/ relative mb-6 max-w-2xl">
                            Sekarang kamu sudah lebih jago soal aljabar! Biar makin mantap, coba lihat soal dan
                            pembahasan berikut!
                        </p>
                        <a href="{{ route('materi-aljabar-pembahasan') }}"
                            class="inline-block transform rounded-xl bg-white px-8 py-3 text-lg font-bold text-sky-700 shadow-md transition-all duration-300 ease-in-out hover:-translate-y-0.5 hover:bg-sky-50 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-sky-600">
                            Lihat Pembahasan! 💪
                        </a>
                    </div>
                </section>

            </main>
        </div>
    </div>
</x-layouts.app>