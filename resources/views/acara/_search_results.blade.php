@if ($results->count() > 0)
    @foreach ($results as $acara)
        @include('components.card-acara')
    @endforeach
@else
    <p class="text-zinc-500 col-span-full text-center">Tidak ditemukan acara dengan kata kunci tersebut.</p>
@endif
