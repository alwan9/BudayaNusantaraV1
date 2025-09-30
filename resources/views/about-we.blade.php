@include('layouts.header')
@include('components.navbar')

<div class=" px-[10%] pt-[30%] md:pt-[20%] lg:pt-[15%] pb-[15%] lg:pb-0">
    <div class="relative" data-aos="fade-down" data-aos-duration="1200">
        <img src="/assets/logo.png" class="w-full absolute px-[10%]  lg:px-[30%] pl-[35%] drop-shadow-2xl " alt="">
        {{-- <img src="assets/logo-black.png" class="w-full absolute hover:hidden duration-1000 ease-in-out cursor-pointer delay-1000  px-[30%] pl-[35%] drop-shadow-2xl " alt=""> --}}
    </div>
    <div class=" text-center mt-[25%]" data-aos="fade-up" data-aos-duration="1200">
        <h1 class=" text-2xl lg:text-4xl font-bold merriweather text-gradasi">Tim Pengembang</h1>
        <p class="mt-5 px-[3%] lg:px-[10%] md:text-xl">Kami adalah tim pengembang yang berdedikasi untuk menciptakan
            solusi digital
            yang berdampak
            positif bagi masyarakat.
            <span class=" hidden lg:block">
                Dengan semangat kolaborasi, kami menggabungkan kreativitas dan teknologi untuk
                menghasilkan produk yang berkualitas dan inovatif. Setiap baris kode yang kami tulis mencerminkan
                komitmen
                kami terhadap kemudahan, keandalan, dan pengalaman pengguna yang optimal.</span>
        </p>
    </div>
    {{-- card --}}
    <div class="lg:flex justify-center gap-5 lg:gap-10 items-center md:mt-[10%]   ">
        <div class="lg:w-[70%] w-full mt-24 lg:mt-0">
            <div data-aos="fade-up" data-aos-duration="1200"
                class=" bg-orange-50 shadow-lg hover:bg-orange-100 hover:scale-105 duration-300 cursor-pointer rounded-xl overflow-hidden flex items-center px-5 md:px-10 lg:px-20  py-5">
                <!-- Foto Kiri -->
                <img src="https://ua-lawyer.com/static/default-user.png" alt="Profile" data-aos="fade-left"
                    data-aos-duration="1200"
                    class="w-[80px] h-[80px] lg:w-[120px] lg:h-[120px] rounded-full object-cover bg-orange-800">

                <!-- Info Kanan -->
                <div class="ml-10 flex flex-col justify-center"  data-aos="fade-up" data-aos-duration="1200">
                    <p class="text-orange-600 text-sm lg:text-xl font-semibold md:mb-2">Front end Developer</p>
                    <h2 class="text-2xl lg:text-4xl font-bold text-gray-800 merriweather">Hafiz Alwan </h2>
                    <p class="w-[97%] my-2  hidden lg:block">Mendesain UI yang menarik dan mengintegrasikan AI ke dalam
                        sistem. Fokus
                        pada
                        kenyamanan pengguna dan
                        kecerdasan fitur.
                    </p>


                    <!-- Ikon Media Sosial -->
                    <div class="flex mt-2 gap-5 text-gray-500">
                        <a target="_blank" href="https://github.com/alwan9"
                            class="hover:text-blue-500 duration-500 cursor-pointer hover:scale-105">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33s1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2" />
                            </svg>
                        </a>
                        <a target="_blank" href="https://www.instagram.com/zzls__/"
                            class="hover:text-sky-500 duration-500 cursor-pointer hover:scale-105">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3" />
                            </svg>
                        </a>
                        <a target="_blank" href="https://alwan9.github.io/personal"
                            class="hover:text-pink-500 duration-500 cursor-pointer hover:scale-105">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M16.36 14c.08-.66.14-1.32.14-2s-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2m-5.15 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95a8.03 8.03 0 0 1-4.33 3.56M14.34 14H9.66c-.1-.66-.16-1.32-.16-2s.06-1.35.16-2h4.68c.09.65.16 1.32.16 2s-.07 1.34-.16 2M12 19.96c-.83-1.2-1.5-2.53-1.91-3.96h3.82c-.41 1.43-1.08 2.76-1.91 3.96M8 8H5.08A7.92 7.92 0 0 1 9.4 4.44C8.8 5.55 8.35 6.75 8 8m-2.92 8H8c.35 1.25.8 2.45 1.4 3.56A8 8 0 0 1 5.08 16m-.82-2C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2s.06 1.34.14 2M12 4.03c.83 1.2 1.5 2.54 1.91 3.97h-3.82c.41-1.43 1.08-2.77 1.91-3.97M18.92 8h-2.95a15.7 15.7 0 0 0-1.38-3.56c1.84.63 3.37 1.9 4.33 3.56M12 2C6.47 2 2 6.5 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1600"
                class=" mt-10 bg-orange-50 shadow-lg
             hover:bg-orange-100 hover:scale-105 duration-300 cursor-pointer rounded-xl overflow-hidden flex items-center px-5 md:px-10 lg:px-20  py-5">
                <!-- Foto Kiri -->
                <img src="https://ua-lawyer.com/static/default-user.png" alt="Profile" data-aos="fade-left"
                    data-aos-duration="1200"
                    class="w-[80px] h-[80px] lg:w-[120px] lg:h-[120px] rounded-full object-cover bg-orange-800">

                <!-- Info Kanan -->
                <div class="ml-10 flex flex-col justify-center" data-aos="fade-right" data-aos-duration="1200">
                    <p class="text-orange-600 text-sm lg:text-xl font-semibold md:mb-2">Back end Developer</p>
                    <h2 class="text-2xl lg:text-4xl font-bold text-gray-800 merriweather">Haiban Aufar</h2>
                    <p class="w-[97%] my-2 hidden lg:block">
                        Mengelola struktur database dan memastikan data tersimpan dengan baik. Bertanggung jawab atas
                        kestabilan dan efisiensi penyimpanan data.
                    </p>

                    <!-- Ikon Media Sosial -->
                    <div class="flex mt-2 gap-5 text-gray-500">
                        <a target="_blank" href="https://github.com/Haiban13"
                            class="hover:text-blue-500 duration-500 cursor-pointer hover:scale-105">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33s1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2" />
                            </svg>
                        </a>
                        <a target="_blank" href="http://instagram.com/haiskuy13/"
                            class="hover:text-sky-500 duration-500 cursor-pointer hover:scale-105">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3" />
                            </svg>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        {{-- qris --}}
        <div class="lg:w-[30%] mt-10 lg:mt-0 shadow-2xl hover:scale-105 duration-200" data-aos="fade-up"
            data-aos-duration="1300">
            <img src="assets/support.png" class=" " alt="">
        </div>

    </div>
</div>
<div>
    <div class="px-[5%] md:px-[20%] text-center text-xl lg:mt-[20%]"  data-aos="fade-up" data-aos-duration="1200">
        <h1 class=" text-2xl lg:text-4xl font-bold merriweather text-center text-gradasi">
            Teknologi yang digunakan
        </h1>
        <p class="mt-5">
            Proyek ini dibangun menggunakan HTML, CSS, JavaScript, dan Tailwind CSS untuk tampilan. Laravel digunakan
            sebagai framework backend dengan MySQL sebagai basis data, serta Filament untuk dashboard dan GitHub sebagai
            kontrol versi.
        </p>
    </div>
    <marquee behavior="scroll" direction="left" scrollamount="10" onmouseover="this.stop();" onmouseout="this.start();"
        style="width: 100%; margin-top: 4rem;">
        <span style="display: inline-flex; align-items: center; gap: 2rem;">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://www.unimedia.tech/wp-content/uploads/2023/11/2560px-Logo.min_.svg_-1024x297.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Tailwind_CSS_logo.svg/512px-Tailwind_CSS_logo.svg.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://upload.wikimedia.org/wikipedia/commons/f/fd/JQuery-Logo.svg">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Sql_data_base_with_logo.png/800px-Sql_data_base_with_logo.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://garapmedia.com/wp-content/uploads/2025/01/01J4TYXBRT9FYKKKPTXFVSQE3T.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://cdn.freebiesupply.com/logos/large/2x/git-logo-png-transparent.png">

            {{-- <img class="max-h-[30px] md:max-h-[70px]" src="https://cdn.jsdelivr.net/gh/homarr-labs/dashboard-icons/svg/flowise.svg"> --}}
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://wp.logos-download.com/wp-content/uploads/2017/07/HTML5_logo.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://cdn.freebiesupply.com/logos/large/2x/css3-logo-png-transparent.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://logos-world.net/wp-content/uploads/2023/02/JavaScript-Emblem.png">
            <img class="max-h-[30px] md:max-h-[70px]" src="assets/flowise.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://freepnglogo.com/images/all_img/1706463199figma-logo-png.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://logos-download.com/wp-content/uploads/2016/09/Node_logo_NodeJS.png">
            <img class="max-h-[30px] md:max-h-[120px]"
                src="https://download.logo.wine/logo/Cloudflare/Cloudflare-Logo.wine.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://logos-world.net/wp-content/uploads/2020/11/GitHub-Emblem.png">

            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://www.unimedia.tech/wp-content/uploads/2023/11/2560px-Logo.min_.svg_-1024x297.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Tailwind_CSS_logo.svg/512px-Tailwind_CSS_logo.svg.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://upload.wikimedia.org/wikipedia/commons/f/fd/JQuery-Logo.svg">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Sql_data_base_with_logo.png/800px-Sql_data_base_with_logo.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://garapmedia.com/wp-content/uploads/2025/01/01J4TYXBRT9FYKKKPTXFVSQE3T.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://cdn.freebiesupply.com/logos/large/2x/git-logo-png-transparent.png">
        </span>
    </marquee>
    <marquee behavior="scroll" direction="right" scrollamount="10" onmouseover="this.stop();"
        onmouseout="this.start();" style="width: 100%; margin-top: 4rem;">
        <span style="display: inline-flex; align-items: center; gap: 2rem;">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://upload.wikimedia.org/wikipedia/commons/f/fd/JQuery-Logo.svg">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Sql_data_base_with_logo.png/800px-Sql_data_base_with_logo.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://garapmedia.com/wp-content/uploads/2025/01/01J4TYXBRT9FYKKKPTXFVSQE3T.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Tailwind_CSS_logo.svg/512px-Tailwind_CSS_logo.svg.png">
            {{-- <img class="max-h-[30px] md:max-h-[70px]" src="https://cdn.jsdelivr.net/gh/homarr-labs/dashboard-icons/svg/flowise.svg"> --}}
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://logos-world.net/wp-content/uploads/2020/11/GitHub-Emblem.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://wp.logos-download.com/wp-content/uploads/2017/07/HTML5_logo.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://cdn.freebiesupply.com/logos/large/2x/css3-logo-png-transparent.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://logos-world.net/wp-content/uploads/2023/02/JavaScript-Emblem.png">
            <img class="max-h-[30px] md:max-h-[120px]"
                src="https://download.logo.wine/logo/Cloudflare/Cloudflare-Logo.wine.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://www.unimedia.tech/wp-content/uploads/2023/11/2560px-Logo.min_.svg_-1024x297.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://logos-download.com/wp-content/uploads/2016/09/Node_logo_NodeJS.png">
            <img class="max-h-[30px] md:max-h-[70px]" src="assets/flowise.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://cdn.freebiesupply.com/logos/large/2x/git-logo-png-transparent.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://freepnglogo.com/images/all_img/1706463199figma-logo-png.png">

            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://upload.wikimedia.org/wikipedia/commons/f/fd/JQuery-Logo.svg">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Sql_data_base_with_logo.png/800px-Sql_data_base_with_logo.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://garapmedia.com/wp-content/uploads/2025/01/01J4TYXBRT9FYKKKPTXFVSQE3T.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Tailwind_CSS_logo.svg/512px-Tailwind_CSS_logo.svg.png">
            {{-- <img class="max-h-[30px] md:max-h-[70px]" src="https://cdn.jsdelivr.net/gh/homarr-labs/dashboard-icons/svg/flowise.svg"> --}}
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://logos-world.net/wp-content/uploads/2020/11/GitHub-Emblem.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://wp.logos-download.com/wp-content/uploads/2017/07/HTML5_logo.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://cdn.freebiesupply.com/logos/large/2x/css3-logo-png-transparent.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://logos-world.net/wp-content/uploads/2023/02/JavaScript-Emblem.png">
            <img class="max-h-[30px] md:max-h-[120px]"
                src="https://download.logo.wine/logo/Cloudflare/Cloudflare-Logo.wine.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://www.unimedia.tech/wp-content/uploads/2023/11/2560px-Logo.min_.svg_-1024x297.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://logos-download.com/wp-content/uploads/2016/09/Node_logo_NodeJS.png">
            <img class="max-h-[30px] md:max-h-[70px]" src="assets/flowise.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://cdn.freebiesupply.com/logos/large/2x/git-logo-png-transparent.png">
            <img class="max-h-[30px] md:max-h-[70px]"
                src="https://freepnglogo.com/images/all_img/1706463199figma-logo-png.png">
        </span>
    </marquee>


    {{-- batik efek bg --}}
    <img class="absolute w-[600px] opacity-60 z-[1]" src="assets/batik2.png" alt="">

    <!-- QnA Section -->
    <div class="  px-[10%] mt-[15%] py-8 lg:grid grid-cols-2 gap-10 relative z-[4]" >
        <div  data-aos="fade-up" data-aos-duration="800"> 
            {{-- line --}}
            <div class="h-[5px] mb-4 rounded-full bg-orange-600 w-[130px]"></div>
            <h2 class="text-2xl lg:text-4xl font-bold text-left mb-6 lg:w-[70%] merriweather text-gradasi">💬 Tanya
                Jawab Seputar
                Website Kebudayaan</h2>
            <p class=" md:text-xl   hidden lg:block">Berikut satu paragraf singkat untuk bagian QnA:
                > Bagian Tanya Jawab (Q\&A) ini disediakan untuk membantu pengunjung memahami tujuan, isi, serta fitur
                utama dari website kebudayaan ini. Dengan menjawab pertanyaan-pertanyaan umum, pengguna dapat lebih
                mudah mengeksplorasi konten dan mengetahui manfaat dari setiap kategori budaya yang ditampilkan.
            </p>
        </div>

        <!-- QnA Item -->
        <div class="space-y-4"  data-aos="fade-up" data-aos-duration="1200">
            <!-- Item 1 -->
            <div class="border border-gray-300 rounded-lg">
                <button onclick="toggleAnswer(1)"
                    class="w-full text-left p-4 font-medium text-sm lg:text-xl bg-orange-100 hover:bg-orange-200 transition-all">
                    + Apa tujuan dari website ini?
                </button>
                <p id="answer-1" class="hidden px-4 pb-10 md:text-xl  mt-5 text-gray-700">
                    Website ini bertujuan untuk memperkenalkan dan melestarikan berbagai kebudayaan Indonesia kepada
                    masyarakat, khususnya generasi muda. dengan cara yang modern
                </p>
            </div>

            <!-- Item 2 -->
            <div class="border border-gray-300 rounded-lg">
                <button onclick="toggleAnswer(2)"
                    class="w-full text-left p-4 font-medium text-sm lg:text-xl bg-orange-100 hover:bg-orange-200 transition-all">
                    + Apa saja kategori kebudayaan yang ditampilkan?
                </button>
                <p id="answer-2" class="hidden px-4 pb-10 md:text-xl  mt-5 text-gray-700">
                    Website ini menampilkan empat kategori utama:<br>
                    1. <strong>Kuliner</strong> – Makanan tradisional khas daerah.<br>
                    2. <strong>Seni</strong> – Tari, musik, dan pertunjukan budaya.<br>
                    3. <strong>Upacara Adat</strong> – Ritual dari berbagai suku.<br>
                    4. <strong>Festival</strong> – Perayaan budaya dari seluruh Indonesia.
                </p>
            </div>

            <!-- Item 3 -->
            <div class="border border-gray-300 rounded-lg">
                <button onclick="toggleAnswer(3)"
                    class="w-full text-left p-4 font-medium text-sm lg:text-xl bg-orange-100 hover:bg-orange-200 transition-all">
                    + Apakah konten di website ini bisa terus diperbarui?
                </button>
                <p id="answer-3" class="hidden px-4 pb-10 md:text-xl  mt-5 text-gray-700">
                    Ya, konten akan terus diperbarui sesuai dengan perkembangan dan tambahan informasi budaya dari
                    berbagai daerah.
                </p>
            </div>

            <!-- Item 4 -->
            <div class="border border-gray-300 rounded-lg">
                <button onclick="toggleAnswer(4)"
                    class="w-full text-left p-4 font-medium text-sm lg:text-xl bg-orange-100 hover:bg-orange-200 transition-all">
                    + Siapa yang dapat menggunakan website ini?
                </button>
                <p id="answer-4" class="hidden px-4 pb-10 md:text-xl  mt-5 text-gray-700">
                    Website ini terbuka untuk semua kalangan: pelajar, guru, wisatawan, maupun masyarakat umum.
                </p>
            </div>

            <!-- Item 5 -->
            <div class="border border-gray-300 rounded-lg">
                <button onclick="toggleAnswer(5)"
                    class="w-full text-left p-4 font-medium text-sm lg:text-xl bg-orange-100 hover:bg-orange-200 transition-all">
                    + Apakah website ini bisa diakses melalui HP?
                </button>
                <p id="answer-5" class="hidden px-4 pb-10 md:text-xl  mt-5 text-gray-700">
                    Bisa. Website ini responsif dan nyaman digunakan di desktop maupun perangkat seluler.
                </p>
            </div>
        </div>
    </div>


</div>


{{-- animasi scroll --}}
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@include('components.footer')
@include('layouts.footer')
