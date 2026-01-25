<x-app-layout>
<div class="container">
    <h1 class="mb-4">Felhasználó szerkesztése</h1>

    {{-- validációs hibák --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- szerkesztő űrlap --}}
    <form action="{{ route('admin.users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Név</label>
            <input
                type="text"
                name="name"
                class="form-control"
                value="{{ old('name', $user->name) }}"
                required
            >
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input
                type="email"
                name="email"
                class="form-control"
                value="{{ old('email', $user->email) }}"
                required
            >
        </div>

        <div class="mb-3">
            <label class="form-label">Jelszó (ha üres, akkor nem változik)</label>
            <input
                type="password"
                name="password"
                class="form-control"
            >
        </div>

        <div class="mb-3">
            <label class="form-label">Telefon</label>
            <input
                type="text"
                name="phone"
                class="form-control"
                value="{{ old('phone', $user->phone) }}"
            >
        </div>

        <div class="mb-3 form-check">
            <input
                type="checkbox"
                name="is_admin"
                value="1"
                class="form-check-input"
                id="is_admin"
                {{ old('is_admin', $user->is_admin) ? 'checked' : '' }}
            >
            <label class="form-check-label" for="is_admin">
                Admin jogosultság
            </label>
        </div>

        <button type="submit" class="btn btn-success">
            💾 Mentés
        </button>
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">
            ❌ Mégse
        </a>
    </form>
</div>
</x-app-layout>
