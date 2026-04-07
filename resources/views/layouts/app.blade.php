{{-- resources/views/components/app-layout.blade.php --}}
<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My posts' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Gotiskais fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturCook:wght@700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'UnifrakturCook', cursive;
            background: linear-gradient(135deg, #2c2c34, #3b2c41);
            color: #ffffff; /* Baltie burti pēc noklusējuma */
        }

        h1, h2, h3, h4, h5 {
            font-family: 'UnifrakturCook', cursive;
        }

        .pastel-goth-box {
            background: #3b2c41;
            border: 2px solid #d9a1ff;
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            color: #ffffff; /* Teksts baltā */
            box-shadow: 0 0 10px rgba(217, 161, 255, 0.5);
        }

        .pastel-goth-button {
            background: linear-gradient(135deg, #ff6ec7, #6ef0ff); /* neon pastel gradient */
            color: #ffffff; /* baltie burti pogām */
            padding: 0.4rem 0.8rem;
            margin-right: 0.5rem;
            border-radius: 10px;
            font-weight: bold;
            font-size: 0.875rem;
            transition: 0.3s;
            box-shadow: 0 0 5px #ff6ec7, 0 0 10px #6ef0ff;
        }

        .pastel-goth-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 10px #ff6ec7, 0 0 20px #6ef0ff;
        }

        .delete-button {
            background: linear-gradient(135deg, #ff6e6e, #ff9ec7);
            color: #ffffff; /* baltie burti Delete */
        }
        .delete-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 10px #ff6e6e, 0 0 15px #ff9ec7;
        }

        input, textarea {
            background: #2c2c34;
            border: 2px solid #d9a1ff;
            color: #ffffff; /* baltie burti input/textarea */
            border-radius: 8px;
            padding: 0.5rem;
            width: 100%;
        }

        label {
            font-weight: bold;
            color: #ffffff; /* baltie burti label */
        }

    </style>
</head>
<body class="min-h-screen flex flex-col items-center p-4">

    <header class="mb-10 text-center">
        <h1 class="text-5xl font-bold" style="color:#d9a1ff;">My Posts page</h1>
    </header>

    <main class="w-full max-w-4xl">
        {{ $slot }}
    </main>

    <footer class="mt-10 text-center text-gray-400">
        &copy; 2026 Nxyieee_void
    </footer>

</body>
</html>