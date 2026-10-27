<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'titel'   => 'Welkom bij CodeIgniter',
            'bericht' => 'Welkom op de startpagina.',
        ];

        return view('welcome', $data);
    }
}
