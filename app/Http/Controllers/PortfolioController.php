<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the portfolio resources.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // 1. Profile Data
        $profile = [
            'name' => 'Farada Aulia',
            'title' => 'Junior Developer',
            'sub_title' => 'Building Scalable Web Applications & Beautiful User Experiences',
            'bio_short' => 'Saya adalah seorang Junior Developer yang masih pada tahap berkembang menjadi profesional yang berspesialisasi dalam membangun aplikasi web modern, tangguh, dan berkinerja tinggi menggunakan ekosistem Laravel dan modern Javascript.',
            'bio_long' => 'Dengan pengalaman lebih dari 1 tahun di bidang rekayasa perangkat lunak, saya mendalami arsitektur kode yang bersih (clean code), optimasi performa backend, serta desain UI/UX yang responsif dan elegan. Saya berkomitmen penuh untuk selalu belajar dan berkembang sehingga menghadirkan solusi teknologi berkualitas tinggi yang tidak hanya memenuhi kebutuhan bisnis tetapi juga menyenangkan pengguna akhir. Saya aktif belajar, beradaptasi dengan tren teknologi terbaru.',
            'avatar' => asset('image/farada.jpeg'),
            'email' => 'farada.240170214@mhs.unimal.ac.id',
            'phone' => '+6289516065067',
            'location' => 'Deli Serdang, Sumatera Utara',
            'resume_url' => '#', // Link to Resume PDF
            'stats' => [
                ['value' => '1', 'label' => 'Tahun Pengalaman'],
                ['value' => '1+', 'label' => 'Proyek Selesai'],
                ['value' => '0', 'label' => 'Klien Bahagia'],
                ['value' => '3+', 'label' => 'Sertifikasi']
            ],
            'socials' => [
                [
                    'name' => 'GitHub',
                    'url' => 'https://github.com/FaradaAulia/',
                    'icon' => 'github',
                    'color' => '#333'
                ],
                [
                    'name' => 'LinkedIn',
                    'url' => 'https://linkedin.com/faradaaulia/',
                    'icon' => 'linkedin',
                    'color' => '#0077b5'
                ],
                [
                    'name' => 'Facebook',
                    'url' => 'https://facebook.com/faradaaulia/',
                    'icon' => 'facebook',
                    'color' => '#1877f2'
                ],
                [
                    'name' => 'Instagram',
                    'url' => 'https://www.instagram.com/faradaauliadtcm/',
                    'icon' => 'instagram',
                    'color' => '#e1306c'
                ],
                [
                    'name' => 'email',
                    'url' => '',
                    'icon' => 'mail',
                    'color' => '#e1306c'
                ]
            ]
        ];

        // 2. Skills Data (Categorized)
       $skills = [
    'frontend' => [
        [
            'name' => 'Tailwind CSS',
            'badge' => 'Framework UI',
            'level' => 90,
            'desc' => 'Terbiasa membangun antarmuka web modern yang responsif dengan utility-first classes dan kustomisasi desain neobrutalisme.'
        ],
        [
            'name' => 'Boostrap CSS',
            'badge' => 'Framework UI',
            'level' => 80,
            'desc' => 'Terbiasa membangun antarmuka web modern yang responsif dengan utility-first classes dan kustomisasi desain neobrutalisme.'
        ],
    ],
    'backend' => [
        [
            'name' => 'Laravel',
            'badge' => 'Framework PHP',
            'level' => 85,
            'desc' => 'Menguasai arsitektur MVC, serta manajemen database yang aman.'
        ],
        [
            'name' => 'PostgreSQL',
            'badge' => 'Database',
            'level' => 80,
            'desc' => 'Merancang struktur database relasional, optimasi query, dan mengelola relasi data yang kompleks secara efisien.'
        ],
    ],
    'tools' => [
        [
            'name' => 'Git & GitHub',
            'badge' => 'Version Control',
            'level' => 85,
            'desc' => 'Menggunakan Git untuk pelacakan kode, kolaborasi tim, manajemen cabang (branching), dan penyimpanan repositori di GitHub.'
        ],
        [
            'name' => 'Figma',
            'badge' => 'UI/UX Design',
            'level' => 80,
            'desc' => 'Merancang desain antarmuka pengguna yang modern, interaktif, serta responsif dengan fokus pada pengalaman pengguna yang intuitif.'
        ],
    ]
];

        // 3. Experience Data
        $experience = [
            [
                'role' => 'Praktek Kerja Lapangan',
                'company' => 'PT. Infomedia Solusi Net',
                'type' => 'Full-time',
                'duration' => '2022',
                'location' => 'Medan, Sumatera Utara',
                'description' => [
                    'Mempelajari dasar-dasar arsitektur MVC dan ekosistem framework Laravel 11.',
                    'Membangun aplikasi CRUD (Create, Read, Update, Delete) sederhana yang responsif.',
                    'Berkolaborasi menggunakan Git dan GitHub untuk manajemen kode dan versioning.',
                ],
                'tech' => ['Laravel 11','GitHub Actions']
            ],
        ];

        // 5. Certificates Data
        $certificates = [
            [
                'title' => 'Basic Dev Ops',
                'issuer' => 'Dicoding',
                'description' => 'Sertifikasi keahlian dasar Dev Ops.'
            ],
            [
                'title' => 'Basic Web Programming',
                'issuer' => 'Dicoding',
                'description' => 'Sertifikasi keahlian dasar Pemrograman Web.'
            ]
        ];

        return view('index', compact('profile', 'skills','experience', 'certificates'));
    }
}
