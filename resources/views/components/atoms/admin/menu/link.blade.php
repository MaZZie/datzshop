<div x-data="{ menuOpen: @entangle('menuOpen') }" :class="{'w-full flex justify-center': !menuOpen, 'm-2': menuOpen}">
    <a class="flex py-2 text-xs font-semibold rounded-lg bg-transparent focus:text-white hover:text-white text-gray-200 focus:outline-none focus:shadow-outline" href="{{ $route }}">
        <x-icon name="{{ $icon }}" class="h-5 w-5" />
        <span :class="{'block ml-2': menuOpen, 'md:hidden': !menuOpen}">{{ $name }}</span>
    </a>
</div>