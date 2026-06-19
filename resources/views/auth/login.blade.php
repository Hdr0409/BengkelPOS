<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BengkelPOS</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #F8FAFC; /* Secondary (Light): Off-White Canvas */
            padding: 20px;
        }

        .card {
            width: 100%;
            max-width: 420px;
            background: #FFFFFF; /* Secondary (Pure): Pure White */
            padding: 40px 32px;
            border-radius: 12px;
            border-top: 5px solid #EA580C; /* Accent (Energetik): Otomotif Orange sebagai aksen atas */
            box-shadow: 0 10px 25px -5px rgba(15, 23, 42, 0.08),
                        0 8px 10px -6px rgba(15, 23, 42, 0.08); /* Shadow halus ala dashboard modern */
        }

        h1 {
            text-align: center;
            color: #0F172A; /* Primary (Dark): Slate Darkest */
            font-size: 28px;
            font-weight: 800;
            letter-spacing: -0.025em;
            margin-bottom: 6px;
        }

        .app-name {
            text-align: center;
            color: #64748B; /* Muted / Border: Slate Gray */
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 32px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #1E293B; /* Primary (Medium): Slate Steel */
            font-weight: 600;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #CBD5E1; /* Border abu-abu yang soft */
            border-radius: 8px;
            background-color: #FFFFFF;
            color: #0F172A;
            font-size: 15px;
            outline: none;
            transition: all 0.2s ease-in-out;
        }

        /* Efek fokus saat input diklik oleh kasir/user */
        input:focus {
            border-color: #EA580C; /* Berubah menjadi Otomotif Orange */
            box-shadow: 0 0 0 4px rgba(234, 88, 12, 0.15); /* Ring bersinar tipis di luar input */
        }

        .btn {
            width: 100%;
            padding: 14px;
            border: none;
            background-color: #EA580C; /* Accent (Energetik): Otomotif Orange */
            color: #FFFFFF; /* Teks Putih Kontras Tinggi */
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            font-size: 15px;
            letter-spacing: 0.025em;
            box-shadow: 0 4px 6px -1px rgba(234, 88, 12, 0.2);
            transition: all 0.2s ease-in-out;
            margin-top: 8px;
        }

        .btn:hover {
            background-color: #C2410C; /* Accent Hover: Deep Orange */
            box-shadow: 0 4px 12px -1px rgba(194, 65, 12, 0.3);
        }

        .btn:active {
            transform: scale(0.98); /* Efek membal saat ditekan klik */
        }

        .error {
            margin-bottom: 24px;
            padding: 12px 16px;
            background: #FEF2F2; /* Merah soft */
            color: #DC2626; /* Merah tegas */
            border-left: 4px solid #EF4444; /* Garis indikator error */
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
        }
    </style>
</head>
<body>

    <div class="card">

        <h1>BengkelPOS</h1>
        <p class="app-name">Login Sistem Bengkel</p>

        @if ($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Email</label>
                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="masukkan email terdaftar"
                    required
                >
            </div>

            <div class="form-group">
                <label>Password</label>
                <input
                    type="password"
                    name="password"
                    placeholder="••••••••"
                    required
                >
            </div>

            <button type="submit" class="btn">
                Masuk ke Aplikasi
            </button>
        </form>

    </div>

</body>
</html>
