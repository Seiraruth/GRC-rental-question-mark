<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'DM Sans', sans-serif;
            min-height: 100vh;
            background: #0a0a0f;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }

        /* Animated gradient orbs in background */
        body::before {
            content: '';
            position: fixed;
            top: -20%;
            left: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(99, 102, 241, 0.25) 0%, transparent 70%);
            animation: floatOrb1 8s ease-in-out infinite alternate;
            pointer-events: none;
            z-index: 0;
        }

        body::after {
            content: '';
            position: fixed;
            bottom: -20%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(236, 72, 153, 0.2) 0%, transparent 70%);
            animation: floatOrb2 10s ease-in-out infinite alternate;
            pointer-events: none;
            z-index: 0;
        }

        @keyframes floatOrb1 {
            from { transform: translate(0, 0) scale(1); }
            to   { transform: translate(60px, 80px) scale(1.15); }
        }

        @keyframes floatOrb2 {
            from { transform: translate(0, 0) scale(1); }
            to   { transform: translate(-50px, -60px) scale(1.1); }
        }

        /* Grid noise overlay */
        .noise-overlay {
            position: fixed;
            inset: 0;
            background-image:
                linear-gradient(rgba(255,255,255,0.015) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.015) 1px, transparent 1px);
            background-size: 40px 40px;
            pointer-events: none;
            z-index: 0;
        }

        /* Page wrapper */
        .page-wrapper {
            position: relative;
            z-index: 10;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px 16px;
        }

        /* Card container */
        .auth-card {
            width: 100%;
            max-width: 420px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.09);
            border-radius: 24px;
            padding: 40px 36px;
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            box-shadow:
                0 0 0 1px rgba(255,255,255,0.05),
                0 32px 80px rgba(0, 0, 0, 0.5),
                inset 0 1px 0 rgba(255,255,255,0.08);
            animation: cardReveal 0.6s cubic-bezier(0.16, 1, 0.3, 1) both;
        }

        @keyframes cardReveal {
            from { opacity: 0; transform: translateY(24px) scale(0.97); }
            to   { opacity: 1; transform: translateY(0) scale(1); }
        }

        /* Logo area */
        .logo-area {
            display: flex;
            justify-content: center;
            margin-bottom: 28px;
        }

        .logo-area a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 52px;
            height: 52px;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(99, 102, 241, 0.4);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .logo-area a:hover {
            transform: scale(1.07);
            box-shadow: 0 12px 32px rgba(99, 102, 241, 0.55);
        }

        .logo-area svg {
            width: 28px;
            height: 28px;
            fill: white;
        }
    </style>
</head>

<body>
    <div class="noise-overlay"></div>

    <div class="page-wrapper">
        <div class="auth-card">
            <!-- Logo -->
            <div class="logo-area">
                <a href="/">
                    <x-application-logo />
                </a>
            </div>

            {{ $slot }}
        </div>
    </div>
</body>

</html>
