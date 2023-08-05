<div>
    <select data-te-select-init data-te-select-filter="true" wire:model='selectedId' wire:change="SelectEmpresa">{{-- data-te-select-init data-te-select-filter="true" --}}
        <option class="text-secondary" value=" ">Seleccione una Empresa.</option>
        @foreach ($contnomb as $contn)
            <option class="text-primary" value="{{ $contn->id }}">{{ $contn->razon_social }}</option>
        @endforeach
    </select>
</div>
