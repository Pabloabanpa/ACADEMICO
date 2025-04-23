{{-- resources/views/horarios.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Horarios – Campus Virtual UTEPSA</title>
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
        Horarios ({{ Auth::user()->username ?? Auth::user()->id }})
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
            <th class="p-3 w-8 border-r">M</th>
            <th class="p-3 w-48 border-r">Materia</th>
            <th class="p-3 w-8 border-r">G</th>
            <th class="p-3 w-32 border-r">Horario</th>
            <th class="p-3 w-24 border-r">Aula</th>
            <th class="p-3 w-12 border-r text-center">
              <img
                src="{{ asset('img/wpp.png') }}"
                alt="WhatsApp"
                class="h-6 w-6 mx-auto"
              >
            </th>
            <th class="p-3 w-48 border-r">Docente</th>
            <th class="p-3 w-20">I</th>
          </tr>
        </thead>

        {{-- Cuerpo --}}
        <tbody class="divide-y divide-gray-200 bg-gray-100">
          {{-- Fila 1 --}}
          <tr class="hover:bg-gray-200">
            <td class="p-3 border-r">1</td>
            <td class="p-3 border-r">MATEMÁTICA FINANCIERA</td>
            <td class="p-3 border-r">R1</td>
            <td class="p-3 border-r">
              <span>07:15</span><br>
              <span class="text-blue-600">05/02</span>
            </td>
            <td class="p-3 border-r bg-black text-white text-center">E-609</td>
            <td class="p-3 border-r text-center">
              <a href="https://chat.whatsapp.com/DfiyuAm9bju3Maf0rq0wQU" target="_blank" rel="noopener">
                <img src="{{ asset('img/unete.png') }}" alt="WA" class="h-6 inline"/>              </a>
            </td>
            <td class="p-3 border-r">
              CLAROS, KAREN PATRICI<br>
              <span class="text-xs text-gray-600">(69164982) 05/02 (1)</span>
            </td>
            <td class="p-3">05/02</td>
          </tr>

          {{-- Fila 2 --}}
          <tr class="hover:bg-gray-200">
            <td class="p-3 border-r">1</td>
            <td class="p-3 border-r">INFORMÁTICA APLICADA</td>
            <td class="p-3 border-r">B1</td>
            <td class="p-3 border-r">
              <span>10:15</span><br>
              <span class="text-blue-600">05/02</span>
            </td>
            <td class="p-3 border-r bg-black text-white text-center">N-200</td>
            <td class="p-3 border-r text-center">
              <a href="https://chat.whatsapp.com/BTQt4zIhzia8ljRyHNMf7z" target="_blank" rel="noopener">
                <img src="{{ asset('img/unete.png') }}" alt="WA" class="h-6 inline"/>              </a>
            </td>
            <td class="p-3 border-r">
              CAQUEGUA, ANGELA CLAUDIA<br>
              <span class="text-xs text-gray-600">(70407949) 05/02 (1)</span>
            </td>
            <td class="p-3">05/02</td>
          </tr>

          {{-- Fila 3 --}}
          <tr class="hover:bg-gray-200">
            <td class="p-3 border-r">2</td>
            <td class="p-3 border-r">COSTOS I</td>
            <td class="p-3 border-r">D1</td>
            <td class="p-3 border-r">
              <span>07:15</span><br>
              <span class="text-blue-600">06/03</span>
            </td>
            <td class="p-3 border-r bg-black text-white text-center">E-629</td>
            <td class="p-3 border-r text-center">
              <a href="https://chat.whatsapp.com/GQRpYQ00FUYHmOLX4bmWBV" target="_blank" rel="noopener">
                <img src="{{ asset('img/unete.png') }}" alt="WA" class="h-6 inline"/>              </a>
            </td>
            <td class="p-3 border-r">
              ESCOBAR, RUBEN<br>
              <span class="text-xs text-gray-600">(72624373) 06/03 (2)</span>
            </td>
            <td class="p-3">06/03</td>
          </tr>

          {{-- Fila 4 --}}
          <tr class="hover:bg-gray-200">
            <td class="p-3 border-r">2</td>
            <td class="p-3 border-r">TÉCNICAS DE EXPRESIÓN PUBLICIT.</td>
            <td class="p-3 border-r">A</td>
            <td class="p-3 border-r">
              <span>10:15</span><br>
              <span class="text-blue-600">06/03</span>
            </td>
            <td class="p-3 border-r bg-black text-white text-center">E-521</td>
            <td class="p-3 border-r text-center">
              <a href="https://chat.whatsapp.com/JuDNbJ2i9ZLJJoZjkl9pnx" target="_blank" rel="noopener">
                <img src="{{ asset('img/unete.png') }}" alt="WA" class="h-6 inline"/>              </a>
            </td>
            <td class="p-3 border-r">
              PORCEL, GUSTA<br>
              <span class="text-xs text-gray-600">(77680452) 06/03 (2)</span>
            </td>
            <td class="p-3">06/03</td>
          </tr>

          {{-- Fila 5 --}}
          <tr class="hover:bg-gray-200">
            <td class="p-3 border-r">3</td>
            <td class="p-3 border-r">ANÁLISIS DE ESTADOS FINAN.</td>
            <td class="p-3 border-r">FA</td>
            <td class="p-3 border-r">
              <span>07:15</span><br>
              <span class="text-blue-600">03/04</span>
            </td>
            <td class="p-3 border-r bg-black text-white text-center">E-506</td>
            <td class="p-3 border-r text-center">
              <a href="https://chat.whatsapp.com/JQCXA6hBDoFHwgLCdfrhgB" target="_blank" rel="noopener">
                <img src="{{ asset('img/unete.png') }}" alt="WA" class="h-6 inline"/>              </a>
            </td>
            <td class="p-3 border-r">
              ESTIVARIZ, JUAN MAU<br>
              <span class="text-xs text-gray-600">(70127411) 03/04 (3)</span>
            </td>
            <td class="p-3">03/04</td>
          </tr>

          {{-- Fila 6 --}}
          <tr class="hover:bg-gray-200">
            <td class="p-3 border-r">3</td>
            <td class="p-3 border-r">ESTRATEGIA DE COMUNICACIÓN</td>
            <td class="p-3 border-r">B</td>
            <td class="p-3 border-r">
              <span>10:15</span><br>
              <span class="text-blue-600">03/04</span>
            </td>
            <td class="p-3 border-r bg-black text-white text-center">E-507</td>
            <td class="p-3 border-r text-center">
              <a href="https://chat.whatsapp.com/HSQD YVUF106Kk4nevdq" target="_blank" rel="noopener">
                <img src="{{ asset('img/unete.png') }}" alt="WA" class="h-6 inline"/>
              </a>
            </td>
            <td class="p-3 border-r">
              BONILLA, RAUL JERSON<br>
              <span class="text-xs text-gray-600">(62222331) 03/04 (3)</span>
            </td>
            <td class="p-3">03/04</td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>
