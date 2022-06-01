@csrf
<div class="block">
    <x-jet-label for="codigo" value="{{ __('Codigo') }}" />
    <x-jet-input id="codigo" class="block mt-1 w-full" type="number" name="codigo" :value="old('codigo', $producto->codigo)" required autofocus />
    <x-jet-label for="nombre" value="{{ __('Nombre del Producto') }}" />
    <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $producto->nombre)" required autofocus />
    <x-jet-label for="cantidad" value="{{ __('Cantidad') }}" />
    <x-jet-input id="cantidad" class="block mt-1 w-full" type="number" name="cantidad" :value="old('cantidad', $producto->cantidad)" required autofocus /> 
    <x-jet-label for="precio" value="{{ __('precio') }}" />
    <x-jet-input id="precio" class="block mt-1 w-full" type="number" name="precio" :value="old('precio', $producto->precio)" required autofocus />    
    <x-jet-label for="proveedor" value="{{ __('proveedor') }}" />
    <x-jet-input id="proveedor" class="block mt-1 w-full" type="text" name="proveedor" :value="old('proveedor', $producto->proveedor)" required autofocus />    
    precio
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