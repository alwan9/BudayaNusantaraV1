@php
    $segment = request()->segment(1); // Ambil bagian pertama dari URL
    $bgImage = match ($segment) {
        'artikel' => '/assets/artikel.png',
        'acara' => '/assets/acara.png',
        default => '/assets/bg2.png',
    };
@endphp

<div style="background-image: url('{{ $bgImage }}');"
    class="w-full h-[700px] lg:h-[760px] bg-zinc-950 bg-cover  bg-center bg-no-repeat relative flex items-center justify-center text-zinc-50">

    {{--     
<div style=" background-image: url('/assets/bg2.png');"
    class="w-full h-[700px] lg:h-[760px] bg-zinc-950 bg-cover bg-no-repeat  relative flex items-center justify-center text-zinc-50"> --}}
    <div class=" text-center px-[5%] lg:px-[20%] drop-shadow-2xl drop-shadow-2xl animate__delay-1s">
        <div class="animate__backInDown animate__animated ">
            @php
                $currentPath = request()->path();
            @endphp


            @if ($currentPath === 'acara')
                <h1 class="text-3xl lg:text-[5rem] font-bold merriweather">Jelajahi Acara Budaya Terkini</h1>
                <p class="mt-10 lg:text-2xl text-zinc-200">
                    Temukan berbagai acara budaya yang sedang berlangsung di seluruh Indonesia.
                    Ikuti kegiatan menarik untuk mengenal tradisi lebih dekat.
                </p>
            @elseif ($currentPath === 'artikel')
                <h1 class="text-3xl lg:text-[5rem] font-bold merriweather">Artikel & Cerita Budaya</h1>
                <p class="mt-10 lg:text-2xl text-zinc-200">
                    Baca artikel inspiratif seputar budaya, tradisi, dan sejarah Nusantara.
                    Temukan wawasan baru dari berbagai sudut pandang budaya.
                </p>
            @else
                <h1 class="text-3xl lg:text-[5rem] font-bold merriweather">Informasi Budaya Nusantara</h1>
                <p class="mt-10 lg:text-2xl text-zinc-200">
                    Jelajahi kekayaan budaya Indonesia melalui berbagai informasi yang kami sajikan.
                    Dapatkan pengalaman mengenal budaya secara menyeluruh dan menyenangkan.
                </p>
            @endif
        </div>


        <!-- Search Bar -->
        <div class=" lg:px-[20%]  mt-10 flex items-center justify-center gap-4 animate__zoomIn animate__animated animate__delay-1s">
            <div
                class="w-full  bg-white/50 backdrop-blur-sm p-2 rounded-full flex items-center">
                <input id="search" type="text" placeholder="Cari budaya, tarian, atau acara..."
                    class="w-full bg-transparent text-zinc-800 font-semibold placeholder-gray-300 border-none focus:ring-0 px-4 py-2">

                <button
                    class="bg-orange-500 text-white px-6 py-2 rounded-full hover:bg-orange-600 transition-colors shrink-0">
                    Cari
                </button>
            </div>
            @if ($currentPath === 'acara')
                <a href="/kalender">
                    <button class="btn-bg flex items-center gap-2  animate__backInDown animate__animated "> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect width="14" height="0" x="5" y="5" fill="currentColor"><animate fill="freeze" attributeName="height" begin="0.6s" dur="0.2s" values="0;3"/></rect><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path stroke-dasharray="64" stroke-dashoffset="64" d="M12 4h7c0.55 0 1 0.45 1 1v14c0 0.55 -0.45 1 -1 1h-14c-0.55 0 -1 -0.45 -1 -1v-14c0 -0.55 0.45 -1 1 -1Z"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="64;0"/></path><path stroke-dasharray="4" stroke-dashoffset="4" d="M7 4v-2M17 4v-2"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.6s" dur="0.2s" values="4;0"/></path><path stroke-dasharray="12" stroke-dashoffset="12" d="M7 11h10"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.8s" dur="0.2s" values="12;0"/></path><path stroke-dasharray="8" stroke-dashoffset="8" d="M7 15h7"><animate fill="freeze" attributeName="stroke-dashoffset" begin="1s" dur="0.2s" values="8;0"/></path></g></svg>Kalender</button>
                </a>
            @else
            @endif
        </div>
    </div>
    
    <div class="absolute bottom-0 w-full bg-orange-50 rounded-t-3xl lg:rounded-t-[4rem]  ">
        <div class=" justify-between flex items-center  px-[5%] py-[5%]  lg:py-[2%]">
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#search").on("keyup", function() {
            let query = $(this).val();
            let currentPath = window.location.pathname; // ✅ Get current URL path
            let searchUrl = "";

            // Decide the AJAX URL based on the current route
            if (currentPath === "/artikel") {
                searchUrl = "{{ route('artikel.search') }}";
            } else if (currentPath === "/acara") {
                searchUrl = "{{ route('acara.search') }}";
            } else {
                // Default: home page search
                searchUrl = "{{ route('search') }}";
            }

            // If input is not empty, call AJAX
            if (query.length > 0) {
                $.ajax({
                    url: searchUrl,
                    method: "GET",
                    data: {
                        q: query
                    },
                    success: function(data) {
                        $("#search-results").html(data);
                    }
                });
            } else {
                $("#search-results").html("");
            }
        });
    });
</script>
