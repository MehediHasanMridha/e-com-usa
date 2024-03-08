{{-- ===========New-arrivel-product start========== --}}
<section>
    <div class="bg-white px-3 py-10 lg:px-16 xl:px-0">
        <div class="container mx-auto">
            <div class="mb-10 border-b-2 border-b-serpent py-3">
                <h2 class="text-2xl font-bold uppercase text-rbalck">New Arrival Products</h2>
            </div>
            <div class="grid gap-3 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @include('component.productcardsell')
            </div>
            <div class="mt-6 flex justify-center">
                {{ $product->links('pagination.tailwind') }}
                {{-- <ul class=" flex gap-1">
                    <li><a class="  text-rbalck text-2xl rounded-md hover:text-serpent" href="#"><iconify-icon
                                icon="ei:arrow-left"></iconify-icon></a></li>
                    <li><a class=" text-rbalck text-sm rounded-md hover:text-serpent" href="#">1</li>
                    <li><a class=" text-rbalck text-sm rounded-md hover:text-serpent" href="#">2</li>
                    <li><a class=" text-rbalck text-sm rounded-md hover:text-serpent" href="#">3</li>
                    <li><a class=" text-rbalck text-2xl rounded-md hover:text-serpent" href="#"><iconify-icon
                                icon="ei:arrow-right"></iconify-icon></a></li>

                </ul> --}}
            </div>
        </div>
    </div>
</section>
{{-- ===========New-arrivel-product start========== --}}
