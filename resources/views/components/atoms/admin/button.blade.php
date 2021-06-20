<div>
    <button wire:click="{{ $clickAction }}" class="w-auto bg-green-600 hover:bg-green-700 rounded-lg shadow-xl font-medium tracking-wider text-sm text-white px-3 py-2">
        {{-- <x-icon name="gmdi-add" class="m-5 h-5" /> --}}
        {{ $slot }}
    </button>
</div>