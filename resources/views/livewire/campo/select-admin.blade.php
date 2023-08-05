<div>
    <select data-te-select-init data-te-select-filter="true" wire:model="selectedOptionAdmin" wire:change="SelectAdmin">{{-- data-te-select-init data-te-select-filter="true" --}}
        <option class="text-secondary">Seleccione Administrador</option>
        @foreach ($administrador as $administrador)
            <option class="text-primary" value="{{ $administrador->id }}">{{ $administrador->name }}</option>
        @endforeach
    </select>
</div>
