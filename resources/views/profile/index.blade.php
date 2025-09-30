 @include('layouts.header')

 @include('components.go-top')
 @include('components.navbar')
 <div class="lg:flex items-center gap-10">
     <div class="flex items-center text-center justify-center konten pt-[10%] w-[30%]">
         <div class="  bg-zinc-50 rounded-2xl h-full  ">
             <div>
                 <div class="flex items-center justify-center w-full">
                     <div class="bg-zinc-400 w-[111px] h-[111px]  rounded-full"></div>
                 </div>
                 <h2 class=" text-3xl mt-5 font-bold">Haiban Aufar</h2>
                 <p class=" text-orange-600 text-sm lg:text-xl mt-2 lg:my-3">Dinas Kebudayaan Purbalingga</p>
                 <div class=" flex items-center justify-center gap-4 lg:gap-10 my-4 ">
                     <div class=" text-center ">
                         <h5 class="text-2xl lg:text-4xl font-bold">14</h5>
                         <p class="text-xs  lg:text-base ">Artikel Berita</p>
                     </div>
                     <div class="w-[2px] h-[25px] lg:h-[40px] rounded-full bg-orange-200"></div>
                     <div class=" text-center ">
                         <h5 class="text-2xl lg:text-4xl font-bold  bg-orange-200">24</h5>
                         <p class="text-xs  lg:text-base ">Acara Aktif</p>
                     </div>
                     <div class="w-[2px] h-[25px] lg:h-[40px] rounded-full bg-orange-200"></div>
                     <div class=" text-center ">
                         <h5 class="text-2xl lg:text-4xl font-bold">4</h5>
                         <p class="text-xs  lg:text-base ">total acara</p>
                     </div>
                 </div>
             </div>
             {{-- bio --}}
             <p class="mt-10">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate labore iure numquam
                 beatae! Corrupti consequatur libero enim vel eius eligendi esse. Deleniti quod fuga amet ipsum corrupti
                 soluta, hic labore!</p>
         </div>
     </div>
     {{-- konten --}}
     <div class="px-[5%] lg:pt-[10%] ">

         <div class="grid grid-cols-3 gap-2 lg:gap-10 text-center mt-[2%] px-[10%] w-full h-full">
             <button onclick="showArtikel()"
                 class="font-bold text-center hover:text-orange-600 text-sm lg:text-2xl w-full">Berita</button>
             <button onclick="showAcara()"
                 class="font-bold text-center hover:text-orange-600 text-sm lg:text-2xl w-full">Acara</button>
             <button onclick="showTersimpan()"
                 class="font-bold text-center hover:text-orange-600 text-sm lg:text-2xl w-full">Tersimpan</button>
         </div>
         <div>

             <div class="w-full h-[3px] rounded-full bg-zinc-200 my-3 lg:my-10 "></div>
             {{-- artikel --}}
             <div id="konten-artikel" class="grid grid-cols-2 lg:grid-cols-4 gap-3">

                 @foreach ($data_artikel as $artikel)
                     @include('components.card-artikel2', ['artikel' => $artikel])
                 @endforeach

             </div>
             {{-- acaara --}}
             <div id="konten-acara" class="grid grid-cols-2 lg:grid-cols-4 gap-3 hidden">
                 @foreach ($data_acara as $acara)
                     @include('components.card-acara')
                 @endforeach

             </div>
             {{-- acaara --}}
             <div id="konten-tersimpan" class="grid grid-cols-2 lg:grid-cols-4 gap-3 hidden min-h-[300px] w-full">

             </div>
         </div>
     </div>
 </div>

 @include('layouts.footer')
