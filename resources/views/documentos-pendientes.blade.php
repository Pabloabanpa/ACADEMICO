{{-- resources/views/documentos-pendientes.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Documentos Pendientes – Campus Virtual UTEPSA</title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
  <!-- Tailwind / Vite -->
  @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-white font-sans antialiased">

  {{-- Encabezado sencillo --}}
  <header class="bg-[#F4F4F4] border-b border-gray-200 py-4">
    <div class="container mx-auto px-6 flex items-center justify-between">
      <h1 class="text-gray-500 text-lg font-medium">
        Documentos Pendientes ({{ Auth::user()->username ?? Auth::user()->id }})
      </h1>
      <a href="{{ route('dashboard') }}" class="text-gray-500 hover:underline">Retornar</a>
    </div>
  </header>

  <main class="container mx-auto px-6 py-16">
    <div class="text-center">
      <img
        src="{{ asset('img/UTEPSALOGO.png') }}"
        alt="UTEPSA"
        class="mx-auto mb-6 h-12"
      >
      <p class="text-gray-700 text-lg">
        ¡Ups! No hay documentos pendientes hasta el momento.
      </p>
    </div>
  </main>

</body>
</html>
