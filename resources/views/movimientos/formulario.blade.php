@csrf
<div class="block">
    <x-jet-label for="producto" value="{{ __('Producto') }}" />
    <x-jet-input id="producto" class="block mt-1 w-full" type="number" name="producto" :value="old('producto', $movimiento->producto)" required autofocus />
    <x-jet-label for="tmovimiento" value="{{ __('Tipo de Movimiento') }}" />
    <x-jet-input id="tmovimiento" class="block mt-1 w-full" type="text" name="tmovimiento" :value="old('tmovimiento', $movimiento->tmovimiento)" required autofocus />
    <x-jet-label for="cantidad" value="{{ __('Cantidad') }}" />
    <x-jet-input id="cantidad" class="block mt-1 w-full" type="number" name="cantidad" :value="old('cantidad', $movimiento->cantidad)" required autofocus /> 
    <x-jet-label for="fecha" value="{{ __('Fecha') }}" />
    <x-jet-input id="fecha" class="block mt-1 w-full" type="date" name="fecha" :value="old('fecha', $movimiento->fecha)" required autofocus /> 
</div>
<div class="flex justify-center">
    <div class="p-2">
        <div class="flex justify-end">
            <a href="{{ route('productos.create') }}">
                <x-jet-button type="submit">
                    Guardar
                </x-jet-button>
            </a>
        </div>
    </div>
</div>