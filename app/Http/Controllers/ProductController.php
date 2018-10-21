<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {


        return view('pages.product');
    }
    public function getJson()
    {
        return [

            [   'id' => 1,
                'name'=>'Свинина',
                'description'=>'Балык свиной — вкуснейший и нежный деликатес из натуральной свинины, 
                 приготовленный по традиционному рецепту и применением оригинального букета специй.
                 Внимание! Товар может незначительно отличаться от товара на фотографии.',
                'category' => 'pork',
                'size' => 35,
                'price' => 40
            ],
            [   'id' => 1,
                'name'=>'Яловичина',
                'description'=>'Балык свиной — вкуснейший и нежный деликатес из натуральной свинины, 
                     приготовленный по традиционному рецепту и применением оригинального букета специй.
                     Внимание! Товар может незначительно отличаться от товара на фотографии.',
                'category' => 'biff',
                'size' => 35,
                'price' => 40
            ]
        ];
    }
}
