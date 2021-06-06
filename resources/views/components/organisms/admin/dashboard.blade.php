<div>
    <x-molecules.admin.header />
    <div class="flex">
        <x-molecules.admin.menu />
        <x-molecules.admin.filter />
        <main>
            {{ $slot }}
        </main>
    </div>
    <x-molecules.admin.footer />
</div>