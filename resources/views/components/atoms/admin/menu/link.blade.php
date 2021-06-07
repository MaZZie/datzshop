<div x-data="{ menuOpen: @entangle('menuOpen') }">
    <a class="inline-flex py-2 text-sm font-semibold rounded-lg bg-transparent focus:text-white hover:text-white text-gray-200 focus:outline-none focus:shadow-outline" href="{{ $route }}">
    <i wire:ignore class="fi-{{ $icon }} w-8"></i>
        <span :class="{'block': menuOpen, 'md:hidden': !menuOpen}" class="ml-1">{{ $name }}</span>
    </a>
</div>