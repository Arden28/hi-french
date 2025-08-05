@extends('layouts.app')

@section('title', 'French for english speakers')

@section('content')
        <!-- Hero Section -->
        <section class="bg-white">
            <div class="grid max-w-screen-xl px-4 mx-auto py-7 lg:gap-8 xl:gap-0 lg:py-12 lg:grid-cols-12">
                <div class="mr-auto place-self-center lg:col-span-7">
                    <h1 class="max-w-2xl mb-4 text-3xl font-extrabold leading-none tracking-tight md:text-4xl xl:text-5xl">
                        Learn French Online the Smart Way
                    </h1>
                    <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl">
                        Learn with structured lessons and live practice sessions that help you speak French fluently and confidently.
                    </p>
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                        Get started now
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
                <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                    <!-- <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup"> -->
                    <img src="/assets/images/hero-1.jpg" alt="mockup">
                </div>
            </div>
        </section>

        <!-- Why Choose Us -->
         <section class="bg-white">
            <div class="items-center max-w-screen-xl gap-8 px-4 py-8 mx-auto xl:gap-16 md:grid md:grid-cols-2 sm:py-5 lg:px-6">
                <img class="w-full rounded-xl" src="/assets/images/3.png" alt="dashboard image">
                <img class="hidden w-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup-dark.svg" alt="dashboard image">
                <div class="py-0 mt-4 md:mt-0">
                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 lg:text-5xl">
                        It's Your Journey to <strong class="primary">Speaking French</strong>
                    </h1>
                    <p class="mb-6 font-light text-gray-500 md:text-lg">
                        At <strong>Hi-French</strong>, learning is more than memorizing rules, it’s about building confidence, one conversation at a time. No matter where you start, our step-by-step programs walk with you through vocabulary, grammar, culture, and real-world use.
                        We blend traditional lessons with immersion, so you’re not just learning French, you’re living it.
                    </p>

                    <ul class="max-w-xl mx-auto space-y-3 text-left text-gray-700">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mt-1 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414L9 14.414 5.293 10.707a1 1 0 011.414-1.414L9 11.586l6.293-6.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Self-paced & live learning options</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mt-1 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414L9 14.414 5.293 10.707a1 1 0 011.414-1.414L9 11.586l6.293-6.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Real-life speaking practice</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mt-1 mr-2 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414L9 14.414 5.293 10.707a1 1 0 011.414-1.414L9 11.586l6.293-6.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span>Friendly support from real teachers</span>
                        </li>
                    </ul>


                    <a href="{{ route('course.index') }}" class="inline-flex mt-5 items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Explore All Programs
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- How It Works -->
         <section class="bg-white">
            <div class="items-center max-w-screen-xl gap-8 px-4 py-8 mx-auto xl:gap-16 md:grid md:grid-cols-2 lg:py-16 sm:py-5 lg:px-6">
                <div class="py-0 mt-4 md:mt-0">
                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 lg:text-5xl">
                        Learning French Has Never <strong class="primary">Been This Easy</strong>
                    </h1>
                    <p class="mb-6 font-light text-gray-500 md:text-lg">
                        At <strong>Hi-French</strong>, we believe language learning should feel natural, not overwhelming.
                        That’s why we’ve broken the journey into four simple, clear steps designed to help you build confidence and see real progress from day one.
                    </p>

                    <ul class="max-w-xl mx-auto space-y-3 text-left text-gray-700">
                        <li class="items-start mb-4">
                            <div class="flex gap-2">
                                <div class="flex items-center justify-center w-8 h-8 border-2 rounded-full shrink-0 border-purple-blue-500 text-purple-blue-500">
                                    <span class="text-base font-bold leading-7">1</span>
                                </div>
                                <div class="p-1">
                                    <span class="font-bold">Pick Your Learning Style</span>
                                    <p>Choose between self-paced, private, or group lessons.</p>
                                </div>
                            </div>
                        </li>
                        <li class="items-start mb-4">
                            <div class="flex gap-2">
                                <div class="flex items-center justify-center w-8 h-8 border-2 rounded-full shrink-0 border-purple-blue-500 text-purple-blue-500">
                                    <span class="text-base font-bold leading-7">2</span>
                                </div>
                                <div class="p-1">
                                    <span class="font-bold">Set Your Schedule</span>
                                    <p>Study when it works best for you, morning, evening, or weekends.</p>
                                </div>
                            </div>
                        </li>
                        <li class="items-start mb-4">
                            <div class="flex gap-2">
                                <div class="flex items-center justify-center w-8 h-8 border-2 rounded-full shrink-0 border-purple-blue-500 text-purple-blue-500">
                                    <span class="text-base font-bold leading-7">3</span>
                                </div>
                                <div class="p-1">
                                    <span class="font-bold">Start Learning & Practicing</span>
                                    <p>Follow lessons, join live sessions, and engage in real conversations.</p>
                                </div>
                            </div>
                        </li>
                        <li class="items-start mb-4">
                            <div class="flex gap-2">
                                <div class="flex items-center justify-center w-8 h-8 border-2 rounded-full shrink-0 border-purple-blue-500 text-purple-blue-500">
                                    <span class="text-base font-bold leading-7">4</span>
                                </div>
                                <div class="p-1">
                                    <span class="font-bold">Improve with Feedback</span>
                                    <p>Get personalized support and actionable feedback from real instructors.</p>
                                </div>
                            </div>
                        </li>
                    </ul>


                    <a href="#" class="inline-flex mt-5 items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Get started today!
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
                <img class="w-full mt-4 rounded-xl" src="/assets/images/1.png" alt="dashboard image">
            </div>
        </section>

        <!-- Stats -->
        <section class="w-full bg-white">
            <div class="px-4 py-8 text-center lg:py-16 lg:px-8">
                <dl class="grid grid-cols-2 gap-8 text-gray-900 md:grid-cols-3 lg:grid-cols-4">
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold md:text-4xl">220+</dt>
                    <dd class="font-light text-gray-500">Total Students</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold md:text-4xl">4</dt>
                    <dd class="font-light text-gray-500">Speaking Club Sessions / week</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold md:text-4xl">14</dt>
                    <dd class="font-light text-gray-500">Available Courses</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl font-extrabold md:text-4xl">700+</dt>
                    <dd class="font-light text-gray-500">Library Books</dd>
                </div>
                </dl>
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

        <!-- Blog Section -->
         <section class="bg-white">
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
                <div class="max-w-screen-sm mx-auto mb-8 text-center lg:mb-16">
                    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 lg:text-4xl">Our Blog</h2>
                    <p class="font-light text-gray-500 sm:text-xl">Language tips, culture, and confidence, your French journey starts here.</p>
                </div>
                <div class="grid gap-8 lg:grid-cols-2">
                    @foreach($blogs as $blog)
                    <article class="p-6 mb-4 bg-white border border-gray-200 rounded-lg shadow-md">
                        <div class="flex items-center justify-between mb-5 text-gray-500">
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                                {{ $blog->category->name ?? 'Tutorial' }}
                            </span>
                            <span class="text-sm">{{ $blog->published_at->diffForHumans() }}</span>
                        </div>
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                            <a href="{{ route('blog.detail', $blog->slug) }}">{{ $blog->title }}</a>
                        </h2>
                        <p class="mb-5 font-light text-gray-500">
                            {{ $blog->excerpt }}
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <img class="rounded-full w-7 h-7" src="{{ asset('assets/images/user.jpg') }}" alt="{{ $blog->author->name ?? 'Author' }}" />
                                <span class="font-medium">
                                    {{ $blog->author->name ?? 'Author' }}
                                </span>
                            </div>
                            <a href="{{ route('blog.detail', $blog->slug) }}" class="inline-flex items-center font-medium text-blue-600 hover:underline">
                                Read more
                                <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="bg-white" id="contact-us">
        <div class="max-w-screen-xl px-4 py-12 mx-auto lg:px-6">
            <div class="grid grid-cols-1 gap-12 md:grid-cols-2">
            <div>
                <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900">
                Get in Touch
                </h2>
                <p class="mb-6 text-gray-600">
                Whether you have a question about our programs, need help signing up, or just want to say bonjour, we're here to help!
                </p>
                <ul class="space-y-4 text-gray-700">
                <li class="flex items-start gap-3">
                    <i class="text-xl text-blue-600 bi bi-envelope-at"></i>
                    <a href="mailto:contact@hifrench.club" class="hover:underline">contact@hifrench.club</a>
                </li>
                <li class="flex items-start gap-3">
                    <i class="text-xl text-blue-600 bi bi-telephone"></i>
                    <a href="tel:+254714582029" class="hover:underline">+254 714 582029</a>
                </li>
                <li class="flex items-start gap-3">
                    <i class="text-xl text-blue-600 bi bi-geo-alt"></i>
                    <span>745 Moi Avenue, Nairobi</span>
                </li>
                </ul>
            </div>
            <div>
                <form class="space-y-6">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Full Name</label>
                    <input type="text" id="name" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-50 border-gray-300 text-gray-900" required>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="email" id="email" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-50 border-gray-300 text-gray-900" required>
                </div>
                <div>
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Message</label>
                    <textarea id="message" rows="5" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-50 border-gray-300 text-gray-900" placeholder="Tell us how we can help..."></textarea>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center focus:ring-4 focus:ring-blue-300">
                    Send Message
                </button>
                </form>
            </div>
            </div>
        </div>
        </section>
@endsection
