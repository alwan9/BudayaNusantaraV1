@include('layouts.header')
@include('components.navbar')

<div class="  lg:px-[10%] lg:pt-[10%] pt-[20%]">
    <div class=" lg:grid grid-cols-2 items-center gap-[3%]" data-aos="fade-up" data-aos-duration="1000">
        {{-- Grid Thumbnail --}}
        {{-- @foreach (['img1', 'img2', 'img3', 'img4'] as $img)
                @php
                    $imgPath = $detail_acara->image?->$img;
                @endphp
                @if ($imgPath)
                    <div class=" w-full  rounded-2xl h-[500px] bg-zinc-50 bg-center bg-cover thumbnail px-10"
                        data-src="{{ asset('storage/' . $imgPath) }}"
                        style="background-image: url('{{ asset('storage/' . $imgPath) }}')">
                    </div>
                @endif
            @endforeach --}}
        @php
            $images = collect(['img1', 'img2', 'img3', 'img4'])
                ->map(fn($img) => $detail_acara->images?->$img)
                ->filter();

            $mainImage = $images->first();
            $thumbnailImages = $images->slice(0);
        @endphp

        {{-- Container utama --}}
        @if ($images->count() === 1)
            {{-- Hanya 1 gambar: tampilkan gambar penuh --}}
            <div id="sliderContainer" class="w-full h-[500px] rounded-2xl bg-zinc-200 bg-center bg-cover" id="mainImage"
                style="background-image: url('{{ asset('storage/' . $mainImage) }}')">
            </div>
        @else
            {{-- Ada 2 atau lebih gambar: tampilkan gambar utama + thumbnail --}}
            <div id="sliderContainer" class="relative w-full lg:flex gap-4">
                {{-- Gambar utama --}}
                <div id="mainImage"
                    class="w-full   h-[500px] rounded-2xl bg-zinc-200 bg-center bg-cover transition-all duration-700"
                    style="background-image: url('{{ asset('storage/' . $mainImage) }}')">
                </div>

                {{-- Thumbnail samping --}}
                <div
                    class="{{ $thumbnailImages->count() === 1 ? 'flex flex-col justify-start' : 'grid grid-cols-3 lg:grid-cols-1 gap-4' }} px-[5%] md:px-0 w-full lg:w-1/3">

                    @foreach ($thumbnailImages as $imgPath)
                        <div class="thumbnail   mt-5 lg:mt-0 h-[150px] md:h-full p-0 w-full m-0 rounded-2xl bg-center bg-cover bg-zinc-100 cursor-pointer"
                            data-src="{{ asset('storage/' . $imgPath) }}"
                            style="background-image: url('{{ asset('storage/' . $imgPath) }}')">
                        </div>
                    @endforeach

                </div>
            </div>
        @endif



        {{-- Fullscreen Overlay --}}
        <div id="overlay" class="fixed inset-0 bg-black bg-opacity-80 hidden justify-center items-center z-50">
            <img id="fullscreenImage" class="max-h-[90vh] max-w-[90vw] rounded-xl shadow-xl" src="">
        </div>


        <div class="mt-10 lg:mt-0 px-[5%]">
            <div class="flex items-center gap-3 text-base lg:text-2xl">


            </div>
            <h2 class="bg-orange-100 text-orange-900 px-10 py-1 w-max border-2  border-orange-200 rounded-full">
                {{ $detail_acara->kategori->nama }}</h2>
            <h1 onclick="openModal()" class="cursor-pointer w-[80%] relative text-4xl font-bold mt-4 leading-tight ">
                {{ $detail_acara->judul }}
                <span
                    class="inline-flex align-text-top ml-1 w-[16px] hover:opacity-70  hover:scale-105 duration-300 h-[16px] items-center justify-center rounded-full bg-red-500 opacity-20 text-red-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[14px] h-[14px]" viewBox="0 0 48 48">
                        <path fill="currentColor"
                            d="M21 7a3 3 0 1 1 6 0v24a3 3 0 1 1-6 0zm0 34a3 3 0 1 1 6 0a3 3 0 0 1-6 0" />
                    </svg>
                </span>
            </h1>
            {{-- @foreach ($data_user as $user) --}}

            @include('components.user-profile')
            {{-- @endforeach --}}
            <h5 class="mb-3 font-semibold text-xl">Tanggal Dilaksanakan :</h5>
            @include('components.main-event')


            <div class="mt-10 flex items-center gap-3">
                @php
                    // Bersihkan nomor panitia dari +62 atau 62
                    $nomor = preg_replace('/^(\+62|62)/', '', $detail_acara->no_panitia);

                    // Pesan default WhatsApp
                    $pesan = urlencode(
                        'Halo, saya ingin mendaftar acara ini. Apakah ada formulir pendaftaran yang perlu saya isi?',
                    );
                @endphp

                <a href="https://wa.me/62{{ $nomor }}?text={{ $pesan }}" target="_blank">
                    <button class="btn-line text-xs px-7 md:px-10 flex items-center gap-2 md:text-base">Daftar Acara
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28" />
                        </svg> </button>
                </a>
                <a href="{{ route('acara.index') }}">
                    <button class="btn-bg text-sm px-10 flex items-center gap-2 md:text-base">
                        Acara Lainya</button>
                </a>
                <a target="_blank" href="https://www.google.com/search?q={{ urlencode($detail_acara->lokasi) }}">

                    <div class="relative group w-max">
                        <button class="btn-bg text-sm w- flex items-center gap-2 md:text-base">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7" />
                            </svg>
                        </button>
                        <!-- Tooltip -->
                        <div
                            class="absolute left-1/2 -translate-x-1/2 bottom-full mb-2 hidden group-hover:block bg-amber-900 text-white text-sm px-3 py-1 rounded z-10">
                            Tempat Acara
                        </div>
                    </div>
                </a>
            </div>
            <div class="mt-10 flex items-center gap-3">
                <p class=" text-2xl font-bold">Share : </p>
                <div
                    class="w-[50px] h-[50px] hover:bg-zinc-300 cursor-pointer duration-300 rounded-full shadow-xl text-orange-700 flex items-center justify-center ">
                    <a onclick="shareTo('fb')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5"
                                d="M10.478 21.125a9.3 9.3 0 0 0 3.037.002m-3.038-.002A9.25 9.25 0 0 1 2.75 12a9.25 9.25 0 1 1 10.765 9.127m-3.038-.002V16.12H8.58a.6.6 0 0 1-.6-.6v-1.838a.6.6 0 0 1 .6-.6h1.897V9.95a3 3 0 0 1 3-3h1.81a1 1 0 0 1 1 1v1.04a1 1 0 0 1-1 1h-.772a1 1 0 0 0-1 1v2.092h2.297a.6.6 0 0 1 .592.698l-.25 1.504a1 1 0 0 1-.986.836h-1.653v5.007" />
                        </svg>
                    </a>
                </div>
                <div
                    class="w-[50px] h-[50px] hover:bg-zinc-300 cursor-pointer duration-300 rounded-full shadow-xl text-orange-700 flex items-center justify-center ">
                    <a onclick="shareTo('ig')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" class="bi bi-instagram icon-shere"
                            height="30" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                                <path d="M16 11.37A4 4 0 1 1 12.63 8A4 4 0 0 1 16 11.37m1.5-4.87h.01" />
                            </g>
                        </svg>
                    </a>
                </div>
                <div
                    class="w-[50px] h-[50px] hover:bg-zinc-300 cursor-pointer duration-300 rounded-full shadow-xl text-orange-700 flex items-center justify-center ">
                    <a onclick="shareTo('wa')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28" />
                        </svg>
                    </a>
                </div>
            </div>



        </div>
    </div>
    <div class="px-[5%] md:px-10">


        <h2 class=" text-2xl lg:text-4xl font-bold mt-[10%] ">Detail Acara</h2>

        <p class="mt-5 text-base lg:text-2xl  ">
            {{ $detail_acara->detail_acara }}
        </p>
    </div>


    <div class="mt-[10%] px-[5%] lg:px-0">
        <div class=" flex items-center justify-between" data-aos="fade-up" data-aos-duration="900">
            <div>
                <h2 class=" text-3xl font-bold">Lihat Acara Lainnya</h2>
                <p class="mt-2 w-[70%] hidden md:block">
                    Beragam kegiatan budaya siap meriahkan akhir pekan, mulai dari pameran seni hingga pertunjukan musik
                    tradisional. Setiap acara dirancang untuk memperkenalkan kekayaan budaya lokal kepada generasi muda.
                </p>
            </div>
            <a href="{{ route('acara.index') }}" class="btn-line md:flex items-center gap-2 hidden md:block"><span
                    class="hidden md:block">Lihat </span> Lainnya <svg class=" rotate-90"
                    xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 16 16">
                    <path fill="currentColor"
                        d="M10.843 13.069L6.232 8.384a.546.546 0 0 1 0-.768l4.61-4.685a.55.55 0 0 0 0-.771a.53.53 0 0 0-.759 0l-4.61 4.684a1.65 1.65 0 0 0 0 2.312l4.61 4.684a.53.53 0 0 0 .76 0a.55.55 0 0 0 0-.771" />
                </svg></a>
        </div>
        <div class=" flex overflow-x-scroll  p-10 pl-0 overflow-y-hidden gap-3 mt-5 h-[120%]" data-aos="fade-up"
            data-aos-duration="1500">
            @foreach ($data_acara as $acara)
                @include('components.card-acara')
            @endforeach
        </div>
    </div>
    <div class="mt-[10%] px-[5%] lg:px-0">
        <div class=" flex items-center justify-between" data-aos="fade-up" data-aos-duration="800">
            <div>
                <h2 class=" text-2xl lg:text-4xl font-bold">Lihat Berita Terbaru</h2>
                <p class="mt-2 w-[70%] hidden md:block">
                    Acara budaya spektakuler kembali digelar dengan nuansa lokal yang memukau masyarakat. Kegiatan ini
                    menghadirkan pertunjukan seni tradisional yang menarik perhatian pengunjung dari berbagai daerah
                </p>
            </div>
            <a href="{{ route('artikel.index') }}" class="btn-line flex items-center gap-2"><span
                    class="hidden md:block">Lihat </span> Lainnya <svg class=" rotate-90"
                    xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 16 16">
                    <path fill="currentColor"
                        d="M10.843 13.069L6.232 8.384a.546.546 0 0 1 0-.768l4.61-4.685a.55.55 0 0 0 0-.771a.53.53 0 0 0-.759 0l-4.61 4.684a1.65 1.65 0 0 0 0 2.312l4.61 4.684a.53.53 0 0 0 .76 0a.55.55 0 0 0 0-.771" />
                </svg></a>
        </div>
        <div class=" grid lg:grid-cols-3 grid-cols-1 lg:gap-3 " data-aos="fade-up" data-aos-duration="1500">
            @foreach ($data_acara as $artikel)
                @include('components.card-artikel3')
            @endforeach
        </div>
    </div>
</div>
</div>

<!-- Fullscreen overlay -->
<div class="overlay" id="overlay">
    <img src="" alt="Full View" class="fullscreen-image" id="fullscreenImage">
</div>

<!-- MODAL report -->
<div id="popupModal" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg p-6 w-[85%] md:w-[75%] shadow-lg relative ">
        <button onclick="closeModal()"
            class="absolute top-2 right-2 text-zinc-500 hover:text-black text-5xl">&times;</button>
        @if (auth()->check())
            <div class="max-h-[80vh] overflow-y-auto px-2">
                <!-- Form kamu di bawah ini -->
                <form action="{{ route('laporkan.store') }}" method="POST" enctype="multipart/form-data"
                    class="text-zinc-950 relative lg:pb-16">
                    @csrf
                    <h2 class="text-3xl lg:text-4xl font-semibold mb-4">Laporkan Acara</h2>
                    <p class="text-zinc-700 w-[60%]  ">
                        Laporkan masalah yang Anda temui selama acara agar kami bisa segera menindaklanjuti dan
                        meningkatkan
                        kualitas pelayanan.
                    </p>

                    <input type="hidden" name="acara_id" value="{{ $detail_acara->id }}">
                    <input type="hidden" name="tanggal" value="{{ now()->toDateString() }}">

                    <div class="grid lg:grid-cols-2 gap-10">
                        <div>
                            <div class="mt-10">
                                <p class=" text-xl font-bold text-orange-700">Pilih Jenis Keluhan:</p>
                                <div class="grid grid-cols-2 gap-3 text-xs lg:text-base">
                                    @foreach (['Penipuan / Scam', 'Pungutan liar', 'Penyalahgunaan data', 'Konten tidak pantas', 'Kekerasan atau pelecehan'] as $item)
                                        <label class="flex items-center space-x-2">
                                            <input type="radio" name="jenis_keluhan" value="{{ $item }}"
                                                class="accent-red-600" required>
                                            <span>{{ $item }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>

                            <label for="img1" class="block mt-10 text-xl font-bold text-orange-700 mb-2">Upload
                                Bukti Gambar (Opsional)</label>
                            <div class="grid grid-cols-2">
                                <input type="file" name="img1" accept="image/*"
                                    class="w-full text-xs md:text-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:bg-orange-600 file:text-white hover:file:bg-orange-700 mb-2">
                                <input type="file" name="img2" accept="image/*"
                                    class="w-full text-xs md:text-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:bg-orange-600 file:text-white hover:file:bg-orange-700 mb-2">
                                <input type="file" name="img3" accept="image/*"
                                    class="w-full text-xs md:text-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:bg-orange-600 file:text-white hover:file:bg-orange-700">
                            </div>

                            <div class="mt-10">
                                <label for="video" class="block text-xl font-bold text-orange-700 mb-2">Upload
                                    Bukti Video (Opsional)</label>
                                <input type="file" name="video" accept="video/*"
                                    class="w-full text-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:bg-orange-600 file:text-white hover:file:bg-orange-700">
                            </div>
                        </div>

                        <div>
                            <label for="keterangan" class="text-xl font-bold text-orange-700 mb-2">Ceritakan Kronologi
                                :</label>
                            <textarea name="keterangan" id="keterangan" placeholder="Jelaskan Kronologi disini secara lengkap"
                                class="bg-zinc-200 mt-3 w-full p-3 h-[500px] lg:h-[300px]" required></textarea>
                        </div>
                    </div>

                    <button class="btn-bg mt-10 absolute right-10 bottom-4" type="submit">
                        Kirim Laporan
                    </button>
                </form>
            </div>
        @else
            <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 rounded-md mb-5"
                role="alert">
                <h3 class="font-bold text-lg mb-1">Login Diperlukan</h3>
                <p class="text-sm">Silakan login terlebih dahulu untuk dapat mengirim laporan acara.</p>
            </div>
            <a href="/admin" class="btn-bg">login</a>
        @endif
        {{-- Success / Error Messages --}}
        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mt-4">
                {{ session('success') }}
            </div>
        @endif
        @if (session('info'))
            <div class="bg-blue-100 text-blue-700 p-3 rounded mt-4">
                {{ session('info') }}
            </div>
        @endif
        @if (session('error'))
            <div class="bg-red-100 text-red-700 p-3 rounded mt-4">
                {{ session('error') }}
            </div>
        @endif
    </div>
</div>

@if (session()->has('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif

{{-- animasi scroll --}}
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
    // sliders
    document.addEventListener("DOMContentLoaded", function() {
        const thumbnails = document.querySelectorAll(".thumbnail");
        const mainImage = document.getElementById("mainImage");

        let currentIndex = 0;
        const totalImages = thumbnails.length;

        function showImage(index) {
            const src = thumbnails[index].getAttribute("data-src");
            mainImage.style.backgroundImage = `url('${src}')`;
        }

        // Slider otomatis setiap 3 detik
        setInterval(() => {
            currentIndex = (currentIndex + 1) % totalImages;
            showImage(currentIndex);
        }, 3000);
    });

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
