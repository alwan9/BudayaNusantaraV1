 <section
         class="hero-bg h-[70vh] md:h-[90vh] rounded-b-3xl flex flex-col items-center justify-center text-white text-center relative overflow-hidden">
         <!-- Content Container -->
         <div class="z-10 flex flex-col items-center px-4">
             <h1
                 class="text-4xl md:text-6xl font-extrabold leading-tight mb-4 animate__backInDown animate__animated drop-shadow-2xl animate__delay-1s">
                 Lihat Ragam <br class="hidden md:block"> Budaya Di <span class=" text-orange-600"> Indonesia</span>
             </h1>
             <p
                 class="text-lg md:text-xl text-gray-300 max-w-2xl mb-8 animate__fadeIn animate__animated animate__delay-2s">
                 Jelajahi kekayaan budaya, tradisi, dan warisan nusantara di ujung jari Anda.
             </p>

             <!-- Search Bar -->
             <div
                 class="w-full max-w-xl bg-white/20 backdrop-blur-sm p-2 rounded-full flex items-center animate__zoomIn animate__animated animate__delay-2s">
                 <input type="text" placeholder="Cari budaya, tarian, atau acara..."
                     class="w-full bg-transparent text-white placeholder-gray-300 border-none focus:ring-0 px-4 py-2">
                 <button
                     class="bg-orange-500 text-white px-6 py-2 rounded-full hover:bg-orange-600 transition-colors shrink-0">
                     Cari
                 </button>
             </div>
         </div>
         <div style="display: flex; font-size: 30px;  "
             class="absolute bottom-0 w-full bg-orange-800/30 backdrop-blur-md p-4 flex justify-center gap-[10%]">
             <div>
                 <div class="flex items-center  justify-center">
                     <div class="counter font-bold" data-target="500"></div>+
                 </div>
                 <p class=" text-xl font-medium">Pengguna Aktif</p>
             </div>

             <div>
                 <div class="flex items-center  justify-center">
                     <div class="counter font-bold" data-target="500"></div>+
                 </div>
                 <p class=" text-xl font-medium">Berita</p>
             </div>
             <div>
                 <div class="flex items-center  justify-center">
                     <div class="counter font-bold" data-target="1000"></div>+
                 </div>
                 <p class=" text-xl font-medium">Acara Aktif</p>
             </div>

         </div>

         <!-- Stats Bar at the bottom -->
         {{-- <div class="absolute bottom-0 w-full bg-orange-800/30 backdrop-blur-md p-4">
             <div class="container mx-auto grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                 <div class="p-2">
                     <div class="text-2xl font-bold" class="counter" data-target="100">100</div>
                     <p class="text-gray-300">Acara</p>
                 </div>
                 <div class="p-2">
                     <div class="text-2xl font-bold" class="counter" data-target="100"></div>
                     <p class="text-gray-300">Warisan</p>
                 </div>
                 <div class="p-2">
                     <div class="text-2xl font-bold" class="counter" data-target="100"></div>
                     <p class="text-gray-300">Provinsi</p>
                 </div>
                 <div class="p-2 col-span-2 md:col-span-1">
                     <div class="text-2xl font-bold" class="counter" data-target="100"></div>
                     <p class="text-gray-300">Suku Bangsa</p>
                 </div>
             </div>
         </div> --}}
     </section>
