@extends('layouts.app')

@section('title', 'Главная')


@section('content')

@include('components.welcome')

@include('components.info')

<div class="mb-16">
    <!-- Простой заголовок -->
    <div class="relative mb-8">
        <h2 class="text-3xl md:text-4xl font-mono font-bold text-white inline-block relative">
            <span class="text-[#E31834]">></span> КАТЕГОРИИ
            <span class="absolute -bottom-2 left-0 w-1/2 h-[2px] bg-gradient-to-r from-[#E31834] to-transparent"></span>
        </h2>
    </div>

    <!-- Сетка категорий -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
        @foreach($categories as $category)
            <a
                href="{{ route('category', $category->slug) }}"
                class="group relative bg-gradient-to-br from-slate-800 to-slate-900 p-5 rounded-xl border border-slate-700 hover:border-[#E31834] transition-all duration-300 text-center overflow-hidden"
            >
                <!-- Иконка -->
                <div class="relative mb-3">
                    <div class="w-12 h-12 mx-auto bg-slate-700/50 rounded-lg flex items-center justify-center border border-slate-600 group-hover:border-[#E31834] transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E31834]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                </div>

                <!-- Название -->
                <h3 class="font-mono text-sm text-white group-hover:text-[#E31834] transition-colors mb-1">
                    {{ $category->name }}
                </h3>

                <!-- Количество -->
                <p class="text-xs font-mono text-gray-500">
                    {{ $category->products_count }} товаров
                </p>

                <!-- Индикатор при наведении -->
                <div class="absolute bottom-0 left-0 w-full h-[2px] bg-gradient-to-r from-transparent via-[#E31834] to-transparent transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
            </a>
        @endforeach
    </div>
</div>

    <div class="mb-12">
        <h2 class="text-2xl font-bold mb-6">Новые поступления</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($products as $product)
                @include('partials.product-card', ['product' => $product])
            @endforeach
        </div>
    </div>

    @if($saleProducts->count() > 0)
        <div class="mb-12">
            <h2 class="text-2xl font-bold mb-6">Акции</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($saleProducts as $product)
                    @include('partials.product-card', ['product' => $product])
                @endforeach
            </div>
        </div>
    @endif
@endsection


