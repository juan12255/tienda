<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">     
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="margin-top:2%; margin-left:2%">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="w-full">
                                    <thead class="border-b">
                                        <tr>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                ID
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                               Producto
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Tipo Movimiento
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Cantidad
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Fecha
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{$producto->id}}
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$producto->producto}}
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$producto->tmovimiento}}
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$producto->cantidad}}
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$producto->fecha}}
                                            </td>
                                           
                                        </tr>
                                       
                                    </tbody>

                                </table>
                                <a href="{{route('movimientos.index')}}">
                                    <x-jet-button>Volver</x-jet-button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>