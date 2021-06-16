<div>
    <div class="text-xs text-gray-400 uppercase flex p-4 my-1 mx-4">
        <div class="flex-grow-0 flex-shrink-0 flex-2em flex items-center">
            <input type="checkbox" class="form-checkbox h-3 w-3 text-green-600 focus:ring-0 shadow-none focus:shadow-none"><span class="ml-2 text-gray-700">
        </div>
        <div class="flex-grow-1 flex-shrink-0 flex-auto">Naam</div>
        <div class="flex-15">Prijs</div>
        <div class="flex-15">EAN Code</div>
        <div class="flex-15">Leverancier</div>
        <div class="flex-2em"></div>
    </div>

    @foreach($products as $product)
        <div class="bg-gray-100 text-xs text-gray-600 flex border border-gray-300 p-4 my-1 mx-4">
            <div class="flex-grow-0 flex-shrink-0 flex-2em flex items-center">
                <input type="checkbox" class="form-checkbox h-3 w-3 text-green-600 bg-gray-200 border-gray-300 focus:ring-0 shadow-none focus:shadow-none">
            </div>
            <div class="flex-grow-1 flex-shrink-0 flex-auto">{{ $product->name }}</div>
            <div class="flex-15">{{ $product->price }}</div>
            <div class="flex-15">{{ $product->ean }}</div>
            <div class="flex-15">999 Games</div>
            <div class="flex-2em flex justify-end">
                <i wire:ignore class="fi-xwsuxl-ellipsis"></i>
            </div>
        </div>
    @endforeach
</div>