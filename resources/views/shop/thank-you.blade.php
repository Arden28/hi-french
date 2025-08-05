@extends('layouts.app')

@section('title', 'Thank You 🎉')

@section('content')

    <!-- Checkout Section -->
    <section class="py-8 antialiased bg-white md:py-16">
        <form action="#" class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            <ol class="flex items-center w-full max-w-2xl text-sm font-medium text-center text-gray-500 sm:text-base">
            <li class="after:border-1 flex items-center text-primary-700 after:mx-6 after:hidden after:h-1 after:w-full after:border-b after:border-gray-200 sm:after:inline-block sm:after:content-[''] md:w-full xl:after:mx-10">
                <span class="flex items-center after:mx-2 after:text-gray-200 after:content-['/'] sm:after:hidden">
                <svg class="w-4 h-4 me-2 sm:h-5 sm:w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                Cart
                </span>
            </li>

            <li class="after:border-1 flex items-center text-primary-700 after:mx-6 after:hidden after:h-1 after:w-full after:border-b after:border-gray-200 sm:after:inline-block sm:after:content-[''] md:w-full xl:after:mx-10">
                <span class="flex items-center after:mx-2 after:text-gray-200 after:content-['/'] sm:after:hidden">
                <svg class="w-4 h-4 me-2 sm:h-5 sm:w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                Checkout
                </span>
            </li>

            <li class="flex items-center shrink-0 text-primary-700">
                <svg class="w-4 h-4 me-2 sm:h-5 sm:w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                Thank You 🎉
            </li>
            </ol>

            <div class="mt-6 sm:mt-8 lg:flex lg:items-start lg:gap-12 xl:gap-16">
            <div class="flex-1 hidden min-w-0 space-y-8 lg:flex">
                <img src="{{ asset('assets/images/confirmation-page.jpg') }}" alt="">
            </div>

            <div class="w-full mt-6 space-y-6 sm:mt-8 lg:mt-0 lg:max-w-xs xl:max-w-md">
            <div class="max-w-3xl mx-auto">
            <h2 class="text-xl font-semibold text-gray-900 sm:text-2xl">Thank You 🎉</h2>

            <div class="py-8 mt-6 space-y-4 border-t border-b border-gray-200 sm:mt-8">
                <h4 class="text-lg font-semibold text-gray-900">Billing & Delivery information</h4>

                <dl>
                <dt class="text-base font-medium text-gray-900">Individual</dt>
                <dd class="mt-1 text-base font-normal text-gray-500">Bonnie Green - +1 234 567 890, San Francisco, California, United States, 3454, Scott Street</dd>
                </dl>

            </div>

            <div class="mt-6 sm:mt-8">
                <div class="relative overflow-x-auto border-b border-gray-200">
                <table class="w-full font-medium text-left text-gray-900 md:table-fixed">
                    <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="whitespace-nowrap py-4 md:w-[384px]">
                        <div class="flex items-center gap-4">
                            <a href="#" class="flex items-center w-10 h-10 aspect-square shrink-0">
                            <img class="w-full h-auto max-h-full" src="{{ asset('assets/images/book-2.jpg') }}" alt="imac image" />
                            </a>
                            <a href="#" class="hover:underline">French For Adult Beginners</a>
                        </div>
                        </td>

                        <td class="p-4 text-base font-normal text-gray-900">x1</td>

                        <td class="p-4 text-base font-bold text-right text-gray-900">KSh1,499</td>
                    </tr>

                    <tr>
                        <td class="whitespace-nowrap py-4 md:w-[384px]">
                        <div class="flex items-center gap-4">
                            <a href="#" class="flex items-center w-10 h-10 aspect-square shrink-0">
                            <img class="w-full h-auto max-h-full" src="{{ asset('assets/images/6.png') }}" alt="imac image" />
                            </a>
                            <a href="#" class="hover:underline">Self-paced Course</a>
                        </div>
                        </td>

                        <td class="p-4 text-base font-normal text-gray-900">x1</td>

                        <td class="p-4 text-base font-bold text-right text-gray-900">KSh12,998</td>
                    </tr>

                    </tbody>
                </table>
                </div>

                <div class="mt-4 space-y-6">
                <h4 class="text-xl font-semibold text-gray-900">Order summary</h4>

                <div class="space-y-4">
                    <div class="space-y-2">
                    <dl class="flex items-center justify-between gap-4">
                        <dt class="text-gray-500">Original price</dt>
                        <dd class="text-base font-medium text-gray-900">KSh6,592.00</dd>
                    </dl>

                    <dl class="flex items-center justify-between gap-4">
                        <dt class="text-gray-500">Savings</dt>
                        <dd class="text-base font-medium text-green-500">-KSh299.00</dd>
                    </dl>

                    <dl class="flex items-center justify-between gap-4">
                        <dt class="text-gray-500">Tax</dt>
                        <dd class="text-base font-medium text-gray-900">KSh799</dd>
                    </dl>
                    </div>

                    <dl class="flex items-center justify-between gap-4 pt-2 border-t border-gray-200">
                    <dt class="text-lg font-bold text-gray-900">Total</dt>
                    <dd class="text-lg font-bold text-gray-900">KSh7,191.00</dd>
                    </dl>
                </div>

                <div class="gap-4 sm:flex sm:items-center">
                    <a href="{{ route('home') }}" class="w-full rounded-lg  border border-gray-200 bg-white px-5  py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100">
                        Continue Shopping
                    </a>

                    <a href="{{ route('dashboard') }}"  type="button" class="mt-4 flex w-full items-center justify-center rounded-lg bg-primary-700  px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300  sm:mt-0">
                        Go to Dashboard
                    </a>
                </div>
                </div>
            </div>
            </div>
        </form>
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
