{{-- resources/views/notas.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Notas – Campus Virtual UTEPSA</title>
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
        Notas ({{ Auth::user()->username ?? Auth::user()->id }})
      </h1>
      <a href="{{ route('dashboard') }}" class="text-gray-500 hover:underline">Retornar</a>
    </div>
  </header>

  <main class="container mx-auto px-6 py-8">
    <div class="overflow-x-auto shadow-md rounded-lg">
      <table class="min-w-full table-fixed border-collapse">
        {{-- Cabecera --}}
        <thead class="bg-gray-300">
          <tr class="text-left text-gray-700">
            <th class="p-3 border-r">Materia</th>
            <th class="p-3 w-12 border-r">P1</th>
            <th class="p-3 w-12 border-r">P2</th>
            <th class="p-3 w-12 border-r">TP</th>
            <th class="p-3 w-12 border-r">PF</th>
            <th class="p-3 w-12 border-r">EF</th>
            <th class="p-3 w-12">NF</th>
          </tr>
        </thead>

        <tbody class="bg-white divide-y divide-gray-200">
          {{-- Fila promedio general --}}
          <tr class="bg-gray-800 text-white">
            <td class="p-3" colspan="6">Promedio General:</td>
            <td class="p-3 text-center">68</td>
          </tr>

          {{-- Ejemplo de materias --}}

          <tr class="hover:bg-gray-100">
            <td class="p-3">COSTOS I</td>
            <td class="p-3">3</td>
            <td class="p-3">4</td>
            <td class="p-3">15</td>
            <td class="p-3">0</td>
            <td class="p-3">5</td>
            <td class="p-3">27</td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="p-3">FUNDAMENTOS DE PUBLICIDAD</td>
            <td class="p-3">14</td>
            <td class="p-3">17</td>
            <td class="p-3">12</td>
            <td class="p-3">0</td>
            <td class="p-3">25</td>
            <td class="p-3">68</td>
          </tr>

          <tr class="hover:bg-gray-100">
            <td class="p-3">MATEMÁTICA FINANCIERA</td>
            <td class="p-3">0</td>
            <td class="p-3">0</td>
            <td class="p-3">0</td>
            <td class="p-3">0</td>
            <td class="p-3">71</td>
            <td class="p-3">71</td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="p-3">INFORMÁTICA APLICADA</td>
            <td class="p-3">10</td>
            <td class="p-3">12</td>
            <td class="p-3">18</td>
            <td class="p-3">0</td>
            <td class="p-3">27</td>
            <td class="p-3">67</td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="p-3">COSTOS I</td>
            <td class="p-3">5</td>
            <td class="p-3">15</td>
            <td class="p-3">10</td>
            <td class="p-3">30</td>
            <td class="p-3">0</td>
            <td class="p-3">60</td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="p-3">TÉCNICAS DE EXPRESIÓN PUBLICITARIA</td>
            <td class="p-3">10</td>
            <td class="p-3">7</td>
            <td class="p-3">20</td>
            <td class="p-3">0</td>
            <td class="p-3">31</td>
            <td class="p-3">68</td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="p-3">ANÁLISIS DE ESTADOS FINANCIEROS</td>
            <td class="p-3">15</td>
            <td class="p-3">0</td>
            <td class="p-3">0</td>
            <td class="p-3">0</td>
            <td class="p-3">0</td>
            <td class="p-3">15</td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="p-3">ESTRATEGIA DE COMUNICACIÓN</td>
            <td class="p-3">16</td>
            <td class="p-3">0</td>
            <td class="p-3">0</td>
            <td class="p-3">0</td>
            <td class="p-3">0</td>
            <td class="p-3">16</td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>
