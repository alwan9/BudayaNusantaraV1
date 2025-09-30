@include('layouts.header')
@include('components.navbar')

@include('components.go-top')

@include('components.main-header')
<div id="search-results"
    class="  pt-10 grid grid-cols-2  md:grid-cols-3 lg:grid-cols-5 gap-3 lg:gap-10 px-[5%] lg:konten">
    @foreach ($data_artikel as $artikel)
        @include('components.card-artikel2')
    @endforeach
    {{-- batik efek bg --}}
    <img class="absolute w-[600px] opacity-60 z-[1]" src="assets/batik2.png" alt="">

</div>
 

@include('components.footer')

@include('layouts.footer')
