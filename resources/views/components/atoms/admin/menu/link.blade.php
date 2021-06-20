<div x-data="{ menuOpen: @entangle('menuOpen') }" :class="{'w-full flex': !menuOpen, '': menuOpen}" class="h-6 mb-2 ml-2">
    <a class="flex text-xs font-semibold bg-transparent focus:text-white hover:text-white text-gray-200 focus:outline-none focus:shadow-outline" href="{{ $route }}">
        <x-icon name="{{ $icon }}" class="h-5 w-5" />
        <span :class="{'block ml-2': menuOpen, 'md:hidden': !menuOpen}">{{ $name }}</span>
    </a>
</div>