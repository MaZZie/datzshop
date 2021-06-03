<div>
    <div class="container mx-auto flex items-center flex-wrap space-x-2">
        @foreach ($products as $product)
        <div class="w-full border md:w-1/3 xl:w-1/4 p-6 flex flex-col">
            <a href="#">
                <img class="hover:grow hover:shadow-lg"
                    src="https://images.unsplash.com/photo-1551431009-a802eeec77b1?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&h=400&q=80">
                <div class="pt-3 flex items-center justify-between">
                    <p class="">{{ $product->name }}</p>
                </div>
                <p class="pt-1 text-gray-900">&euro; {{ $product->price }}</p>
            </a>
        </div>
        @endforeach
    </div>
</div>