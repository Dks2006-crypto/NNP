<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>

    <!-- Tailwind CSS через CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Alpine JS для Livewire -->
    <script src="//unpkg.com/alpinejs" defer></script>

    <!-- Иконки Heroicons -->
    <script src="https://cdn.jsdelivr.net/npm/heroicons@2.0.11/outline"></script>

    <style>
        html, body {
            max-width: 100%;
            overflow-x: hidden;
        }
        [x-cloak] { display: none !important; }
        /* Дополнительные кастомные стили */
        .aspect-square { aspect-ratio: 1/1; }
    </style>
</head>
<body class="bg-[#CEDCFF] overflow-x-hidden">
 <!-- Header -->
<header class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 border-b border-slate-700/50">
    <!-- Фоновый эффект с сеткой -->
    <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 1px 1px, rgba(227,24,52,0.3) 1px, transparent 0); background-size: 40px 40px;"></div>
    
    <!-- Неоновые линии сверху -->
    <div class="absolute top-0 left-0 w-full h-[2px] bg-gradient-to-r from-transparent via-[#E31834] to-transparent animate-scan"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <!-- Верхняя строка -->
        <div class="flex justify-between items-center py-5">
            <!-- Логотип с неоновым эффектом -->
            <a href="{{ route('home') }}" class="relative group">
                <div class="absolute inset-0 bg-[#E31834] rounded-full blur-xl opacity-0 group-hover:opacity-50 transition-opacity duration-500"></div>
                <div class="relative flex items-center gap-2">
                    <img src="{{ asset('img/a5_logo.svg') }}" alt="Лого" class="w-10 sm:w-10 md:w-12 relative z-10 transform group-hover:scale-110 transition-transform duration-500">
                    <span class="text-2xl font-black text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-300 hidden sm:inline">АПТЕКА</span>
                </div>
            </a>

            <!-- Навигационное меню с неоновым подчеркиванием -->
            <nav class="hidden md:flex items-center space-x-1">
                <a href="{{ route('home') }}" class="relative px-4 py-2 text-gray-300 hover:text-white font-medium group">
                    <span class="relative z-10">ГЛАВНАЯ</span>
                    <span class="absolute bottom-0 left-0 w-full h-[2px] bg-[#E31834] transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                </a>
                <a href="#" class="relative px-4 py-2 text-gray-300 hover:text-white font-medium group">
                    <span class="relative z-10">КАТЕГОРИИ</span>
                    <span class="absolute bottom-0 left-0 w-full h-[2px] bg-[#E31834] transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                </a>
                <a href="#" class="relative px-4 py-2 text-gray-300 hover:text-white font-medium group">
                    <span class="relative z-10">АКЦИИ</span>
                    <span class="absolute bottom-0 left-0 w-full h-[2px] bg-[#E31834] transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                </a>
            </nav>

            <!-- Иконки в киберпанк-стиле -->
            <div class="flex items-center space-x-4">
                <!-- Кнопка бургер-меню -->
                <button id="mobile-menu-button" class="md:hidden relative w-10 h-10 flex items-center justify-center bg-slate-800 rounded-xl border border-slate-700 hover:border-[#E31834] transition-colors duration-300 group">
                    <svg class="h-5 w-5 text-gray-400 group-hover:text-[#E31834]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <!-- Корзина -->
                <a href="{{ route('cart.index') }}" class="relative group">
                    <div class="absolute inset-0 bg-[#E31834] rounded-xl blur-md opacity-0 group-hover:opacity-50 transition-opacity"></div>
                    <div class="relative w-10 h-10 bg-slate-800 rounded-xl border border-slate-700 group-hover:border-[#E31834] flex items-center justify-center transition-all duration-300">
                        <svg class="h-5 w-5 text-gray-400 group-hover:text-[#E31834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        @if($cartCount ?? 0 > 0)
                            <span class="absolute -top-2 -right-2 min-w-[20px] h-[20px] bg-gradient-to-r from-[#E31834] to-purple-600 text-white text-xs font-mono font-bold rounded-full flex items-center justify-center px-1 animate-pulse shadow-lg">
                                {{ $cartCount }}
                            </span>
                        @endif
                    </div>
                </a>

                <!-- Админка -->
                @auth
                    <a href="{{ url('/admin') }}" class="relative group">
                        <div class="absolute inset-0 bg-purple-600 rounded-xl blur-md opacity-0 group-hover:opacity-50 transition-opacity"></div>
                        <div class="relative w-10 h-10 bg-slate-800 rounded-xl border border-slate-700 group-hover:border-purple-500 flex items-center justify-center transition-all duration-300">
                            <svg class="h-5 w-5 text-gray-400 group-hover:text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                    </a>
                @endauth
            </div>
        </div>

        <!-- Строка поиска в стиле "терминал" -->
        <div class="py-5 border-t border-slate-800">
            <form action="{{ route('product.search') }}" method="GET" class="max-w-4xl mx-auto">
                <div class="relative group">
                    <!-- Фоновое свечение -->
                    <div class="absolute inset-0 bg-gradient-to-r from-[#E31834] to-purple-600 rounded-2xl blur-xl opacity-20 group-hover:opacity-40 transition-opacity"></div>
                    
                    <div class="relative flex items-center">
                        <input
                            type="text"
                            name="q"
                            placeholder="> ПОИСК ЛЕКАРСТВ В БАЗЕ ДАННЫХ..."
                            class="w-full px-6 py-4 bg-slate-900 border-2 border-slate-700 rounded-2xl text-white placeholder-gray-500 font-mono text-sm focus:border-[#E31834] focus:ring-2 focus:ring-[#E31834]/20 outline-none transition-all duration-300"
                            value="{{ request('q') }}"
                        >
                        
                        <!-- Декоративная мигалка -->
                        <span class="absolute left-6 top-1/2 -translate-y-1/2 w-2 h-2 bg-[#E31834] rounded-full animate-pulse"></span>
                        
                        <button type="submit" class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-gradient-to-r from-[#E31834] to-purple-600 p-3 rounded-xl hover:shadow-lg hover:shadow-[#E31834]/25 transition-all duration-300 group/btn">
                            <svg class="h-5 w-5 text-white group-hover/btn:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Мобильное меню -->
        <div id="mobile-menu" class="hidden md:hidden pb-5">
            <div class="bg-slate-800/90 backdrop-blur-sm rounded-2xl border border-slate-700 p-4">
                <div class="flex flex-col space-y-2">
                    <a href="{{ route('home') }}" class="px-4 py-3 text-gray-300 hover:text-white hover:bg-slate-700 rounded-xl transition-all duration-300 font-mono text-sm">
                        > ГЛАВНАЯ
                    </a>
                    <a href="#" class="px-4 py-3 text-gray-300 hover:text-white hover:bg-slate-700 rounded-xl transition-all duration-300 font-mono text-sm">
                        > КАТЕГОРИИ
                    </a>
                    <a href="#" class="px-4 py-3 text-gray-300 hover:text-white hover:bg-slate-700 rounded-xl transition-all duration-300 font-mono text-sm">
                        > АКЦИИ
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<main class="relative min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900">
    <!-- Фоновый эффект -->
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, rgba(227,24,52,0.2) 1px, transparent 0); background-size: 50px 50px;"></div>
    
    <div class="container mx-auto px-4 py-12 relative z-10">
        @yield('content')
    </div>
</main>

<!-- Footer в киберпанк-стиле -->
<footer class="relative bg-gradient-to-br from-slate-950 to-slate-900 border-t border-slate-800">
    <!-- Фоновый эффект -->
    <div class="absolute inset-0 opacity-10" style="background-image: repeating-linear-gradient(45deg, rgba(227,24,52,0.1) 0px, rgba(227,24,52,0.1) 2px, transparent 2px, transparent 10px);"></div>
    
    <!-- Неоновая линия сверху -->
    <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-[#E31834] to-transparent"></div>
    
    <div class="container mx-auto px-4 py-12 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- О нас -->
            <div class="space-y-4">
                <h3 class="text-2xl font-black text-transparent bg-clip-text bg-gradient-to-r from-[#E31834] to-purple-500">
                    &lt;АПТЕКА/&gt;
                </h3>
                <p class="text-gray-400 font-mono text-sm leading-relaxed">
                    [СИСТЕМА] Все лекарства в одном месте. Работаем 24/7/365.
                </p>
                <div class="flex space-x-3">
                    <div class="w-8 h-8 bg-slate-800 rounded-lg border border-slate-700 flex items-center justify-center hover:border-[#E31834] transition-colors cursor-pointer group">
                        <svg class="w-4 h-4 text-gray-500 group-hover:text-[#E31834]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879v-6.99h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.99C18.343 21.128 22 16.991 22 12z"/>
                        </svg>
                    </div>
                    <div class="w-8 h-8 bg-slate-800 rounded-lg border border-slate-700 flex items-center justify-center hover:border-[#E31834] transition-colors cursor-pointer group">
                        <svg class="w-4 h-4 text-gray-500 group-hover:text-[#E31834]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.104c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 0021.583-3.466 13.98 13.98 0 002.104-7.237c0-.335-.01-.67-.03-1.005A10.002 10.002 0 0023.953 4.57z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Контакты -->
            <div class="space-y-4">
                <h3 class="text-lg font-mono font-bold text-white tracking-wider">
                    <span class="text-[#E31834]">></span> КОНТАКТЫ
                </h3>
                <div class="space-y-3">
                    <div class="flex items-center gap-3 text-gray-400 hover:text-[#E31834] transition-colors group">
                        <div class="w-8 h-8 bg-slate-800 rounded-lg border border-slate-700 flex items-center justify-center group-hover:border-[#E31834]">
                            <svg class="w-4 h-4 text-gray-500 group-hover:text-[#E31834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <span class="font-mono text-sm">+7 (123) 456-7890</span>
                    </div>
                    <div class="flex items-center gap-3 text-gray-400 hover:text-[#E31834] transition-colors group">
                        <div class="w-8 h-8 bg-slate-800 rounded-lg border border-slate-700 flex items-center justify-center group-hover:border-[#E31834]">
                            <svg class="w-4 h-4 text-gray-500 group-hover:text-[#E31834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <span class="font-mono text-sm">info@apteka.ru</span>
                    </div>
                </div>
            </div>

            <!-- Часы работы -->
            <div class="space-y-4">
                <h3 class="text-lg font-mono font-bold text-white tracking-wider">
                    <span class="text-[#E31834]">></span> РЕЖИМ РАБОТЫ
                </h3>
                <div class="bg-slate-800/50 rounded-2xl border border-slate-700 p-4">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                        </span>
                        <span class="text-sm font-mono text-green-400">ONLINE 24/7</span>
                    </div>
                    <div class="space-y-2 font-mono text-sm">
                        <div class="flex justify-between text-gray-400">
                            <span>ПН-ПТ:</span>
                            <span class="text-white">09:00 - 21:00</span>
                        </div>
                        <div class="flex justify-between text-gray-400">
                            <span>СБ-ВС:</span>
                            <span class="text-white">10:00 - 20:00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Нижняя строка -->
        <div class="mt-12 pt-6 border-t border-slate-800">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="text-gray-500 font-mono text-xs">
                    &copy; {{ date('Y') }} [АПТЕКА] v.1.0.0 | ALL RIGHTS RESERVED
                </div>
                <div class="flex space-x-4 text-xs font-mono text-gray-600">
                    <span class="hover:text-[#E31834] transition-colors cursor-pointer">ПРАВИЛА</span>
                    <span class="hover:text-[#E31834] transition-colors cursor-pointer">ПОЛИТИКА</span>
                    <span class="hover:text-[#E31834] transition-colors cursor-pointer">ЛИЦЕНЗИИ</span>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Добавляем анимации -->
<style>
@keyframes scan {
    0% { transform: translateX(-100%); }
    50%, 100% { transform: translateX(100%); }
}
.animate-scan {
    animation: scan 4s linear infinite;
}
</style>

    @livewireScripts


    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>

</body>
</html>
