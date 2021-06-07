<div>
    <div class="md:flex flex-col md:flex-row md:min-h-screen w-full border-r border-gray-400">
      <div class="flex flex-col md:w-52 w-full text-gray-70 text-gray-800 bg-gray-100 flex-shrink-0" x-data="{ open: false }">
        <div class="flex-shrink-0 px-2 py-4 flex flex-row items-center justify-between">
          <a href="#" class="text-lg font-semibold tracking-widest uppercase rounded-lg text-gray-900 focus:outline-none focus:shadow-outline">Filters</a>
        </div>
        <nav class="flex-grow md:block px-3 pb-4 md:pb-0 md:overflow-y-auto overflow-hidden">
            <x-atoms.admin.menu.filter.checkbox name="Dashboard" :route="route('admin.dashboard')" icon="xnluxl-home"/>
            <x-atoms.admin.menu.filter.checkbox name="Dashboard" :route="route('admin.dashboard')" icon="xnluxl-home"/>
            <x-atoms.admin.menu.filter.checkbox name="Dashboard" :route="route('admin.dashboard')" icon="xnluxl-home"/>
            <x-atoms.admin.menu.filter.checkbox name="Dashboard" :route="route('admin.dashboard')" icon="xnluxl-home"/>
          {{-- <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left rounded-lg bg-transparent focus:text-white hover:text-white focus:bg-gray-600 hover:bg-gray-600 md:block focus:outline-none focus:shadow-outline">
              <span>Dropdown</span>
              <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
              <div class="px-2 py-2 bg-white rounded-md shadow bg-gray-800">
                <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg bg-transparent hover:bg-gray-600 focus:bg-gray-600 focus:text-white hover:text-white text-gray-200 md:mt-0 focus:outline-none focus:shadow-outline" href="#">Link #1</a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg bg-transparent hover:bg-gray-600 focus:bg-gray-600 focus:text-white hover:text-white text-gray-200 md:mt-0 focus:outline-none focus:shadow-outline" href="#">Link #1</a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold rounded-lg bg-transparent hover:bg-gray-600 focus:bg-gray-600 focus:text-white hover:text-white text-gray-200 md:mt-0 focus:outline-none focus:shadow-outline" href="#">Link #1</a>
              </div>
            </div>
          </div> --}}
        </nav>
      </div>
    </div>
</div>