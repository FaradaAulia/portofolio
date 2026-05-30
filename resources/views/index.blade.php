<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $profile['name'] }} | {{ $profile['title'] }}</title>
    
    <meta name="description" content="{{ $profile['sub_title'] }}. {{ $profile['bio_short'] }}">
    <meta name="keywords" content="Portfolio, Full Stack Developer, Laravel Developer, Web Developer Indonesia, {{ $profile['name'] }}">
    <meta name="author" content="{{ $profile['name'] }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://unpkg.com/lucide@0.475.0/dist/umd/lucide.min.js"></script>

    <!-- Custom Scroll Animation CSS -->
    <style>
        [data-aos] {
            opacity: 0;
            transition-duration: 800ms;
            transition-property: opacity, transform;
            transition-timing-function: cubic-bezier(0.16, 1, 0.3, 1);
        }
        [data-aos="fade-up"] { transform: translateY(40px); }
        [data-aos="fade-down"] { transform: translateY(-40px); }
        [data-aos="fade-left"] { transform: translateX(40px); }
        [data-aos="fade-right"] { transform: translateX(-40px); }
        [data-aos="zoom-in"] { transform: scale(0.9); }
        
        [data-aos].aos-animate {
            opacity: 1;
            transform: translate(0) scale(1);
        }
        
        .nav-link {
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #708238;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after, .nav-link.active::after {
            width: 100%;
        }
        .nav-link.active {
            color: #708238 !important;
        }
    </style>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f4f7eb',
                            100: '#e5ecd2',
                            200: '#cbdba0',
                            300: '#adca69',
                            400: '#8da34b', 
                            500: '#708238', // Main Olive Green
                            600: '#55632a', 
                            700: '#414e21',
                        },
                        secondary: {
                            50: '#fcfbf8',
                            100: '#f6f3eb',
                            500: '#aa8546', // Gold / Warm accent
                            600: '#8a6b35',
                        }
                    },
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                        display: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    boxShadow: {
                        'soft': '0 10px 40px -10px rgba(0,0,0,0.05)',
                        'glow': '0 0 20px rgba(112, 130, 56, 0.2)',
                    }
                }
            }
        }
    </script>
    <style>
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 80px;
        }
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f8fafc; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        
        .modern-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(226, 232, 240, 0.8);
            border-radius: 1.5rem;
            box-shadow: 0 10px 40px -10px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        .modern-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px -10px rgba(112, 130, 56, 0.15);
            border-color: rgba(112, 130, 56, 0.2);
        }
        
        .bg-pattern-light {
            background-color: #f8fafc;
            background-image: radial-gradient(#cbdba0 1px, transparent 1px);
            background-size: 32px 32px;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }
        
        .gradient-text {
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-image: linear-gradient(to right, #708238, #55632a);
        }
    </style>
</head>
<body class="bg-pattern-light text-slate-700 font-sans antialiased selection:bg-primary-500 selection:text-white">

    <!-- Skip to Content Link for Keyboard Accessibility -->
    <a href="#main-content" class="sr-only focus:not-sr-only fixed top-4 left-4 z-[100] px-6 py-3 bg-primary-500 text-white font-bold rounded-full shadow-lg shadow-primary-500/30 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-300">
        Lompati ke Konten Utama
    </a>

    <!-- Scroll Progress Bar -->
    <div id="scroll-progress" class="fixed top-0 left-0 h-1 bg-gradient-to-r from-primary-500 via-primary-600 to-secondary-500 z-[60] transition-all duration-100" style="width: 0%"></div>

    <!-- Ambient glowing background blobs -->
    <div class="fixed top-[-10%] left-[-10%] w-[50vw] h-[50vw] rounded-full bg-primary-200/40 blur-[120px] pointer-events-none -z-10"></div>
    <div class="fixed bottom-[-10%] right-[-10%] w-[50vw] h-[50vw] rounded-full bg-secondary-100/60 blur-[120px] pointer-events-none -z-10"></div>

    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-white/70 backdrop-blur-xl border-b border-slate-200/50" id="main-header">
        <nav class="container mx-auto px-8 lg:px-16 py-4 flex items-center justify-between">
            <a href="#home" class="flex items-center space-x-2 text-2xl font-display font-extrabold tracking-tight text-slate-800 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-500 focus-visible:ring-offset-2 rounded-lg px-2 py-1">
                <span class="gradient-text">{{ $profile['name'] }}</span>
                <span class="w-2 h-2 rounded-full bg-primary-500"></span>
            </a>

            <ul class="hidden lg:flex items-center space-x-8 text-sm font-semibold text-slate-600">
                <li><a href="#home" class="nav-link hover:text-primary-500 transition-colors duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-500 focus-visible:ring-offset-2 rounded-md px-2 py-1">Beranda</a></li>
                <li><a href="#about" class="nav-link hover:text-primary-500 transition-colors duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-500 focus-visible:ring-offset-2 rounded-md px-2 py-1">Tentang</a></li>
                <li><a href="#skills" class="nav-link hover:text-primary-500 transition-colors duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-500 focus-visible:ring-offset-2 rounded-md px-2 py-1">Keahlian</a></li>
                <li><a href="#experience" class="nav-link hover:text-primary-500 transition-colors duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-500 focus-visible:ring-offset-2 rounded-md px-2 py-1">Pengalaman</a></li>
                <li><a href="#projects" class="nav-link hover:text-primary-500 transition-colors duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-500 focus-visible:ring-offset-2 rounded-md px-2 py-1">Proyek</a></li>
                <li><a href="#certificates" class="nav-link hover:text-primary-500 transition-colors duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-500 focus-visible:ring-offset-2 rounded-md px-2 py-1">Sertifikasi</a></li>
                <li><a href="#contact" class="nav-link hover:text-primary-500 transition-colors duration-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-500 focus-visible:ring-offset-2 rounded-md px-2 py-1">Kontak</a></li>
            </ul>

            <div class="hidden lg:flex items-center space-x-4">
                <a href="#contact" class="px-6 py-2.5 text-sm font-semibold rounded-full bg-primary-500 text-white shadow-lg shadow-primary-500/30 hover:bg-primary-600 hover:shadow-primary-500/50 hover:-translate-y-0.5 transition-all duration-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-500 focus-visible:ring-offset-2">
                    Mari Berbincang
                </a>
            </div>

            <button class="lg:hidden flex items-center p-2 text-slate-600 hover:text-primary-500 transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-500 focus-visible:ring-offset-2 rounded-lg" id="menu-btn" aria-label="Toggle Menu">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
        </nav>

        <!-- Mobile Menu -->
        <div class="hidden lg:hidden w-full bg-white/95 border-b border-slate-200 absolute top-full left-0 z-40 transition-all duration-300 shadow-xl backdrop-blur-xl" id="mobile-menu">
            <ul class="flex flex-col space-y-2 p-6 text-slate-600 font-semibold text-center">
                <li><a href="#home" class="block py-3 hover:text-primary-500 hover:bg-primary-50 rounded-xl transition-all duration-200 mobile-nav-link">Beranda</a></li>
                <li><a href="#about" class="block py-3 hover:text-primary-500 hover:bg-primary-50 rounded-xl transition-all duration-200 mobile-nav-link">Tentang</a></li>
                <li><a href="#skills" class="block py-3 hover:text-primary-500 hover:bg-primary-50 rounded-xl transition-all duration-200 mobile-nav-link">Keahlian</a></li>
                <li><a href="#experience" class="block py-3 hover:text-primary-500 hover:bg-primary-50 rounded-xl transition-all duration-200 mobile-nav-link">Pengalaman</a></li>
                <li><a href="#projects" class="block py-3 hover:text-primary-500 hover:bg-primary-50 rounded-xl transition-all duration-200 mobile-nav-link">Proyek</a></li>
                <li><a href="#certificates" class="block py-3 hover:text-primary-500 hover:bg-primary-50 rounded-xl transition-all duration-200 mobile-nav-link">Sertifikasi</a></li>
                <li><a href="#contact" class="block py-3 hover:text-primary-500 hover:bg-primary-50 rounded-xl transition-all duration-200 mobile-nav-link">Kontak</a></li>
                <li class="pt-4">
                    <a href="#contact" class="inline-block w-full text-center py-3 rounded-xl bg-primary-500 text-white font-semibold shadow-lg shadow-primary-500/30 hover:bg-primary-600 transition-all duration-300 mobile-nav-link">
                        Mari Berbincang
                    </a>
                </li>
            </ul>
        </div>
    </header>

    <main id="main-content" class="container mx-auto px-8 lg:px-16 pt-32 pb-20">

        <!-- Home Section -->
        <section id="home" class="relative min-h-[85vh] flex items-center justify-between pb-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center w-full pb-16">
                <!-- Text Area -->
                <div class="lg:col-span-7 flex flex-col space-y-6 text-center lg:text-left" data-aos="fade-right" data-aos-duration="1000">
                    <div class="inline-flex self-center lg:self-start items-center space-x-2 px-4 py-1.5 rounded-full bg-primary-50 border border-primary-100 text-primary-600 text-xs font-bold tracking-wide">
                        <span class="flex h-2 w-2 relative">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-primary-500"></span>
                        </span>
                        <span>Tersedia untuk Proyek Baru</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl md:text-6xl font-display font-extrabold tracking-tight leading-tight text-slate-800">
                        Halo, Saya <br/>
                        <span class="gradient-text">{{ $profile['name'] }}</span>
                    </h1>
                    
                    <h2 class="text-xl md:text-2xl font-bold text-slate-500 font-display flex items-center justify-center lg:justify-start gap-2">
                        <i data-lucide="sparkles" class="w-6 h-6 text-primary-500"></i>
                        {{ $profile['title'] }}
                    </h2>

                    <p class="text-slate-600 max-w-xl text-base md:text-lg leading-relaxed mx-auto lg:mx-0">
                        {{ $profile['bio_short'] }}
                    </p>

                    <div class="flex items-center justify-center lg:justify-start space-x-4 pt-4">
                        @foreach($profile['socials'] as $social)
                            <a href="{{ $social['url'] }}" target="_blank" class="p-3.5 rounded-2xl bg-white border border-slate-100 shadow-soft text-slate-500 hover:text-primary-500 hover:-translate-y-1 hover:shadow-glow focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-500 focus-visible:ring-offset-2 transition-all duration-300" aria-label="{{ $social['name'] }}">
                                <i data-lucide="{{ strtolower($social['icon']) }}" class="w-5 h-5"></i>
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Graphic Area -->
                <div class="lg:col-span-5 flex justify-center items-center relative" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                    <div class="animate-float w-full max-w-[420px] modern-card p-6 relative">
                        <!-- Mac OS style top bar -->
                        <div class="flex items-center justify-between border-b border-slate-100 pb-4 mb-4">
                            <div class="flex space-x-2">
                                <span class="w-3 h-3 rounded-full bg-red-400"></span>
                                <span class="w-3 h-3 rounded-full bg-amber-400"></span>
                                <span class="w-3 h-3 rounded-full bg-emerald-400"></span>
                            </div>
                            <span class="text-xs text-slate-400 font-mono font-semibold">developer.php</span>
                        </div>
                        
                        <!-- Code snippet -->
                        <div class="text-xs sm:text-sm font-mono text-slate-600 space-y-2 overflow-x-auto leading-relaxed">
                            <p class="text-primary-600">&lt;?php</p>
                            <p class="pl-2"><span class="text-indigo-500">class</span> <span class="text-emerald-600">Developer</span> {</p>
                            <p class="pl-4 text-slate-400">// Selalu membangun dengan cinta & kode yang rapi</p>
                            <p class="pl-4"><span class="text-indigo-500">public</span> <span class="text-amber-600">$name</span> = <span class="text-emerald-600">'{{ $profile['name'] }}'</span>;</p>
                            <p class="pl-4"><span class="text-indigo-500">public</span> <span class="text-amber-600">$stack</span> = [</p>
                            <p class="pl-6"><span class="text-emerald-600">'Laravel'</span>, <span class="text-emerald-600">'Tailwind CSS'</span>,</p>
                            <p class="pl-6"><span class="text-emerald-600">'Vue.js'</span>, <span class="text-emerald-600">'PostgreSQL'</span></p>
                            <p class="pl-4">];</p>
                            <p class="pl-4"><span class="text-indigo-500">public function</span> <span class="text-amber-600">buildExcellentApp</span>() {</p>
                            <p class="pl-6"><span class="text-indigo-500">return</span> <span class="text-emerald-600">'Wow, clean code!'</span>;</p>
                            <p class="pl-4">}</p>
                            <p class="pl-2">}</p>
                        </div>

                        <!-- Floating Badge -->
                        <div class="absolute -bottom-6 -right-6 modern-card p-4 flex items-center space-x-3 bg-white">
                            <div class="p-2 rounded-full bg-primary-50 text-primary-500">
                                <i data-lucide="check-circle" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">Arsitektur Rapi</h4>
                                <p class="text-sm font-bold text-slate-700">SOLID & Clean Code</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bouncing Scroll Down Indicator -->
            <div class="absolute bottom-2 left-1/2 -translate-x-1/2 hidden md:flex flex-col items-center z-10" data-aos="fade-up" data-aos-delay="600">
                <a href="#about" class="flex flex-col items-center text-slate-400 hover:text-primary-500 hover:scale-105 transition-all duration-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-500 focus-visible:ring-offset-2 rounded-full p-2" aria-label="Scroll Down ke Tentang Saya">
                    <span class="text-[10px] font-bold tracking-widest uppercase mb-1.5 opacity-80">Scroll Down</span>
                    <div class="w-6 h-9 border-2 border-slate-300 rounded-full flex justify-center p-1">
                        <div class="w-1 h-2 bg-slate-400 rounded-full animate-bounce"></div>
                    </div>
                </a>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-24">
            <div class="text-center max-w-2xl mx-auto mb-16 flex flex-col items-center" data-aos="fade-up">
                <span class="text-xs text-primary-600 font-bold uppercase tracking-widest bg-primary-50 px-4 py-1.5 rounded-full mb-4">Tentang Saya</span>
                <h3 class="text-3xl md:text-4xl font-display font-extrabold text-slate-800 leading-tight">Mengenal Lebih Dekat</h3>
                <div class="w-16 h-1.5 rounded-full bg-primary-500 mt-6"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Profile Image -->
                <div class="md:col-span-1 lg:col-span-2 lg:row-span-2 modern-card p-2 overflow-hidden group" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="relative w-full h-full min-h-[320px] lg:min-h-[400px] rounded-2xl overflow-hidden">
                        <img src="{{ asset('image/farada.jpeg')}}" alt="{{ $profile['name'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h4 class="text-2xl font-display font-extrabold">{{ $profile['name'] }}</h4>
                            <p class="text-primary-300 font-semibold text-sm">{{ $profile['title'] }}</p>
                        </div>
                    </div>
                </div>

                <!-- Bio -->
                <div class="md:col-span-1 lg:col-span-2 modern-card p-8 flex flex-col justify-center space-y-4" data-aos="fade-left" data-aos-delay="200">
                    <h4 class="text-xl md:text-2xl font-display font-extrabold text-slate-800 leading-tight">
                        {{ $profile['sub_title'] }}
                    </h4>
                    <p class="text-slate-600 leading-relaxed text-sm md:text-base">
                        {{ $profile['bio_long'] }}
                    </p>
                    <div class="flex items-center space-x-3 pt-4">
                        <div class="p-2.5 rounded-xl bg-primary-50 text-primary-500">
                            <i data-lucide="map-pin" class="w-5 h-5"></i>
                        </div>
                        <span class="text-sm text-slate-700 font-semibold">{{ $profile['location'] }}</span>
                    </div>
                </div>

                <!-- Stats -->
                @foreach($profile['stats'] as $index => $stat)
                    <div class="modern-card p-6 flex flex-col justify-center items-center text-center" data-aos="fade-up" data-aos-delay="{{ 300 + ($index * 100) }}">
                        <span class="text-4xl font-display font-extrabold text-primary-500">
                            {{ $stat['value'] }}
                        </span>
                        <span class="text-xs text-slate-500 font-semibold mt-2 uppercase tracking-wide">
                            {{ $stat['label'] }}
                        </span>
                    </div>
                @endforeach

                <!-- Contact Mini -->
                <div class="md:col-span-2 modern-card p-6 flex flex-col sm:flex-row items-center gap-6" data-aos="fade-up" data-aos-delay="500">
                    <a href="mailto:{{ $profile['email'] }}" class="flex items-center space-x-4 w-full sm:flex-1 p-3 rounded-2xl hover:bg-slate-50 transition-colors overflow-hidden">
                        <div class="p-3 rounded-full bg-primary-50 text-primary-500 shrink-0">
                            <i data-lucide="mail" class="w-5 h-5"></i>
                        </div>
                        <div class="min-w-0">
                            <span class="block text-[10px] text-slate-400 font-bold uppercase tracking-wider">Email</span>
                            <span class="block text-sm font-bold text-slate-700 truncate">{{ $profile['email'] }}</span>
                        </div>
                    </a>
                    <div class="hidden sm:block w-px h-10 bg-slate-200 shrink-0"></div>
                    <a href="tel:{{ $profile['phone'] }}" class="flex items-center space-x-4 w-full sm:flex-1 p-3 rounded-2xl hover:bg-slate-50 transition-colors overflow-hidden">
                        <div class="p-3 rounded-full bg-primary-50 text-primary-500 shrink-0">
                            <i data-lucide="phone" class="w-5 h-5"></i>
                        </div>
                        <div class="min-w-0">
                            <span class="block text-[10px] text-slate-400 font-bold uppercase tracking-wider">Telepon</span>
                            <span class="block text-sm font-bold text-slate-700 truncate">{{ $profile['phone'] }}</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="py-24">
            <div class="text-center max-w-2xl mx-auto mb-16 flex flex-col items-center" data-aos="fade-up">
                <span class="text-xs text-primary-600 font-bold uppercase tracking-widest bg-primary-50 px-4 py-1.5 rounded-full mb-4">Keahlian</span>
                <h3 class="text-3xl md:text-4xl font-display font-extrabold text-slate-800 leading-tight">Teknologi & Stack Saya</h3>
                <div class="w-16 h-1.5 rounded-full bg-primary-500 mt-6"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Frontend -->
                <div class="modern-card p-8 flex flex-col space-y-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center space-x-4">
                        <div class="p-3 rounded-2xl bg-primary-50 text-primary-500">
                            <i data-lucide="layout" class="w-6 h-6"></i>
                        </div>
                        <h4 class="text-xl font-display font-extrabold text-slate-800">Frontend Dev</h4>
                    </div>

                    <div class="flex flex-col space-y-6">
                        @foreach($skills['frontend'] as $skill)
                            <div class="flex flex-col space-y-3">
                                <div class="flex items-center justify-between text-sm">
                                    <div class="flex items-center space-x-2">
                                        <span class="font-bold text-slate-700">{{ $skill['name'] }}</span>
                                    </div>
                                    <span class="font-bold text-primary-500">{{ $skill['level'] }}%</span>
                                </div>
                                <div class="w-full h-2 rounded-full bg-slate-100 overflow-hidden">
                                    <div class="h-full rounded-full bg-primary-500 relative" style="width: {{ $skill['level'] }}%">
                                        <div class="absolute inset-0 bg-white/20 w-full h-full animate-[pulse_2s_ease-in-out_infinite]"></div>
                                    </div>
                                </div>
                                <span class="text-xs text-slate-500 leading-relaxed">{{ $skill['desc'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Backend -->
                <div class="modern-card p-8 flex flex-col space-y-8" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center space-x-4">
                        <div class="p-3 rounded-2xl bg-primary-50 text-primary-500">
                            <i data-lucide="server" class="w-6 h-6"></i>
                        </div>
                        <h4 class="text-xl font-display font-extrabold text-slate-800">Backend Dev</h4>
                    </div>

                    <div class="flex flex-col space-y-6">
                        @foreach($skills['backend'] as $skill)
                            <div class="flex flex-col space-y-3">
                                <div class="flex items-center justify-between text-sm">
                                    <div class="flex items-center space-x-2">
                                        <span class="font-bold text-slate-700">{{ $skill['name'] }}</span>
                                    </div>
                                    <span class="font-bold text-primary-500">{{ $skill['level'] }}%</span>
                                </div>
                                <div class="w-full h-2 rounded-full bg-slate-100 overflow-hidden">
                                    <div class="h-full rounded-full bg-primary-500 relative" style="width: {{ $skill['level'] }}%">
                                        <div class="absolute inset-0 bg-white/20 w-full h-full animate-[pulse_2s_ease-in-out_infinite]"></div>
                                    </div>
                                </div>
                                <span class="text-xs text-slate-500 leading-relaxed">{{ $skill['desc'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Tools -->
                <div class="modern-card p-8 flex flex-col space-y-8" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center space-x-4">
                        <div class="p-3 rounded-2xl bg-primary-50 text-primary-500">
                            <i data-lucide="cpu" class="w-6 h-6"></i>
                        </div>
                        <h4 class="text-xl font-display font-extrabold text-slate-800">Tools & DevOps</h4>
                    </div>

                    <div class="flex flex-col space-y-6">
                        @foreach($skills['tools'] as $skill)
                            <div class="flex flex-col space-y-3">
                                <div class="flex items-center justify-between text-sm">
                                    <div class="flex items-center space-x-2">
                                        <span class="font-bold text-slate-700">{{ $skill['name'] }}</span>
                                    </div>
                                    <span class="font-bold text-primary-500">{{ $skill['level'] }}%</span>
                                </div>
                                <div class="w-full h-2 rounded-full bg-slate-100 overflow-hidden">
                                    <div class="h-full rounded-full bg-primary-500 relative" style="width: {{ $skill['level'] }}%">
                                        <div class="absolute inset-0 bg-white/20 w-full h-full animate-[pulse_2s_ease-in-out_infinite]"></div>
                                    </div>
                                </div>
                                <span class="text-xs text-slate-500 leading-relaxed">{{ $skill['desc'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Experience Section -->
        <section id="experience" class="py-24">
            <div class="text-center max-w-2xl mx-auto mb-16 flex flex-col items-center" data-aos="fade-up">
                <span class="text-xs text-primary-600 font-bold uppercase tracking-widest bg-primary-50 px-4 py-1.5 rounded-full mb-4">Pengalaman</span>
                <h3 class="text-3xl md:text-4xl font-display font-extrabold text-slate-800 leading-tight">Perjalanan Karir</h3>
                <div class="w-16 h-1.5 rounded-full bg-primary-500 mt-6"></div>
            </div>

            <div class="max-w-3xl mx-auto relative">
                <!-- Timeline Line -->
                <div class="absolute left-6 sm:left-1/2 top-4 bottom-4 w-px bg-slate-200 -translate-x-1/2"></div>

                <div class="space-y-12">
                    @foreach($experience as $index => $exp)
                        <div class="relative flex flex-col sm:flex-row items-center w-full group" data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
                            <!-- Node -->
                            <div class="absolute left-6 sm:left-1/2 -translate-x-1/2 z-10 flex items-center justify-center">
                                <span class="w-4 h-4 rounded-full bg-primary-500 border-4 border-slate-50 group-hover:scale-125 group-hover:bg-primary-600 transition-transform duration-300 shadow-glow"></span>
                            </div>

                            <div class="w-full sm:w-1/2 pl-16 sm:pl-0 sm:pr-12 text-left sm:text-right {{ $index % 2 == 0 ? 'sm:order-1' : 'sm:order-2 opacity-0 hidden sm:block pointer-events-none' }}">
                                @if($index % 2 == 0)
                                    <span class="inline-block text-xs font-bold px-3 py-1 rounded-full bg-primary-50 text-primary-600 mb-2">{{ $exp['duration'] }}</span>
                                    <h4 class="text-xl font-display font-extrabold text-slate-800">{{ $exp['role'] }}</h4>
                                    <h5 class="text-sm font-semibold text-slate-500 mt-1">{{ $exp['company'] }}</h5>
                                @endif
                            </div>

                            <div class="w-full sm:w-1/2 pl-16 sm:pl-12 text-left {{ $index % 2 == 1 ? 'sm:order-2' : 'sm:order-1 opacity-0 hidden sm:block pointer-events-none' }}">
                                @if($index % 2 == 1)
                                    <span class="inline-block text-xs font-bold px-3 py-1 rounded-full bg-primary-50 text-primary-600 mb-2">{{ $exp['duration'] }}</span>
                                    <h4 class="text-xl font-display font-extrabold text-slate-800">{{ $exp['role'] }}</h4>
                                    <h5 class="text-sm font-semibold text-slate-500 mt-1">{{ $exp['company'] }}</h5>
                                @endif
                            </div>
                        </div>

                        <!-- Card Content -->
                        <div class="ml-14 sm:ml-0 w-[calc(100%-3.5rem)] sm:w-full sm:max-w-[45%] mx-auto {{ $index % 2 == 0 ? 'sm:ml-0' : 'sm:mr-0' }}" data-aos="{{ $index % 2 == 0 ? 'fade-right' : 'fade-left' }}" data-aos-delay="{{ ($index * 150) + 100 }}">
                            <div class="modern-card p-8 sm:p-10 relative">
                                <div class="sm:hidden mb-6">
                                    <span class="inline-block text-xs font-bold px-4 py-1.5 rounded-full bg-primary-50 text-primary-600 mb-3">{{ $exp['duration'] }}</span>
                                    <h4 class="text-xl font-display font-extrabold text-slate-800">{{ $exp['role'] }}</h4>
                                    <h5 class="text-base font-semibold text-slate-500 mt-1.5">{{ $exp['company'] }}</h5>
                                </div>

                                <ul class="space-y-4 text-slate-600 text-sm sm:text-base leading-relaxed">
                                    @foreach($exp['description'] as $item)
                                        <li class="flex items-start space-x-3">
                                            <i data-lucide="check-circle-2" class="w-5 h-5 text-primary-400 mt-1 shrink-0"></i>
                                            <span>{{ $item }}</span>
                                        </li>
                                    @endforeach
                                </ul>

                                <div class="flex flex-wrap gap-2 pt-6 mt-6 border-t border-slate-100">
                                    @foreach($exp['tech'] as $tech)
                                        <span class="text-xs font-semibold bg-slate-50 text-slate-600 px-4 py-1.5 rounded-full border border-slate-200">{{ $tech }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="py-24">
            <div class="text-center max-w-2xl mx-auto mb-16 flex flex-col items-center" data-aos="fade-up">
                <span class="text-xs text-primary-600 font-bold uppercase tracking-widest bg-primary-50 px-4 py-1.5 rounded-full mb-4">Proyek</span>
                <h3 class="text-3xl md:text-4xl font-display font-extrabold text-slate-800 leading-tight">Proyek Terbaru</h3>
                <div class="w-16 h-1.5 rounded-full bg-primary-500 mt-6"></div>
            </div>

            <div class="max-w-3xl mx-auto">
                <div class="modern-card p-10 flex flex-col items-center text-center space-y-8" data-aos="zoom-in">
                    <div class="p-6 rounded-3xl bg-primary-50 text-primary-500 relative shadow-inner">
                        <i data-lucide="code-2" class="w-12 h-12"></i>
                        <span class="absolute -top-2 -right-2 flex h-6 w-6">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-6 w-6 bg-primary-500 border-2 border-white"></span>
                        </span>
                    </div>

                    <div class="space-y-4">
                        <h4 class="text-2xl font-display font-extrabold text-slate-800">Sedang Dalam Pengembangan</h4>
                        <p class="text-slate-600 text-base max-w-lg leading-relaxed mx-auto">
                            Saat ini saya sedang merancang beberapa aplikasi web berbasis <span class="text-primary-600 font-bold">Laravel</span> dan <span class="text-primary-600 font-bold">Tailwind CSS</span> yang inovatif. Proyek-proyek keren akan segera tampil di sini.
                        </p>
                    </div>

                    <div class="w-full max-w-sm space-y-3 pt-4">
                        <div class="flex justify-between items-center text-xs font-bold text-slate-500">
                            <span>Status Pengembangan</span>
                            <span class="text-primary-500">Memuat...</span>
                        </div>
                        <div class="w-full h-2 rounded-full bg-slate-100 overflow-hidden relative">
                            <div class="h-full w-2/3 bg-primary-500 rounded-full animate-pulse"></div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <a href="https://github.com/FaradaAulia" target="_blank" class="inline-flex items-center space-x-3 px-8 py-3.5 rounded-full bg-slate-800 text-white font-semibold shadow-lg hover:bg-slate-900 hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
                            <i data-lucide="github" class="w-5 h-5"></i>
                            <span>Pantau GitHub Saya</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Certificates Section -->
        <section id="certificates" class="py-24">
            <div class="text-center max-w-2xl mx-auto mb-16 flex flex-col items-center" data-aos="fade-up">
                <span class="text-xs text-primary-600 font-bold uppercase tracking-widest bg-primary-50 px-4 py-1.5 rounded-full mb-4">Sertifikasi</span>
                <h3 class="text-3xl md:text-4xl font-display font-extrabold text-slate-800 leading-tight">Pengakuan Kredibilitas</h3>
                <div class="w-16 h-1.5 rounded-full bg-primary-500 mt-6"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($certificates as $index => $cert)
                    <div class="modern-card p-6 flex flex-col sm:flex-row items-start space-y-4 sm:space-y-0 sm:space-x-5 hover:bg-primary-50/50" data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
                        <div class="p-4 rounded-2xl bg-primary-50 text-primary-500 shrink-0">
                            <i data-lucide="award" class="w-8 h-8"></i>
                        </div>
                        <div class="flex flex-col space-y-2 flex-grow">
                            <h4 class="text-lg font-display font-extrabold text-slate-800 leading-snug">{{ $cert['title'] }}</h4>
                            <p class="text-slate-500 text-xs font-semibold">{{ $cert['issuer'] ?? 'Penyelenggara' }}</p>
                            <p class="text-slate-600 text-sm leading-relaxed mt-1">{{ $cert['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-24">
            <div class="text-center max-w-2xl mx-auto mb-16 flex flex-col items-center" data-aos="fade-up">
                <span class="text-xs text-primary-600 font-bold uppercase tracking-widest bg-primary-50 px-4 py-1.5 rounded-full mb-4">Kontak</span>
                <h3 class="text-3xl md:text-4xl font-display font-extrabold text-slate-800 leading-tight">Mari Berkolaborasi</h3>
                <div class="w-16 h-1.5 rounded-full bg-primary-500 mt-6"></div>
                <p class="text-slate-600 text-base mt-6 max-w-lg leading-relaxed">Punya ide proyek, tawaran menarik, atau sekadar ingin menyapa? Hubungi saya kapan saja!</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-4xl mx-auto">
                @foreach($profile['socials'] as $social)
                    @php 
                        $brandColor = '';
                        $socialName = strtolower($social['name']);
                        if ($socialName === 'linkedin') $brandColor = 'text-[#0077b5]';
                        elseif ($socialName === 'github') $brandColor = 'text-slate-800';
                        elseif ($socialName === 'instagram') $brandColor = 'text-[#e1306c]';
                        elseif ($socialName === 'facebook') $brandColor = 'text-[#1877f2]';
                        else $brandColor = 'text-primary-500';
                    @endphp
                    
                    @if($socialName !== 'email')
                    <a href="{{ $social['url'] }}" target="_blank" class="modern-card p-8 flex flex-col items-center justify-center text-center space-y-4 group" data-aos="zoom-in" data-aos-delay="100">
                        <div class="p-4 rounded-full bg-slate-50 {{ $brandColor }} group-hover:scale-110 group-hover:shadow-lg transition-all duration-300">
                            <i data-lucide="{{ $social['icon'] }}" class="w-8 h-8"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-display font-bold text-slate-800">{{ $social['name'] }}</h4>
                        </div>
                    </a>
                    @endif
                @endforeach

                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $profile['phone']) }}" target="_blank" class="modern-card p-8 flex flex-col items-center justify-center text-center space-y-4 group" data-aos="zoom-in" data-aos-delay="200">
                    <div class="p-4 rounded-full bg-[#25d366]/10 text-[#25d366] group-hover:scale-110 group-hover:bg-[#25d366] group-hover:text-white group-hover:shadow-lg transition-all duration-300">
                        <i data-lucide="phone" class="w-8 h-8"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-display font-bold text-slate-800">WhatsApp</h4>
                        <p class="text-slate-500 text-xs mt-1">{{ $profile['phone'] }}</p>
                    </div>
                </a>

                <a href="mailto:{{ $profile['email'] }}" class="modern-card p-8 flex flex-col items-center justify-center text-center space-y-4 group" data-aos="zoom-in" data-aos-delay="300">
                    <div class="p-4 rounded-full bg-primary-50 text-primary-500 group-hover:scale-110 group-hover:bg-primary-500 group-hover:text-white group-hover:shadow-glow transition-all duration-300">
                        <i data-lucide="mail" class="w-8 h-8"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-display font-bold text-slate-800">Email</h4>
                        <p class="text-slate-500 text-[10px] mt-1 break-all">{{ $profile['email'] }}</p>
                    </div>
                </a>
            </div>
        </section>

    </main>

    <footer class="bg-white border-t border-slate-200 py-12 mt-10">
        <div class="container mx-auto px-8 lg:px-16 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex flex-col items-center md:items-start text-center md:text-left space-y-2">
                <a href="#home" class="text-xl font-display font-extrabold tracking-tight text-slate-800">
                    <span class="gradient-text">{{ $profile['name'] }}</span>
                </a>
                <p class="text-sm text-slate-500 font-medium">Membangun Web Impian Anda dengan Kode yang Rapi.</p>
            </div>

            <div class="flex items-center space-x-4">
                @foreach($profile['socials'] as $social)
                    <a href="{{ $social['url'] }}" target="_blank" class="p-2.5 rounded-full bg-slate-50 text-slate-400 hover:text-primary-500 hover:bg-primary-50 transition-colors" aria-label="{{ $social['name'] }}">
                        <i data-lucide="{{ strtolower($social['icon']) }}" class="w-4.5 h-4.5"></i>
                    </a>
                @endforeach
            </div>

            <div class="flex flex-col items-center md:items-end text-center md:text-right gap-3">
                <span class="text-sm text-slate-500">&copy; {{ date('Y') }} {{ $profile['name'] }}. Hak Cipta Dilindungi.</span>
                <a href="#home" id="footer-back-to-top" class="inline-flex items-center space-x-2 text-xs font-bold text-primary-500 hover:text-primary-600 transition-colors" aria-label="Back to Top">
                    <span>Kembali ke Atas</span>
                    <i data-lucide="arrow-up" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button (Floating) -->
    <button id="back-to-top" class="fixed bottom-8 right-8 z-50 p-4 rounded-full bg-primary-500 text-white shadow-lg shadow-primary-500/30 hover:bg-primary-600 hover:shadow-primary-500/50 hover:-translate-y-1 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-500 focus-visible:ring-offset-2 transition-all duration-300 opacity-0 translate-y-10 pointer-events-none" aria-label="Kembali ke atas">
        <i data-lucide="arrow-up" class="w-5 h-5"></i>
    </button>

    <!-- Custom Scroll Animation JS -->
    <script>
        // Custom Intersection Observer for Enter/Leave states
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                root: null,
                rootMargin: '0px 0px -50px 0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('aos-animate');
                    } else {
                        entry.target.classList.remove('aos-animate');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('[data-aos]').forEach((el) => {
                const duration = el.getAttribute('data-aos-duration');
                if (duration) el.style.transitionDuration = duration + 'ms';
                
                const delay = el.getAttribute('data-aos-delay');
                if (delay) el.style.transitionDelay = delay + 'ms';
                
                observer.observe(el);
            });
        });

        // Initialize Lucide Icons
        lucide.createIcons();

        // Responsive Mobile Menu Functionality
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (menuBtn && mobileMenu) {
            menuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                
                const icon = menuBtn.querySelector('i');
                if (mobileMenu.classList.contains('hidden')) {
                    icon.setAttribute('data-lucide', 'menu');
                } else {
                    icon.setAttribute('data-lucide', 'x');
                }
                lucide.createIcons();
            });

            document.querySelectorAll('.mobile-nav-link').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    const icon = menuBtn.querySelector('i');
                    icon.setAttribute('data-lucide', 'menu');
                    lucide.createIcons();
                });
            });
        }

        // Header Effect and ScrollSpy
        const header = document.getElementById('main-header');
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.nav-link');
        
        window.addEventListener('scroll', () => {
            // Header shrink effect
            if (window.scrollY > 30) {
                header.classList.add('shadow-md');
                header.classList.replace('py-4', 'py-2');
            } else {
                header.classList.remove('shadow-md');
                header.classList.replace('py-2', 'py-4');
            }
            
            // ScrollSpy active link detection
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (window.scrollY >= (sectionTop - 250)) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });

            // Scroll Progress Bar
            const scrollProgress = document.getElementById('scroll-progress');
            if (scrollProgress) {
                const totalScroll = document.documentElement.scrollHeight - window.innerHeight;
                const progress = totalScroll > 0 ? (window.scrollY / totalScroll) * 100 : 0;
                scrollProgress.style.width = `${progress}%`;
            }

            // Back to Top Button Visibility
            const backToTopBtn = document.getElementById('back-to-top');
            if (backToTopBtn) {
                if (window.scrollY > 300) {
                    backToTopBtn.classList.remove('opacity-0', 'translate-y-10', 'pointer-events-none');
                    backToTopBtn.classList.add('opacity-100', 'translate-y-0');
                } else {
                    backToTopBtn.classList.add('opacity-0', 'translate-y-10', 'pointer-events-none');
                    backToTopBtn.classList.remove('opacity-100', 'translate-y-0');
                }
            }
        });

        // Back to top smooth scroll
        const backToTopBtn = document.getElementById('back-to-top');
        const footerBackToTopBtn = document.getElementById('footer-back-to-top');

        const scrollToTop = (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        };

        if (backToTopBtn) backToTopBtn.addEventListener('click', scrollToTop);
        if (footerBackToTopBtn) footerBackToTopBtn.addEventListener('click', scrollToTop);

        // Close mobile menu on Escape key for keyboard accessibility
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                const mobileMenu = document.getElementById('mobile-menu');
                const menuBtn = document.getElementById('menu-btn');
                if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    if (menuBtn) {
                        const icon = menuBtn.querySelector('i');
                        if (icon) {
                            icon.setAttribute('data-lucide', 'menu');
                            lucide.createIcons();
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>