@include('layouts.header')
@include('components.navbar')


@include('components.go-top')
@include('components.main-header')

<div>

    <div class="px-[3%] lg:konten lg:py-[3%] " >
        <div id="search-results" class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-2 lg:gap-8">
        @include('components.card-acara-ajax', ['data_acara' => $data_acara])
        </div>
    </div>
</div>
 
 
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $('#search-btn').click(function() {
        const query = $('#search-input').val();

        $.ajax({
            url: '/search-acara',
            type: 'GET',
            data: {
                q: query
            },
            success: function(data) {
                console.log('Hasil:', data); // ✅ Pindahkan ke sini
                $('#search-acara').html(data);
            },
            error: function() {
                $('#search-acara').html('<p class="text-red-500">Terjadi kesalahan.</p>');
            }
        });
    });
</script>

@include('components.footer')
@include('layouts.footer')
