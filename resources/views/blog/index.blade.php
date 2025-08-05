@extends('layouts.app')

@section('title', 'Our Blog')

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
            <li aria-current="page" class="font-medium text-gray-700 active">Blog</li>
          </ol>
        </nav>
        <h1 class="text-4xl font-extrabold text-gray-900 lg:text-5xl">Our Blog</h1>
        <p class="max-w-2xl mt-2 text-lg text-gray-600">Language tips, culture, and confidence, your French journey starts here.</p>
      </div>
    </section>

    <!-- Blog + Sidebar Layout -->
    <section class="py-12 bg-white">
      <div class="grid max-w-screen-xl gap-10 px-4 mx-auto lg:grid-cols-12">

        <!-- Main Blog Grid -->
        <div class="space-y-8 lg:col-span-8">
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

        <!-- Sidebar -->
        <aside class="space-y-12 lg:col-span-4">

        <!-- Categories -->
        <div>
            <h3 class="pb-2 mb-4 text-xl font-bold text-gray-900 border-b border-gray-200">Topics</h3>
            <ul class="space-y-3 text-sm">
                @foreach ($categories as $category)
                <li>
                    <a href="#" class="block px-3 py-1 text-gray-700 transition rounded-md hover:bg-gray-100">
                        {{ $category->name }}
                    </a>
                </li>
                @endforeach
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
