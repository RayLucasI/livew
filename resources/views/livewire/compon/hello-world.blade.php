<div>
    <div>
        <input wire:model.live="name" type="text">
    </div>      
    <div>
        <input wire:model.live="loud" type="checkbox">
    </div>    
    <div>
        <select wire:model.live="greeting" multiple id="greeting_multiple" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option>Hello</option>
            <option>Goodbye</option>
            <option>Adios</option>  
        </select>
    </div>
    <div>
        {{implode(', ',$greeting)}} {{$name}}@if ($loud) ! @endif
    </div>
    <button wire:click="resetName('Bingo')" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
        Reset Name
    </button>
</div>
