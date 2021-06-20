<div>
	<livewire:components.modal-component />
	<div class="flex">
		<x-molecules.admin.menu/>
		<x-molecules.admin.filter/>
		<main class="w-full">
			<x-jet-banner />
			<div class="w-full pt-4">
				<div class="flex w-full justify-between">
					<div class="ml-5 font-semibold tracking-wider uppercase text-1xl">Producten</div>

					<div class='flex items-center justify-end  md:gap-8 gap-4 mr-5'>
						<x-atoms.admin.button clickAction="create" btn-type="primary">
							Product Toevoegen
						</x-atoms.admin.button>
					</div>

				</div>
				<x-organisms.admin.products.show.table :products="$products"/>
			</div>
		</main>
	</div>
</div>