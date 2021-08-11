<div x-data="{ isShowing: {{ $show }} }">
    <div class="grid grid-cols-1 {{ $singleCol ? 'mt-5 mx-7' : '' }}" x-show="isShowing">
      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{ $label }}</label>
      <input class="py-2 px-3 rounded-lg border-2 border-gray-200 mt-1 focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-transparent"
        type="{{ $type }}" 
        placeholder="{{ $placeholder }}"
        name="{{ $name }}"
        wire:model.lazy="{{ $name }}" 
        />
        @error($name) <p class="text-red-500 text-xs italic">{{ $message }}</p> @enderror
    </div>
</div>