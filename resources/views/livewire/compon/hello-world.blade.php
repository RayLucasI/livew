<div>
    <div>The curren time es: {{ time() }}</div><br>

    <button 
        wire:click="$refresh" class="bg-blue-500 
                    hover:bg-blue-700 text-white font-bold 
                    py-2 px-4 rounded-full">
        Button
    </button>    

    <button wire:click="$refresh"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
        Button
    </button>


</div>
