<x-app-layout>
<div class="container">
    <h1 class="mb-4">Új felhasználó létrehozása</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Név</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Telefon</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="is_admin" id="is_admin" class="form-check-input" {{ old('is_admin') ? 'checked' : '' }}>
            <label for="is_admin" class="form-check-label">Admin jogosultság</label>
        </div>

        <div class="mb-3">
            <label class="form-label">Jelszó</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-success">➕ Létrehozás</button>
            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">↩️ Vissza</a>
        </div>
    </form>
</div>
</x-app-layout>
