<div class="w-full">
  <div class="grid grid-cols-1 md:grid-cols-6 gap-5 md:gap-8 mt-5 mx-7">
    <x-atoms.admin.form.toggle label="Actief" name="product.active" singleCol=""/>
  </div>

  <x-atoms.admin.form.input type="text" label="Productnaam" placeholder="Voer een productnaam in" singleCol="true" name="product.name" />
  <x-atoms.admin.form.input type="text" label="slug" placeholder="Voer een slug in" singleCol="true" name="product.slug" />

    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
        <x-atoms.admin.form.input type="text" label="Voorraad" placeholder="Voer de voorraad in" name="product.stock" />
        <x-atoms.admin.form.input type="number" label="prijs" placeholder="Voer de prijs in" name="product.price" />
    </div>


    <x-atoms.admin.form.input type="text" label="omschrijving" placeholder="Voer een omschrijving in" singleCol="true" name="product.description" />

    {{-- <div class="grid grid-cols-1 mt-5 mx-7">
      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Upload Photo</label>
        <div class='flex items-center justify-center w-full'>
            <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                <div class='flex flex-col items-center justify-center pt-7'>
                  <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                  <p class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>Select a photo</p>
                </div>
              <input type='file' class="hidden" />
            </label>
        </div>
    </div> --}}
    <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
      <button wire:click="$emitUp('closeModal')" class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Cancel</button>
      @if($product)
      <button wire:click="store" class='w-auto bg-green-600 hover:bg-green-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Opslaan</button>
      @else
      <button wire:click="store" class='w-auto bg-green-600 hover:bg-green-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Aanmaken</button>
      @endif
    </div>

</div>
