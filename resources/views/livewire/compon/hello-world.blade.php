<div>
    <input wire:model.live="name" type="text">
    <div><input wire:model.live="loud" type="checkbox"></div>    
    <select wire:model.live="greeting" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>                
    </select>

    <div>{{implode(', ',$greeting)}} {{$name}}@if ($loud) ! @endif</div>
    
</div>
