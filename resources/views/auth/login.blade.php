<x-guest-layout>

<style>
    .auth-heading {
        font-family: 'Syne', sans-serif;
        font-weight: 800;
        font-size: 26px;
        color: #ffffff;
        letter-spacing: -0.5px;
        line-height: 1.2;
    }

    .auth-subtext {
        color: rgba(255, 255, 255, 0.45);
        font-size: 14px;
        margin-top: 6px;
    }

    .auth-label {
        display: block;
        font-size: 12px;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.5);
        text-transform: uppercase;
        letter-spacing: 0.08em;
        margin-bottom: 8px;
    }

    .auth-input {
        width: 100%;
        padding: 12px 16px;
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        color: #fff;
        font-family: 'DM Sans', sans-serif;
        font-size: 15px;
        transition: border-color 0.2s ease, background 0.2s ease, box-shadow 0.2s ease;
        outline: none;
    }

    .auth-input::placeholder { color: rgba(255, 255, 255, 0.2); }

    .auth-input:focus {
        border-color: rgba(99, 102, 241, 0.7);
        background: rgba(99, 102, 241, 0.08);
        box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.15);
    }

    .auth-error { margin-top: 6px; font-size: 12px; color: #f87171; }

    .alert-error {
        margin-bottom: 20px;
        padding: 14px 16px;
        background: rgba(239, 68, 68, 0.1);
        border: 1px solid rgba(239, 68, 68, 0.25);
        border-radius: 12px;
    }

    .alert-error-title { font-size: 13px; font-weight: 600; color: #f87171; margin-bottom: 6px; }
    .alert-error ul { list-style: disc; list-style-position: inside; font-size: 13px; color: #fca5a5; }

    .alert-success {
        margin-bottom: 20px;
        padding: 14px 16px;
        background: rgba(34, 197, 94, 0.1);
        border: 1px solid rgba(34, 197, 94, 0.25);
        border-radius: 12px;
        font-size: 13px;
        color: #86efac;
    }

    .remember-row { display: flex; align-items: center; gap: 8px; }
    .remember-row input[type="checkbox"] { width: 16px; height: 16px; accent-color: #6366f1; cursor: pointer; }
    .remember-row label { font-size: 13px; color: rgba(255, 255, 255, 0.45); cursor: pointer; user-select: none; }

    .btn-login {
        width: 100%;
        padding: 13px;
        background: linear-gradient(135deg, #6366f1, #8b5cf6);
        border: none;
        border-radius: 12px;
        color: #fff;
        font-family: 'Syne', sans-serif;
        font-size: 15px;
        font-weight: 700;
        letter-spacing: 0.02em;
        cursor: pointer;
        transition: transform 0.18s ease, box-shadow 0.18s ease, filter 0.18s ease;
        box-shadow: 0 6px 24px rgba(99, 102, 241, 0.4);
        position: relative;
        overflow: hidden;
    }

    .btn-login::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(255,255,255,0.12), transparent);
        opacity: 0;
        transition: opacity 0.2s ease;
    }

    .btn-login:hover { transform: translateY(-2px); box-shadow: 0 10px 32px rgba(99, 102, 241, 0.55); filter: brightness(1.05); }
    .btn-login:hover::before { opacity: 1; }
    .btn-login:active { transform: translateY(0); box-shadow: 0 4px 16px rgba(99, 102, 241, 0.35); }

    .form-divider { height: 1px; background: rgba(255, 255, 255, 0.07); margin: 8px 0; }
    .field-group { display: flex; flex-direction: column; gap: 16px; margin-bottom: 20px; }
</style>

<!-- Header -->
<div style="margin-bottom: 28px;">
    <h1 class="auth-heading">Selamat datang 👋</h1>
    <p class="auth-subtext">Masukkan kredensial Anda untuk melanjutkan</p>
</div>

@if ($errors->any())
    <div class="alert-error">
        <p class="alert-error-title">Terjadi kesalahan</p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('status'))
    <div class="alert-success">{{ session('status') }}</div>
@endif

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="field-group">
        <div>
            <label for="username" class="auth-label">Username</label>
            <input id="username" type="text" name="username" value="{{ old('username') }}"
                required autofocus autocomplete="username"
                class="auth-input" placeholder="Masukkan username..." />
            @error('username')
                <p class="auth-error">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password" class="auth-label">Password</label>
            <input id="password" type="password" name="password"
                required autocomplete="current-password"
                class="auth-input" placeholder="••••••••" />
            @error('password')
                <p class="auth-error">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="remember-row" style="margin-bottom: 24px;">
        <input id="remember_me" type="checkbox" name="remember" />
        <label for="remember_me">Ingat saya</label>
    </div>

    <div class="form-divider"></div>

    <button type="submit" class="btn-login" style="margin-top: 20px;">
        Masuk
    </button>
</form>

</x-guest-layout>
