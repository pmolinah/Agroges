<div>
   
    <select data-te-select-init data-te-select-filter="true" wire:model="selectedOptionComuna" wire:change="SelectComuna">{{-- data-te-select-init data-te-select-filter="true" --}}
        <option class="text-secondary">Seleccione Comuna</option>
        @foreach ($comunas as $comuna)
            <option class="text-primary" value="{{ $comuna->id }}">{{ $comuna->id }},{{ $comuna->comuna }}</option>
        @endforeach
    </select>
    
</div>
