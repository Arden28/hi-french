@extends('layouts.app')

@section('title', 'Our Library')

@section('content')

    <!-- Hero with Breadcrumb -->
    <section class="py-8 bg-white border-b border-gray-200">
      <div class="max-w-screen-xl px-4 mx-auto">
        <!-- Breadcrumb -->
        <nav class="mb-3 text-gray-500 text-md" aria-label="Breadcrumb">
          <ol class="inline-flex p-0 space-x-1 list-none md:space-x-1">
            <li>
              <div class="flex items-center">
                <a href="{{ route('home') }}" class="hover:text-blue-600">Home</a>
                <svg class="w-4 h-4 mx-2" fill="currentColor" viewBox="0 0 20 20"><path d="M6 6l6 6-6 6"/></svg>
              </div>
            </li>
            <li aria-current="page" class="font-medium text-gray-700 active">Library</li>
          </ol>
        </nav>
        <h1 class="text-4xl font-extrabold text-gray-900 lg:text-5xl">Our Library</h1>
        <p class="max-w-2xl mt-2 text-lg text-gray-600">Explore our curated collection of books and learning materials.</p>


      </div>
    </section>


    <!-- Books Grid -->
    <section class="py-8 antialiased bg-gray-50 md:py-12">
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            <!-- Heading & Filters -->
            <div class="items-end justify-between mb-4 space-y-4 sm:flex sm:space-y-0 md:mb-8">
            <div>
                <!-- Search -->
                <div class="relative w-full">
                    <input type="text" placeholder="Search books..." class="w-full px-4 py-2 pl-10 text-sm bg-white border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" />
                    <div class="absolute left-3 top-2.5 text-gray-500">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
                    </svg>
                    </div>
                </div>
            </div>
            <div class="flex items-center space-x-4">

                <button id="sortDropdownButton1" data-dropdown-toggle="dropdownSort1" type="button" class="flex items-center justify-center w-full px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 sm:w-auto">
                <svg class="-ms-0.5 me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M7 4l3 3M7 4 4 7m9-3h6l-6 6h6m-6.5 10 3.5-7 3.5 7M14 18h4" />
                </svg>
                Sort
                <svg class="-me-0.5 ms-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                </svg>
                </button>
                <div id="dropdownSort1" class="z-50 hidden w-40 bg-white divide-y divide-gray-100 rounded-lg shadow" data-popper-placement="bottom">
                <ul class="p-2 text-sm font-medium text-left text-gray-500" aria-labelledby="sortDropdownButton">
                    <li>
                    <a href="#" class="inline-flex items-center w-full px-3 py-2 text-sm text-gray-500 rounded-md group hover:bg-gray-100 hover:text-gray-900"> The most popular </a>
                    </li>
                    <li>
                    <a href="#" class="inline-flex items-center w-full px-3 py-2 text-sm text-gray-500 rounded-md group hover:bg-gray-100 hover:text-gray-900"> Newest </a>
                    </li>
                    <li>
                    <a href="#" class="inline-flex items-center w-full px-3 py-2 text-sm text-gray-500 rounded-md group hover:bg-gray-100 hover:text-gray-900"> Increasing price </a>
                    </li>
                    <li>
                    <a href="#" class="inline-flex items-center w-full px-3 py-2 text-sm text-gray-500 rounded-md group hover:bg-gray-100 hover:text-gray-900"> Decreasing price </a>
                    </li>
                    <li>
                    <a href="#" class="inline-flex items-center w-full px-3 py-2 text-sm text-gray-500 rounded-md group hover:bg-gray-100 hover:text-gray-900"> No. reviews </a>
                    </li>
                    <li>
                    <a href="#" class="inline-flex items-center w-full px-3 py-2 text-sm text-gray-500 rounded-md group hover:bg-gray-100 hover:text-gray-900"> Discount % </a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
            <div class="grid gap-4 mb-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">

                @foreach ($books as $book)
                <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm">
                    <div class="w-full h-56">
                    <a href="#">
                        <img class="h-full mx-auto" src="{{ asset('assets/images/book-3.jpg') }}" alt="" />
                    </a>
                    </div>

                    <div class="pt-6">
                    <div class="flex items-center justify-between gap-4 mb-4">
                        <!-- <span class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800"> Up to 35% off </span> -->

                        <div class="flex items-center justify-end gap-1">
                        <button type="button" data-tooltip-target="tooltip-quick-look-3" class="p-2 text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-900">
                            <span class="sr-only"> Quick look </span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                            <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </button>
                        <div id="tooltip-quick-look-3" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 rounded-lg shadow-sm opacity-0 tooltip" data-popper-placement="top">
                            Quick look
                            <div class="tooltip-arrow" data-popper-arrow=""></div>
                        </div>

                        <button type="button" data-tooltip-target="tooltip-add-to-favorites-3" class="p-2 text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-900">
                            <span class="sr-only"> Add to Favorites </span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z" />
                            </svg>
                        </button>
                        <div id="tooltip-add-to-favorites-3" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 rounded-lg shadow-sm opacity-0 tooltip" data-popper-placement="top">
                            Add to favorites
                            <div class="tooltip-arrow" data-popper-arrow=""></div>
                        </div>

                        </div>
                    </div>

                    <a href="#" class="text-lg font-semibold leading-tight text-gray-900 hover:underline">
                        {{ $book->title }}
                    </a>

                    <div class="flex items-center justify-between gap-4 mt-4">
                        <p class="text-xl font-extrabold leading-tight text-gray-900">KSh {{ number_format($book->price) }}</p>

                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="item_id" value="{{ $book->id }}">
                            <input type="hidden" name="item_type" value="book">
                            <button type="submit" class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4  focus:ring-primary-300">
                                <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                </svg>
                                Add to cart
                            </button>
                        </form>
                    </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="w-full text-center">
            <button type="button" class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100">Show more</button>
            </div>
        </div>
    </section>

        <!-- CTA -->
        <section class="bg-white">
            <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:px-6">
                <div class="max-w-screen-sm mx-auto text-center">
                    <h2 class="mb-4 text-4xl font-extrabold leading-tight tracking-tight text-gray-900 lg:text-5xl">
                        Ready to start learning French today?
                    </h2>
                    <p class="mb-6 font-light text-gray-500 md:text-lg">
                        Book your first lesson or create a free account to begin your journey.
                    </p>
                    <a href="{{ route('course.index') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">
                        Book Your First Lesson
                    </a>
                    <a href="#" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">
                        Join our Speaking Club
                    </a>
                </div>
            </div>
        </section>
@endsection
