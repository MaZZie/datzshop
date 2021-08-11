<div>
    <button wire:click="{{ $clickAction }}"
        class="w-auto  rounded-lg shadow-xl font-medium tracking-wider text-sm text-white px-3 py-2
            {{ $btnType == 'primary' ? 'bg-green-600 hover:bg-green-700' : '' }}
            {{ $btnType == 'succes' ? 'bg-green-600 hover:bg-green-700' : '' }}
            {{ $btnType == 'cancel' ? 'bg-gray-600 hover:bg-gray-700' : '' }}
            "
        
        >
        {{-- <x-icon name="gmdi-add" class="m-5 h-5" /> --}}
        {{ $slot }}
    </button>
</div>