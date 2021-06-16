<div>
	<livewire:components.modal-component />
</div>
<div class="flex">
	<x-molecules.admin.menu/>
	<x-molecules.admin.filter/>
	<main class="w-full">
		<div class="w-full pt-4">
			
			<div class="flex space-x-3">
				{{-- <x-atoms.admin.button wire:click="create" btn-type="primary">
					Product Toevoegen
				</x-atoms.admin.button> --}}
				<button wire:click="create" btn-type="primary">
					Product Toevoegen
				</button>
			</div>
            <x-organisms.admin.products.show.table :products="$products"/>
        </div>
	</main>
</div>