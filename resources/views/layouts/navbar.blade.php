
    <nav class="bg-white border-gray-200">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
            <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('assets/images/logo.png')}}" class="h-[65px]" alt="Hi-French Logo" />
            </a>
            <div class="flex items-center gap-2 md:order-2 md:space-x-0 rtl:space-x-reverse">

                <!-- Shopping Cart -->
                 <div class="relative">
                    <button command="show-modal" commandfor="drawer" class="rounded-md px-0.5 py-0.5 font-semibold text-gray-900 hover:bg-gray-950/10">
                        <i class="bi bi-cart3" style="font-size: 22px;"></i>
                    </button>

                    <!-- Circle Badge -->
                    @if($cartCount >= 1)
                    <span class="absolute flex items-center justify-center w-5 h-5 text-xs font-bold text-white bg-red-600 rounded-full -top-1 -right-1 ring-2 ring-white">
                        {{ $cartCount }}
                    </span>
                    @endif
                </div>
                <!-- Shopping Cart -->
                <!-- Shopping Cart Items -->
                <el-dialog>
                    <dialog id="drawer" aria-labelledby="drawer-title" class="fixed inset-0 overflow-hidden bg-transparent size-auto max-h-none max-w-none not-open:hidden backdrop:bg-transparent">
                        <el-dialog-backdrop class="absolute inset-0 transition-opacity duration-500 ease-in-out bg-gray-500/75 data-closed:opacity-0"></el-dialog-backdrop>

                        <div tabindex="0" class="absolute inset-0 pl-10 focus:outline-none sm:pl-16">
                        <el-dialog-panel class="block max-w-md ml-auto transition duration-500 ease-in-out transform size-full data-closed:translate-x-full sm:duration-700">
                            <div class="flex flex-col h-full overflow-y-auto bg-white shadow-xl">
                            <div class="flex-1 px-4 py-6 overflow-y-auto sm:px-6">
                                <div class="flex items-start justify-between">
                                <h2 id="drawer-title" class="text-lg font-medium text-gray-900">Shopping cart</h2>
                                <div class="flex items-center ml-3 h-7">
                                    <button type="button" command="close" commandfor="drawer" class="relative p-2 -m-2 text-gray-400 hover:text-gray-500">
                                    <span class="absolute -inset-0.5"></span>
                                    <span class="sr-only">Close panel</span>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                                        <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    </button>
                                </div>
                                </div>

                                <div class="mt-8">
                                <div class="flow-root">
                                    <ul role="list" class="-my-6 overflow-x-auto divide-y divide-gray-200">
                                        <!-- Item -->
                                        @foreach ($cartItems as $key => $item)
                                        <li class="flex py-6">
                                            <div class="overflow-hidden border border-gray-200 rounded-md size-12 shrink-0">
                                            <img src="{{ asset('assets/images/favicon.jpg') }}" alt="{{ $item['title'] }}" class="object-cover h-[45px]" />
                                            </div>

                                            <div class="flex flex-col flex-1 ml-4">
                                            <div>
                                                <div class="flex justify-between text-base font-medium text-gray-900">
                                                <h3>
                                                    <a href="#">{{ $item['title'] }}</a>
                                                </h3>
                                                <p class="ml-4">KES {{ number_format($item['quantity'] * $item['price']) }}</p>
                                                </div>
                                                {{-- <p class="mt-1 text-sm text-gray-500">{{ ucfirst($item['purchasable_type']) }}</p> --}}
                                            </div>
                                            <div class="flex items-end justify-between flex-1 text-sm">
                                                <p class="text-gray-500">Qty {{ $item['quantity'] ?? $item->quantity }} x KES {{ number_format($item['price']) }}</p>

                                                <form action="{{ route('cart.remove') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="key" value="{{ $key }}"> {{-- session or db ID --}}
                                                    <button type="submit" class="font-medium text-indigo-600 hover:text-indigo-500">
                                                        Remove
                                                    </button>
                                                </form>
                                            </div>
                                            </div>
                                        </li>
                                        @endforeach
                                        <!-- Item -->
                                    </ul>
                                </div>
                                </div>
                            </div>

                            <div class="px-4 py-6 border-t border-gray-200 sm:px-6">
                                <div class="flex justify-between text-base font-medium {{ $cartCount >= 1 ? '' : 'hidden' }} text-gray-900">
                                    <p>Subtotal</p>
                                    <p>KES {{ number_format($cartTotal ?? 0) }}</p>
                                </div>
                                <p class="{{ $cartCount >= 1 ? '' : 'hidden' }} mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
                                <div class="mt-6">
                                <a href="{{ route('checkout') }}" class=" {{ $cartCount >= 1 ? '' : 'hidden' }} flex items-center justify-center px-6 py-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-xs hover:bg-indigo-700">
                                    Checkout
                                </a>
                                </div>
                                <div class="flex justify-center mt-6 text-sm text-center text-gray-500">
                                <p>
                                    or
                                    <button type="button" command="close" commandfor="drawer" class="font-medium text-indigo-600 hover:text-indigo-500">
                                    Continue Shopping
                                    <span aria-hidden="true"> &rarr;</span>
                                    </button>
                                </p>
                                </div>
                            </div>
                            </div>
                        </el-dialog-panel>
                        </div>
                    </dialog>
                </el-dialog>
                 <!-- Shopping Cart Items -->


                @auth()
                <!-- User Dropdown -->
                <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="/assets/images/user.jpg" alt="user photo">
                </button>

                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm" id="user-dropdown">
                    <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900">{{ Auth::user()->name }}</span>
                    <span class="block text-sm text-gray-500 truncate">{{ Auth::user()->email }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="route('logout')"onclick="event.preventDefault();
                                                    this.closest('form').submit();"
                                                     class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    Sign out
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
                @else
                <div class="hidden gap-2 lg:flex">
                    <a href="{{ route('login') }}" class="p-1 px-2 font-semibold text-white bg-blue-600 rounded-md text-md md:me-0 focus:ring-4 focus:ring-gray-300">
                        <span class="">Login</span>
                    </a>
                    <a href="{{ route('register') }}" class="p-1 px-2 font-semibold text-white bg-blue-600 rounded-md text-md md:me-0 focus:ring-4 focus:ring-gray-300">
                        <span class="">Join now</span>
                    </a>
                </div>
                @endauth

                <button data-collapse-toggle="mega-menu-full" type="button" class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mega-menu-full" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
                <div id="mega-menu-full" class="items-center justify-between hidden w-full font-medium md:flex md:w-auto md:order-1">
                    <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg md:p-0 bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white md:dark:bg-gray-900">
                        <li>
                            <a href="{{ route('home') }}" class="block px-3 py-2 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent" aria-current="page">Home</a>
                        </li>
                        <li>
                            <button id="mega-menu-full-dropdown-button"
                                class="flex items-center justify-between w-full px-3 py-2 text-gray-900 rounded-sm md:w-auto hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">
                                Our Programs & Practice
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                        </li>
                        <li>
                            <a href="{{ route('blog.index') }}" class="block px-3 py-2 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Blog</a>
                        </li>
                        <li>
                            <a href="{{ route('library.index') }}" class="block px-3 py-2 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Library</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}#contact-us" class="block px-3 py-2 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 md:dark:hover:bg-transparent">Contact Us</a>
                        </li>

                        @auth()

                        @else
                        <div class="flex gap-2 w-100 md:hidden">
                            <a href="{{ route('login') }}" class="text-md px-2 w-[200px] text-white p-1 font-semibold bg-blue-600 rounded-md md:me-0 focus:ring-4 focus:ring-gray-300">
                                <span class="">Login</span>
                            </a>
                            <a href="{{ route('register') }}" class="text-md w-[200px] px-2 text-white p-1 font-semibold bg-blue-600 rounded-md md:me-0 focus:ring-4 focus:ring-gray-300">
                                <span class="">Join n</span>
                            </a>
                        </div>
                        @endauth
                    </ul>
                </div>
        </div>
            <!-- Dropdown Content -->
            <div id="mega-menu-full-dropdown"
                class="hidden mt-1 bg-white border-gray-200 shadow-xs bg-gray-50 border-y">
                <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 sm:grid-cols-2 md:px-6">
                    <ul>
                        <li>
                            <a href="#" class="block p-3 rounded-lg hover:bg-gray-100">
                                <div class="font-semibold">Self-paced Course</div>
                                <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block p-3 rounded-lg hover:bg-gray-100">
                                <div class="font-semibold">Private Lessons</div>
                                <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block p-3 rounded-lg hover:bg-gray-100">
                                <div class="font-semibold">Group Lessons</div>
                                <span class="text-sm text-gray-500">Connect with third-party tools that you're already using.</span>
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="#" class="block p-3 rounded-lg hover:bg-gray-100">
                                <div class="font-semibold">Speaking Club</div>
                                <span class="text-sm text-gray-500">Practice real conversations in a relaxed, supportive environment.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block p-3 rounded-lg hover:bg-gray-100">
                                <div class="font-semibold">Podcast</div>
                                <span class="text-sm text-gray-500">Listen and learn through engaging episodes on language and culture.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block p-3 rounded-lg hover:bg-gray-100">
                                <div class="font-semibold">Cultural Workshop</div>
                                <span class="text-sm text-gray-500">Explore traditions, customs, and lifestyles through interactive sessions.</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>
