<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="bg-gray-200 py-10">
    <div class="max-w-lg bg-white mx-auto p-5 rounded shadow">
        @if ($errors->any())
            <ul class="list-none p-4 mb-4 bg-red-100 text-red-500">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="tags" method="post" class="flex mb-4">
            @csrf
            <input type="text" name="name" class="rounded-l bg-gray-200 p-4 w-full outline-none"
                placeholder="Nueva etiqueta">
            <input type="submit" value="Agregar" class="rounded-r bg-blue-500 px-4 text-white outline-none">
        </form>
        <h4 class="text-lg text-center mb-4">Listado de etiquetas</h4>
        <table>
            @forelse ($tags as $tag)
                <tr>
                    <td class="border px-4 py-2">{{ $tag->name }}</td>
                    <td class="border px-4 py-2">{{ $tag->slug }}</td>
                    <td class="px-4 py-2">
                        <form action="tags/{{ $tag->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar" class="px-3 rounded bg-red-500 text-white">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>
                        <p>No hay etiquetas</p>
                    </td>
                </tr>
            @endforelse
        </table>
    </div>
</body>

</html>
