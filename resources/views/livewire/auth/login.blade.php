{{-- resources/views/auth/login.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Acceder | Campus Virtual UTEPSA</title>
  @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-[#F4F7FA] font-sans antialiased">

  {{-- Contenedor centrado --}}
  <div class="min-h-screen flex items-center justify-center px-4">
    <div class="max-w-md w-full space-y-8">

      {{-- Logo y título --}}
      <div class="text-center">
        <img src="{{ asset('img/UTEPSALOGO.png') }}" alt="UTEPSA" class="mx-auto h-12">
        <h1 class="mt-4 text-3xl font-bold text-[#1B1B18]">Acceder</h1>
      </div>

      {{-- Card del formulario --}}
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
        {{-- Franja superior en rojo UTEPSA --}}
        <div class="h-1 bg-[#E2001A]"></div>
        <div class="p-8">
          {{-- Mensaje de estado --}}
          <x-auth-session-status class="mb-4 text-center text-sm text-green-600" :status="session('status')" />

          {{-- Formulario --}}
          <form wire:submit="login" class="space-y-6">
            {{-- Email --}}
            <flux:input
              wire:model="email"
              :label="__('Correo electrónico')"
              type="email"
              required
              autofocus
              autocomplete="email"
              placeholder="tucorreo@utepsa.edu.bo"
              class="bg-[#F0F6FF] border border-gray-300 rounded-lg focus:ring-[#E2001A]"
            />

            {{-- Contraseña --}}
            <div class="relative">
              <flux:input
                wire:model="password"
                :label="__('Contraseña')"
                type="password"
                required
                autocomplete="current-password"
                placeholder="••••••••"
                class="bg-[#F0F6FF] border border-gray-300 rounded-lg focus:ring-[#E2001A]"
              />

            </div>

            {{-- Recordarme --}}
            <div class="flex items-center">
              <flux:checkbox wire:model="remember" :label="__('Recordarme')" />
            </div>

            {{-- Botón --}}
            <div>
              <flux:button
                variant="primary"
                type="submit"
                class="w-full bg-[#E2001A] hover:bg-red-700 text-white font-semibold py-2 rounded-lg"
              >
                {{ __('Acceder') }}
              </flux:button>
            </div>
          </form>
        </div>
      </div>

      {{-- Pie de página --}}
      <p class="text-center text-xs text-gray-500 mt-4">
        &copy; 2025 UTEPSA · Todos los derechos reservados
      </p>
    </div>
  </div>

  @livewireScripts
</body>
</html>
