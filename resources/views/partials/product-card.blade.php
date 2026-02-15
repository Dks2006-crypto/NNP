<div class="group relative bg-gradient-to-br from-slate-900 to-slate-800 rounded-[40px] shadow-2xl hover:shadow-[#E31834]/20 hover:shadow-2xl transition-all duration-700 overflow-hidden">
    <!-- Футуристический фон с сеткой -->
    <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.1) 1px, transparent 0); background-size: 30px 30px;"></div>
    
    <!-- Неоновые линии по краям -->
    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700">
        <div class="absolute top-0 left-0 w-full h-[2px] bg-gradient-to-r from-transparent via-[#E31834] to-transparent animate-scan"></div>
        <div class="absolute bottom-0 right-0 w-full h-[2px] bg-gradient-to-r from-transparent via-[#E31834] to-transparent animate-scan-reverse"></div>
        <div class="absolute top-0 left-0 h-full w-[2px] bg-gradient-to-b from-transparent via-[#E31834] to-transparent animate-scan-vertical"></div>
        <div class="absolute top-0 right-0 h-full w-[2px] bg-gradient-to-b from-transparent via-[#E31834] to-transparent animate-scan-vertical-reverse"></div>
    </div>

    <!-- Бейдж акции в стиле "киберпанк" -->
    @if($product->is_sale)
        <div class="absolute -top-1 -right-1 z-20">
            <div class="relative">
                <!-- Неоновый контур -->
                <div class="absolute inset-0 bg-[#E31834] rounded-bl-3xl rounded-tr-3xl blur-md opacity-70 animate-pulse"></div>
                <!-- Сам бейдж -->
                <div class="relative bg-black border-2 border-[#E31834] text-[#E31834] text-xs font-mono font-bold px-4 py-2 rounded-bl-2xl rounded-tr-2xl shadow-[0_0_15px_rgba(227,24,52,0.5)]">
                    <span class="flex items-center gap-1">
                        <svg class="w-3 h-3 animate-spin-slow" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                        </svg>
                        <span class="tracking-wider">SALE</span>
                    </span>
                </div>
            </div>
        </div>
    @endif

    <!-- Изображение товара с голографическим эффектом -->
    <a href="{{ route('product.show', $product->slug) }}" class="block relative overflow-hidden">
        <div class="h-72 flex items-center justify-center p-8 relative">
            <!-- Голографический фон -->
            <div class="absolute inset-0 bg-gradient-to-br from-purple-600/20 via-[#E31834]/20 to-blue-600/20 opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
            
            <!-- Вращающиеся кольца -->
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="w-48 h-48 border-2 border-[#E31834]/20 rounded-full animate-spin-slow"></div>
                <div class="absolute w-32 h-32 border-2 border-white/10 rounded-full animate-spin-slow animation-delay-500"></div>
                <div class="absolute w-16 h-16 border-2 border-[#E31834]/30 rounded-full animate-ping"></div>
            </div>

            @if($product->image)
                <img
                    src="{{ asset('storage/' . $product->image) }}"
                    alt="{{ $product->name }}"
                    class="relative z-10 h-full w-full object-contain transition-all duration-1000 group-hover:scale-125 group-hover:rotate-6 drop-shadow-2xl brightness-110 contrast-125"
                    loading="lazy"
                    style="filter: drop-shadow(0 0 20px rgba(227,24,52,0.3));"
                >
            @else
                <div class="relative z-10 text-white/20 transform group-hover:scale-150 group-hover:rotate-12 transition-all duration-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                    </svg>
                </div>
            @endif

            <!-- Быстрый просмотр в стиле "терминал" -->
            <div class="absolute inset-0 bg-black/80 backdrop-blur-md opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center">
                <button class="relative px-8 py-4 bg-transparent text-white font-mono text-sm tracking-widest border border-[#E31834] overflow-hidden group/btn">
                    <span class="relative z-10 flex items-center gap-3">
                        <span class="animate-pulse">&gt;</span>
                        БЫСТРЫЙ ПРОСМОТР
                        <span class="animate-pulse">&lt;</span>
                    </span>
                    <span class="absolute inset-0 bg-[#E31834] transform -translate-x-full group-hover/btn:translate-x-0 transition-transform duration-500"></span>
                </button>
            </div>
        </div>
    </a>

    <!-- Контент карточки в стиле "минимализм" -->
    <div class="p-6 bg-gradient-to-t from-black/90 to-transparent backdrop-blur-sm">
        <!-- Рейтинг в виде прогресс-бара -->
        <div class="mb-4">
            <div class="flex justify-between items-center mb-1">
                <span class="text-xs text-gray-400 font-mono">РЕЙТИНГ</span>
                <span class="text-xs text-[#E31834] font-mono">4.8/5.0</span>
            </div>
            <div class="w-full h-1 bg-gray-800 rounded-full overflow-hidden">
                <div class="h-full bg-gradient-to-r from-[#E31834] to-orange-500 rounded-full" style="width: 96%"></div>
            </div>
        </div>

        <!-- Название товара с эффектом печатной машинки -->
        <a href="{{ route('product.show', $product->slug) }}" class="block mb-3 group/title">
            <h3 class="font-mono font-bold text-white hover:text-[#E31834] transition-colors line-clamp-2 text-lg tracking-wide relative overflow-hidden">
                {{ $product->name }}
                <span class="absolute bottom-0 left-0 w-full h-[1px] bg-[#E31834] transform -translate-x-full group-hover/title:translate-x-0 transition-transform duration-500"></span>
            </h3>
        </a>

        <!-- Производитель в стиле "штрих-код" -->
        @if($product->manufacturer)
            <div class="flex items-center gap-2 text-xs text-gray-500 mb-4 font-mono">
                <span class="tracking-[0.5em] text-[#E31834]">||||||</span>
                <span>{{ strtoupper($product->manufacturer) }}</span>
            </div>
        @endif

        <!-- Цена и кнопка в футуристическом стиле -->
        <div class="mt-6 pt-4 border-t border-gray-800">
            <div class="flex items-end justify-between gap-3">
                <div>
                    @if($product->is_sale && $product->old_price)
                        <div class="flex flex-col">
                            <div class="flex items-baseline gap-3">
                                <span class="text-3xl font-black text-[#E31834] font-mono">
                                    {{ number_format($product->price, 0) }}
                                </span>
                                <span class="text-xs text-gray-600 line-through font-mono">
                                    {{ number_format($product->old_price, 0) }}
                                </span>
                            </div>
                            <span class="text-xs text-[#E31834] font-mono mt-1">
                                -{{ round((($product->old_price - $product->price) / $product->old_price) * 100) }}% ECONOMY
                            </span>
                        </div>
                    @else
                        <span class="text-3xl font-black text-white font-mono">
                            {{ number_format($product->price, 0) }}
                        </span>
                    @endif
                </div>

                <!-- Кнопка корзины в стиле "киберпанк" -->
                <form action="{{ route('cart.add', $product) }}" method="POST" class="shrink-0">
                    @csrf
                    <input type="hidden" name="quantity" value="1">
                    <button
                        type="submit"
                        class="relative w-14 h-14 bg-transparent border-2 border-[#E31834] rounded-xl overflow-hidden group/btn transition-all duration-300 hover:scale-105"
                        title="Добавить в корзину"
                    >
                        <!-- Фон кнопки -->
                        <span class="absolute inset-0 bg-[#E31834] opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></span>
                        
                        <!-- Иконка корзины -->
                        <svg class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-6 h-6 text-[#E31834] group-hover/btn:text-white transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        
                        <!-- Текст при наведении -->
                        <span class="hidden">
                            ADD
                        </span>
                        
                        <!-- Неоновый эффект -->
                        <span class="absolute inset-0 border border-[#E31834] rounded-xl opacity-0 group-hover/btn:opacity-100 animate-ping"></span>
                    </button>
                </form>
            </div>
        </div>

        <!-- Индикатор наличия в стиле "уровень сигнала" -->
        <div class="flex items-center gap-3 mt-4">
            <div class="flex gap-1">
                <div class="w-1 h-4 bg-[#E31834] animate-pulse"></div>
                <div class="w-1 h-6 bg-[#E31834] animate-pulse animation-delay-200"></div>
                <div class="w-1 h-8 bg-[#E31834] animate-pulse animation-delay-400"></div>
                <div class="w-1 h-6 bg-[#E31834] animate-pulse animation-delay-600"></div>
                <div class="w-1 h-4 bg-[#E31834] animate-pulse animation-delay-800"></div>
            </div>
            <span class="text-xs font-mono text-gray-400">IN STOCK</span>
        </div>
    </div>
</div>

<!-- Добавляем новые анимации -->
<style>
@keyframes scan {
    0% { transform: translateX(-100%); }
    50%, 100% { transform: translateX(100%); }
}
@keyframes scan-vertical {
    0% { transform: translateY(-100%); }
    50%, 100% { transform: translateY(100%); }
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
.animate-scan-vertical {
    animation: scan-vertical 3s linear infinite;
}
.animate-scan-vertical-reverse {
    animation: scan-vertical 3s linear infinite reverse;
}
.animate-spin-slow {
    animation: spin-slow 10s linear infinite;
}
.animation-delay-200 {
    animation-delay: 200ms;
}
.animation-delay-400 {
    animation-delay: 400ms;
}
.animation-delay-500 {
    animation-delay: 500ms;
}
.animation-delay-600 {
    animation-delay: 600ms;
}
.animation-delay-800 {
    animation-delay: 800ms;
}
</style>
