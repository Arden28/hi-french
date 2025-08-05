@extends('layouts.app')

@section('title', $course->title)

@section('content')


    <section class="pt-6 pb-16 bg-white dark:bg-gray-900">
    <div class="max-w-screen-xl px-4 mx-auto md:px-8">

        <!-- Breadcrumb -->
        <nav class="mb-5 text-gray-500 text-md dark:text-gray-400" aria-label="Breadcrumb">
          <ol class="inline-flex p-0 space-x-1 list-none md:space-x-1">
            <li>
              <div class="flex items-center">
                <a href="{{ route('home') }}" class="hover:text-blue-600">Home</a>
                <svg class="w-4 h-4 mx-2" fill="currentColor" viewBox="0 0 20 20"><path d="M6 6l6 6-6 6"/></svg>
                <a href="{{ route('course.index') }}" class="hover:text-blue-600">Courses</a>
                <svg class="w-4 h-4 mx-2" fill="currentColor" viewBox="0 0 20 20"><path d="M6 6l6 6-6 6"/></svg>
              </div>
            </li>
            <li aria-current="page" class="font-medium text-gray-700 dark:text-white active">{{ ucfirst($course->type) }}</li>
          </ol>
        </nav>

        <!-- Top Layout -->
        <div class="grid items-start gap-10 lg:grid-cols-12">

        <!-- Main Course Content -->
        <div class="space-y-8 lg:col-span-8">
            <!-- Title + Info -->
            <div>
            <h1 class="mb-3 text-4xl font-bold text-gray-900 dark:text-white">
                {{ $course->title }}
            </h1>
            <p class="mb-4 text-lg text-gray-600 dark:text-gray-400">
                {{ $course->description }}
            </p>

            <div class="flex flex-wrap items-center gap-3 text-sm text-gray-500 dark:text-gray-400">
                <span>By <strong class="text-gray-800 dark:text-white">{{ $course->instructor->name }}</strong></span>
                <span>•</span>
                <span>{{ $course->rating }} ⭐ ({{ number_format($course->review_count) }} ratings)</span>
                <span>•</span>
                <span>{{ number_format($course->student_count) }} students</span>
            </div>
            </div>

            <!-- What You’ll Learn -->
            <section>
            <h2 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white">What you’ll learn</h2>
            <ul class="grid grid-cols-1 gap-4 text-gray-700 sm:grid-cols-2 dark:text-gray-300">
                @foreach ($course->what_you_learn as $learn)
                <li>✔️ {{ $learn }}</li>
                @endforeach
            </ul>
            </section>

            <!-- This course includes -->
            <section>
            <h2 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white">This course includes</h2>
            <ul class="grid grid-cols-1 gap-4 text-gray-700 sm:grid-cols-2 dark:text-gray-300">
                <li><i class="bi bi-laptop"></i> {{ $course->video_hours }} hours on-demand video</li>
                <li><i class="bi bi-headset"></i> Personal Instructor</li>
                <li><i class="bi bi-file-earmark-arrow-down"></i> {{ $course->resource_count }} downloadable resources</li>
                @if($course->certificate)
                <li><i class="bi bi-trophy"></i> Certificate of completion</li>
                @endif
            </ul>
            </section>



            <!-- Curriculum -->
            <section>
                <div class="mb-4">
                    <h2 class="mb-1 text-xl font-semibold text-gray-900 dark:text-white">Course content</h2>
                    <span class="text-3xs">{{ $course->sections()->count() }} sections • {{ $course->lectures()->count() }} lectures</span>
                </div>
                <div id="accordion-collapse" data-accordion="collapse" class="space-y-2">

                    @foreach($course->sections as $key => $section)
                    <!-- Section 1 -->
                    <h2 id="accordion-heading-{{ $section->id }}">
                        <button type="button"
                        class="flex items-center justify-between w-full gap-3 p-5 font-medium text-black border border-gray-800 rounded-xl focus:outline-none hover:bg-gray-50"
                        data-accordion-target="#accordion-body-{{ $section->id }}" aria-expanded="false" aria-controls="accordion-body-{{ $section->id }}">
                        <span>
                            {{ $section->title }}
                        </span>
                        <svg data-accordion-icon class="w-3 h-3 transition-transform duration-200 rotate-0 shrink-0"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                        </svg>
                        </button>
                    </h2>
                    <div id="accordion-body-{{ $section->id }}" class="hidden" aria-labelledby="accordion-heading-{{ $section->id }}">
                        <div class="p-4 space-y-3 bg-white border border-t-0 border-gray-200">

                            @foreach($section->lectures as $lecture)
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2 text-gray-800">
                                        <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M4.5 3.5a1 1 0 0 0-1 1v11a1 1 0 0 0 1.555.832l10-5.5a1 1 0 0 0 0-1.664l-10-5.5a1 1 0 0 0-.555-.168z" />
                                        </svg>
                                        <span>{{ $lecture->title }}</span>
                                    </div>
                                    <span class="text-sm text-gray-500">{{ $lecture->duration }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach

                </div>

            </section>

            <!-- Instructor -->
            <section>
            <h2 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white">About the instructor</h2>
            <div class="flex items-center space-x-4">
                <img src="{{ asset('assets/images/user.jpg')}}" alt="Instructor" class="object-cover w-16 h-16 rounded-full" />
                <div>
                <p class="font-medium text-gray-900 dark:text-white">{{ $course->instructor->name }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400">Linguist & French Coach, 10+ years experience</p>
                </div>
            </div>
            <p class="mt-4 text-gray-700 dark:text-gray-300">
                {{ $course->instructor->name }} has helped thousands of learners around the world communicate fluently in french. He combines cultural insight with language technique.
            </p>
            </section>

            <!-- Reviews -->
            <section>
            <h2 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white">Student feedback</h2>
            <div class="flex items-center mb-2 space-x-2">
                <span class="text-2xl font-bold text-gray-900 dark:text-white">{{ $course->rating }}</span>
                <span class="text-sm text-yellow-500">★★★★★</span>
                <span class="text-sm text-gray-500 dark:text-gray-400">({{ number_format($course->review_count) }} ratings)</span>
            </div>
            <p class="text-gray-700 dark:text-gray-300">“Clear and engaging. I never thought learning French could be this fun!” Achieng M.</p>
            </section>

            <!-- Comment Section -->
            <section>
            <!-- Reuse the elegant comment section here -->
            <!-- Paste the previous comment section you approved -->
            </section>
        </div>

        <!-- Sticky Sidebar -->
         <aside class="hidden lg:col-span-4 lg:block">
            <div class="sticky space-y-6 sticky-top top-20">

                <!-- Course Card -->
                <div class="relative p-5 bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700 rounded-xl">

                <!-- Image with Play Icon -->
                <div class="relative mb-4">
                    <img src="{{ asset('assets/images/7.png') }}" alt="Course thumbnail" class="object-cover w-full h-48 rounded-md" />
                    <div class="absolute inset-0 flex items-center justify-center">
                    <button class="w-12 h-12 text-blue-600 transition bg-white rounded-full shadow-lg bg-opacity-80 hover:bg-opacity-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M6 4l12 6-12 6V4z" />
                        </svg>
                    </button>
                    </div>
                </div>

                <!-- Price -->
                <div class="mb-3 space-y-1">
                    <!-- Current Price -->
                    <div class="text-2xl font-bold text-gray-900 dark:text-white">KES {{ number_format($course->price) }}</div>

                    <!-- Original Price and Discount -->
                    {{-- <div class="flex items-center gap-2 text-sm">
                        <span class="text-gray-500 line-through dark:text-gray-400">KES 2,000</span>
                        <span class="font-semibold text-green-600">25% off</span>
                    </div> --}}
                </div>

                <!-- Add to Cart + Favorite -->
                <div class="flex items-center gap-3 mb-4">
                    <form class="flex w-full" action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="item_id" value="{{ $course->id }}">
                        <input type="hidden" name="item_type" value="course">
                        <button type="submit" class="inline-flex w-full text-center items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4  focus:ring-primary-300">
                            <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                            </svg>
                            Add to cart
                        </button>
                    </form>
                    <button class="p-2 text-gray-500 transition border border-gray-200 rounded-md dark:border-gray-700 hover:text-red-500 hover:border-red-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 016.364 6.364L12 21.364 4.318 13.682a4.5 4.5 0 010-6.364z" />
                    </svg>
                    </button>
                </div>

                <!-- Share + Gift -->
                <div class="flex items-center justify-between mb-6 text-sm text-gray-600 dark:text-gray-400">
                    <button class="flex items-center gap-2 transition hover:text-blue-600">
                        <i class="bi bi-share"></i>
                    Share
                    </button>
                    <button class="flex items-center gap-2 transition hover:text-pink-600">
                        <i class="bi bi-gift"></i>
                        Gift this course
                    </button>
                </div>

                <!-- Proceed Button -->
                <button class="w-full mt-6 bg-green-600 hover:bg-green-700 text-white font-semibold py-2.5 rounded-lg transition">
                    Proceed to Checkout
                </button>
                </div>
            </div>
        </aside>


        </div>
    </div>
    </section>


    <!-- CTA -->
    <section class="py-12 text-center text-white bg-blue-700" id="enroll">
      <div class="max-w-screen-md px-4 mx-auto">
        <h2 class="mb-4 text-4xl font-bold">Start Your French Journey Today</h2>
        <p class="mb-6 text-lg">Gain confidence and fluency at your own pace, all from home.</p>
        <a href="#" class="inline-block px-6 py-3 font-semibold text-blue-700 transition bg-white rounded-lg hover:bg-gray-100">Join the Course</a>
      </div>
    </section>

    <!-- Sticky Bottom Bar for Mobile -->
    <div class="fixed inset-x-0 bottom-0 z-50 flex items-center justify-between px-4 py-5 bg-white border-t border-gray-200 shadow-md dark:bg-gray-900 dark:border-gray-700 lg:hidden">
        <!-- Price -->
        <div class="mb-3 space-y-1">
            <!-- Current Price -->
            <div class="text-2xl font-bold text-gray-900 dark:text-white">KES {{ number_format($course->price) }}</div>

            <!-- Original Price and Discount -->
            {{-- <div class="flex items-center gap-2 text-sm">
                <span class="text-gray-500 line-through dark:text-gray-400">KES 2,000</span>
                <span class="font-semibold text-green-600">25% off</span>
            </div> --}}
        </div>

        <!-- Actions -->
        <div class="flex gap-2">
            <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="item_id" value="{{ $course->id }}">
                <input type="hidden" name="item_type" value="course">
                <button type="submit" class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4  focus:ring-primary-300">
                    <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                    </svg>
                    Add to cart
                </button>
            </form>
            <button class="px-4 py-2 text-sm font-medium text-white transition bg-green-600 rounded-md hover:bg-green-700">
                Enroll Now
            </button>
        </div>
    </div>
@endsection
