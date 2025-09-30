  <a href="{{ route('artikel.show', $artikel->id) }}">
      <div
          class="hover:bg-orange-100 hover:z-[999]   card-bg relative z-[9] rounded-3xl gap-5 w-full duration-200 hover:scale-105 hover:cursor-pointer">
          <div class="bg-center bg-cover rounded-2xl h-[190px] w-full bg-orange-100"
              style="background-image: url('{{ $artikel->images && $artikel->images->img1 ? asset('storage/' . $artikel->images->img1) : asset('assets/default-image.jpg') }}')">
          </div>


          <div class="mt-3 lg:mt-5 px-2 py-4">
              <p class="flex text-xs md:text-base items-center gap-2 text-orange-500"><svg
                      xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                      <path fill="currentColor"
                          d="M5.673 0a.7.7 0 0 1 .7.7v1.309h7.517v-1.3a.7.7 0 0 1 1.4 0v1.3H18a2 2 0 0 1 2 1.999v13.993A2 2 0 0 1 18 20H2a2 2 0 0 1-2-1.999V4.008a2 2 0 0 1 2-1.999h2.973V.699a.7.7 0 0 1 .7-.699M1.4 7.742v10.259a.6.6 0 0 0 .6.6h16a.6.6 0 0 0 .6-.6V7.756zm5.267 6.877v1.666H5v-1.666zm4.166 0v1.666H9.167v-1.666zm4.167 0v1.666h-1.667v-1.666zm-8.333-3.977v1.666H5v-1.666zm4.166 0v1.666H9.167v-1.666zm4.167 0v1.666h-1.667v-1.666zM4.973 3.408H2a.6.6 0 0 0-.6.6v2.335l17.2.014V4.008a.6.6 0 0 0-.6-.6h-2.71v.929a.7.7 0 0 1-1.4 0v-.929H6.373v.92a.7.7 0 0 1-1.4 0z" />
                  </svg>
                  {{ \Carbon\Carbon::parse($artikel->tanggal_akhir)->translatedFormat('D, d F Y ') }}  

              </p>
              <h1 class=" lg:text-xl font-bold h-[50px] line-clamp-2 md:h-[60px] "> {{ $artikel->judul }}</h1>
              <p class=" opacity-50  line-clamp-2  text-xs md:text-base"> {{ $artikel->des_singkat }}</p>
          </div>
      </div>
  </a>
