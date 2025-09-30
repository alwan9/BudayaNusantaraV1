<div class=" flex justify-center items-center w-[100dvw] lg:h-[1000px] relative z-[10] pt-[30%] md:pt-[15%] lg:pt-10">
    <div class=" md:konten px-[5%]  pt-[7%]">
        <div class=" text-center">
            <div
                class=" text-2xl md:text-4xl merriweather font-extrabold leading-tight mb-4 animate__backInDown animate__animated drop-shadow-2xl animate__delay-5s">
                Kenali dan Cintai
                Budaya
                <br>
                <span class=" text-gradasi   lg:text-6xl">
                    Indonesia</span>
            </div>
            <p class=" text-base md:text-xl   animate__fadeInDown animate__delay-5s animate__infinite	 px-[5%] lg:px-[20%] mb-8 ">
                Indonesia adalah negeri yang kaya akan budaya, tradisi, dan kearifan lokal.
                Temukan pesona tradisi Indonesia yang kaya, unik, dan penuh makna dari Sabang hingga Merauke.
            </p>
            <div class="flex items-center justify-center gap-3 animate__backInLeft animate__delay-5s">
                <a href="{{ route('games') }}">
                    <button
                        class="btn-line text-xs md:text-xl px-2 flex items-center gap-2  shadow-orange-500/50 shadow-lg">Jelajahi
                        Budaya<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="none">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="1.5"
                                    d="M21.22 8c-.689-2.184-1.792-3.365-3.13-3.84c-.38-.135-.788-.16-1.193-.16h-.612a4.24 4.24 0 0 0-2.45.78l-.502.354a2.31 2.31 0 0 1-2.666 0l-.502-.355A4.24 4.24 0 0 0 7.715 4h-.612c-.405 0-.813.025-1.194.16c-2.383.846-4.022 3.935-3.903 10.943c.024 1.412.354 2.972 1.628 3.581A3.2 3.2 0 0 0 5.027 19a2.74 2.74 0 0 0 1.53-.437c.915-.599 1.584-1.6 2.554-2.102a4.1 4.1 0 0 1 1.89-.461H13c.658 0 1.306.158 1.89.46c.97.504 1.64 1.504 2.553 2.103c.39.256.895.437 1.531.437a3.2 3.2 0 0 0 1.393-.316c1.274-.609 1.604-2.17 1.628-3.581A35 35 0 0 0 21.918 12M7.5 9v3M6 10.5h3" />
                                <path fill="currentColor"
                                    d="M19 10.25a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0m-3 0a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0M16.75 8a.75.75 0 1 1 0 1.5a.75.75 0 0 1 0-1.5m0 3a.75.75 0 1 1 0 1.5a.75.75 0 0 1 0-1.5" />
                            </g>
                        </svg></button>
                </a>
                <a href="{{ route('acara.index') }}">

                    <button
                        class="btn-bg  text-xs md:text-xl px-2 flex items-center gap-2 shake-lr shadow-orange-500/50 shadow-lg">Daftar
                        Acara <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M16 13h-3c-.55 0-1 .45-1 1v3c0 .55.45 1 1 1h3c.55 0 1-.45 1-1v-3c0-.55-.45-1-1-1m0-10v1H8V3c0-.55-.45-1-1-1s-1 .45-1 1v1H5c-1.11 0-1.99.9-1.99 2L3 20a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2h-1V3c0-.55-.45-1-1-1s-1 .45-1 1m2 17H6c-.55 0-1-.45-1-1V9h14v10c0 .55-.45 1-1 1" />
                        </svg></button>
                </a>
            </div>
        </div>

        {{-- ilustrasi --}}
        <img class="text-focus-in w-full px-[5%] md:px-[15%] md:mt-4 mt-[200px]" src="assets/bg1.png" alt="">

        <div
            class="  w-full absolute   origin-top-left left-[3%] top-[50%] lg:top-[40%] max-w-sm scale-[70%] lg:scale-100">
            <!-- Bagian atas: Avatar + Nama -->
            <div class="flex items-center gap-4 mb-4 ">
                <!-- Avatar stack -->
                <div class="flex -space-x-2">
                    <img class="w-11 h-11 rounded-full flex items-center justify-center font-bold text-[#0b0f14] border-2 border-[#0b0f14] bg-zinc-100 shadow-md object-cover object-top"
                        src="https://plus.unsplash.com/premium_photo-1690407617542-2f210cf20d7e?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="">
                    <img class="w-11 h-11 rounded-full flex items-center justify-center font-bold text-[#0b0f14] border-2 border-[#0b0f14] bg-zinc-100 shadow-md object-cover object-top"
                        src="https://plus.unsplash.com/premium_photo-1690407617686-d449aa2aad3c?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="">
                    <img class="w-11 h-11 rounded-full flex items-center justify-center font-bold text-[#0b0f14] border-2 border-[#0b0f14] bg-zinc-100 shadow-md object-cover object-top"
                        src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?q=80&w=880&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="">
                    <img class="w-11 h-11 rounded-full flex items-center justify-center font-bold text-[#0b0f14] border-2 border-[#0b0f14] bg-zinc-100 shadow-md object-cover object-top"
                        src="https://plus.unsplash.com/premium_photo-1689530775582-83b8abdb5020?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="">
                </div>

                <!-- Nama + Status -->
                <div>
                    <p class="font-semibold text-lg">Rina Anggraini</p>
                    <p class="text-sm  ">Wartawan</p>
                </div>
            </div>

            <!-- Bintang -->
            <div class="flex justify-left text-[#f59e0b] text-4xl mb-3">
                ★★★★★
            </div>

            <!-- Review -->
            <p class="text-sm   italic mb-3">
                “Pengalaman yang luar biasa! Layanan cepat, UI rapi, dan performanya halus banget. Sangat rekomendasi
                👍”
            </p>

            <!-- Skor -->
            <div class="flex items-center gap-2 text-gray-400 text-sm">
                <span class="w-2 h-2 bg-gray-700 rounded-full"></span>
                4.9/5 dari 1.2k+ pengguna
            </div>
        </div>


        <!-- Stats Bar at the bottom -->
        <div class="lg:absolute bottom-[8%] mt-[10%] lg:mt-0 left-[3%] backdrop-blur-md p-4">
            <div class="container mx-auto grid grid-cols-3  gap-4 text-center">
                <div class="p-2">
                    <div class="flex items-center justify-center text-orange-500 gap-1">
                        <div class="text-2xl md:text-5xl lg:text-2 font-bold counter "
                            data-target="{{ $total_acara }}">
                        </div>
                        <div class="text-2xl md:text-5xl lg:text-2 font-bold">+</div>
                    </div>
                    <p class=" text-base md:text-2xl mt-2">Acara</p>
                </div>
                <div class="p-2">
                    <div class="flex items-center justify-center text-orange-500 gap-1">

                        <div class="text-2xl md:text-5xl lg:text-2 font-bold counter "
                            data-target="{{ $total_artikel }}">
                        </div>
                        <div class="text-2xl md:text-5xl lg:text-2 font-bold">+</div>
                    </div>
                    <p class=" text-base md:text-2xl mt-2">Artikel</p>
                </div>
                <div class="p-2">
                    <div class="flex items-center justify-center text-orange-500 gap-1">

                        <div class="text-2xl md:text-5xl lg:text-2 font-bold counter "
                            data-target="{{ $total_user }}">
                        </div>
                        <div class="text-2xl md:text-5xl lg:text-2 font-bold">+</div>
                    </div>
                    <p class=" text-base md:text-2xl mt-2">Pengguna</p>
                </div>

            </div>
        </div>

    </div>

</div>
<img src="assets/batik-header1.png" class="absolute top-[20%] w-full z-[2] opacity-30 " alt="">
