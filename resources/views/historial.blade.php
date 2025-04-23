{{-- resources/views/historial.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Historial – Campus Virtual UTEPSA</title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
  <!-- Tailwind / Vite -->
  @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body class="bg-white font-sans antialiased">

  {{-- Header sencillo --}}
  <header class="bg-[#F4F4F4] border-b border-gray-200 py-4">
    <div class="container mx-auto px-6 flex items-center justify-between">
      <h1 class="text-gray-500 text-lg font-medium">
        Historial ({{ Auth::user()->username ?? Auth::user()->id }})
      </h1>
      <a href="{{ route('dashboard') }}" class="flex items-center text-gray-500 hover:underline">
        {{-- Ícono flecha atrás --}}
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        Retornar
      </a>
    </div>
  </header>

  <main class="container mx-auto px-6 py-8">
    <div class="overflow-hidden rounded-lg">
      <table class="min-w-full table-fixed border-collapse">
        {{-- Fila de Promedio --}}
        <thead>
          <tr class="bg-gray-800 text-white">
            <th colspan="2" class="px-4 py-3 text-left text-sm">
              Promedio General: <strong>68</strong>
            </th>
          </tr>
          <tr class="bg-gray-600 text-white text-left">
            <th class="px-4 py-2">Materia</th>
            <th class="px-4 py-2 w-24">Nota</th>
          </tr>
        </thead>

        {{-- Cuerpo --}}
        <tbody class="divide-y divide-gray-200 bg-white">
            <tr class="hover:bg-gray-100">
                <td class="px-4 py-3">CONSTITUCIÓN Y CIUDADANIA</td>
                <td class="px-4 py-3">51</td>
              </tr>
              <tr class="hover:bg-gray-100">
                <td class="px-4 py-3">CONTABILIDAD BÁSICA</td>
                <td class="px-4 py-3">51</td>
              </tr>
              <tr class="hover:bg-gray-100">
                <td class="px-4 py-3">COSTOS 1</td>
                <td class="px-4 py-3">20</td>
              </tr>
              <tr class="hover:bg-gray-100">
                <td class="px-4 py-3">COSTOS 1</td>
                <td class="px-4 py-3">27</td>
              </tr>
              <tr class="hover:bg-gray-100">
                <td class="px-4 py-3">COSTOS 1</td>
                <td class="px-4 py-3">60</td>
              </tr>
              <tr class="hover:bg-gray-100">
                <td class="px-4 py-3">DERECHO COMERCIAL 1</td>
                <td class="px-4 py-3">65</td>
              </tr>
              <tr class="hover:bg-gray-100">
                <td class="px-4 py-3">ESTADÍSTICA EMPRESARIAL</td>
                <td class="px-4 py-3">75</td>
              </tr>

          <tr class="hover:bg-gray-100">
            <td class="px-4 py-3">EXPRESIÓN ORAL Y ESCRITA</td>
            <td class="px-4 py-3">86</td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="px-4 py-3">FUNDAMENTOS DE ADMINISTRACIÓN</td>
            <td class="px-4 py-3">86</td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="px-4 py-3">FUNDAMENTOS DE ECONOMÍA</td>
            <td class="px-4 py-3">90</td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="px-4 py-3">FUNDAMENTOS DE MARKETING</td>
            <td class="px-4 py-3">81</td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="px-4 py-3">FUNDAMENTOS DE PUBLICIDAD</td>
            <td class="px-4 py-3">68</td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="px-4 py-3">INFORMÁTICA APLICADA</td>
            <td class="px-4 py-3">67</td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="px-4 py-3">INTRODUCCIÓN A LA INFORMÁTICA</td>
            <td class="px-4 py-3">78</td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="px-4 py-3">MATEMÁTICA EMPRESARIAL</td>
            <td class="px-4 py-3">54</td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="px-4 py-3">MATEMÁTICA FINANCIERA</td>
            <td class="px-4 py-3">71</td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="px-4 py-3">MEDIO AMBIENTE</td>
            <td class="px-4 py-3">96</td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="px-4 py-3">MICROECONOMÍA</td>
            <td class="px-4 py-3">51</td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="px-4 py-3">TALLER DE CREATIVIDAD Y COMUNICACIÓN</td>
            <td class="px-4 py-3">87</td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="px-4 py-3">TÉCNICAS DE EXPRESIÓN PUBLICITARIA</td>
            <td class="px-4 py-3">68</td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>

</body>
</html>
