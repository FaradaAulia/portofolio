<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $profile['name'] }} | {{ $profile['title'] }} !</title>
    
    <meta name="description" content="{{ $profile['sub_title'] }}. {{ $profile['bio_short'] }}">
    <meta name="keywords" content="Portfolio, Full Stack Developer, Laravel Developer, Web Developer Indonesia, {{ $profile['name'] }}">
    <meta name="author" content="{{ $profile['name'] }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://unpkg.com/lucide@0.475.0/dist/umd/lucide.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            400: '#8da34b',
                            500: '#708238', 
                            600: '#55632a',
                        },
                        secondary: {
                            500: '#aa8546', 
                            600: '#8a6b35',
                        }
                    },
                    borderWidth: {
                        '3': '3px',
                    },
                    fontFamily: {
                        display: ['Plus Jakarta Sans', 'sans-serif'],
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
        ::-webkit-scrollbar-track { background: #0a0c08; }
        ::-webkit-scrollbar-thumb { background: #1e293b; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #334155; }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }
        @keyframes pulse-slow {
            0%, 100% { opacity: 0.4; }
            50% { opacity: 0.8; }
        }
        .animate-pulse-slow { animation: pulse-slow 8s ease-in-out infinite; }
        .glassmorphism {
            background: rgba(15, 23, 42, 0.65);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .bg-dot-pattern {
            background-image: radial-gradient(rgba(255, 255, 255, 0.07) 1px, transparent 1px);
            background-size: 24px 24px;
        }
        .neobrutal-card {
            background: rgba(15, 20, 10, 0.85);
            border: 3px solid #708238;
            box-shadow: 6px 6px 0px 0px #708238;
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .neobrutal-card:hover {
            transform: translate(-2px, -2px);
            box-shadow: 8px 8px 0px 0px #708238;
        }
        .neobrutal-card:active {
            transform: translate(2px, 2px);
            box-shadow: 2px 2px 0px 0px #708238;
        }
        .neobrutal-card-gold {
            background: rgba(15, 20, 10, 0.85);
            border: 3px solid #c5a059;
            box-shadow: 6px 6px 0px 0px #c5a059;
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .neobrutal-card-gold:hover {
            transform: translate(-2px, -2px);
            box-shadow: 8px 8px 0px 0px #c5a059;
        }
        .neobrutal-card-gold:active {
            transform: translate(2px, 2px);
            box-shadow: 2px 2px 0px 0px #c5a059;
        }
        .shadow-neobrutal-primary { box-shadow: 6px 6px 0px 0px #708238; }
        .shadow-neobrutal-secondary { box-shadow: 6px 6px 0px 0px #c5a059; }
        .shadow-neobrutal-sm-primary { box-shadow: 4px 4px 0px 0px #708238; }
        .shadow-neobrutal-sm-secondary { box-shadow: 4px 4px 0px 0px #c5a059; }
        .border-neobrutal { border: 3px solid #708238; }
        .border-neobrutal-secondary { border: 3px solid #c5a059; }
        .social-tile {
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .social-tile:hover {
            transform: translate(-3px, -3px);
        }
        .social-tile:active {
            transform: translate(2px, 2px);
            box-shadow: 2px 2px 0px 0px currentColor !important;
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 font-sans selection:bg-primary-500 selection:text-white overflow-x-hidden antialiased bg-dot-pattern">

    <div class="absolute top-[-10%] left-[-10%] w-[50vw] h-[50vw] rounded-full bg-primary-600/10 blur-[120px] pointer-events-none -z-10 animate-pulse-slow"></div>
    <div class="absolute top-[20%] right-[-10%] w-[45vw] h-[45vw] rounded-full bg-secondary-500/8 blur-[120px] pointer-events-none -z-10"></div>
    <div class="absolute bottom-[20%] left-[-5%] w-[40vw] h-[40vw] rounded-full bg-primary-700/5 blur-[120px] pointer-events-none -z-10"></div>
    <div class="absolute bottom-[-5%] right-[-5%] w-[45vw] h-[45vw] rounded-full bg-secondary-600/10 blur-[120px] pointer-events-none -z-10 animate-pulse-slow"></div>

    <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-slate-950/90 backdrop-blur-md border-b-3 border-primary-500" id="main-header">
        <nav class="container mx-auto px-6 py-4 flex items-center justify-between">
            <a href="#home" class="flex items-center space-x-2 text-xl font-display font-bold tracking-tight">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary-500 to-secondary-500">
                    {{ $profile['name'] }}
                </span>
                <span class="text-xs px-2 py-0.5 bg-primary-500 text-slate-950 font-black border-2 border-primary-700 shadow-[3px_3px_0px_0px_#465322]">DEV</span>
            </a>

            <ul class="hidden lg:flex items-center space-x-8 text-sm font-bold text-slate-300 uppercase tracking-wider">
                <li><a href="#home" class="hover:text-primary-500 transition-colors duration-200">Beranda</a></li>
                <li><a href="#about" class="hover:text-primary-500 transition-colors duration-200">Tentang</a></li>
                <li><a href="#skills" class="hover:text-primary-500 transition-colors duration-200">Keahlian</a></li>
                <li><a href="#experience" class="hover:text-primary-500 transition-colors duration-200">Pengalaman</a></li>
                <li><a href="#projects" class="hover:text-primary-500 transition-colors duration-200">Proyek</a></li>
                <li><a href="#certificates" class="hover:text-primary-500 transition-colors duration-200">Sertifikasi</a></li>
                <li><a href="#contact" class="hover:text-primary-500 transition-colors duration-200">Kontak</a></li>
            </ul>

            <div class="hidden lg:flex items-center space-x-4">
                <a href="#contact" class="px-5 py-2.5 text-xs font-black tracking-wide uppercase bg-primary-500 text-slate-950 border-3 border-primary-700 shadow-[4px_4px_0px_0px_#465322] hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_0px_#465322] active:translate-x-[2px] active:translate-y-[2px] active:shadow-[2px_2px_0px_0px_#465322] transition-all duration-200">
                    Hubungi Saya
                </a>
            </div>

            <button class="lg:hidden flex items-center p-2 text-slate-300 hover:text-white transition-colors focus:outline-none" id="menu-btn" aria-label="Toggle Menu">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
        </nav>

        <div class="hidden lg:hidden w-full bg-slate-950/95 border-t-3 border-primary-500 py-4 px-6 absolute top-full left-0 z-40 transition-all duration-300 shadow-2xl backdrop-blur-xl" id="mobile-menu">
            <ul class="flex flex-col space-y-4 text-slate-300 font-bold uppercase tracking-wider">
                <li><a href="#home" class="block py-2 hover:text-primary-500 transition-colors duration-200 mobile-nav-link">Beranda</a></li>
                <li><a href="#about" class="block py-2 hover:text-primary-500 transition-colors duration-200 mobile-nav-link">Tentang</a></li>
                <li><a href="#skills" class="block py-2 hover:text-primary-500 transition-colors duration-200 mobile-nav-link">Keahlian</a></li>
                <li><a href="#experience" class="block py-2 hover:text-primary-500 transition-colors duration-200 mobile-nav-link">Pengalaman</a></li>
                <li><a href="#projects" class="block py-2 hover:text-primary-500 transition-colors duration-200 mobile-nav-link">Proyek</a></li>
                <li><a href="#certificates" class="block py-2 hover:text-primary-500 transition-colors duration-200 mobile-nav-link">Sertifikasi</a></li>
                <li><a href="#contact" class="block py-2 hover:text-primary-500 transition-colors duration-200 mobile-nav-link">Kontak</a></li>
                <li>
                    <a href="#contact" class="inline-block w-full text-center py-2.5 bg-primary-500 text-slate-950 font-black text-sm border-3 border-primary-700 shadow-[4px_4px_0px_0px_#465322] transition-all duration-200 mobile-nav-link">
                        Hubungi Saya
                    </a>
                </li>
            </ul>
        </div>
    </header>

    <main class="container mx-auto px-6 pt-24">

        <section id="home" class="min-h-[calc(100vh-96px)] flex items-center justify-between py-12 md:py-20">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center w-full">
                <div class="lg:col-span-7 flex flex-col space-y-6 text-center lg:text-left">
                    <div class="inline-flex self-center lg:self-start items-center space-x-2 px-4 py-1.5 bg-primary-500/15 text-primary-500 border-2 border-primary-500/40 text-xs font-black tracking-wider uppercase shadow-neobrutal-sm-primary">
                        <span class="flex h-2 w-2 relative">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                        </span>
                        <span>Tersedia untuk Proyek Baru</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl md:text-6xl font-display font-extrabold tracking-tight leading-none text-white">
                        Halo, Saya <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary-500 via-secondary-500 to-primary-100 font-extrabold">{{ $profile['name'] }}</span>
                    </h1>
                    
                    <h2 class="text-lg sm:text-xl md:text-2xl font-bold text-slate-300 font-display">
                        {{ $profile['title'] }}
                    </h2>

                    <p class="text-slate-400 max-w-xl text-base md:text-lg leading-relaxed mx-auto lg:mx-0">
                        {{ $profile['bio_short'] }}
                    </p>

                    <div class="flex items-center justify-center lg:justify-start space-x-4 pt-6">
                        @foreach($profile['socials'] as $social)
                            <a href="{{ $social['url'] }}" target="_blank" class="p-3 bg-slate-950 border-2 border-primary-500/50 shadow-[3px_3px_0px_0px_#708238] hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[5px_5px_0px_0px_#708238] active:translate-x-[1px] active:translate-y-[1px] active:shadow-[1px_1px_0px_0px_#708238] text-slate-400 hover:text-primary-500 transition-all duration-200" aria-label="{{ $social['name'] }}">
                                <i data-lucide="{{ strtolower($social['icon']) }}" class="w-5 h-5"></i>
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="lg:col-span-5 flex justify-center items-center relative">
                    <div class="animate-float w-full max-w-[420px] neobrutal-card-gold p-6 relative">
                        <div class="flex items-center justify-between border-b-2 border-secondary-500/30 pb-4 mb-4">
                            <div class="flex space-x-2">
                                <span class="w-4 h-4 bg-red-500 border-2 border-red-700"></span>
                                <span class="w-4 h-4 bg-yellow-500 border-2 border-yellow-700"></span>
                                <span class="w-4 h-4 bg-green-500 border-2 border-green-700"></span>
                            </div>
                            <span class="text-xs text-secondary-500 font-mono font-bold uppercase tracking-wider">portfolio_controller.php</span>
                        </div>
                        
                        <div class="text-xs sm:text-sm font-mono text-slate-300 space-y-2 overflow-x-auto leading-relaxed">
                            <p class="text-primary-500">&lt;?php</p>
                            <p class="pl-2"><span class="text-violet-400">class</span> <span class="text-emerald-400">Developer</span> {</p>
                            <p class="pl-4 text-slate-500">// Selalu membangun dengan cinta & kopi</p>
                            <p class="pl-4"><span class="text-violet-400">public</span> <span class="text-amber-400">$name</span> = <span class="text-emerald-300">'{{ $profile['name'] }}'</span>;</p>
                            <p class="pl-4"><span class="text-violet-400">public</span> <span class="text-amber-400">$stack</span> = [</p>
                            <p class="pl-6"><span class="text-emerald-300">'Laravel'</span>, <span class="text-emerald-300">'Tailwind CSS'</span>,</p>
                            <p class="pl-6"><span class="text-emerald-300">'Vue.js'</span>, <span class="text-emerald-300">'PostgreSQL'</span></p>
                            <p class="pl-4">];</p>
                            <p class="pl-4"><span class="text-violet-400">public function</span> <span class="text-amber-400">buildExcellentApp</span>() {</p>
                            <p class="pl-6"><span class="text-violet-400">return</span> <span class="text-emerald-300">'Wow, clean code!'</span>;</p>
                            <p class="pl-4">}</p>
                            <p class="pl-2">}</p>
                        </div>

                        <div class="absolute bottom-[-20px] right-[-20px] neobrutal-card p-4 flex items-center space-x-3 bg-slate-950">
                            <div class="p-2 bg-emerald-500/20 border-2 border-emerald-500/40 text-emerald-400">
                                <i data-lucide="check-circle" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="text-xs text-slate-400 font-black uppercase tracking-wider">Clean Architecture</h4>
                                <p class="text-sm font-bold text-white">SOLID & Clean Code</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="py-20 md:py-28 border-t-3 border-primary-500/20">
            <div class="text-center max-w-2xl mx-auto mb-16 flex flex-col items-center">
                <h2 class="text-xs text-slate-950 font-black uppercase tracking-widest bg-primary-500 px-4 py-1.5 border-2 border-primary-700 shadow-[3px_3px_0px_0px_#465322] mb-4">Tentang Saya</h2>
                <h3 class="text-3xl md:text-4xl font-display font-extrabold text-white leading-tight">Mengenal Lebih Dekat</h3>
                <div class="w-16 h-1 bg-primary-500 mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="md:col-span-1 lg:col-span-2 lg:row-span-2 neobrutal-card-gold p-0 overflow-hidden group">
                    <div class="relative w-full h-full min-h-[320px] lg:min-h-[400px]">
                        <img src="{{ asset('image/farada.jpeg')}}" alt="{{ $profile['name'] }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 scale-100 group-hover:scale-105">
                        <div class="absolute bottom-0 left-0 right-0 bg-slate-950/90 border-t-3 border-secondary-500 px-6 py-4">
                            <h4 class="text-xl font-display font-extrabold text-white">{{ $profile['name'] }}</h4>
                            <p class="text-secondary-500 font-bold text-sm uppercase tracking-wider">{{ $profile['title'] }}</p>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-1 lg:col-span-2 neobrutal-card p-6 flex flex-col justify-center space-y-4">
                    <h4 class="text-xl md:text-2xl font-display font-extrabold text-white leading-tight">
                        {{ $profile['sub_title'] }}
                    </h4>
                    <p class="text-slate-400 leading-relaxed text-sm md:text-base">
                        {{ $profile['bio_long'] }}
                    </p>
                    <div class="flex items-center space-x-3 pt-2">
                        <div class="p-2 bg-secondary-500/15 border-2 border-secondary-500/30 text-secondary-500">
                            <i data-lucide="map-pin" class="w-5 h-5"></i>
                        </div>
                        <span class="text-sm text-slate-300 font-bold">{{ $profile['location'] }}</span>
                    </div>
                </div>

                @foreach($profile['stats'] as $index => $stat)
                    <div class="{{ $index % 2 == 0 ? 'neobrutal-card' : 'neobrutal-card-gold' }} p-5 flex flex-col justify-center items-center text-center">
                        <span class="text-3xl sm:text-4xl font-display font-extrabold {{ $index % 2 == 0 ? 'text-primary-500' : 'text-secondary-500' }}">
                            {{ $stat['value'] }}
                        </span>
                        <span class="text-xs text-slate-400 font-black mt-2 uppercase tracking-wider">
                            {{ $stat['label'] }}
                        </span>
                    </div>
                @endforeach

                <div class="md:col-span-2 neobrutal-card p-5 flex flex-col sm:flex-row items-start sm:items-center gap-4">
                    <a href="mailto:{{ $profile['email'] }}" class="flex items-center space-x-3 text-slate-300 hover:text-primary-500 transition-colors">
                        <div class="p-2 bg-primary-500/15 border-2 border-primary-500/30 text-primary-500">
                            <i data-lucide="mail" class="w-4 h-4"></i>
                        </div>
                        <div>
                            <span class="block text-[10px] text-slate-500 font-black uppercase tracking-wider">Email</span>
                            <span class="text-sm font-bold">{{ $profile['email'] }}</span>
                        </div>
                    </a>
                    <div class="hidden sm:block w-0.5 h-8 bg-primary-500/20"></div>
                    <a href="tel:{{ $profile['phone'] }}" class="flex items-center space-x-3 text-slate-300 hover:text-secondary-500 transition-colors">
                        <div class="p-2 bg-secondary-500/15 border-2 border-secondary-500/30 text-secondary-500">
                            <i data-lucide="phone" class="w-4 h-4"></i>
                        </div>
                        <div>
                            <span class="block text-[10px] text-slate-500 font-black uppercase tracking-wider">Telepon</span>
                            <span class="text-sm font-bold">{{ $profile['phone'] }}</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section id="skills" class="py-20 md:py-28 border-t-3 border-primary-500/20">
            <div class="text-center max-w-2xl mx-auto mb-16 flex flex-col items-center">
                <h2 class="text-xs text-slate-950 font-black uppercase tracking-widest bg-secondary-500 px-4 py-1.5 border-2 border-secondary-600 shadow-[3px_3px_0px_0px_#aa8546] mb-4">Keahlian</h2>
                <h3 class="text-3xl md:text-4xl font-display font-extrabold text-white leading-tight">Teknologi & Stack Saya</h3>
                <div class="w-16 h-1 bg-secondary-500 mt-4"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="neobrutal-card p-6 flex flex-col space-y-6">
                    <div class="flex items-center space-x-3 mb-2">
                        <div class="p-2.5 bg-primary-500 text-slate-950 border-2 border-primary-700 shadow-[3px_3px_0px_0px_#465322]">
                            <i data-lucide="layout" class="w-6 h-6"></i>
                        </div>
                        <h4 class="text-xl font-display font-extrabold text-white uppercase tracking-wider">Frontend Dev</h4>
                    </div>

                    <div class="flex flex-col space-y-5">
                        @foreach($skills['frontend'] as $skill)
                            <div class="flex flex-col space-y-2">
                                <div class="flex items-center justify-between text-sm">
                                    <div class="flex items-center space-x-2">
                                        <span class="font-bold text-slate-200">{{ $skill['name'] }}</span>
                                        <span class="text-[10px] font-black uppercase tracking-wider px-1.5 py-0.5 bg-primary-500/20 text-primary-500 border border-primary-500/30">{{ $skill['badge'] }}</span>
                                    </div>
                                    <span class="font-black text-primary-500 font-mono">{{ $skill['level'] }}%</span>
                                </div>
                                <div class="w-full h-2 bg-slate-900 overflow-hidden border-2 border-primary-500/20">
                                    <div class="h-full bg-primary-500 transition-all duration-500" style="width: {{ $skill['level'] }}%"></div>
                                </div>
                                <span class="text-xs text-slate-500 leading-normal">{{ $skill['desc'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="neobrutal-card-gold p-6 flex flex-col space-y-6">
                    <div class="flex items-center space-x-3 mb-2">
                        <div class="p-2.5 bg-secondary-500 text-slate-950 border-2 border-secondary-600 shadow-[3px_3px_0px_0px_#aa8546]">
                            <i data-lucide="server" class="w-6 h-6"></i>
                        </div>
                        <h4 class="text-xl font-display font-extrabold text-white uppercase tracking-wider">Backend Dev</h4>
                    </div>

                    <div class="flex flex-col space-y-5">
                        @foreach($skills['backend'] as $skill)
                            <div class="flex flex-col space-y-2">
                                <div class="flex items-center justify-between text-sm">
                                    <div class="flex items-center space-x-2">
                                        <span class="font-bold text-slate-200">{{ $skill['name'] }}</span>
                                        <span class="text-[10px] font-black uppercase tracking-wider px-1.5 py-0.5 bg-secondary-500/20 text-secondary-500 border border-secondary-500/30">{{ $skill['badge'] }}</span>
                                    </div>
                                    <span class="font-black text-secondary-500 font-mono">{{ $skill['level'] }}%</span>
                                </div>
                                <div class="w-full h-2 bg-slate-900 overflow-hidden border-2 border-secondary-500/20">
                                    <div class="h-full bg-secondary-500 transition-all duration-500" style="width: {{ $skill['level'] }}%"></div>
                                </div>
                                <span class="text-xs text-slate-500 leading-normal">{{ $skill['desc'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="neobrutal-card p-6 flex flex-col space-y-6">
                    <div class="flex items-center space-x-3 mb-2">
                        <div class="p-2.5 bg-primary-500 text-slate-950 border-2 border-primary-700 shadow-[3px_3px_0px_0px_#465322]">
                            <i data-lucide="cpu" class="w-6 h-6"></i>
                        </div>
                        <h4 class="text-xl font-display font-extrabold text-white uppercase tracking-wider">Tools & DevOps</h4>
                    </div>

                    <div class="flex flex-col space-y-5">
                        @foreach($skills['tools'] as $skill)
                            <div class="flex flex-col space-y-2">
                                <div class="flex items-center justify-between text-sm">
                                    <div class="flex items-center space-x-2">
                                        <span class="font-bold text-slate-200">{{ $skill['name'] }}</span>
                                        <span class="text-[10px] font-black uppercase tracking-wider px-1.5 py-0.5 bg-primary-500/20 text-primary-500 border border-primary-500/30">{{ $skill['badge'] }}</span>
                                    </div>
                                    <span class="font-black text-primary-500 font-mono">{{ $skill['level'] }}%</span>
                                </div>
                                <div class="w-full h-2 bg-slate-900 overflow-hidden border-2 border-primary-500/20">
                                    <div class="h-full bg-primary-500 transition-all duration-500" style="width: {{ $skill['level'] }}%"></div>
                                </div>
                                <span class="text-xs text-slate-500 leading-normal">{{ $skill['desc'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section id="experience" class="py-20 md:py-28 border-t-3 border-primary-500/20">
            <div class="text-center max-w-2xl mx-auto mb-16 flex flex-col items-center">
                <h2 class="text-xs text-slate-950 font-black uppercase tracking-widest bg-primary-500 px-4 py-1.5 border-2 border-primary-700 shadow-[3px_3px_0px_0px_#465322] mb-4">Pengalaman</h2>
                <h3 class="text-3xl md:text-4xl font-display font-extrabold text-white leading-tight">Perjalanan Karir</h3>
                <div class="w-16 h-1 bg-primary-500 mt-4"></div>
            </div>

            <div class="max-w-4xl mx-auto relative">
                <div class="absolute left-4 sm:left-1/2 top-2 bottom-2 w-1 bg-primary-500 -translate-x-[1px]"></div>

                <div class="space-y-12">
                    @foreach($experience as $index => $exp)
                        <div class="relative flex flex-col sm:flex-row items-start sm:items-center w-full">
                            <div class="absolute left-4 sm:left-1/2 -translate-x-1/2 z-10">
                                <span class="flex h-6 w-6 relative">
                                    <span class="absolute inline-flex h-full w-full bg-primary-500/40 animate-ping"></span>
                                    <span class="relative inline-flex h-6 w-6 bg-primary-500 border-3 border-slate-950"></span>
                                </span>
                            </div>

                            <div class="w-full sm:w-1/2 pl-12 sm:pl-0 sm:pr-12 text-left sm:text-right {{ $index % 2 == 0 ? 'sm:order-1' : 'sm:order-2 opacity-0 hidden sm:block pointer-events-none' }}">
                                @if($index % 2 == 0)
                                    <span class="inline-block text-xs font-black px-3 py-1 bg-primary-500 text-slate-950 border-2 border-primary-700 shadow-[2px_2px_0px_0px_#465322] uppercase tracking-wider mb-3">{{ $exp['duration'] }}</span>
                                    <h4 class="text-xl font-display font-extrabold text-white">{{ $exp['role'] }}</h4>
                                    <h5 class="text-sm font-bold text-secondary-500 mt-1">{{ $exp['company'] }}</h5>
                                    <p class="text-xs text-slate-500 mt-1 flex items-center justify-start sm:justify-end gap-1">
                                        <i data-lucide="map-pin" class="w-3.5 h-3.5"></i> {{ $exp['location'] }}
                                    </p>
                                @endif
                            </div>

                            <div class="w-full sm:w-1/2 pl-12 sm:pl-12 text-left {{ $index % 2 == 1 ? 'sm:order-2' : 'sm:order-1 opacity-0 hidden sm:block pointer-events-none' }}">
                                @if($index % 2 == 1)
                                    <span class="inline-block text-xs font-black px-3 py-1 bg-secondary-500 text-slate-950 border-2 border-secondary-600 shadow-[2px_2px_0px_0px_#aa8546] uppercase tracking-wider mb-3">{{ $exp['duration'] }}</span>
                                    <h4 class="text-xl font-display font-extrabold text-white">{{ $exp['role'] }}</h4>
                                    <h5 class="text-sm font-bold text-secondary-500 mt-1">{{ $exp['company'] }}</h5>
                                    <p class="text-xs text-slate-500 mt-1 flex items-center justify-start gap-1">
                                        <i data-lucide="map-pin" class="w-3.5 h-3.5"></i> {{ $exp['location'] }}
                                    </p>
                                @endif
                            </div>
                        </div>

                        <div class="pl-12 sm:pl-0 w-full sm:max-w-[46%] ml-0 sm:ml-auto mr-auto {{ $index % 2 == 0 ? 'neobrutal-card-gold sm:mr-auto sm:ml-0' : 'neobrutal-card sm:ml-auto sm:mr-0' }} p-6 relative">
                            <div class="sm:hidden mb-4">
                                <span class="inline-block text-xs font-black px-3 py-1 bg-primary-500 text-slate-950 border-2 border-primary-700 shadow-[2px_2px_0px_0px_#465322] uppercase tracking-wider mb-2">{{ $exp['duration'] }}</span>
                                <h4 class="text-lg font-display font-extrabold text-white">{{ $exp['role'] }}</h4>
                                <h5 class="text-sm font-bold text-secondary-500 mt-0.5">{{ $exp['company'] }}</h5>
                                <p class="text-xs text-slate-500 mt-0.5 flex items-center gap-1">
                                    <i data-lucide="map-pin" class="w-3.5 h-3.5"></i> {{ $exp['location'] }}
                                </p>
                            </div>

                            <ul class="space-y-2.5 text-slate-400 text-sm leading-relaxed">
                                @foreach($exp['description'] as $item)
                                    <li class="flex items-start space-x-2">
                                        <i data-lucide="check" class="w-4 h-4 text-primary-500 mt-0.5 shrink-0"></i>
                                        <span>{{ $item }}</span>
                                    </li>
                                @endforeach
                            </ul>

                            <div class="flex flex-wrap justify-center gap-2 pt-4 mt-4 border-t-2 border-primary-500/20">
                                @foreach($exp['tech'] as $tech)
                                    <span class="text-[10px] font-black font-mono bg-slate-950 text-primary-500 border-2 border-primary-500/40 px-2 py-1 shadow-[2px_2px_0px_0px_#708238] uppercase tracking-wider">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="projects" class="py-20 md:py-28 border-t-3 border-primary-500/20">
            <div class="text-center max-w-2xl mx-auto mb-16 flex flex-col items-center">
                <h2 class="text-xs text-slate-950 font-black uppercase tracking-widest bg-secondary-500 px-4 py-1.5 border-2 border-secondary-600 shadow-[3px_3px_0px_0px_#aa8546] mb-4">Proyek</h2>
                <h3 class="text-3xl md:text-4xl font-display font-extrabold text-white leading-tight">Proyek Terbaru</h3>
                <div class="w-16 h-1 bg-secondary-500 mt-4"></div>
            </div>

            <div class="max-w-2xl mx-auto">
                <div class="neobrutal-card p-8 sm:p-12 flex flex-col items-center text-center space-y-6 relative overflow-hidden group">
                    <div class="p-5 bg-primary-500/15 border-3 border-primary-500 text-primary-500 relative animate-float shadow-neobrutal-primary">
                        <i data-lucide="code-2" class="w-10 h-10"></i>
                        <span class="absolute -top-2 -right-2 flex h-5 w-5">
                            <span class="animate-ping absolute inline-flex h-full w-full bg-secondary-400 opacity-75"></span>
                            <span class="relative inline-flex h-5 w-5 bg-secondary-500 border-2 border-secondary-600"></span>
                        </span>
                    </div>

                    <div class="space-y-3">
                        <h4 class="text-2xl font-display font-extrabold text-white tracking-tight uppercase">Proyek Sedang Dikembangkan</h4>
                        <p class="text-slate-400 text-sm max-w-md leading-relaxed mx-auto">
                            Saat ini saya sedang merancang beberapa aplikasi web berbasis <span class="text-primary-500 font-bold">Laravel</span> dan <span class="text-secondary-500 font-bold">Tailwind CSS</span> yang inovatif. Proyek terpilih akan segera ditampilkan di sini.
                        </p>
                    </div>

                    <div class="w-full max-w-xs space-y-2 pt-2">
                        <div class="flex justify-between items-center text-[10px] sm:text-xs font-black uppercase tracking-wider text-slate-400">
                            <span>Status Pengembangan</span>
                            <span class="text-primary-500 font-mono">Loading...</span>
                        </div>
                        <div class="w-full h-3 bg-slate-900 overflow-hidden border-2 border-primary-500/30 relative">
                            <div class="h-full w-3/4 bg-primary-500 animate-pulse"></div>
                        </div>
                    </div>

                    <div class="pt-4">
                        <a href="https://github.com/FaradaAulia" target="_blank" class="inline-flex items-center space-x-2 px-6 py-3 text-xs font-black tracking-wider uppercase border-3 border-primary-500 bg-slate-950 text-primary-500 shadow-[4px_4px_0px_0px_#708238] hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_0px_#708238] active:translate-x-[2px] active:translate-y-[2px] active:shadow-[2px_2px_0px_0px_#708238] transition-all duration-200">
                            <i data-lucide="github" class="w-5 h-5"></i>
                            <span>Pantau GitHub Saya</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="certificates" class="py-20 md:py-28 border-t-3 border-primary-500/20">
            <div class="text-center max-w-2xl mx-auto mb-16 flex flex-col items-center">
                <h2 class="text-xs text-slate-950 font-black uppercase tracking-widest bg-primary-500 px-4 py-1.5 border-2 border-primary-700 shadow-[3px_3px_0px_0px_#465322] mb-4">Sertifikasi</h2>
                <h3 class="text-3xl md:text-4xl font-display font-extrabold text-white leading-tight">Pengakuan Kredibilitas</h3>
                <div class="w-16 h-1 bg-primary-500 mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($certificates as $index => $cert)
                    <div class="{{ $index % 2 == 0 ? 'neobrutal-card' : 'neobrutal-card-gold' }} p-6 flex flex-col sm:flex-row items-start space-y-4 sm:space-y-0 sm:space-x-5">
                        <div class="p-3.5 {{ $index % 2 == 0 ? 'bg-primary-500 text-slate-950 border-2 border-primary-700 shadow-[3px_3px_0px_0px_#465322]' : 'bg-secondary-500 text-slate-950 border-2 border-secondary-600 shadow-[3px_3px_0px_0px_#aa8546]' }} shrink-0">
                            <i data-lucide="award" class="w-8 h-8"></i>
                        </div>

                        <div class="flex flex-col space-y-2 flex-grow">
                            <h4 class="text-lg font-display font-extrabold text-white leading-snug uppercase tracking-wide">{{ $cert['title'] }}</h4>
                            <p class="text-slate-400 text-xs leading-relaxed mt-1">{{ $cert['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section id="contact" class="py-20 md:py-28 border-t-3 border-primary-500/20">
            <div class="text-center max-w-2xl mx-auto mb-16 flex flex-col items-center">
                <h2 class="text-xs text-slate-950 font-black uppercase tracking-widest bg-secondary-500 px-4 py-1.5 border-2 border-secondary-600 shadow-[3px_3px_0px_0px_#aa8546] mb-4">Kontak</h2>
                <h3 class="text-3xl md:text-4xl font-display font-extrabold text-white leading-tight">Mari Berkolaborasi</h3>
                <div class="w-16 h-1 bg-secondary-500 mt-4"></div>
                <p class="text-slate-400 text-sm mt-4 max-w-lg leading-relaxed">Hubungi saya melalui platform sosial media di bawah ini. Saya selalu terbuka untuk diskusi, kolaborasi, dan peluang baru!</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-4xl mx-auto items-stretch">
                
                @foreach($profile['socials'] as $social)
                    
                    @if(strtolower($social['name']) === 'linkedin')
                    <a href="{{ $social['url'] }}" target="_blank" class="social-tile p-6 bg-slate-950/90 border-3 border-[#0077b5] shadow-[6px_6px_0px_0px_#0077b5] hover:shadow-[8px_8px_0px_0px_#0077b5] flex flex-col items-center justify-center text-center space-y-3 group">
                        <div class="p-4 bg-[#0077b5]/15 border-3 border-[#0077b5]/40 text-[#0077b5] group-hover:bg-[#0077b5] group-hover:text-white transition-all duration-300">
                            <i data-lucide="linkedin" class="w-8 h-8"></i>
                        </div>
                        <h4 class="text-lg font-display font-extrabold text-white uppercase tracking-wider">{{ $social['name'] }}</h4>
                        <p class="text-slate-500 text-xs">Jaringan Profesional</p>
                    </a>

                    @elseif(strtolower($social['name']) === 'github')
                    <a href="{{ $social['url'] }}" target="_blank" class="social-tile p-6 bg-slate-950/90 border-3 border-slate-400 shadow-[6px_6px_0px_0px_#94a3b8] hover:shadow-[8px_8px_0px_0px_#94a3b8] flex flex-col items-center justify-center text-center space-y-3 group">
                        <div class="p-4 bg-slate-400/10 border-3 border-slate-400/30 text-slate-400 group-hover:bg-slate-400 group-hover:text-slate-950 transition-all duration-300">
                            <i data-lucide="github" class="w-8 h-8"></i>
                        </div>
                        <h4 class="text-lg font-display font-extrabold text-white uppercase tracking-wider">{{ $social['name'] }}</h4>
                        <p class="text-slate-500 text-xs">Kode & Repositori</p>
                    </a>

                    @elseif(strtolower($social['name']) === 'instagram')
                    <a href="{{ $social['url'] }}" target="_blank" class="social-tile p-6 bg-slate-950/90 border-3 border-[#e1306c] shadow-[6px_6px_0px_0px_#e1306c] hover:shadow-[8px_8px_0px_0px_#e1306c] flex flex-col items-center justify-center text-center space-y-3 group">
                        <div class="p-4 bg-[#e1306c]/15 border-3 border-[#e1306c]/40 text-[#e1306c] group-hover:bg-[#e1306c] group-hover:text-white transition-all duration-300">
                            <i data-lucide="instagram" class="w-8 h-8"></i>
                        </div>
                        <h4 class="text-lg font-display font-extrabold text-white uppercase tracking-wider">{{ $social['name'] }}</h4>
                        <p class="text-slate-500 text-xs">Portofolio Visual</p>
                    </a>

                    @elseif(strtolower($social['name']) === 'facebook')
                    <a href="{{ $social['url'] }}" target="_blank" class="social-tile p-6 bg-slate-950/90 border-3 border-[#1877f2] shadow-[6px_6px_0px_0px_#1877f2] hover:shadow-[8px_8px_0px_0px_#1877f2] flex flex-col items-center justify-center text-center space-y-3 group">
                        <div class="p-4 bg-[#1877f2]/15 border-3 border-[#1877f2]/40 text-[#1877f2] group-hover:bg-[#1877f2] group-hover:text-white transition-all duration-300">
                            <i data-lucide="facebook" class="w-8 h-8"></i>
                        </div>
                        <h4 class="text-lg font-display font-extrabold text-white uppercase tracking-wider">{{ $social['name'] }}</h4>
                        <p class="text-slate-500 text-xs">Komunitas & Update</p>
                    </a>
                    @endif

                @endforeach

                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $profile['phone']) }}" target="_blank" class="social-tile p-6 bg-slate-950/90 border-3 border-[#25d366] shadow-[6px_6px_0px_0px_#25d366] hover:shadow-[8px_8px_0px_0px_#25d366] flex flex-col items-center justify-center text-center space-y-3 group">
                    <div class="p-4 bg-[#25d366]/15 border-3 border-[#25d366]/40 text-[#25d366] group-hover:bg-[#25d366] group-hover:text-white transition-all duration-300">
                        <i data-lucide="phone" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-lg font-display font-extrabold text-white uppercase tracking-wider">WhatsApp</h4>
                    <p class="text-slate-500 text-xs break-all">{{ $profile['phone'] }}</p>
                </a>

                <a href="mailto:{{ $profile['email'] }}" class="social-tile p-6 bg-slate-950/90 border-3 border-primary-500 shadow-[6px_6px_0px_0px_#708238] hover:shadow-[8px_8px_0px_0px_#708238] flex flex-col items-center justify-center text-center space-y-3 group">
                    <div class="p-4 bg-primary-500/15 border-3 border-primary-500/40 text-primary-500 group-hover:bg-primary-500 group-hover:text-slate-950 transition-all duration-300">
                        <i data-lucide="mail" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-lg font-display font-extrabold text-white uppercase tracking-wider">Email</h4>
                    <p class="text-slate-500 text-xs break-all">farada.240170214@mhs.unimal.ac.id</p>
                </a>

            </div>
        </section>

    </main>

    <footer class="border-t-3 border-primary-500 bg-slate-950 py-12 mt-10">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex flex-col items-center md:items-start text-center md:text-left space-y-2">
                <a href="#home" class="text-lg font-display font-extrabold tracking-tight bg-clip-text text-transparent bg-gradient-to-r from-primary-500 to-secondary-500">
                    {{ $profile['name'] }}
                </a>
                <p class="text-xs text-slate-500 font-bold uppercase tracking-wider">Membangun Web Impian Anda dengan Clean Code & Clean Design.</p>
            </div>

            <div class="flex items-center space-x-3">
                @foreach($profile['socials'] as $social)
                    <a href="{{ $social['url'] }}" target="_blank" class="p-2.5 bg-slate-950 border-2 border-primary-500/40 shadow-[3px_3px_0px_0px_#708238] hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[5px_5px_0px_0px_#708238] active:translate-x-[1px] active:translate-y-[1px] active:shadow-[1px_1px_0px_0px_#708238] text-slate-400 hover:text-primary-500 transition-all duration-200" aria-label="{{ $social['name'] }}">
                        <i data-lucide="{{ strtolower($social['icon']) }}" class="w-4.5 h-4.5"></i>
                    </a>
                @endforeach
            </div>

            <div class="flex flex-col items-center md:items-end text-center md:text-right gap-3">
                <span class="text-xs text-slate-500 font-bold">&copy; {{ date('Y') }} {{ $profile['name'] }}. Hak Cipta Dilindungi.</span>
                <a href="#home" class="inline-flex items-center space-x-1 px-3 py-1.5 text-[10px] font-black text-primary-500 border-2 border-primary-500/30 shadow-[2px_2px_0px_0px_#708238] hover:translate-x-[-1px] hover:translate-y-[-1px] hover:shadow-[3px_3px_0px_0px_#708238] uppercase tracking-widest transition-all duration-200" aria-label="Back to Top">
                    <span>Ke Atas</span>
                    <i data-lucide="arrow-up" class="w-3.5 h-3.5"></i>
                </a>
            </div>
        </div>
    </footer>

    <script>
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

        // Header Shrink Effect on Scroll
        const header = document.getElementById('main-header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 30) {
                header.classList.add('py-1', 'shadow-lg');
            } else {
                header.classList.remove('py-1', 'shadow-lg');
            }
        });
    </script>
</body>
</html>