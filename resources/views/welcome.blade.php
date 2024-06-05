<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Sekolah</title>
  @vite('resources/css/app.css')
  <style>
    body {
      background: linear-gradient(90deg, #4b6cb7, #182848);
      color: #fff;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .card {
      max-width: 400px;
      width: 100%;
    }
  </style>
</head>
<body class="flex items-center justify-center min-h-screen">
  <div class="card text-center p-8 bg-white rounded shadow-md">
    <h1 class="text-5xl font-bold text-gray-800 mb-4">Sistem Sekolah</h1>
    <p class="text-lg text-gray-600 mb-6">Selamat datang di sistem sekolah kami.</p>
    <a href="/login" class="inline-block mt-6 px-4 py-2 bg-blue-500 text-white font-bold rounded hover:bg-blue-700 transition duration-300">Login</a>
  </div>
</body>
</html>
