@include('layouts.header')


<div class="max-w-4xl mx-auto px-6 py-10 ">
    @include('components.back')
    <h1 class="text-3xl font-bold mb-6">Pusat Bantuan</h1>

    <p class="mb-6">Berikut adalah panduan dan pertanyaan umum terkait penggunaan Website Budaya Sat Set:</p>

    <div class="space-y-6">
        <div>
            <h3 class="text-lg font-semibold">Bagaimana cara membuat artikel budaya?</h3>
            <p class="text-zinc-600">
                1. Daftar sebagai kontributor atau hubungi dinas kebudayaan terdekat.<br>
                2. Login menggunakan akun yang telah disetujui.<br>
                3. Masuk ke menu Artikel dan pilih Tambah Artikel.<br>
                4. Isi data yang dibutuhkan, lalu publikasikan.
            </p>
        </div>

        <div>
            <h3 class="text-lg font-semibold">Bagaimana cara membuat acara budaya?</h3>
            <p class="text-zinc-600">
                1. Daftar sebagai kontributor dan ajukan proposal ke dinas kebudayaan setempat.<br>
                2. Login ke akun yang sudah diverifikasi.<br>
                3. Buka menu Acara dan pilih Tambah Acara.<br>
                4. Lengkapi informasi acara dan publikasikan.
            </p>
        </div>

        <div>
            <h3 class="text-lg font-semibold">Bagaimana cara mengikuti event budaya?</h3>
            <p class="text-zinc-600">
                1. Pilih event yang ingin diikuti.<br>
                2. Klik tombol WhatsApp untuk mendaftar langsung ke panitia.
            </p>
        </div>

        <div>
            <h3 class="text-lg font-semibold">Bagaimana melaporkan event palsu atau penipuan?</h3>
            <p class="text-zinc-600">
                1. Buka halaman event yang ingin dilaporkan.<br>
                2. Klik tombol "Laporkan".<br>
                3. Isi kronologi kejadian dan bukti kerugian.<br>
                4. Tunggu 1×24 jam, sistem akan menindak otomatis jika terbukti.
            </p>
        </div>

        <div>
            <h3 class="text-lg font-semibold">Apakah saya bisa mendapatkan refund?</h3>
            <p class="text-zinc-600">
                Kami tidak melayani refund karena kami hanya pihak ketiga yang menyampaikan informasi. Silakan hubungi
                panitia secara langsung.
            </p>
        </div>

        <div>
            <h3 class="text-lg font-semibold">Metode pembayaran apa yang digunakan?</h3>
            <p class="text-zinc-600">
                Kami tidak menangani pembayaran langsung. Hubungi panitia event untuk detail metode pembayaran.
            </p>
        </div>

        <div>
            <h3 class="text-lg font-semibold">Kapan admin aktif?</h3>
            <p class="text-zinc-600">
                <strong>Senin–Jumat:</strong> 08.00 – 16.00 WIB<br>
                <strong>Sabtu–Minggu:</strong> 10.00 – 16.00 WIB<br>
                Web tetap aktif 24 jam.
            </p>
        </div>

        <div>
            <h3 class="text-lg font-semibold">Bagaimana cara menghubungi admin?</h3>
            <p class="text-zinc-600">
                Anda dapat menghubungi admin melalui:<br>
                📧 Email: <a href="mailto:budayaSatSet@gmail.com" class="text-orange-500">budayaSatSet@gmail.com</a><br>
                📱 WhatsApp: 08xx-xxxx-xxx
            </p>
        </div>
    </div>
</div>

@include('layouts.footer')
