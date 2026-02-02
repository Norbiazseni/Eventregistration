<x-app-layout>
<div class="container">
    <h1 class="mb-4">Felhasználó részletei</h1>

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
            <p class="card-text"><strong>Telefon:</strong> {{ $user->phone ?? '-' }}</p>
            <p class="card-text"><strong>Admin:</strong> {{ $user->is_admin ? 'Igen' : 'Nem' }}</p>
        </div>
    </div>

    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">↩️ Vissza</a>
</div>
</x-app-layout>
