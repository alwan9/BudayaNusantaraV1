<div class="p-6 bg-white rounded-xl shadow">
    <h2 class="text-lg font-bold mb-4">Profil Saya</h2>

    <div class="space-y-2 text-sm">
        <p><strong>Nama:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Role:</strong> {{ $role }}</p>
        <p><strong>Tanggal Bergabung:</strong> {{ $joinedAt }}</p>
        <p><strong>Total Artikel:</strong> {{ $totalArtikel }}</p>
    </div>

    <a href="{{ route('filament.pages.profile') }}"
       class="mt-4 inline-block bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600 text-sm">
        Edit Profil
    </a>
</div>
