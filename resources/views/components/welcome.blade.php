<!-- resources/views/components/pharmacy-banner.blade.php -->
<section class="relative py-16 md:py-24 overflow-hidden bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-800">
    <!-- Анимированный фон с частицами -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-10 left-10 w-72 h-72 bg-pink-500 rounded-full mix-blend-multiply filter blur-3xl animate-blob"></div>
        <div class="absolute top-0 right-10 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000"></div>
        <div class="absolute bottom-10 left-20 w-72 h-72 bg-indigo-500 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-4000"></div>
    </div>

    <!-- Стеклянный оверлей -->
    <div class="absolute inset-0 backdrop-blur-[2px] bg-white/5"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
            <!-- Текстовая часть с эффектом стекла -->
            <div class="w-full lg:w-1/2 space-y-8">
                <!-- Бейдж с новинкой -->
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-4 py-2">
                    <span class="relative flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                    </span>
                    <span class="text-sm font-medium text-white/90">Забота о здоровье с 2010 года</span>
                </div>

                <!-- Главный заголовок с эффектом -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black leading-tight">
                    <span class="block text-white/90">Добро пожаловать в</span>
                    <span class="relative inline-block mt-2">
                        <span class="relative z-10 text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 via-pink-300 to-cyan-300">
                            аптеку "5 Звёзд"
                        </span>
                        <!-- Декоративная линия -->
                        <svg class="absolute -bottom-2 left-0 w-full" viewBox="0 0 300 12" preserveAspectRatio="none">
                            <path d="M0,0 Q75,12 150,0 T300,0" stroke="url(#gradient)" stroke-width="4" fill="none"/>
                            <defs>
                                <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" stop-color="#FCD34D"/>
                                    <stop offset="50%" stop-color="#F472B6"/>
                                    <stop offset="100%" stop-color="#67E8F9"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                </h1>

                <!-- Подзаголовок с цитатой -->
                <div class="relative pl-8">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-gradient-to-b from-yellow-300 to-pink-500 rounded-full"></div>
                    <p class="text-xl md:text-2xl text-white/80 font-light italic">
                        – ваш надежный партнер в заботе о здоровье!
                    </p>
                </div>

                <!-- Карточка с миссией -->
                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/20 shadow-2xl">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div class="w-14 h-14 bg-gradient-to-br from-yellow-300 to-pink-500 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <span class="text-white font-bold text-xl">5 Звёзд</span>
                            <p class="text-white/80 text-lg mt-1">Здоровье с заботой, качество с гарантией.</p>
                        </div>
                    </div>
                </div>

                <!-- Кнопки в современном стиле -->
                <div class="flex flex-col sm:flex-row gap-5 pt-4">
                    <a href="/catalog" class="group relative inline-flex items-center justify-center px-8 py-4 font-bold text-white transition-all duration-500 ease-out bg-gradient-to-r from-pink-500 to-purple-600 rounded-2xl hover:from-pink-600 hover:to-purple-700 shadow-2xl hover:shadow-3xl transform hover:-translate-y-1 overflow-hidden">
                        <span class="absolute inset-0 w-full h-full bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-500"></span>
                        <span class="relative flex items-center gap-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                            </svg>
                            Каталог товаров
                            <svg class="w-5 h-5 group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </span>
                    </a>
                    
                    <a href="/promotions" class="group relative inline-flex items-center justify-center px-8 py-4 font-bold text-white transition-all duration-500 ease-out bg-transparent border-2 border-white/30 rounded-2xl hover:border-white/50 backdrop-blur-sm overflow-hidden">
                        <span class="absolute inset-0 w-full h-full bg-white/0 group-hover:bg-white/10 transition-all duration-500"></span>
                        <span class="relative flex items-center gap-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                            </svg>
                            Наши Акции
                            <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold bg-yellow-300 text-purple-900 rounded-full group-hover:bg-white transition-colors">−20%</span>
                        </span>
                    </a>
                </div>

                <!-- Преимущества в стильных бейджах -->
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <div class="flex items-center gap-2 bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full border border-white/10">
                        <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"/>
                        </svg>
                        <span class="text-sm text-white/80">50 000+ клиентов</span>
                    </div>
                    <div class="flex items-center gap-2 bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full border border-white/10">
                        <svg class="w-5 h-5 text-pink-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm text-white/80">Только сертификаты</span>
                    </div>
                    <div class="flex items-center gap-2 bg-white/5 backdrop-blur-sm px-4 py-2 rounded-full border border-white/10">
                        <svg class="w-5 h-5 text-cyan-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm text-white/80">Круглосуточно 24/7</span>
                    </div>
                </div>
            </div>

            <!-- Изображение с 3D эффектом -->
            <div class="w-full lg:w-1/2 relative">
                <!-- 3D вращающийся фон -->
                <div class="absolute inset-0 bg-gradient-to-r from-pink-500 to-purple-600 rounded-full blur-3xl opacity-30 animate-pulse"></div>
                
                <!-- Основной контейнер с 3D трансформацией -->
                <div class="relative transform-gpu perspective-1000">
                    <!-- Карточка изображения с 3D эффектом -->
                    <div class="relative rounded-[30px] overflow-hidden shadow-2xl transform rotate-y-6 hover:rotate-y-0 transition-all duration-700 ease-out" style="transform-style: preserve-3d;">
                        <!-- Градиентная рамка -->
                        <div class="absolute -inset-1 bg-gradient-to-r from-yellow-300 via-pink-400 to-cyan-400 rounded-[32px] opacity-75 blur-sm group-hover:opacity-100 transition-opacity"></div>
                        
                        <!-- Изображение -->
                        <div class="relative bg-gradient-to-br from-indigo-900 to-purple-900 p-1 rounded-[30px]">
                            <img src="{{ asset('img/wel.svg') }}" alt="Аптека 5 Звёзд" class="w-full h-auto rounded-[28px] relative z-10">
                            
                            <!-- Блики на изображении -->
                            <div class="absolute inset-0 bg-gradient-to-tr from-white/0 via-white/10 to-white/0 rounded-[28px] z-20"></div>
                            
                            <!-- Нижний оверлей -->
                            <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-purple-900/80 to-transparent rounded-b-[28px] z-20"></div>
                            
                            <!-- Текст на изображении -->
                            <div class="absolute bottom-6 left-6 right-6 z-30">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2">
                                        <div class="w-2 h-2 bg-green-400 rounded-full animate-ping"></div>
                                        <span class="text-white text-sm font-medium">Более 5000 товаров</span>
                                    </div>
                                    <div class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full">
                                        <span class="text-white text-xs">⭐ 4.9</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Плавающие карточки -->
                    <div class="absolute -top-6 -right-6 bg-white/10 backdrop-blur-md p-4 rounded-2xl border border-white/20 shadow-2xl animate-float">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-gradient-to-br from-green-400 to-cyan-400 rounded-xl flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs text-white/60">Скидка</div>
                                <div class="text-white font-bold">-15% на первый заказ</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="absolute -bottom-6 -left-6 bg-white/10 backdrop-blur-md p-4 rounded-2xl border border-white/20 shadow-2xl animate-float animation-delay-2000">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-gradient-to-br from-pink-400 to-purple-400 rounded-xl flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs text-white/60">Бесплатно</div>
                                <div class="text-white font-bold">Доставка от 3000₽</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Добавляем ключевые кадры для анимаций -->
<style>
@keyframes blob {
    0%, 100% { transform: translate(0px, 0px) scale(1); }
    33% { transform: translate(30px, -50px) scale(1.1); }
    66% { transform: translate(-20px, 20px) scale(0.9); }
}
@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-10px) rotate(2deg); }
}
.animate-blob {
    animation: blob 15s infinite;
}
.animate-float {
    animation: float 6s ease-in-out infinite;
}
.animation-delay-2000 {
    animation-delay: 2s;
}
.animation-delay-4000 {
    animation-delay: 4s;
}
.perspective-1000 {
    perspective: 1000px;
}
.rotate-y-6 {
    transform: rotateY(6deg);
}
</style>