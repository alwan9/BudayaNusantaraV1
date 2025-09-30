 @include('layouts.header')

 @include('components.go-top')
 @include('components.navbar')

 @php
     $userName = $user->user->name ?? $user->name;
     $initial = strtoupper(substr($userName, 0, 1));
     $isInstansi = Str::contains($user->name, ['Kabupaten', 'Provinsi', 'Kota']);
     $keterangan = $isInstansi ? 'Kementrian' : 'Masyarakat Umum';
 @endphp

 <div class="lg:flex items-center gap-10">
     <div data-aos="fade-right" data-aos-duration="1200"
         class="flex bg-orange-100  mb-10 md:mb-0 rounded-3xl items-center text-center justify-center konten pt-[25%] lg:pt-[10%] lg:w-[30%]">
         <div class="   rounded-2xl h-full  ">
             <div>
                 <div class="flex items-center justify-center w-full">
                     <div
                         class="w-[55px] h-[55px] rounded-full bg-black text-white flex items-center justify-center text-lg font-bold">
                         {{ $initial }}
                     </div>
                 </div>
                 <h2 class=" text-3xl mt-5 font-bold">{{ $user->name }}</h2>
                 <p class=" text-orange-600 text-sm lg:text-xl mt-2 lg:my-3">{{ $user->email }}</p>
                 <div class=" flex items-center justify-center gap-4 lg:gap-10 my-4 ">
                     <div class=" text-center ">
                         <h5 class="text-2xl lg:text-4xl font-bold">{{ $total_artikel }}</h5>
                         <p class="text-xs  lg:text-base ">Artikel Berita</p>
                     </div>
                     <div class="w-[2px] h-[25px] lg:h-[40px] rounded-full bg-orange-200"></div>
                     <div class=" text-center ">
                         <h5 class="text-2xl lg:text-4xl font-bold  ">{{ $acara_aktif }}</h5>
                         <p class="text-xs  lg:text-base ">Acara Aktif</p>
                     </div>
                     <div class="w-[2px] h-[25px] lg:h-[40px] rounded-full bg-orange-200"></div>
                     <div class=" text-center ">
                         <h5 class="text-2xl lg:text-4xl font-bold">{{ $total_acara }}</h5>
                         <p class="text-xs  lg:text-base ">total acara</p>
                     </div>
                 </div>
             </div>

         </div>
     </div>

     <div class="px-[5%] lg:pt-[10%]" data-aos="fade-up" data-aos-duration="1200">
         {{-- Tombol Navigasi --}}
         <div class="grid grid-cols-2 text-center md:w-max gap-5 w-full justify-center  ">
             <button onclick="showArtikel()" data-aos="fade-up" data-aos-duration="700"
                 class="text-center duration-200 flex justify-center gap-2 items-center hover:text-white hover:bg-orange-600/50  text-sm lg:text-2xl bg-orange-600/20 rounded-t-2xl px-10 py-3 "><svg
                     xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                     <path fill="currentColor"
                         d="M9.5 6.5a.75.75 0 0 1 .75-.75h6.5a.75.75 0 0 1 0 1.5h-6.5a.75.75 0 0 1-.75-.75m4.638 2.25h2.224c.06 0 .13 0 .193.005a.8.8 0 0 1 .285.077a.75.75 0 0 1 .328.328a.7.7 0 0 1 .077.285c.005.063.005.134.005.193v1.724c0 .06 0 .13-.005.193a.8.8 0 0 1-.077.286a.75.75 0 0 1-.328.327a.8.8 0 0 1-.285.077c-.063.005-.134.005-.193.005h-2.224c-.06 0-.13 0-.193-.005a.8.8 0 0 1-.286-.077a.75.75 0 0 1-.327-.327a.8.8 0 0 1-.077-.286c-.005-.063-.005-.134-.005-.193V9.638c0-.06 0-.13.005-.193a.8.8 0 0 1 .077-.285a.75.75 0 0 1 .327-.328a.8.8 0 0 1 .286-.077c.063-.005.134-.005.193-.005m.112 1v1.5h2v-1.5zm-4.5-.25a.5.5 0 0 1 .5-.5h1.25a.5.5 0 0 1 0 1h-1.25a.5.5 0 0 1-.5-.5m.5 1.75a.5.5 0 0 0 0 1h1.25a.5.5 0 0 0 0-1zm-.5 3.25a.5.5 0 0 1 .5-.5h6.5a.5.5 0 0 1 0 1h-6.5a.5.5 0 0 1-.5-.5" />
                     <path fill="currentColor"
                         d="M16.321 3H10.68c-.542 0-.98 0-1.333.029c-.365.03-.685.093-.981.243a2.5 2.5 0 0 0-1.093 1.093c-.15.296-.213.616-.243.98C7 5.7 7 6.138 7 6.68V17H4.5a.5.5 0 0 0-.5.5c0 1.622.548 2.536 1.2 3.025c.314.236.629.354.866.413c.14.035.283.06.427.062c1.657.012 7.187 0 10.123 0c.689 0 1.385.05 2.019-.273c.813-.414 1.264-1.185 1.336-2.073c.029-.354.029-.79.029-1.332V6.679c0-.542 0-.98-.029-1.333c-.03-.365-.093-.685-.244-.981a2.5 2.5 0 0 0-1.092-1.093c-.296-.15-.616-.213-.98-.243C17.3 3 16.862 3 16.32 3m.479 16.725c-.348-.261-.8-.847-.8-2.225a.5.5 0 0 0-.5-.5H8V6.7c0-.568 0-.964.026-1.273c.024-.302.07-.476.137-.608a1.5 1.5 0 0 1 .656-.656c.132-.067.306-.113.608-.137C9.736 4 10.132 4 10.7 4h5.6c.568 0 .965 0 1.273.026c.302.024.476.07.608.137a1.5 1.5 0 0 1 .656.656c.067.132.113.306.137.608C19 5.736 19 6.132 19 6.7v10.6c0 .568 0 .965-.026 1.273c-.044.546-.286 1.005-.793 1.264c-.45.229-.98.189-1.381-.112M15.68 20H6.506a1.3 1.3 0 0 1-.705-.275c-.303-.227-.684-.7-.778-1.725h9.996c.07.896.323 1.542.663 2" />
                 </svg> Artikel</button>
             <button onclick="showAcara()" data-aos="fade-up" data-aos-duration="1300"
                 class="text-center duration-200 flex justify-center gap-2 items-center hover:text-white hover:bg-orange-600/50  text-sm lg:text-2xl bg-orange-600/20 rounded-t-2xl px-10 py-3 "><svg
                     xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                     <path fill="currentColor"
                         d="M14.885 18q-.877 0-1.496-.62t-.62-1.495t.62-1.497t1.496-.619t1.496.62t.619 1.496t-.62 1.496t-1.495.619m-9.27 3q-.69 0-1.152-.462T4 19.385V6.615q0-.69.463-1.152T5.616 5h1.769V3.308q0-.233.153-.386t.385-.153t.386.153t.153.386V5h7.154V3.27q0-.214.143-.358t.357-.143t.356.143t.144.357V5h1.769q.69 0 1.153.463T20 6.616v12.769q0 .69-.462 1.153T18.384 21zm0-1h12.77q.23 0 .423-.192t.192-.424v-8.768H5v8.769q0 .23.192.423t.423.192" />
                 </svg>Acara</button>
         </div>
         {{-- konten --}}
         <div>
             <div class="relative flex flex-col min-h-[800px]">
                 <div class="w-full h-[3px] rounded-full bg-orange-200 mb-3  "></div>

                 <div class="flex-1 max-h-[80vh] overflow-y-auto p-5">
                     {{-- Artikel --}}
                     <div id="konten-artikel" class="grid grid-cols-2 lg:grid-cols-4 gap-3">
                         @forelse ($artikels as $artikel)
                             @include('components.card-artikel2')
                         @empty
                             <div class="col-span-2 lg:col-span-4 text-center text-gray-500 py-10">
                                 Tidak ada berita yang tersedia.
                             </div>
                         @endforelse
                     </div>

                     {{-- Acara --}}
                     <div id="konten-acara" class="grid grid-cols-2 lg:grid-cols-4  gap-3 hover:z-[9] hidden">
                         @forelse ($acaras as $acara)
                             @include('components.card-acara')
                         @empty
                             <div class="col-span-2 lg:col-span-4 text-center text-gray-500 py-10">
                                 Tidak ada acara yang tersedia.
                             </div>
                         @endforelse
                     </div>

                     {{-- Tersimpan --}}
                     <div id="konten-tersimpan"
                         class="grid grid-cols-2 lg:grid-cols-4 gap-3 hidden min-h-[300px] w-full text-center text-gray-500">
                         <div class="col-span-2 lg:col-span-4 py-10">
                             Belum ada konten tersimpan.
                         </div>
                     </div>
                 </div>

                 {{-- Spacer --}}
                 <div class="h-10 lg:h-20"></div>
             </div>
         </div>
     </div>
 </div>

 {{-- animasi scroll --}}
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
 <script>
     AOS.init();
 </script>
 <script>
     function showAcara() {
         document.getElementById("konten-acara").classList.remove("hidden");
         document.getElementById("konten-artikel").classList.add("hidden");
         document.getElementById("konten-tersimpan").classList.add("hidden");
     }

     function showArtikel() {
         document.getElementById("konten-artikel").classList.remove("hidden");
         document.getElementById("konten-acara").classList.add("hidden");
         document.getElementById("konten-tersimpan").classList.add("hidden");
     }

     function showTersimpan() {
         document.getElementById("konten-tersimpan").classList.remove("hidden");
         document.getElementById("konten-artikel").classList.add("hidden");
         document.getElementById("konten-acara").classList.add("hidden");
     }
 </script>

 @include('layouts.footer')
