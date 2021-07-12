<x-admin-layout :modal="true">
	<x-jet-banner />
	<div class="w-full pt-4">
		@livewire('admin.products', ['products' => $products])
	</div>
</x-admin-layout>