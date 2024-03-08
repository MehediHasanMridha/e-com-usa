@extends('layout.master')
@section('content')
    @include('component.blogSlider')
    {{-- ==============Blog-card-start=========== --}}
    <section>
        <div class="my-16">
            <div class="container mx-auto">
                <div class="grid grid-cols-2 gap-6">
                    @foreach ($blog as $item)
                        <div class="">
                            <div class="blog-card">
                                <div class="blog-card-img h-[350px]"
                                    style="background-image: url('{{ asset('assets/blog_image/' . $item->image) }}')">
                                </div>
                                <div class="blog-info">
                                    <div class="">
                                        <div class="flex items-center justify-center gap-2">
                                            <div class="">
                                                <a href="#" class="text-sm text-serpent hover:text-white">@ By
                                                    {{ $item->author }}</a>
                                            </div>
                                            <div class="">
                                                <a href="#" class="text-xs text-white hover:text-serpent">Fashion</a>
                                            </div>
                                            <div class="">
                                                <a href="#" class="text-xs text-white hover:text-serpent">Life
                                                    Style</a>
                                            </div>
                                        </div>
                                        <div class="mt-1 flex justify-center">
                                            <a href="{{ route('blog_item', encrypt($item->id)) }}"
                                                class="text-center text-lg text-white hover:text-serpent">{{ $item->title }}</a>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-center text-xs text-[#dddd]">
                                                {{ $item->created_at->format('d M y') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-10 border-b border-serpent">
                </div>
                <div class="mt-6 flex justify-center">
                    {!! $blog->links('pagination.tailwind') !!}
                    {{-- <ul class="flex gap-1">
                        <li><a class="rounded-md text-2xl text-rbalck hover:text-serpent" href="#"><iconify-icon
                                    icon="ei:arrow-left"></iconify-icon></a></li>
                        <li><a class="rounded-md text-sm text-rbalck hover:text-serpent" href="#">1</li>
                        <li><a class="rounded-md text-sm text-rbalck hover:text-serpent" href="#">2</li>
                        <li><a class="rounded-md text-sm text-rbalck hover:text-serpent" href="#">3</li>
                        <li><a class="rounded-md text-2xl text-rbalck hover:text-serpent" href="#"><iconify-icon
                                    icon="ei:arrow-right"></iconify-icon></a></li>

                    </ul> --}}
                </div>
            </div>
        </div>
    </section>
    {{-- ==============Blog-card-start-end=========== --}}
@endsection
