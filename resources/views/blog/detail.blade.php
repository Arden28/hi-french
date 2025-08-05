@extends('layouts.app')

@section('title', $blog->title)

@section('content')


  <!-- Hero Section -->
  <section class="py-10 border-b border-gray-200 bg-gray-50">
    <div class="max-w-screen-xl px-4 mx-auto md:px-8">
        <!-- Breadcrumb -->
        <nav class="mb-3 text-gray-500 text-md" aria-label="Breadcrumb">
          <ol class="inline-flex p-0 space-x-1 list-none md:space-x-1">
            <li>
              <div class="flex items-center">
                <a href="{{ route('home') }}" class="hover:text-blue-600">Home</a>
                <svg class="w-4 h-4 mx-2" fill="currentColor" viewBox="0 0 20 20"><path d="M6 6l6 6-6 6"/></svg>
                <a href="{{ route('blog.index') }}" class="hover:text-blue-600">Blog</a>
                <svg class="w-4 h-4 mx-2" fill="currentColor" viewBox="0 0 20 20"><path d="M6 6l6 6-6 6"/></svg>
              </div>
            </li>
            <li aria-current="page" class="font-medium text-gray-700 active">{{ $blog->title }}</li>
          </ol>
        </nav>

      <h1 class="py-4 text-2xl font-bold leading-snug tracking-tight text-gray-900 md:text-4xl">
        {{ $blog->title }}
      </h1>

      <p class="max-w-2xl mb-6 text-gray-600 text-md">
        {{ $blog->excerpt }}
      </p>

      <div class="flex items-center space-x-4">
        <img src="{{ asset('assets/images/user.jpg') }}" class="object-cover w-10 h-10 rounded-full" />
        <div>
          <p class="font-medium">{{ $blog->author->name ?? 'Author' }}</p>
          <p class="text-sm text-gray-500">{{ $blog->published_at->format('M d, Y') }} • 6 min read</p>
        </div>
      </div>
    </div>
  </section>

    <!-- Blog + Sidebar Layout -->
    <section class="py-12 bg-white">
      <div class="grid max-w-screen-xl gap-10 px-4 mx-auto lg:grid-cols-12">

        <!-- Main Blog Grid -->
        <div class="space-y-8 lg:col-span-8">
            <!-- Article -->
            <article class="prose lg:col-span-8 max-w-none">
                {!! $blog->content !!}
            </article>

            <!-- Comment Section -->
            <div class="max-w-screen-md px-4 py-16 mx-auto mt-5 md:px-8">
            <h2 class="mb-8 text-2xl font-semibold text-gray-900">Comments</h2>

            <!-- Comments List -->
            <div class="space-y-8">
                <!-- Comment
                <div class="flex items-start space-x-4">
                    <img src="{{ asset('assets/images/user-3.jpg') }}" alt="User avatar" class="object-cover w-10 h-10 rounded-full" />
                    <div>
                        <div class="flex items-center mb-1 space-x-2">
                        <p class="font-medium text-gray-900">Achieng M.</p>
                        <span class="text-sm text-gray-500">· 2 days ago</span>
                        </div>
                        <p class="text-gray-700">
                        This was super helpful! I've been struggling with consistency, but now I’ll try the micro-habit tip.
                        </p>
                    </div>
                </div>
                -->

            </div>

            <!-- Comment Form -->
            <div class="pt-8 mt-12 border-t border-gray-200">
                <h3 class="mb-4 text-lg font-semibold text-gray-900">Leave a Comment</h3>

                <form class="space-y-4">
                <div class="flex flex-col gap-4 sm:flex-row">
                    <input type="text" placeholder="Your name" required class="w-full px-4 py-2.5 rounded-md border border-gray-300 bg-white text-sm focus:ring-blue-500 focus:border-blue-500" />
                    <input type="email" placeholder="Your email" required class="w-full px-4 py-2.5 rounded-md border border-gray-300 bg-white text-sm focus:ring-blue-500 focus:border-blue-500" />
                </div>

                <textarea rows="4" placeholder="Your comment..." required class="w-full px-4 py-2.5 rounded-md border border-gray-300 bg-white text-sm focus:ring-blue-500 focus:border-blue-500"></textarea>

                <button type="submit" class="px-6 py-2.5 bg-blue-600 hover:bg-blue-700 text-white rounded-md text-sm transition">
                    Post Comment
                </button>
                </form>
            </div>
            </div>

        </div>

        <!-- Sidebar -->
        <aside class="space-y-12 lg:col-span-4">

        <!-- Categories -->
        <div>
            <h3 class="pb-2 mb-4 text-xl font-bold text-gray-900 border-b border-gray-200">Topics</h3>
            <ul class="space-y-3 text-sm">
            <li><a href="#" class="block px-3 py-1 text-gray-700 transition rounded-md hover:bg-gray-100">Beginner Tips</a></li>
            <li><a href="#" class="block px-3 py-1 text-gray-700 transition rounded-md hover:bg-gray-100">Pronunciation</a></li>
            <li><a href="#" class="block px-3 py-1 text-gray-700 transition rounded-md hover:bg-gray-100">Confidence</a></li>
            <li><a href="#" class="block px-3 py-1 text-gray-700 transition rounded-md hover:bg-gray-100">Culture & Travel</a></li>
            </ul>
        </div>

        <!-- Newsletter CTA -->
        <div class="p-6 border border-blue-200 shadow-sm bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl">
            <h3 class="mb-2 text-xl font-bold text-gray-900">Join Our Newsletter</h3>
            <p class="mb-4 text-sm leading-relaxed text-gray-600">Get monthly tips, curated content, and real stories from learners like you.</p>
            <form>
            <input type="email" placeholder="Your email" class="w-full p-2.5 rounded-lg border border-gray-300 bg-white text-sm mb-3 focus:ring-blue-500 focus:border-blue-500" required>
            <button type="submit" class="w-full py-2.5 px-3 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition">Subscribe</button>
            </form>
        </div>
        </aside>

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
