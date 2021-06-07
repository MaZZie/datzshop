<div x-data="{ menuOpen: @entangle('menuOpen') }" :class="{'w-full flex justify-center': !menuOpen, 'm-2': menuOpen}">
    <a class="inline-flex py-2 text-xs font-semibold rounded-lg bg-transparent focus:text-white hover:text-white text-gray-200 focus:outline-none focus:shadow-outline" href="{{ $route }}">
    <i wire:ignore class="fi-{{ $icon }}"></i>
        <span :class="{'block ml-2': menuOpen, 'md:hidden': !menuOpen}">{{ $name }}</span>
    </a>
</div>