<div>
  <div class="grid grid-cols-1 {{ $singleCol ? 'mt-5 mx-7' : '' }}">
    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{ $label }}</label>
    <input class="py-2 px-3 rounded-lg border-2 border-gray-200 mt-1 focus:outline-none focus:ring-green-600 focus:border-transparent form-checkbox flex items-center h-4 w-4 text-green-600 bg-gray-200 focus:ring-0 shadow-none focus:shadow-none"
      type="checkbox" 
      name="{{ $name }}"
      wire:model.lazy="{{ $name }}" 
      />
      @error($name) <p class="text-red-500 text-xs italic">{{ $message }}</p> @enderror
  </div>
</div>
