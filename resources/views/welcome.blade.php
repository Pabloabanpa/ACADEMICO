{{-- resources/views/welcome.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Campus Virtual UTEPSA</title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
  <!-- Vite -->
  @vite(['resources/js/app.js', 'resources/css/app.css'])
  @livewireStyles
</head>
<body class="bg-[#F4F7FA] font-sans antialiased">

    <header class="bg-[#E2001A] text-white">
        <div class="container mx-auto flex items-center justify-between px-4 md:px-6 lg:px-8 h-16">
          {{-- Logo --}}
          <a href="#" class="flex items-center">
            <img src="{{ asset('img/Campus-Virtual-logo-P.png') }}" alt="Campus Virtual UTEPSA" class="h-10">
          </a>
          {{-- Menú principal --}}
          <nav class="hidden md:flex space-x-8 text-sm font-medium">
            <button class="hover:underline">Estudiantes</button>
            <button class="hover:underline">Docente</button>
          </nav>
          {{-- Acciones de la derecha --}}
          <div class="flex items-center space-x-6 text-sm">
            <span class="cursor-default">Español – Internacional (es)</span>
            {{-- Enlace al login por defecto --}}
            <a href="{{ route('login') }}" class="flex items-center space-x-1 hover:underline">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 0a10 10 0 100 20A10 10 0 0010 0zm0 3a3 3 0 110 6 3 3 0 010-6zm0 14.2a7.2 7.2 0 01-5.5-2.75c.03-1.83 3.66-2.85 5.5-2.85s5.47 1.02 5.5 2.85A7.2 7.2 0 0110 17.2z"/>
              </svg>
              <span>Acceder</span>
            </a>
          </div>
        </div>
      </header>

  {{-- Slider principal (estático) --}}
  <section class="relative">
    <div class="overflow-hidden">
      <div
        class="w-full h-64 md:h-96 bg-center bg-cover"
        style="background-image: url('{{ asset('img/fondo_utepsa.png') }}')"
      ></div>
      <button class="absolute top-1/2 left-6 -translate-y-1/2 bg-[#E2001A] text-white w-12 h-12 rounded-full flex items-center justify-center shadow">‹</button>
      <button class="absolute top-1/2 right-6 -translate-y-1/2 bg-[#E2001A] text-white w-12 h-12 rounded-full flex items-center justify-center shadow">›</button>
    </div>
  </section>

  <main class="container mx-auto px-6 py-12 space-y-16">
    {{-- Cursos disponibles --}}
    <section class="px-6 py-12">
      <h2 class="text-2xl font-semibold text-[#1B1B18] mb-6">Cursos disponibles</h2>

      <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
        <!-- Tarjeta 1 -->
        <div class="group relative bg-white rounded-lg overflow-hidden transition-shadow hover:shadow-xl">
          <div
            class="h-40 bg-center bg-cover"
            style="background-image: url('{{ asset('img/curso-1.png') }}')"
          ></div>
          <div class="p-4">
            <span class="inline-block bg-gray-200 text-xs text-gray-700 px-2 py-1 rounded">Plantillas</span>
            <h3 class="mt-2 text-gray-900 font-medium">ADMINISTRACIÓN HOTELERA</h3>
          </div>
          <div class="absolute inset-0 bg-white p-6 flex flex-col justify-between opacity-0 group-hover:opacity-100 transition-opacity">
            <div>
              <p class="text-gray-700 text-sm">Gestión integral de servicios y operaciones.</p>
              <div class="mt-4 flex items-center text-gray-500 text-xs space-x-4">
                <div class="flex items-center">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M12 14l9-5-9-5-9 5 9 5z"/>
                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.84 4.457c0 1.317-.252 2.578-.715 3.742L12 14z"/>
                    <path d="M12 14L5.715 18.777A12.08 12.08 0 015 14.332a12.083 12.083 0 01.84-4.457L12 14z"/>
                  </svg>
                  <span class="ms-1">8 Lessons</span>
                </div>
                <div class="flex items-center">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" stroke-width="2"/>
                    <path d="M12 6v6l4 2" stroke-width="2"/>
                  </svg>
                  <span class="ms-1">Actualizado: Apr 2024</span>
                </div>
              </div>
            </div>
            <button disabled class="mt-4 w-full bg-[#E2001A] text-white px-4 py-2 rounded-lg opacity-50 cursor-not-allowed">
              Ver curso
            </button>
          </div>
        </div>

        <!-- Tarjeta 2 -->
        <div class="group relative bg-white rounded-lg overflow-hidden transition-shadow hover:shadow-xl">
            <div
              class="h-40 bg-center bg-cover"
              style="background-image: url('{{ asset('img/curso-3.png') }}')"
            ></div>
            <div class="p-4">
              <span class="inline-block bg-gray-200 text-xs text-gray-700 px-2 py-1 rounded">Plantillas</span>
              <h3 class="mt-2 text-gray-900 font-medium">CURSO PRUEBA FERNANDO</h3>
            </div>
            <div class="absolute inset-0 bg-white p-6 flex flex-col justify-between opacity-0 group-hover:opacity-100 transition-opacity">
              <div>
                <p class="text-gray-700 text-sm">Módulos de ejemplo para explorar la plataforma.</p>
                <div class="mt-4 flex items-center text-gray-500 text-xs space-x-4">
                  <div class="flex items-center">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path d="M12 14l9-5-9-5-9 5 9 5z"/>
                      <path d="M12 14l6.16-3.422a12.083 12.083 0 01.84 4.457c0 1.317-.252 2.578-.715 3.742L12 14z"/>
                      <path d="M12 14L5.715 18.777A12.08 12.08 0 015 14.332a12.083 12.083 0 01.84-4.457L12 14z"/>
                    </svg>
                    <span class="ms-1">8 Lessons</span>
                  </div>
                  <div class="flex items-center">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <circle cx="12" cy="12" r="10" stroke-width="2"/>
                      <path d="M12 6v6l4 2" stroke-width="2"/>
                    </svg>
                    <span class="ms-1">Actualizado: Apr 2024</span>
                  </div>
                </div>
              </div>
              <button disabled class="mt-4 w-full bg-[#E2001A] text-white px-4 py-2 rounded-lg opacity-50 cursor-not-allowed">Ver curso</button>
            </div>
          </div>

          <!-- Tarjeta 3 -->
          <div class="group relative bg-white rounded-lg overflow-hidden transition-shadow hover:shadow-xl">
            <div
              class="h-40 bg-center bg-cover"
              style="background-image: url('{{ asset('img/curso-1.png') }}')"
            ></div>
            <div class="p-4">
              <span class="inline-block bg-gray-200 text-xs text-gray-700 px-2 py-1 rounded">Plantillas</span>
              <h3 class="mt-2 text-gray-900 font-medium">RESOLUCIÓN ALTERNATIVA DE CONFLICTOS</h3>
            </div>
            <div class="absolute inset-0 bg-white p-6 flex flex-col justify-between opacity-0 group-hover:opacity-100 transition-opacity">
              <div>
                <p class="text-gray-700 text-sm">Técnicas prácticas de mediación y negociación.</p>
                <div class="mt-4 flex items-center text-gray-500 text-xs space-x-4">
                  <div class="flex items-center">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path d="M12 14l9-5-9-5-9 5 9 5z"/>
                      <path d="M12 14l6.16-3.422a12.083 12.083 0 01.84 4.457c0 1.317-.252 2.578-.715 3.742L12 14z"/>
                      <path d="M12 14L5.715 18.777A12.08 12.08 0 015 14.332a12.083 12.083 0 01.84-4.457L12 14z"/>
                    </svg>
                    <span class="ms-1">8 Lessons</span>
                  </div>
                  <div class="flex items-center">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <circle cx="12" cy="12" r="10" stroke-width="2"/>
                      <path d="M12 6v6l4 2" stroke-width="2"/>
                    </svg>
                    <span class="ms-1">Actualizado: Apr 2024</span>
                  </div>
                </div>
              </div>
              <button disabled class="mt-4 w-full bg-[#E2001A] text-white px-4 py-2 rounded-lg opacity-50 cursor-not-allowed">Ver curso</button>
            </div>
          </div>

          <!-- Tarjeta 4 -->
          <div class="group relative bg-white rounded-lg overflow-hidden transition-shadow hover:shadow-xl">
            <div
              class="h-40 bg-center bg-cover"
              style="background-image: url('{{ asset('img/curso-2.png') }}')"
            ></div>
            <div class="p-4">
              <span class="inline-block bg-gray-200 text-xs text-gray-700 px-2 py-1 rounded">Plantillas</span>
              <h3 class="mt-2 text-gray-900 font-medium">TEORÍA DE CONTROL 1</h3>
            </div>
            <div class="absolute inset-0 bg-white p-6 flex flex-col justify-between opacity-0 group-hover:opacity-100 transition-opacity">
              <div>
                <p class="text-gray-700 text-sm">Fundamentos del control clásico y PID.</p>
                <div class="mt-4 flex items-center text-gray-500 text-xs space-x-4">
                  <div class="flex items-center">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path d="M12 14l9-5-9-5-9 5 9 5z"/>
                      <path d="M12 14l6.16-3.422a12.083 12.083 0 01.84 4.457c0 1.317-.252 2.578-.715 3.742L12 14z"/>
                      <path d="M12 14L5.715 18.777A12.08 12.08 0 015 14.332a12.083 12.083 0 01.84-4.457L12 14z"/>
                    </svg>
                    <span class="ms-1">8 Lessons</span>
                  </div>
                  <div class="flex items-center">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <circle cx="12" cy="12" r="10" stroke-width="2"/>
                      <path d="M12 6v6l4 2" stroke-width="2"/>
                    </svg>
                    <span class="ms-1">Actualizado: Apr 2024</span>
                  </div>
                </div>
              </div>
              <button disabled class="mt-4 w-full bg-[#E2001A] text-white px-4 py-2 rounded-lg opacity-50 cursor-not-allowed">Ver curso</button>
            </div>
          </div>
        </div>
      </div>

      {{-- Flechas del carrusel (estáticas) --}}
      <div class="flex justify-center mt-8 space-x-4">
        <button class="bg-[#E2001A] text-white w-12 h-12 rounded-full flex items-center justify-center shadow">‹</button>
        <button class="bg-[#E2001A] text-white w-12 h-12 rounded-full flex items-center justify-center shadow">›</button>
      </div>
    </section>

    {{-- Anuncios de la página --}}
    <section>
      <h2 class="text-2xl font-semibold text-[#1B1B18] mb-4">Anuncios de la página</h2>
      <div class="bg-[#D6F4F1] border-l-4 border-[#69C9C0] p-4 rounded">
        <p class="text-[#1B1B18]">Aún no hay temas de debate en este foro.</p>
      </div>
    </section>
  </main>

  {{-- Footer oscuro --}}
  <footer class="bg-[#0A0A0A] text-gray-300 py-8">
    <div class="container mx-auto flex justify-between items-center px-6">
      <a href="#" class="flex items-center space-x-2">
        <img src="{{ asset('img/utepsa-logo-white.svg') }}" alt="UTEPSA" class="h-6">
        <span class="font-semibold">UTEPSA</span>
      </a>
      <nav>
        <span class="hover:underline cursor-default text-sm">Política de privacidad</span>
      </nav>
      <p class="text-sm">&copy; 2025 UTEPSA</p>
    </div>
  </footer>


</body>
</html>


