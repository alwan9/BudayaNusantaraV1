@include('layouts.header')
@include('components.navbar')

<div class="lg:flex px-5    lg:px-[10%] lg:pt-[10%] pt-[20%]  gap-10 relative z-[4] ">
    <div>
        <div class="lg:flex items-center justify-between  gap-5 " data-aos="zoom-in" data-aos-duration="700">
            {{-- Gambar Utama --}}
            @php
                $imgUtama = $detail_artikel->images?->img1;
            @endphp
            @if ($imgUtama && file_exists(public_path('storage/' . $imgUtama)))
                <div class=" flex   justify-center w-full">

                    <img src="{{ asset('storage/' . $imgUtama) }}"
                        class="object-cover bg-orange-200   h-[250px] shadow md:h-[300px] lg:h-[500px] rounded-2xl"
                        alt="Gambar Utama">
                </div>
            @else
                {{-- Default jika img1 tidak ada --}}
                <img src="/assets/festival.webp"
                    class="object-cover bg-zinc-300   h-[250px] shadow md:h-[300px] lg:h-[500px] rounded-2xl"
                    alt="Default Gambar">
            @endif
            {{-- @if ($imgUtama && file_exists(public_path('storage/' . $imgUtama)))
                <img src="{{ asset('storage/' . $imgUtama) }}"
                    class="object-cover bg-orange-200 w-full h-[250px] shadow md:h-[300px] lg:h-[500px] rounded-2xl"
                    alt="Gambar Utama">
            @else
                <img src="/assets/festival.webp"
                    class="object-cover bg-zinc-300 w-full h-[250px] shadow md:h-[300px] lg:h-[500px] rounded-2xl"
                    alt="Default Gambar">
            @endif --}}


            {{-- Thumbnails img2, img3, img4 --}}
            <div class="grid grid-cols-4 md:grid-cols-1 gap-2 mt-5 lg:mt-0  ">
                @foreach (['img2', 'img3', 'img4'] as $imgKey)
                    @php
                        $imgPath = $detail_artikel->images?->$imgKey;
                    @endphp
                    @if ($imgPath && file_exists(public_path('storage/' . $imgPath)))
                        <img src="{{ asset('storage/' . $imgPath) }}" data-src="{{ asset('storage/' . $imgPath) }}"
                            alt="Thumbnail {{ $imgKey }}"
                            class="w-full h-[100px] object-cover bg-zinc-50 rounded-xl shadow thumbnail">
                    @endif
                @endforeach
            </div>
        </div>




        <div class="px-10 py-2 rounded-full w-max bg-orange-600 mt-10 bg-opacity-25   text-orange-700"
            data-aos="fade-up" data-aos-duration="1000">
            {{ \Carbon\Carbon::parse($detail_artikel->created_at)->translatedFormat('D d F Y') }}

        </div>
        <h1 class="text-2xl lg:text-5xl mt-10 font-bold" data-aos="fade-up" data-aos-duration="1000">
            {{ $detail_artikel->judul }}</h1>
        <div data-aos="fade-up" data-aos-duration="1200">
            @include('components.user-profile')
        </div>
        <div class="mt-10 lg:text-2xl">
            <div class="whitespace-pre-wrap" data-aos="fade-up" data-aos-duration="1500">
                {{ $detail_artikel->detail_acara }}</div>
            @php
                $videoId = null;

                // Cek apakah ada video URL di relasi images
                if (!empty($detail_artikel->images?->video)) {
                    // Ambil ID dari URL YouTube
                    if (preg_match('/(?:v=|youtu\.be\/)([^&]+)/', $detail_artikel->images->video, $matches)) {
                        $videoId = $matches[1];
                    }
                }
            @endphp

            @if ($videoId)
                <iframe class="w-full mt-10 h-[300px] md:h-[500px]"
                    src="https://www.youtube.com/embed/{{ $videoId }}" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            @else
                <p class="text-red-600 text-sm"></p>
            @endif


        </div>
    </div>
    <div class="lg:px-10 py-3 lg:bg-orange-100 rounded-2xl  min-w-[500px]" data-aos="fade-up" data-aos-duration="1000">
        <div class="flex justify-between ">
            <div class="my-10">

                <h4 class=" text-2xl md:text-3xl mb-2 font-bold">Berita Terbaru</h4>
                <p>Berita terbaru kali ini mengangkat momen spesial yang penuh antusiasme dan semangat dari masyarakat
                    dalam menyambut acara yang berlangsung meriah.</p>
            </div>
        </div>
        <div >
            @foreach ($data_artikel as $artikel)
                @include('components.card-artikel3')
            @endforeach
        </div>

    </div>
</div>

@php
    $bgImage = $detail_artikel->images?->img1;
    $bgSrc =
        $bgImage && file_exists(public_path('storage/' . $bgImage))
            ? asset('storage/' . $bgImage)
            : asset('assets/festival.webp');
@endphp

<img src="{{ $bgSrc }}"
    class="w-full h-[250px] lg:h-[500px] bg-zinc-900 absolute top-0 brightness-50 object-cover" alt="Background Gambar">




<div class="overlay" id="overlay">
    <img src="" alt="Full" class="fullscreen-image" id="fullscreenImage">
</div>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
    // Fullscreen overlay logic
    const overlay = document.getElementById('overlay');
    const fullscreenImage = document.getElementById('fullscreenImage');
    const thumbnails = document.querySelectorAll('.thumbnail');

    thumbnails.forEach(div => {
        div.addEventListener('click', () => {
            // Ambil dari atribut data-src
            const src = div.getAttribute('data-src');
            fullscreenImage.src = src;
            overlay.classList.remove('hidden');
            overlay.classList.add('flex');
        });
    });

    overlay.addEventListener('click', (e) => {
        if (e.target === overlay || e.target === fullscreenImage) {
            overlay.classList.remove('flex');
            overlay.classList.add('hidden');
            fullscreenImage.src = "";
        }
    });
</script>
@include('components.footer')
@include('layouts.footer')
