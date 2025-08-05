@extends('layouts.app')

@section('title', 'My Account')

@section('content')
<section class="max-w-6xl mx-auto py-6 px-4 bg-white">
    @php
        $title = Auth::user()->type == 'admin' ? 'Admin Dashboard' : 'Admi Dashboard';
    @endphp
    <h1 class="border-b py-6 text-4xl font-semibold mb-4">
        {{ $title ?? '' }}
    </h1>

  <!-- Mobile Tab Select -->
  <div class="sm:hidden mb-6">
    <select id="mobile-tab-select" class="block w-full rounded-lg border p-2 px-3 text-sm text-gray-700 ring-blue-700">
      <option value="dashboard">Dashboard</option>
      <option value="courses">Courses</option>
      <option value="orders">Orders</option>
      <option value="settings">Settings</option>
    </select>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-5 gap-6">
    <!-- Sidebar Tabs -->
    <aside class="hidden sm:block col-span-1">
      <ul>
        <li class="tab-item mt-5 cursor-pointer border-l-2 border-transparent px-2 py-2 font-semibold hover:border-l-blue-700 hover:text-blue-700 transition" data-tab="dashboard">Dashboard</li>
        <li class="tab-item mt-5 cursor-pointer border-l-2 border-transparent px-2 py-2 font-semibold hover:border-l-blue-700 hover:text-blue-700 transition" data-tab="courses">Courses</li>
        <li class="tab-item mt-5 cursor-pointer border-l-2 border-transparent px-2 py-2 font-semibold hover:border-l-blue-700 hover:text-blue-700 transition" data-tab="orders">Orders</li>
        <li class="tab-item mt-5 cursor-pointer border-l-2 border-transparent px-2 py-2 font-semibold hover:border-l-blue-700 hover:text-blue-700 transition" data-tab="settings">Settings</li>
      </ul>
    </aside>

    <!-- Main Content -->
    <main class="col-span-1 sm:col-span-4 space-y-8">
      <!-- Dashboard -->
      <div id="tab-dashboard" class="pt-4 tab-content">
        <h2 class="py-2 text-2xl font-semibold">Welcome back, {{ explode(' ', Auth::user()->name)[0] }}!</h2>
        <p class="text-gray-600">Here’s a quick overview of your account.</p>

        <div class="grid grid-cols-1 gap-6 py-6 sm:grid-cols-2 lg:grid-cols-3">
          <div class="rounded-lg bg-white p-6 shadow">
            <p class="text-sm text-gray-500">Enrolled Courses</p>
            <p class="text-3xl font-semibold text-blue-700">5</p>
          </div>
          <div class="rounded-lg bg-white p-6 shadow">
            <p class="text-sm text-gray-500">Completed Lessons</p>
            <p class="text-3xl font-semibold text-blue-700">42</p>
          </div>
          <div class="rounded-lg bg-white p-6 shadow">
            <p class="text-sm text-gray-500">Orders Made</p>
            <p class="text-3xl font-semibold text-blue-700">3</p>
          </div>
        </div>

        <hr class="my-6" />

        <div>
          <h3 class="mb-2 text-xl font-semibold">Recently Accessed</h3>
          <ul class="space-y-3">
            <li class="flex justify-between rounded-lg bg-gray-100 px-4 py-3">
              <span class="font-medium">Swahili Basics - Lesson 3</span>
              <span class="text-sm text-gray-500">2 days ago</span>
            </li>
            <li class="flex justify-between rounded-lg bg-gray-100 px-4 py-3">
              <span class="font-medium">Introduction to Verb Tenses</span>
              <span class="text-sm text-gray-500">1 week ago</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Courses -->
      <div id="tab-courses" class="tab-content pt-4 hidden">
        <h2 class="py-2 text-2xl font-semibold">My Courses</h2>
        <p class="text-gray-600">Browse all your enrolled courses below.</p>

        <div class="grid grid-cols-1 gap-6 py-6 sm:grid-cols-2 lg:grid-cols-3">
          <!-- Course Card -->
          <div class="rounded-xl bg-white p-4 shadow hover:shadow-md transition">
            <h3 class="text-lg font-semibold text-blue-700">Swahili for Beginners</h3>
            <p class="text-sm text-gray-600">12 lessons • 4h 30min</p>
            <div class="mt-3 flex justify-between text-sm text-gray-500">
              <span>Progress</span>
              <span>40%</span>
            </div>
            <div class="mt-1 h-2 w-full rounded bg-gray-200">
              <div class="h-full rounded bg-blue-600" style="width: 40%"></div>
            </div>
          </div>

          <div class="rounded-xl bg-white p-4 shadow hover:shadow-md transition">
            <h3 class="text-lg font-semibold text-blue-700">Conversational Swahili</h3>
            <p class="text-sm text-gray-600">8 lessons • 3h 10min</p>
            <div class="mt-3 flex justify-between text-sm text-gray-500">
              <span>Progress</span>
              <span>90%</span>
            </div>
            <div class="mt-1 h-2 w-full rounded bg-gray-200">
              <div class="h-full rounded bg-blue-600" style="width: 90%"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Orders -->
      <div id="tab-orders" class="tab-content hidden pt-4">
        <h2 class="py-2 text-2xl font-semibold">Order History</h2>
        <p class="text-gray-600">Review your past purchases.</p>

        <div class="mt-6 overflow-x-auto rounded-lg bg-white shadow">
          <table class="min-w-full text-sm text-left">
            <thead class="bg-gray-100 text-xs uppercase text-gray-600">
              <tr>
                <th class="px-6 py-4">Order ID</th>
                <th class="px-6 py-4">Product</th>
                <th class="px-6 py-4">Date</th>
                <th class="px-6 py-4">Amount</th>
                <th class="px-6 py-4">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-6 py-4 font-medium text-gray-900">#KD1031</td>
                <td class="px-6 py-4">Swahili for Beginners</td>
                <td class="px-6 py-4">July 5, 2025</td>
                <td class="px-6 py-4">KSh 1,500</td>
                <td class="px-6 py-4 text-green-600">Paid</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-6 py-4 font-medium text-gray-900">#KD1028</td>
                <td class="px-6 py-4">Conversational Swahili</td>
                <td class="px-6 py-4">June 21, 2025</td>
                <td class="px-6 py-4">KSh 1,700</td>
                <td class="px-6 py-4 text-green-600">Paid</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Settings -->
      <div id="tab-settings" class="tab-content hidden pt-4">
        <h2 class="text-xl font-bold mb-2">Account Settings</h2>
        <p class="text-gray-600 mb-6">Update your profile, preferences and notification settings.</p>

        <form class="space-y-6">
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
              <input type="text" class="w-full rounded border px-3 py-2" value="{{ Auth::user()->name }}">
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
              <input type="email" class="w-full rounded border px-3 py-2" value="{{ Auth::user()->email }}">
            </div>
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
            <input type="text" class="w-full rounded border px-3 py-2" placeholder="Optional">
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Preferred Language</label>
            <select class="w-full rounded border px-3 py-2">
              <option>English</option>
              <option>Swahili</option>
              <option>French</option>
            </select>
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Notification Preferences</label>
            <div class="space-y-2">
              <label class="flex items-center">
                <input type="checkbox" class="mr-2" checked>
                <span>Email notifications</span>
              </label>
              <label class="flex items-center">
                <input type="checkbox" class="mr-2">
                <span>SMS notifications</span>
              </label>
              <label class="flex items-center">
                <input type="checkbox" class="mr-2">
                <span>Weekly newsletters</span>
              </label>
            </div>
          </div>

          <div>
            <button class="px-4 py-2 bg-blue-700 text-white rounded">Save Changes</button>
          </div>
        </form>
      </div>
    </main>
  </div>
</section>

@endsection
