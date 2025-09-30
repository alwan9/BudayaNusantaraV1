<!-- Card 1 -->
<a href="{{ route('acara.show', $acara->id) }}">
    <div
        class="relative z-[4] hover:z-[9] card-bg rounded-2xl shadow-lg hover:bg-orange-100 hover:cursor-pointer overflow-hidden hover:scale-105 bg-orange-50 duration-200
               min-w-[200px] max-w-[200px] md:min-w-[250px]  flex-shrink-0">

        <!-- Gambar -->
        <div class="w-full h-[150px] lg:h-[200px] bg-orange-50 bg-center bg-cover"
            style="background-image: url('{{ $acara->images && $acara->images->img1 ? asset('storage/' . $acara->images->img1) : asset('assets/default-image.jpg') }}')">
        </div>

        <!-- Status -->
        @if ($acara->htm > 0)
            <div data-aos="fade-left"   data-aos-duration="1500"
             class="lg:px-12 px-8 text-xs lg:text-xl py-2 rounded-bl-3xl text-orange-100 shadow-sm bg-red-500 absolute right-0 top-0">
                Berbayara
            </div>
        @else
            <div data-aos="fade-left"  data-aos-duration="1500"
            class="px-12 py-2 text-xs lg:text-xl rounded-bl-3xl text-orange-50 shadow-sm bg-green-500 absolute right-0 top-0">
                Tanpa Biaya
            </div>
        @endif

        <!-- Konten -->
        <div class="p-3 lg:p-4 space-y-2">
            <p class="flex items-center gap-2 line-clamp-1">
                <svg class="w-[16px] md:min-w-[30px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                    <g fill="none">
                        <path fill="url(#fluentColorLocationRipple162)" d="M14 12.5C14 14 11.314 15 8 15s-6-1-6-2.5S4.686 10 8 10s6 1 6 2.5" />
                        <path fill="url(#fluentColorLocationRipple160)" d="M8 1a5 5 0 0 0-5 5c0 1.144.65 2.35 1.393 3.372c.757 1.043 1.677 1.986 2.346 2.62a1.824 1.824 0 0 0 2.522 0c.669-.634 1.589-1.577 2.346-2.62C12.349 8.35 13 7.144 13 6a5 5 0 0 0-5-5" />
                        <path fill="url(#fluentColorLocationRipple161)" d="M9.5 6a1.5 1.5 0 1 1-3 0a1.5 1.5 0 0 1 3 0" />
                        <defs>
                            <linearGradient id="fluentColorLocationRipple160" x1=".813" x2="8.969" y1="-2.285" y2="10.735" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#f97dbd" />
                                <stop offset="1" stop-color="#d7257d" />
                            </linearGradient>
                            <linearGradient id="fluentColorLocationRipple161" x1="6.674" x2="8.236" y1="6.133" y2="7.757" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#fdfdfd" />
                                <stop offset="1" stop-color="#fecbe6" />
                            </linearGradient>
                            <radialGradient id="fluentColorLocationRipple162" cx="0" cy="0" r="1"
                                gradientTransform="matrix(9.42857 -1.66667 .69566 3.93547 7.571 11.667)"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#7b7bff" />
                                <stop offset=".502" stop-color="#a3a3ff" />
                                <stop offset="1" stop-color="#ceb0ff" />
                            </radialGradient>
                        </defs>
                    </g>
                </svg>
                <span class="line-clamp-1">{{ $acara->lokasi }}</span>
            </p>

            <h3 class="font-bold text-xl mb-2 line-clamp-2 min-h-[45px]">
                {{ $acara->judul }}
            </h3>

            <p class="text-orange-900/60 text-sm line-clamp-2 min-h-[40px]">
                {{ $acara->des_singkat }}
            </p>
        </div>
    </div>
</a>
