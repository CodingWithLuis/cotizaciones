<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Listado de categorias
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 mt-3">

                    <a href="{{ route('categories.create') }}"
                        class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Agregar</a>

                    <div class="min-w-full border-b border-gray-200 shadow">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                        Nombre
                                    </th>
                                    <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                        Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach ($categories as $category)
                                    <tr>
                                        <td class="px-6 py-4 border-b border-gray-200">{{ $category->name }}</td>
                                        <td class="px-6 py-4 border-b border-gray-200">
                                            <a href="{{ route('categories.edit', $category->id) }}"
                                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Editar</a>

                                            <form method="POST" action="{{ route('categories.destroy', $category) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150"
                                                    onclick="return confirm('Esta seguro que desea eliminar?')">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
