<x-layouts.app>
    <x-slot:title>
        Pembahasan Bilangan

        <div class="bg-grid-bw min-h-screen">
            <div class="container mx-auto px-6 py-10">

                {{-- HEADER --}}
                <header class="mb-12 text-center">
                    <h1 class="text-4xl md:text-5xl font-extrabold text-sky-600 tracking-tight">Pembahasan dan Contoh
                        Soal
                        —
                        Materi
                        Bilangan</h1>
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
                                <h3 class="text-xl font-bold text-sky-800 mb-3">Keliling dari bangun berikut adalah...
                                </h3>

                                <img src="{{ asset('images/kelilingbangun.png') }}" alt="">


                                <ul class="grid sm:grid-cols-2 md:grid-cols-4 gap-3 mb-4">
                                    <li class="bg-sky-50 border border-sky-100 rounded-lg px-3 py-2">47 cm</li>

                                    <li class="bg-sky-50 border border-sky-100 rounded-lg px-3 py-2">69 cm</li>
                                    <li
                                        class="bg-sky-50 border border-sky-100 rounded-lg px-3 py-2 font-semibold text-sky-700">
                                        94 cm <span class="font-bold"> Jawaban Benar</span></li>
                                    <li class="bg-sky-50 border border-sky-100 rounded-lg px-3 py-2">Tidak Dapat
                                        Ditentukan
                                    </li>
                                </ul>

                                <div class="bg-sky-50 border-l-4 text-xl border-sky-400 p-4 rounded-r-xl ">
                                    <div class="font-semibold text-sky-800">Pembahasan</div>
                                    <p class="text-sky-900/90">Perhatikan Gambar Berikut.</p>
                                    <img src="{{ asset('images/kelilingbangun.png') }}" alt="">
                                    <div class="text-sky-900/90 space-y-8">
                                        <p class="space-y-8">
                                            Kita lihat bahwa
                                            <span>\( a + b + c = 25 \)</span>
                                            dan
                                            <span>\( d = 10 \)</span>sehingga kelilingnya
                                        </p>

                                        <p>
                                            <span>\( = a + b + c + 12 + 12 + 10 + 25 + d \)</span>
                                        </p>

                                        <p>
                                            <span>\( = 25 + 12 + 12 + 10 + 25 + 10 \)</span>
                                        </p>

                                        <p>
                                            <span>\( = 94 \, \text{cm} \)</span>
                                        </p>
                                    </div>

                                    <p
                                        class="inline-flex items-center rounded-md bg-sky-100 px-2 text-lg py-1  mt-4 font-medium text-sky-800 ring-1 ring-inset ring-sky-200">
                                        Jawaban: 94 cm</p>
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

                                <p class="text-sky-900/90 leading-relaxed lg:flex items-center text-xl mt-2 mb-4">
                                    Opik membuat kerangka belahketupat dan layang-layang dari lidi seperti gambar
                                    berikut.
                                    Panjang AC=36 cm,BD=48 cm,PR=60 cm,OS=16 cm,dan OQ=40 cm.
                                    Jika panjang lidi yang tersedia 5 m, maka sisa lidi yang tidak terpakai adalah … cm.
                                </p>


                                <div
                                    class="bg-sky-50 border-l-4 text-xl text-sky-900/90 border-sky-400 p-4 rounded-r-xl">
                                    <div class="font-semibold text-sky-800">Pembahasan</div>
                                    <div class="space-y-8">
                                        <p><strong>Pembahasan:</strong></p>

                                        <p>Panjang <span>\( AE = \tfrac{1}{2} \times AC \)</span></p>
                                        <p><span>\( = \tfrac{1}{2} \times 36 \)</span></p>
                                        <p><span>\( = 18 \, \text{cm} \)</span></p>

                                        <p>Panjang <span>\( DE = \tfrac{1}{2} \times BD \)</span></p>
                                        <p><span>\( = \tfrac{1}{2} \times 48 \)</span></p>
                                        <p><span>\( = 24 \, \text{cm} \)</span></p>

                                        <p>Panjang <span>\( AD = \sqrt{AE^2 + DE^2} \)</span></p>
                                        <p><span>\( = \sqrt{18^2 + 24^2} \)</span></p>
                                        <p><span>\( = 30 \, \text{cm} \)</span></p>

                                        <p>Panjang <span>\( AD = BC = AB = DC = 30 \, \text{cm} \)</span></p>

                                        <p>Panjang lidi untuk membuat belah ketupat:</p>
                                        <p><span>\( = 4 \times AD + AC + BD \)</span></p>
                                        <p><span>\( = 4 \times 30 + 36 + 48 \)</span></p>
                                        <p><span>\( = 204 \, \text{cm} \)</span></p>

                                        <p>Panjang <span>\( PQ = \tfrac{1}{2} \times PR \)</span></p>
                                        <p><span>\( = \tfrac{1}{2} \times 60 \)</span></p>
                                        <p><span>\( = 30 \, \text{cm} \)</span></p>

                                        <p>Panjang <span>\( PS = \sqrt{PQ^2 + QS^2} \)</span></p>
                                        <p><span>\( = \sqrt{30^2 + 16^2} \)</span></p>
                                        <p><span>\( = 34 \, \text{cm} \)</span></p>

                                        <p>Panjang <span>\( SR = \) panjang \( PS = 34 \, \text{cm} \)</span></p>

                                        <p>Panjang <span>\( PQ = \sqrt{OP^2 + OQ^2} \)</span></p>
                                        <p><span>\( = \sqrt{30^2 + 40^2} \)</span></p>
                                        <p><span>\( = 50 \, \text{cm} \)</span></p>

                                        <p>Panjang <span>\( PQ = \) panjang \( QR = 50 \, \text{cm} \)</span></p>

                                        <p>Panjang lidi untuk membuat layang-layang:</p>
                                        <p><span>\( = 2 \times PS + 2 \times PQ + PR + SQ \)</span></p>
                                        <p><span>\( = 2 \times 34 + 2 \times 50 + 60 + 56 \)</span></p>
                                        <p><span>\( = 284 \, \text{cm} \)</span></p>

                                        <p>Panjang lidi yang dibutuhkan seluruhnya:</p>
                                        <p><span>\( = 204 + 284 = 488 \, \text{cm} \)</span></p>

                                        <p>Sisa lidi = 5 m – 488 cm</p>
                                        <p><span>\( = 500 \, \text{cm} - 488 \, \text{cm} \)</span></p>
                                        <p><span>\( = 12 \, \text{cm} \)</span></p>

                                    </div>
                                    <p
                                        class="inline-flex items-center rounded-md bg-sky-100 px-2 text-lg py-1  mt-4 font-medium text-sky-800 ring-1 ring-inset ring-sky-200">
                                        Jawaban: 15 m</p>
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

                                <p class="text-sky-900/90 leading-relaxed flex items-center text-xl mt-2 mb-4"> Dua
                                    lembar
                                    karton berukuran 28cm × 14cm digulung membentuk tabung. Tabung pertama digulung
                                    menurut
                                    panjangnya dan tabung kedua digulung menurut lebarnya.</p>

                                <img src="{{ asset('images/tabung.png') }}" alt="">

                                <p>“Volume tabung pertama lebih besar dibandingkan tabung kedua.”
                                    Setujukah kamu dengan pernyataan tersebut? Jelaskan jawabanmu.
                                </p>
                                <p>
                                    <span>\(\left( \pi = \tfrac{22}{7} \right)\)</span>
                                </p>





                                <div
                                    class="bg-sky-50 border-l-4 mt-4 text-xl text-sky-900/90 border-sky-400 p-4 rounded-r-xl">
                                    <div class="font-semibold text-sky-800">Pembahasan</div>
                                    <div class="space-y-4">
                                        <p><strong>Pembahasan:</strong></p>

                                        <p>Setuju, penjelasannya sebagai berikut:</p>

                                        <p>Tabung 1 mempunyai keliling alas 44 cm dan tinggi tabung = 22 cm.</p>
                                        <p>Keliling alas = <span>\( 2\pi r_1 \)</span></p>
                                        <p><span>\(\Leftrightarrow 44 = 2 \times \tfrac{22}{7} \times r_1\)</span></p>
                                        <p><span>\(\Leftrightarrow r_1 = 7 \, \text{cm}\)</span></p>

                                        <p><span>\( V_{\text{tabung 1}} = \tfrac{22}{7} \times 7^2 \times 22 \)</span>
                                        </p>
                                        <p><span>\( = 3.388 \, \text{cm}^3 \)</span></p>

                                        <p>Tabung 2 mempunyai keliling alas 22 cm dan tinggi tabung = 44 cm.</p>
                                        <p>Keliling alas = <span>\( 2\pi r_2 \)</span></p>
                                        <p><span>\(\Leftrightarrow 22 = 2 \times \tfrac{22}{7} \times r_2\)</span></p>
                                        <p><span>\(\Leftrightarrow r_2 = 3,5 \, \text{cm}\)</span></p>

                                        <p><span>\( V_{\text{tabung 2}} = \tfrac{22}{7} \times (3,5)^2 \times 44
                                                \)</span>
                                        </p>
                                        <p><span>\( = 1.694 \, \text{cm}^3 \)</span></p>

                                        <p>Jadi, volume tabung pertama lebih besar dibandingkan tabung kedua.</p>


                                    </div>
                                </div>
                            </div>
                        </article>

                    </section>

                    {{-- D. LATIHAN SOAL --}}


                    {{-- CTA --}}
                    <section class="text-center py-10">
                        <div
                            class="bg-gradient-to-br from-sky-400 to-sky-600 rounded-2xl p-8 text-white shadow-2xl shadow-sky-200">
                            <h2 class="text-3xl font-bold mb-3">Sudah paham?</h2>
                            <p class="mb-6 max-w-2xl mx-auto">Yuk coba soal berikut.</p>
                            <a href="{{ route('materi-geometri-soal') }}"
                                class="inline-block bg-white text-sky-700 font-bold text-lg py-3 px-8 rounded-xl shadow-md hover:bg-sky-50 transform hover:-translate-y-0.5 transition-all duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-sky-600">
                                Coba Soal
                            </a>
                        </div>
                    </section>

                </main>
            </div>
        </div>
</x-layouts.app>