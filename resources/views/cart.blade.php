@extends('layouts.app')

@section('title', 'Корзина')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Заголовок с неоновым эффектом -->
            <div class="relative mb-12">
                <h1 class="text-5xl md:text-6xl font-black text-center">
                    <span class="relative inline-block">
                        <span class="relative z-10 text-transparent bg-clip-text bg-gradient-to-r from-[#E31834] via-purple-500 to-blue-500 animate-gradient">
                            КОРЗИНА
                        </span>
                        <span class="absolute inset-0 blur-2xl bg-gradient-to-r from-[#E31834] via-purple-500 to-blue-500 opacity-30 animate-pulse"></span>
                    </span>
                </h1>
                <!-- Декоративные линии -->
                <div class="absolute left-1/2 -bottom-4 transform -translate-x-1/2 w-32 h-1 bg-gradient-to-r from-transparent via-[#E31834] to-transparent"></div>
            </div>

            @if(count($products) > 0)
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Список товаров -->
                    <div class="lg:col-span-2 space-y-6">
                        @foreach($products as $product)
                            <div class="group relative bg-gradient-to-br from-slate-800/90 to-slate-900/90 backdrop-blur-sm rounded-3xl border border-slate-700/50 hover:border-[#E31834]/30 transition-all duration-500 overflow-hidden">
                                <!-- Неоновый фон при наведении -->
                                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                                    <div class="absolute inset-0 bg-gradient-to-r from-[#E31834]/5 via-transparent to-purple-500/5"></div>
                                    <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-[#E31834] to-transparent animate-scan"></div>
                                    <div class="absolute bottom-0 right-0 w-full h-[1px] bg-gradient-to-r from-transparent via-[#E31834] to-transparent animate-scan-reverse"></div>
                                </div>

                                <div class="relative p-6 flex flex-col md:flex-row items-center gap-6">
                                    <!-- Изображение товара -->
                                    <div class="w-full md:w-32 flex-shrink-0">
                                        <div class="relative">
                                            <div class="absolute inset-0 bg-gradient-to-r from-[#E31834] to-purple-500 rounded-2xl blur-xl opacity-20 group-hover:opacity-40 transition-opacity"></div>
                                            @if($product->image)
                                                <img
                                                    src="{{ asset('storage/' . $product->image) }}"
                                                    alt="{{ $product->name }}"
                                                    class="relative z-10 w-32 h-32 object-contain transform group-hover:scale-110 transition-transform duration-500 drop-shadow-2xl"
                                                >
                                            @else
                                                <div class="relative z-10 w-32 h-32 bg-gradient-to-br from-slate-700 to-slate-800 rounded-2xl flex items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                    </svg>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- Информация о товаре -->
                                    <div class="flex-1 w-full">
                                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                                            <div>
                                                <h3 class="text-xl font-bold text-white mb-2 group-hover:text-[#E31834] transition-colors">
                                                    {{ $product->name }}
                                                </h3>
                                                <div class="flex items-center gap-4">
                                                    <span class="text-2xl font-black text-[#E31834]">
                                                        {{ number_format($product->price, 2) }} ₽
                                                    </span>
                                                    <span class="text-sm text-gray-500 font-mono">
                                                        Артикул: {{ $product->id }}
                                                    </span>
                                                </div>
                                            </div>

                                            <!-- Управление количеством -->
                                            <div class="flex items-center gap-4">
                                                <div class="flex items-center bg-slate-900/50 rounded-2xl border border-slate-700 overflow-hidden">
                                                    <form action="{{ route('cart.update', $product) }}" method="POST" class="flex items-center">
                                                        @csrf
                                                        <button type="button" onclick="decrementQuantity(this)" class="w-10 h-10 flex items-center justify-center text-white hover:text-[#E31834] hover:bg-slate-800 transition-colors">
                                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                                                            </svg>
                                                        </button>
                                                        <input
                                                            type="number"
                                                            name="quantity"
                                                            value="{{ $product->quantity }}"
                                                            min="1"
                                                            class="w-16 px-2 py-2 text-center bg-transparent border-0 text-white font-mono focus:ring-2 focus:ring-[#E31834]"
                                                            onchange="this.form.submit()"
                                                            id="quantity-{{ $product->id }}"
                                                        >
                                                        <button type="button" onclick="incrementQuantity(this)" class="w-10 h-10 flex items-center justify-center text-white hover:text-[#E31834] hover:bg-slate-800 transition-colors">
                                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                </div>

                                                <span class="text-2xl font-bold text-white min-w-[120px] text-right">
                                                    {{ number_format($product->price * $product->quantity, 2) }} ₽
                                                </span>

                                                <form action="{{ route('cart.remove', $product) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="group/btn p-3 bg-slate-900/50 hover:bg-red-500/20 rounded-2xl border border-slate-700 hover:border-red-500 transition-all duration-300">
                                                        <svg class="w-5 h-5 text-gray-500 group-hover/btn:text-red-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        @endforeach
                    </div>

                    <!-- Блок итогов -->
                    <div class="lg:col-span-1">
                        <div class="sticky top-4">
                            <div class="bg-gradient-to-br from-slate-800/90 to-slate-900/90 backdrop-blur-sm rounded-3xl border border-slate-700/50 p-6">
                                <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-2">
                                    <svg class="w-6 h-6 text-[#E31834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                    </svg>
                                    ДЕТАЛИ ЗАКАЗА
                                </h2>

                                <div class="space-y-4 mb-6">
                                    <div class="flex justify-between text-gray-300">
                                        <span>Товаров ({{ count($products) }} шт.)</span>
                                        <span class="font-mono">{{ number_format($total, 2) }} ₽</span>
                                    </div>
                                    <div class="flex justify-between text-gray-300">
                                        <span>Доставка</span>
                                        <span class="text-green-400 font-mono">Бесплатно</span>
                                    </div>
                                    <div class="flex justify-between text-gray-300">
                                        <span>НДС</span>
                                        <span class="font-mono">{{ number_format($total * 0.2, 2) }} ₽</span>
                                    </div>
                                    <div class="border-t border-slate-700 pt-4">
                                        <div class="flex justify-between items-center">
                                            <span class="text-lg text-gray-300">ИТОГО:</span>
                                            <span class="text-3xl font-black text-[#E31834] font-mono">
                                                {{ number_format($total, 2) }} ₽
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-y-3">
                                    <a
                                        href="#"
                                        class="relative group/btn block w-full py-5 bg-gradient-to-r from-[#E31834] to-purple-600 text-white rounded-2xl font-bold text-center overflow-hidden transition-all duration-500 transform hover:scale-105 hover:shadow-2xl hover:shadow-[#E31834]/25"
                                    >
                                        <span class="relative z-10 flex items-center justify-center gap-3">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                            </svg>
                                            ОФОРМИТЬ ЗАКАЗ
                                            <svg class="w-5 h-5 group-hover/btn:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                            </svg>
                                        </span>
                                        <span class="absolute inset-0 bg-white opacity-0 group-hover/btn:opacity-20 transition-opacity"></span>
                                    </a>

                                    <form action="{{ route('cart.clear') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="w-full py-4 bg-transparent border-2 border-slate-700 text-gray-400 hover:text-red-500 hover:border-red-500 rounded-2xl font-medium transition-all duration-300 flex items-center justify-center gap-2 group/clear">
                                            <svg class="w-5 h-5 group-hover/clear:rotate-180 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                            ОЧИСТИТЬ КОРЗИНУ
                                        </button>
                                    </form>
                                </div>

                                <!-- Промокод -->
                                <div class="mt-6 p-4 bg-slate-900/50 rounded-2xl border border-slate-700">
                                    <div class="flex gap-2">
                                        <input type="text" placeholder="ПРОМОКОД" class="flex-1 bg-slate-800 border border-slate-700 rounded-xl px-4 py-3 text-white font-mono text-sm focus:border-[#E31834] focus:ring-1 focus:ring-[#E31834] outline-none transition-colors">
                                        <button class="px-6 py-3 bg-[#E31834] text-white rounded-xl font-bold hover:bg-[#C01024] transition-colors">
                                            ПРИМЕНИТЬ
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <!-- Пустая корзина в стиле cyberpunk -->
                <div class="max-w-2xl mx-auto">
                    <div class="relative group">
                        <!-- Фоновый неоновый эффект -->
                        <div class="absolute inset-0 bg-gradient-to-r from-[#E31834] to-purple-600 rounded-[40px] blur-2xl opacity-20 group-hover:opacity-30 transition-opacity"></div>
                        
                        <div class="relative bg-gradient-to-br from-slate-800/90 to-slate-900/90 backdrop-blur-sm rounded-[40px] border border-slate-700/50 p-12 text-center overflow-hidden">
                            <!-- Анимированные линии -->
                            <div class="absolute inset-0 opacity-20">
                                <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-[#E31834] to-transparent animate-scan"></div>
                                <div class="absolute bottom-0 right-0 w-full h-[1px] bg-gradient-to-r from-transparent via-purple-500 to-transparent animate-scan-reverse"></div>
                            </div>

                            <!-- Иконка с анимацией -->
                            <div class="relative mb-8">
                                <div class="absolute inset-0 bg-[#E31834] rounded-full blur-3xl opacity-20 animate-pulse"></div>
                                <div class="relative w-32 h-32 mx-auto bg-gradient-to-br from-slate-700 to-slate-800 rounded-3xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-700">
                                    <svg class="w-16 h-16 text-[#E31834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                </div>
                            </div>

                            <h3 class="text-3xl font-bold text-white mb-3">КОРЗИНА ПУСТА</h3>
                            <p class="text-gray-400 mb-8 max-w-md mx-auto font-mono text-sm">
                                &lt; ДОБАВЬТЕ ТОВАРЫ, ЧТОБЫ ПРОДОЛЖИТЬ /&gt;
                            </p>

                            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                <a
                                    href="{{ route('home') }}"
                                    class="group/btn relative px-8 py-4 bg-gradient-to-r from-[#E31834] to-purple-600 text-white rounded-2xl font-bold overflow-hidden transition-all duration-500 transform hover:scale-105"
                                >
                                    <span class="relative z-10 flex items-center gap-3">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                        </svg>
                                        ПЕРЕЙТИ В КАТАЛОГ
                                    </span>
                                    <span class="absolute inset-0 bg-white opacity-0 group-hover/btn:opacity-20 transition-opacity"></span>
                                </a>
                                <a
                                    href="{{ route('home') }}"
                                    class="group/btn relative px-8 py-4 bg-transparent border-2 border-slate-700 text-white rounded-2xl font-bold hover:border-[#E31834] transition-all duration-300"
                                >
                                    <span class="flex items-center gap-3">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                            </svg>
                                        НА ГЛАВНУЮ
                                    </span>
                                </a>
                            </div>

                            <!-- Случайный код внизу -->
                            
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

@push('scripts')
<script>
function decrementQuantity(button) {
    const form = button.closest('form');
    const input = form.querySelector('input[type="number"]');
    const currentValue = parseInt(input.value);
    if (currentValue > 1) {
        input.value = currentValue - 1;
        form.submit();
    }
}

function incrementQuantity(button) {
    const form = button.closest('form');
    const input = form.querySelector('input[type="number"]');
    input.value = parseInt(input.value) + 1;
    form.submit();
}
</script>
@endpush

@push('styles')
<style>
@keyframes scan {
    0% { transform: translateX(-100%); }
    50%, 100% { transform: translateX(100%); }
}
@keyframes gradient {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}
.animate-scan {
    animation: scan 3s linear infinite;
}
.animate-scan-reverse {
    animation: scan 3s linear infinite reverse;
}
.animate-gradient {
    background-size: 200% 200%;
    animation: gradient 3s ease infinite;
}
/* Скрытие стрелок у input number */
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
input[type=number] {
    -moz-appearance: textfield;
}
</style>
@endpush
