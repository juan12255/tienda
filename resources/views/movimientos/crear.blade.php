<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Movimiento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm😛x-6 lg😛x-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('movimientos.store') }}" method="post">
                    @csrf
                    <div class="block">
                        <x-jet-label for="producto" value="{{__('Producto')}}" />
                        <select class="form-select appearance-none block  w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded  transition  ease-in-out m-0  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="producto">
                            <option selected>Selecciona un Producto</option>
                            @foreach ($productos as $producto)
                            <option value="{{ $producto->id }}">{{ $producto->nombre}} </option>
                            @endforeach
                        </select>
                        <x-jet-label for="tipodemovimiento" value="{{__('Producto')}}" />
                        <select class="form-select appearance-none block  w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded  transition  ease-in-out m-0  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="tipodemovimiento">
                            <option selected>Selecciona un Producto</option>
                            <option>Salida</option>
                            <option>Entrada</option>
                        </select>
                        <x-jet-label for="cantidad" value="{{ __('Cantida') }}" />
                        <x-jet-input name="cantidad" class="block mt-1 w-full" type="text" name="cantidad" required autofocus />
                        <x-jet-label for="fecha" value="{{ __('Fecha') }}" />
                        <x-jet-input name="fecha" class="block mt-1 w-full" type="date" name="fecha" required autofocus />
                    </div>
                    <div class="flex justify-center">
                        <div class="p-2">
                            <div class="flex justify-end">
                                <a href="{{ route('movimientos.index') }}">
                                    <x-jet-button type="submit">
                                        Guardar
                                    </x-jet-button>
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>