<div>
@if($isOpen)
    <div class="fixed top-0 left-0 z-99 flex items-start justify-center w-full h-full overflow-y-auto">
        <div class="absolute w-full h-full bg-gray-900 opacity-50 modal-overlay" wire:click="$emitUp('closeModal')"></div>
            <div class="z-98 w-full max-h-screen mx-auto modal-container md:max-w-7xl">
                <div class="relative flex min-h-0 mt-8 p-4 overflow-hidden bg-white shadow-lg rounded-md">
                    @livewire($type, $params)
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
