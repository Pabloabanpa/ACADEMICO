{{-- resources/views/dashboard.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard – Campus Virtual UTEPSA</title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
  <!-- Vite -->
  @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-[#F4F7FA] font-sans antialiased">

  {{-- Header rojo --}}
  <header class="bg-[#E2001A] text-white">
    <div class="container mx-auto flex items-center justify-between px-6 py-4">
      {{-- Logo y título --}}
      <div class="flex items-center space-x-4">
        <a href="{{ route('home') }}" class="flex items-center">
          <img src="{{ asset('img/Campus-Virtual-logo-P.png') }}" alt="Campus Virtual UTEPSA" class="h-8">
        </a>
        <h1 class="text-lg font-semibold">Dashboard</h1>
      </div>
      {{-- Saludo y cerrar sesión --}}
      <div class="flex items-center space-x-6">
        <span>¡Bienvenido, <strong>{{ Auth::user()->name }}</strong>!</span>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button
            type="submit"
            class="bg-white text-[#E2001A] px-4 py-2 rounded-lg font-medium hover:bg-gray-100 transition"
          >
            Cerrar sesión
          </button>
        </form>
      </div>
    </div>
  </header>

  <main class="container mx-auto px-6 py-12">
    {{-- Opciones académicas --}}
    <div class="grid grid-cols-2 sm:grid-cols-3 gap-8">
      {{-- Historial --}}
      <a href="{{ route('historial') }}"
         class="flex flex-col items-center bg-white rounded-lg p-4 shadow hover:shadow-lg transition">
        <img src="{{ asset('img/HISTORIALFINAL.png') }}" alt="Historial" class="h-16 w-16">
        <span class="mt-2 text-sm font-medium text-[#1B1B18] text-center">HISTORIAL</span>
      </a>

      {{-- Pensum --}}
      <button id="btnPensum"
         class="flex flex-col items-center bg-white rounded-lg p-4 shadow hover:shadow-lg transition focus:outline-none">
        <img src="{{ asset('img/pensum.png') }}" alt="Pensum" class="h-16 w-16">
        <span class="mt-2 text-sm font-medium text-[#1B1B18] text-center">PENSUM</span>
      </button>

      {{-- Documentos pendientes --}}
      <a href="{{ route('documentos.pendientes') }}"
         class="flex flex-col items-center bg-white rounded-lg p-4 shadow hover:shadow-lg transition">
        <img src="{{ asset('img/pendiente1.jpg') }}" alt="Documentos Pendientes" class="h-16 w-16">
        <span class="mt-2 text-sm font-medium text-[#1B1B18] text-center">
          DOCUMENTOS<br>PENDIENTES
        </span>
      </a>

      {{-- Horarios --}}
      <a href="{{ route('horarios') }}"
         class="flex flex-col items-center bg-white rounded-lg p-4 shadow hover:shadow-lg transition">
        <img src="{{ asset('img/horario.jpg') }}" alt="Horarios" class="h-16 w-16">
        <span class="mt-2 text-sm font-medium text-[#1B1B18] text-center">HORARIOS</span>
      </a>

      {{-- Avances --}}
      <button id="btnAvances"
         class="flex flex-col items-center bg-white rounded-lg p-4 shadow hover:shadow-lg transition focus:outline-none">
        <img src="{{ asset('img/avance.jpg') }}" alt="Avances" class="h-16 w-16">
        <span class="mt-2 text-sm font-medium text-[#1B1B18] text-center">AVANCES</span>
      </button>

      {{-- Notas --}}
      <a href="{{ route('notas') }}"
         class="flex flex-col items-center bg-white rounded-lg p-4 shadow hover:shadow-lg transition">
        <img src="{{ asset('img/notas.png') }}" alt="Notas" class="h-16 w-16">
        <span class="mt-2 text-sm font-medium text-[#1B1B18] text-center">NOTAS</span>
      </a>
    </div>
  </main>

  {{-- Modal “En desarrollo” --}}
  <div id="comingSoonModal"
       class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg p-6 max-w-sm mx-auto text-center relative">
      <button id="closeModalBtn"
              class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 text-2xl leading-none">
        &times;
      </button>
      <img src="{{ asset('img/icon.png') }}"
           alt="UTEPSA" class="h-12 mx-auto mb-4">
      <h2 class="text-xl font-semibold mb-2">Utepsa</h2>
      <p class="text-gray-700">Ups! Aun nos encontramos en desarrollo</p>
    </div>
  </div>

  {{-- Script para mostrar/ocultar el modal --}}
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const btnPensum  = document.getElementById('btnPensum');
      const btnAvances = document.getElementById('btnAvances');
      const modal      = document.getElementById('comingSoonModal');
      const closeBtn   = document.getElementById('closeModalBtn');

      [btnPensum, btnAvances].forEach(btn => {
        btn.addEventListener('click', e => {
          e.preventDefault();
          modal.classList.remove('hidden');
        });
      });

      closeBtn.addEventListener('click', () => {
        modal.classList.add('hidden');
      });

      // cerrar al hacer clic fuera del cuadro
      modal.addEventListener('click', e => {
        if (e.target === modal) {
          modal.classList.add('hidden');
        }
      });
    });
  </script>
</body>
</html>
