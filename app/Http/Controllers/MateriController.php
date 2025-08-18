<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index()
    {
        $cards = [
            [
                'title' => 'Aljabar',
                'description' => 'Pelajari dasar-dasar aljabar, dari variabel hingga persamaan.',
                'image' => 'images/hero.png',
                'route' => '/materi/aljabar'
            ],
            [
                'title' => 'Geometri',
                'description' => 'Jelajahi dunia bentuk, ruang, dan ukuran.',
                'image' => 'images/hero.png',
                'route' => '#'
            ],
            [
                'title' => 'Statistika',
                'description' => 'Pahami cara mengumpulkan, menganalisis, dan menafsirkan data.',
                'image' => 'images/hero.png',
                'route' => '#'
            ],
            [
                'title' => 'Peluang',
                'description' => 'Hitung kemungkinan suatu peristiwa akan terjadi.',
                'image' => 'images/hero.png',
                'route' => '#'
            ],
            [
                'title' => 'Kalkulus',
                'description' => 'Selami konsep turunan dan integral untuk memahami perubahan.',
                'image' => 'images/hero.png',
                'route' => '#'
            ],
            [
                'title' => 'Logika',
                'description' => 'Asah kemampuan berpikir logis dan sistematis Anda.',
                'image' => 'images/hero.png',
                'route' => '#'
            ],
            [
                'title' => 'Trigonometri',
                'description' => 'Pelajari hubungan antara sudut dan sisi segitiga.',
                'image' => 'images/hero.png',
                'route' => '#'
            ],
            [
                'title' => 'Matriks',
                'description' => 'Pahami susunan bilangan dalam baris dan kolom serta operasinya.',
                'image' => 'images/hero.png',
                'route' => '#'
            ],
        ];

        return view('components.page.master-materi', ['cards' => $cards]);
    }
}