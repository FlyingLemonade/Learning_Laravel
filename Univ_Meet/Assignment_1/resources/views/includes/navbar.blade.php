<nav class="bg-slate-100 border-gray-200 dark:bg-gray-900 ">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-center mx-auto p-4 ">
        <div class="w-full max-w-screen-xl justify-between grid grid-cols-3">
            <div class="flex items-center rtl:space-x-reverse">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/logo.webp') }}" class="size-16" alt="description of myimage">
                </a>
            </div>
            <div class="items-center justify-center hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul class="bg-slate-100 flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-slate-100 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="{{ route('home') }}"
                            class="block py-2 px-3 md:p-0 text-lg text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('product') }}"
                            class="block py-2 px-3 md:p-0 text-lg text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Product</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}"
                            class="block py-2 px-3 md:p-0 text-lg text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="items-center justify-end hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" value="" class="sr-only peer">
                    <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                    <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Dark Mode</span>
                </label>
            </div>
        </div>
    </div>
</nav>