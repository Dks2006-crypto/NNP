<div class="min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Кнопка "Назад" в стиле терминала -->
        @php
            $previousUrl = url()->previous();
            $backUrl = $previousUrl !== url()->current() ? $previousUrl : route('catalog');
        @endphp
        <a href="{{ $backUrl }}" class="group inline-flex items-center text-gray-400 hover:text-[#E31834] mb-8 transition-all duration-300 relative">
            <div class="absolute inset-0 bg-[#E31834] rounded-full blur-md opacity-0 group-hover:opacity-50 transition-opacity"></div>
            <div class="relative flex items-center gap-3 bg-slate-800/50 backdrop-blur-sm px-4 py-2 rounded-xl border border-slate-700 group-hover:border-[#E31834] transition-colors">
                <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                <span class="font-mono text-sm tracking-wider">[ ВЕРНУТЬСЯ НАЗАД ]</span>
            </div>
        </a>

        <!-- Основной контейнер с неоновым эффектом -->
        <div class="relative group">
            <!-- Фоновое свечение -->
            <div class="absolute -inset-1 bg-gradient-to-r from-[#E31834] via-purple-600 to-blue-600 rounded-[40px] blur-xl opacity-20 group-hover:opacity-40 transition-opacity duration-700"></div>
            
            <!-- Сканирующие линии -->
            <div class="absolute inset-0 overflow-hidden rounded-[40px]">
                <div class="absolute top-0 left-0 w-full h-[2px] bg-gradient-to-r from-transparent via-[#E31834] to-transparent animate-scan"></div>
                <div class="absolute bottom-0 right-0 w-full h-[2px] bg-gradient-to-r from-transparent via-purple-600 to-transparent animate-scan-reverse"></div>
            </div>

            <!-- Основной контент -->
            <div class="relative bg-gradient-to-br from-slate-800/90 to-slate-900/90 backdrop-blur-sm rounded-[40px] border border-slate-700/50 overflow-hidden">
                <div class="lg:flex">
                    <!-- Блок с изображением -->
                    <div class="lg:w-1/2 p-8 lg:p-10">
                        @if($product->is_sale)
                            <div class="absolute top-8 left-8 z-20">
                                <div class="relative">
                                    <div class="absolute inset-0 bg-[#E31834] rounded-full blur-md opacity-70 animate-pulse"></div>
                                    <div class="relative bg-black border-2 border-[#E31834] text-[#E31834] text-sm font-mono font-bold px-4 py-2 rounded-full shadow-[0_0_15px_rgba(227,24,52,0.5)]">
                                        <span class="flex items-center gap-2">
                                            <svg class="w-4 h-4 animate-spin-slow" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                                            </svg>
                                            <span class="tracking-wider">SALE</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <!-- Изображение с голографическим эффектом -->
                        <div class="relative h-96 lg:h-[500px] flex items-center justify-center p-8">
                            <!-- Вращающиеся кольца -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-64 h-64 border-2 border-[#E31834]/20 rounded-full animate-spin-slow"></div>
                                <div class="absolute w-48 h-48 border-2 border-purple-500/20 rounded-full animate-spin-slow animation-delay-500"></div>
                                <div class="absolute w-32 h-32 border-2 border-blue-500/20 rounded-full animate-ping"></div>
                            </div>

                            @if($product->image)
                                <img
                                    src="{{ asset('storage/' . $product->image) }}"
                                    alt="{{ $product->name }}"
                                    class="relative z-10 max-h-full max-w-full object-contain transition-all duration-700 hover:scale-110 hover:rotate-3 drop-shadow-2xl"
                                    style="filter: drop-shadow(0 0 30px rgba(227,24,52,0.3));"
                                >
                            @else
                                <div class="relative z-10 text-slate-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-40 w-40" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            @endif
                        </div>

                        <!-- Миниатюры -->
                        <div class="flex gap-4 mt-6 justify-center">
                            <div class="w-16 h-16 bg-slate-700/50 rounded-xl border-2 border-[#E31834] cursor-pointer overflow-hidden group/thumb">
                                @if($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="thumbnail" class="w-full h-full object-cover opacity-70 group-hover/thumb:opacity-100 transition-opacity">
                                @endif
                            </div>
                            <div class="w-16 h-16 bg-slate-700/50 rounded-xl border border-slate-600 cursor-pointer overflow-hidden opacity-50 hover:opacity-100 transition-opacity">
                                <div class="w-full h-full bg-gradient-to-br from-slate-600 to-slate-700"></div>
                            </div>
                            <div class="w-16 h-16 bg-slate-700/50 rounded-xl border border-slate-600 cursor-pointer overflow-hidden opacity-50 hover:opacity-100 transition-opacity">
                                <div class="w-full h-full bg-gradient-to-br from-slate-600 to-slate-700"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Блок с информацией -->
                    <div class="lg:w-1/2 p-8 lg:p-10 bg-gradient-to-b from-slate-800/50 to-transparent">
                        <!-- Хлебные крошки -->
                        <div class="flex items-center gap-2 text-sm font-mono text-gray-500 mb-6">
                            <a href="{{ route('home') }}" class="hover:text-[#E31834] transition-colors">[Главная]</a>
                            <span>></span>
                            <a href="{{ route('catalog') }}" class="hover:text-[#E31834] transition-colors">[Каталог]</a>
                            <span>></span>
                            <a href="{{ route('category', $product->category->slug) }}" class="hover:text-[#E31834] transition-colors truncate max-w-[150px]">
                                [{{ $product->category->name }}]
                            </a>
                        </div>

                        <!-- Название товара -->
                        <h1 class="text-4xl lg:text-5xl font-black text-white mb-4 leading-tight">
                            {{ $product->name }}
                        </h1>

                        <!-- Рейтинг -->
                        <div class="flex items-center gap-4 mb-6">
                            <div class="flex items-center gap-1">
                                @for($i = 1; $i <= 5; $i++)
                                    <svg class="w-5 h-5 {{ $i <= 4 ? 'text-yellow-500' : 'text-gray-600' }}" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                            </div>
                            <span class="text-sm font-mono text-gray-400">(12 отзывов)</span>
                            <span class="text-sm font-mono text-gray-600">|</span>
                            <span class="text-sm font-mono text-gray-400">Артикул: #{{ $product->id }}</span>
                        </div>

                        <!-- Цена -->
                        <div class="mb-8">
                            @if($product->is_sale && $product->old_price)
                                <div class="flex items-baseline gap-4">
                                    <span class="text-5xl font-black text-[#E31834] font-mono">
                                        {{ number_format($product->price, 2) }} ₽
                                    </span>
                                    <span class="text-xl line-through text-gray-600 font-mono">
                                        {{ number_format($product->old_price, 2) }} ₽
                                    </span>
                                </div>
                                <div class="flex items-center gap-3 mt-3">
                                    <span class="inline-flex items-center gap-2 bg-green-500/10 text-green-400 text-sm font-mono px-4 py-2 rounded-full border border-green-500/20">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        ЭКОНОМИЯ {{ number_format($product->old_price - $product->price, 2) }} ₽
                                    </span>
                                    <span class="text-sm font-mono text-gray-500">
                                        -{{ round((($product->old_price - $product->price) / $product->old_price) * 100) }}%
                                    </span>
                                </div>
                            @else
                                <span class="text-5xl font-black text-white font-mono">
                                    {{ number_format($product->price, 2) }} ₽
                                </span>
                            @endif
                        </div>

                        <!-- Характеристики -->
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="bg-slate-800/50 rounded-xl p-4 border border-slate-700">
                                <span class="text-xs font-mono text-gray-500">ПРОИЗВОДИТЕЛЬ</span>
                                <p class="text-white font-mono text-sm mt-1">{{ $product->manufacturer ?? 'Россия' }}</p>
                            </div>
                            <div class="bg-slate-800/50 rounded-xl p-4 border border-slate-700">
                                <span class="text-xs font-mono text-gray-500">В НАЛИЧИИ</span>
                                <div class="flex items-center gap-2 mt-1">
                                    <span class="relative flex h-2 w-2">
                                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                        <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                                    </span>
                                    <span class="text-green-400 font-mono text-sm">ДА</span>
                                </div>
                            </div>
                        </div>

                        <!-- Описание -->
                        <div class="mb-8">
                            <h3 class="text-lg font-mono font-bold text-white mb-3 flex items-center gap-2">
                                <span class="text-[#E31834]">></span> ОПИСАНИЕ
                            </h3>
                            <div class="bg-slate-800/30 rounded-xl p-5 border border-slate-700">
                                <p class="text-gray-300 font-mono text-sm leading-relaxed whitespace-pre-line">
                                    {{ $product->description }}
                                </p>
                            </div>
                        </div>

                        <!-- Кнопка добавления в корзину -->
                        <form action="{{ route('cart.add', $product) }}" method="POST" class="mt-auto">
                            @csrf
                            <div class="flex flex-col sm:flex-row gap-4">
                                <div class="flex items-center bg-slate-800 rounded-2xl border-2 border-slate-700 overflow-hidden">
                                    <button type="button" class="quantity-btn w-12 h-12 flex items-center justify-center text-gray-400 hover:text-[#E31834] hover:bg-slate-700 transition-colors" data-action="decrement">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                                        </svg>
                                    </button>
                                    <input
                                        type="number"
                                        name="quantity"
                                        value="1"
                                        min="1"
                                        class="w-16 h-12 px-2 text-center bg-transparent border-0 text-white font-mono text-lg focus:ring-2 focus:ring-[#E31834]"
                                        id="quantity-input"
                                    >
                                    <button type="button" class="quantity-btn w-12 h-12 flex items-center justify-center text-gray-400 hover:text-[#E31834] hover:bg-slate-700 transition-colors" data-action="increment">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                        </svg>
                                    </button>
                                </div>

                                <button
                                    type="submit"
                                    class="flex-1 group relative bg-gradient-to-r from-[#E31834] to-purple-600 text-white px-8 py-4 rounded-2xl font-mono font-bold text-lg overflow-hidden transition-all duration-500 transform hover:scale-105 hover:shadow-2xl hover:shadow-[#E31834]/25"
                                >
                                    <span class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity"></span>
                                    <span class="relative z-10 flex items-center justify-center gap-3">
                                        <svg class="w-5 h-5 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                                        </svg>
                                        ДОБАВИТЬ В КОРЗИНУ
                                    </span>
                                </button>
                            </div>

                            <!-- Дополнительная информация -->
                            <div class="flex items-center justify-between mt-4 text-xs font-mono text-gray-600">
                                <span class="flex items-center gap-1">
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    [В НАЛИЧИИ]
                                </span>
                                <span class="flex items-center gap-1">
                                    <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>
                                        <path d="M3 4h14l-2 7H5L3 4z"/>
                                    </svg>
                                    [ДОСТАВКА 24/7]
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Похожие товары -->
        <div class="mt-16">
            <h2 class="text-2xl font-mono font-bold text-white mb-8 flex items-center gap-3">
                <span class="text-[#E31834]">></span> ПОХОЖИЕ ТОВАРЫ
                <span class="flex-1 h-[1px] bg-gradient-to-r from-[#E31834] to-transparent"></span>
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Здесь будут похожие товары -->
            </div>
        </div>
    </div>
</div>

<script>
    // Обработчик изменения количества
    document.querySelectorAll('.quantity-btn').forEach(button => {
        button.addEventListener('click', function() {
            const input = document.getElementById('quantity-input');
            let value = parseInt(input.value);

            if (this.dataset.action === 'increment') {
                input.value = value + 1;
            } else {
                if (value > 1) {
                    input.value = value - 1;
                }
            }
            
            // Добавляем эффект при изменении
            input.classList.add('scale-110', 'text-[#E31834]');
            setTimeout(() => {
                input.classList.remove('scale-110', 'text-[#E31834]');
            }, 200);
        });
    });

    // Валидация ввода
    document.getElementById('quantity-input').addEventListener('change', function() {
        if (this.value < 1) this.value = 1;
    });
</script>

<style>
    /* Скрытие стрелок у input number */
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    input[type=number] {
        -moz-appearance: textfield;
    }

    /* Ключевые кадры анимаций */
    @keyframes scan {
        0% { transform: translateX(-100%); }
        50%, 100% { transform: translateX(100%); }
    }
    @keyframes spin-slow {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    .animate-scan {
        animation: scan 3s linear infinite;
    }
    .animate-scan-reverse {
        animation: scan 3s linear infinite reverse;
    }
    .animate-spin-slow {
        animation: spin-slow 10s linear infinite;
    }
    .animation-delay-500 {
        animation-delay: 500ms;
    }
</style>

<!-- Подключаем Tailwind (если нужен) -->
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
