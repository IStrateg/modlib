<header class="fixed z-30 w-full md:bg-opacity-90 transition duration-300 ease-in-out bg-white dark:bg-dark backdrop-blur-sm">
    <div class="mx-auto max-w-6xl px-5 sm:px-6">
        <div class="flex justify-between items-center h-20">
            <div class="shrink-0 mr-5">
                <a href="{{ route('home') }}" class="block" aria-label="ModLib">
                    <svg class="w-8 h-8" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"> <defs> <linearGradient x1="26%" y1="100%" x2="100%" y2="100%" id="logo_a"> <stop stop-color="#3ABAB4" offset="0%"></stop> <stop stop-color="#7F9CF5" offset="100%"></stop> </linearGradient> <linearGradient x1="26%" y1="100%" x2="100%" y2="100%" id="logo_b"> <stop stop-color="#3ABAB4" offset="0%"></stop> <stop stop-color="#3ABAB4" stop-opacity="0" offset="100%"></stop> </linearGradient> </defs> <path d="M32 16h-8a8 8 0 10-16 0H0C0 7.163 7.163 0 16 0s16 7.163 16 16z" fill="url(#logo_a)"></path> <path d="M32 16c0 8.837-7.163 16-16 16S0 24.837 0 16h8a8 8 0 1016 0h8z" fill="url(#logo_b)"></path> </svg>
                </a>
            </div>
            <nav class="hidden md:flex md:grow">
                <ul class="flex grow flex-wrap items-center font-medium">
                    <li>
                        <a class="text-gray-600 hover:text-dark dark:text-gray-300 transition flex items-center py-2 px-5 duration-150 ease-in-out" href="{{ route('catalog') }}">Каталог</a>
                    </li>
                    <li>
                        <a class="text-gray-600 hover:text-dark dark:text-gray-300 transition flex items-center py-2 px-5 duration-150 ease-in-out" href="#">Поиск</a>
                    </li>
                </ul>
                <div class="form-switch flex flex-col justify-center mr-3">
                    <input type="checkbox" name="light-switch" id="light-switch-desktop" class="light-switch switch">
                    <label for="light-switch-desktop" class="relative">
                        <span class="relative z-10 bg-gradient-to-t	from-zinc-100 to-white shadow-sm dark:to-zinc-700 dark:from-zinc-800" aria-hidden="true"></span>
                        <svg class="absolute inset-0" width="44" height="24" viewBox="0 0 44 24" xmlns="http://www.w3.org/2000/svg"> <g class="fill-current text-white" fill-rule="nonzero" opacity=".88"> <path d="M32 8a.5.5 0 00.5-.5v-1a.5.5 0 10-1 0v1a.5.5 0 00.5.5zM35.182 9.318a.5.5 0 00.354-.147l.707-.707a.5.5 0 00-.707-.707l-.707.707a.5.5 0 00.353.854zM37.5 11.5h-1a.5.5 0 100 1h1a.5.5 0 100-1zM35.536 14.829a.5.5 0 00-.707.707l.707.707a.5.5 0 00.707-.707l-.707-.707zM32 16a.5.5 0 00-.5.5v1a.5.5 0 101 0v-1a.5.5 0 00-.5-.5zM28.464 14.829l-.707.707a.5.5 0 00.707.707l.707-.707a.5.5 0 00-.707-.707zM28 12a.5.5 0 00-.5-.5h-1a.5.5 0 100 1h1a.5.5 0 00.5-.5zM28.464 9.171a.5.5 0 00.707-.707l-.707-.707a.5.5 0 00-.707.707l.707.707z"></path> <circle cx="32" cy="12" r="3"></circle> <circle fill-opacity=".4" cx="12" cy="12" r="6"></circle> <circle fill-opacity=".88" cx="12" cy="12" r="3"></circle> </g> </svg>
                        <span class="switch">Switch to light / dark version</span>
                    </label>
                </div>
                <ul class="flex flex-wrap items-center justify-end">
                    <li>
                        <a class="button hover:bg-teal-400 text-white bg-teal-500 ml-6 px-4 py-2" href="{{ route('login') }}">
                            Вход
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
