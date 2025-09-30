@if (empty($detail_acara) || empty($detail_artikel))
    <a href="{{ route('profile.show', $detail_acara->owner ?? $detail_artikel->owner) }}">
    @elseif ($detail_acara || $detail_artikel)
        <a href="{{ route('profile.show', $detail_acara->owner ?? $detail_artikel->owner) }}">
        @else
            <a href="profile/1">
@endif
<div class="flex items-center my-5 gap-5">
    @php
        $userName = empty($detail_acara) ? $detail_artikel->user->name : $detail_acara->user->name;
        $initial = strtoupper(substr($userName, 0, 1));
    @endphp
    <div class="w-[55px] h-[55px] rounded-full bg-black text-white flex items-center justify-center text-lg font-bold">
        {{ $initial }}
    </div>
    <div>
        <h1 class="flex items-center gap-2">
            @if (empty($detail_acara))
                {{ $detail_artikel->user->name }}
            @else
                {{ $detail_acara->user->name }}
            @endif


            @if (empty($detail_acara))
                @if (Str::contains($detail_artikel->name, ['Kabupaten', 'Provinsi']))
                    <span>
                        <svg class="text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m8.6 22.5l-1.9-3.2l-3.6-.8l.35-3.7L1 12l2.45-2.8l-.35-3.7l3.6-.8l1.9-3.2L12 2.95l3.4-1.45l1.9 3.2l3.6.8l-.35 3.7L23 12l-2.45 2.8l.35 3.7l-3.6.8l-1.9 3.2l-3.4-1.45zm2.35-6.95L16.6 9.9l-1.4-1.45l-4.25 4.25l-2.15-2.1L7.4 12z" />
                        </svg>
                    </span>
                @endif
            @else
                @if (Str::contains($detail_acara->name, ['Kabupaten', 'Provinsi']))
                    <span>
                        <svg class="text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m8.6 22.5l-1.9-3.2l-3.6-.8l.35-3.7L1 12l2.45-2.8l-.35-3.7l3.6-.8l1.9-3.2L12 2.95l3.4-1.45l1.9 3.2l3.6.8l-.35 3.7L23 12l-2.45 2.8l.35 3.7l-3.6.8l-1.9 3.2l-3.4-1.45zm2.35-6.95L16.6 9.9l-1.4-1.45l-4.25 4.25l-2.15-2.1L7.4 12z" />
                        </svg>
                    </span>
                @endif
            @endif


        </h1>
        {{-- keterangan --}}
        @if (empty($detail_acara))

            @if (Str::contains($detail_artikel->user->name, ['Kota', 'Kabupaten']))
                <p class="text-orange-600 font-medium">Kementrian</p>
            @else
                <p class="text-orange-600 font-medium">Masyarakat Umum</p>
            @endif
        @else
            @if (Str::contains($detail_acara->user->name, ['Kota', 'Kabupaten']))
                <p class="text-orange-600 font-medium">Kementrian</p>
            @else
                <p class="text-orange-600 font-medium">Masyarakat Umum</p>
            @endif

        @endif
        {{-- <p>User Silver</p> --}}
    </div>

</div>
</a>
